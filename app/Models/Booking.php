<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Booking extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'customer_id',
        'vehicle_id',
        'pickup_office_id',
        'return_office_id',
        'province_id',
        'dias_province',
        'booking_code',
        'start_date',
        'end_date',
        'subtotal_amount',
        'discount_amount',
        'total_amount',
        'daily_rate',
        'days',
        'status',
        'notes',
    ];

    protected $casts = [
        'start_date' => 'datetime',
        'end_date' => 'datetime',
        'subtotal_amount' => 'decimal:2',
        'discount_amount' => 'decimal:2',
        'total_amount' => 'decimal:2',
        'daily_rate' => 'decimal:2',
        'days' => 'integer',
        'dias_province' => 'integer',
    ];

     const STATUS_PENDING = 'pendente';
    const STATUS_APPROVED = 'aprovado';
    const STATUS_CANCELLED = 'cancelado';
    const STATUS_EXPIRED = 'expirado';

    public static function getStatuses()
    {
        return [
            self::STATUS_PENDING => 'Pendente',
            self::STATUS_APPROVED => 'Aprovado',
            self::STATUS_CANCELLED => 'Cancelado',
            self::STATUS_EXPIRED => 'Expirado',
        ];
    }

     protected static function boot()
    {
        parent::boot();

        static::creating(function ($booking) {
            $booking->booking_code = self::generateBookingCode();
        });
    }

     public static function generateBookingCode()
    {
        do {
            $code = 'RC' . date('Y') . str_pad(rand(1, 9999), 4, '0', STR_PAD_LEFT);
        } while (self::where('booking_code', $code)->exists());

        return $code;
    }

        public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }

    public function pickupOffice()
    {
        return $this->belongsTo(Office::class, 'pickup_office_id');
    }

    public function returnOffice()
    {
        return $this->belongsTo(Office::class, 'return_office_id');
    }
    public function province()
    {
        return $this->belongsTo(Province::class);
    }
    public function bookingContract()
    {
        return $this->hasOne(BookingContract::class);
    }

    public function isExpired()
    {
        return $this->status === self::STATUS_APPROVED &&
               now()->isAfter($this->start_date->addHours(2)); // 2 horas de tolerância
    }
    
}
