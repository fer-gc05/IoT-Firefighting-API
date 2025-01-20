<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SensorReading extends Model
{
    protected $fillable = [
        'device_id',
        'temperature',
        'humidity',
        'smoke_level',
        'gas_level'
    ];

    public function device(): BelongsTo
    {
        return $this->belongsTo(Device::class, 'device_id', 'id');
    }
}
