<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ColorVehicleModel extends Model
{
    use HasFactory, SoftDeletes;

     protected $table = 'color_vehicle_model'; // nome da tabela pivot

    protected $fillable = [
        'vehicle_model_id',
        'color_id',
    ];

    // Relação com VehicleModel
    public function vehicleModel()
    {
        return $this->belongsTo(VehicleModel::class);
    }

    // Relação com Color
    public function color()
    {
        return $this->belongsTo(Color::class);
    }
}
