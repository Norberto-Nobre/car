<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Authenticatable
{
     use HasFactory, SoftDeletes;

     protected $fillable = [
        'name',
        'email',
        'gender',
        'email_verified_at',
        'password',
        'phone',
        'address',
        'date_of_birth',
     ];

     protected $hidden = [
        'password',
        'remember_token',
    ];

     protected $casts = [
        'date_of_birth' => 'date',
        'email_verified_at' => 'datetime',
    ];

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
