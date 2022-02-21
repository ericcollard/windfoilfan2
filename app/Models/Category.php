<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    public $timestamps = false;

    public function getRouteKeyName()
    {
        return 'slug'; // instead of id (car on utilise le match dans la route avec le slug)
    }

    public function devices()
    {
        return $this->hasMany(Device::class);
    }

    public function getIconHtmlCode()
    {
        return '<i class="css-mapping icon icon-silhouette-'.$this->slug.'" ></i>';
    }
}
