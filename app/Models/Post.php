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

    protected $fillable = ['user_id','title','body','description','created_at','post_categories_id'];

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

    /**
     * search all images in body
     */
    public function images()
    {
        preg_match_all('/(<img[^>]+>)/i', $this->body, $image_matches, PREG_SET_ORDER);
        $imagesPath = [];
        foreach ($image_matches as $image_match)
        {
            $imagetag = $image_match[0];
            if(preg_match('@src="([^"]+)"@',$imagetag,$match))
            {
                $imagesPath[] = $match[1];
            }
        }
        return $imagesPath;
    }


}
