<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','device_id','title','test_equipment','body','test_duration','test_conditions','test_place','created_at'];

    protected $guarded = [];

    protected $with = ['owner','device']; // à chaque fois qu'on fera une Query sur Report, le owner sera récupéré en même temps.

    protected static function boot()
    {
        parent::boot();
        static::deleting(function ($review)
        {
            $review->statistics->each->delete();
        });

    }

    /** Database Models Relations */
    public function owner()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function device()
    {
        return $this->belongsTo(Device::class);
    }

    public function statistics()
    {
        return $this->morphMany(Statistic::class, 'statisticable');
    }

}
