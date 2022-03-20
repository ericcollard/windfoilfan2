<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class Device extends Model
{
    use HasFactory;

    protected $fillable = ['name','slug','user_id','category_id','brand_id','status','body','year',
        'price', 'link_test', 'link_presentation', 'link_product','programme_start','programme_end','created_at'];

    protected $with = ['creator', 'category','brand'];

    protected static function boot()
    {
        parent::boot();

        /*
        static::addGlobalScope('reviewCount', function ($builder)
        {
            $builder->withCount('reviews');
        });

        static::addGlobalScope('statisticsCount', function ($builder)
        {
            $builder->withCount('statistics');
        });
        */

        static::deleting(function ($device)
        {
            // $gear->reports()->delete();  supprime tous les report, mais ne d'éclenche pas l'event delete poru chaucn > les activity report ne sont pas supprimé par le trigger
            $device->reviews->each->delete();
            $device->statistics->each->delete();
            $device->technicaldatas->each->delete();
        });
    }

    /** Database Models Relations */
    public function creator()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
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

    public function technicaldatas()
    {
        return $this->hasMany(Technicaldata::class);
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

    /**
     * Build a slug based on Device attributes - Create it unique by fetching the database and correct if necessary
     * @param $name
     * @param $year
     * @param $brand_id
     * @return string
     */
    public static function buildSlug($name, $brand_id, $year = NULL)
    {
        $brand =  DB::table('brands')->find($brand_id);
        if (is_null($brand)) abort(403, 'brand '.$brand_id.' does not exist.');

        if ($year)
            $slugRoot = str::slug($brand->slug.'-'.$name.'-'.$year);
        else
            $slugRoot = str::slug($brand->slug.'-'.$name);
        $slugAddon = '';
        $counter=0;
        $pass = false;
        while  ($nb = DB::table('devices')->where('slug',$slugRoot.$slugAddon)->count() > 0)
        {
            $counter++;
            $slugAddon = '-'.(string)$counter;
        }

        return $slugRoot.$slugAddon;
    }

    /**
     * Record one more view for this device
     * @return Model
     */
    public function recordDisplay()
    {
        if (Auth::check())
        {
            $attributes['user_id'] = Auth::user()->id;
        }
        else
        {
            $attributes['ip'] = request()->ip();
        }

        $stat = $this->statistics()->where($attributes)->first();

        if (!$stat)
        {
            // one insert it only if it not exist before
            $attributes['hits'] = 1;
            $attributes['agent'] = substr(request()->header('User-Agent'),0,250);
            return $this->statistics()->create($attributes);
        }
        else
        {
            $stat->hits++;
            $stat->save();
        }

        if ($this->last_ip != request()->ip())
        {
            $this->views++;
            $this->last_ip = request()->ip();
            $this->save();
        }


    }

    public function updateViewsfromStatistics()
    {
        $nb = $this->statistics()
            ->selectRaw('sum(statistics.hits) AS hit_cnt')
            ->firstOrFail();
        if ($nb->hit_cnt)
            $this->views = $nb->hit_cnt;
        else
            $this->views = 0;
        $this->save();
    }
}
