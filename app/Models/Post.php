<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /**
     * The model's default values for attributes.
     *
     * @var array
     */
    protected $attributes = [
        'views' => '0',
    ];

    protected $fillable = ['user_id','title','body','created_at'];

    protected $with = ['owner','category']; // à chaque fois qu'on fera une Query sur Report, le owner sera récupéré en même temps.

    /** Database Models Relations */
    public function owner()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /** Database Models Relations */
    public function category()
    {
        return $this->belongsTo(PostCategory::class, 'post_categories_id');
    }

}
