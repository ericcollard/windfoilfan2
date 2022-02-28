<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    use HasFactory;

    protected $fillable = ['name','slug','user_id','category_id','brand_id','status_id','body','year',
        'price', 'link_test', 'link_presentation', 'link_product','created_at','serial',
        'attr1','attr2','attr3','attr4','attr5','attr6','attr7','attr8','attr9','attr10',
        'attr11','attr12','attr13','attr14','attr15','attr16','attr17','attr18','attr19','attr20',
        'attr21','attr22','attr23','attr24','attr25'];

    protected $with = ['creator', 'category','brand'];

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('reviewCount', function ($builder)
        {
            $builder->withCount('reviews');
        });

        static::addGlobalScope('statisticsCount', function ($builder)
        {
            $builder->withCount('statistics');
        });

        static::deleting(function ($device)
        {
            // $gear->reports()->delete();  supprime tous les report, mais ne d'éclenche pas l'event delete poru chaucn > les activity report ne sont pas supprimé par le trigger
            $device->reviews->each->delete();
            $device->statistics->each->delete();
        });
    }

    /** Database Models Relations */
    public function creator()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function statistics()
    {
        return $this->morphMany(Statistic::class, 'statisticable');
    }

    /** Post path  */
    public function path()
    {
        return route('device.show',['category' => $this->category, 'device' => $this]);
    }

    public function statusClass()
    {
        $class = "";
        switch ($this->status) {
            case 'Published':
                $class = "bg-success";
                break;
            case 'Hidden':
                $class = "bg-warning";
                break;
            case 'Archived':
                $class = "bg-danger";
                break;
            default:
                $class = "bg-dark";
        }
        return $class;
    }


}
