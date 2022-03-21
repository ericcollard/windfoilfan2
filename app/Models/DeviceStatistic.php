<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DeviceStatistic extends Model
{
    protected $fillable = ['device_id','hits','day'];

    public function device()
    {
        return $this->belongsTo(Device::class);
    }
}
