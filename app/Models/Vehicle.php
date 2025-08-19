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
    ];

    public function model()
    {
        return $this->belongsTo(VehicleModel::class, 'vehicle_model_id');
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
    public function colors()
{
    return $this->belongsToMany(Color::class, 'color_vehicle_model')
                ->withTimestamps();
}

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($vehicle) {
            $vehicle->slug = Str::slug($vehicle->license_plate . '-' . $vehicle->year);
        });
    }
}
