<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Brand extends Model
{
    use HasFactory;

    protected $fillable = ['name','logo_path','body','url'];

    public $timestamps = false;

    public function getRouteKeyName()
    {
        return 'slug'; // instead of id (car on utilise le match dans la route avec le slug)
    }

    public function devices()
    {
        return $this->hasMany(Device::class);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function logoUrl(): string
    {

        return $this->logo_path ? Storage::disk('logos')->url($this->logo_path) : asset('assets/images/brands/default.png');
    }

}
