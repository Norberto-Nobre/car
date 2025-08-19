<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BookingContract extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'booking_id',
        'contract_number',
        'file_path',
        'terms_conditions',
    ];

    protected $casts = [
        'terms_conditions' => 'array',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->contract_number = self::generateContractNumber();
        });
    }

    public static function generateContractNumber()
    {
        do {
            $number = 'CT' . date('Y') . str_pad(rand(1, 9999), 4, '0', STR_PAD_LEFT);
        } while (self::where('contract_number', $number)->exists());

        return $number;
    }

    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }
}
