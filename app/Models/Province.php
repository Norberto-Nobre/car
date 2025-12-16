<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Province extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'price',
        'refueling_tax',
        'driver_tax',
    ];
    protected $casts = [
        'price' => 'decimal:2',
        'refueling_tax' => 'decimal:2',
        'driver_tax' => 'decimal:2',

    ];

    public function booking()
    {
        return $this->hasMany(Booking::class);
    }
}
