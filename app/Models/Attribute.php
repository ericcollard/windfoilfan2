<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    public $timestamps = false;

    protected $fillable = ['name','group','field','unit','decimals','body','category_id'];

    public function getRouteKeyName()
    {
        return 'slug'; // instead of id (car on utilise le match dans la route avec le slug)
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function path()
    {
        return "";
    }
}
