<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Technicaldata extends Model
{
    use HasFactory;

    protected $fillable = ['device_id','body','serial','created_at','updated_at',
       'attr3','attr4','attr5','attr6','attr7','attr8','attr9','attr10',
        'attr11','attr12','attr13','attr14','attr15','attr16','attr17','attr18','attr19','attr20',
        'attr21','attr22','attr23','attr24','attr25'];

    /** Database Models Relations */
    public function device()
    {
        return $this->belongsTo(Device::class, 'device_id');
    }

    /**  path  */
    public function path()
    {
        return route('technicaldata.show',[ 'technicaldata' => $this]);
    }
}
