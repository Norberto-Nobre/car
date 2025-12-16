<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Vehicle extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'vehicle_model_id',
        'license_plate',
        'year',
        'image',
        'is_active',
        'slug',
        'notes',
        'is_popular',
        'damage_tax',
    ];
    protected $casts = [
        'damage_tax' => 'decimal:2',
    ];

    public function vehicleModel()
    {
        return $this->belongsTo(VehicleModel::class, 'vehicle_model_id');
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($vehicle) {
            $vehicle->slug = Str::slug($vehicle->license_plate . '-' . $vehicle->year);
        });
    }
}
