<?php

namespace App\Http\Controllers;

use App\Contracts\VehicleModelRepositoryInterface;
use App\Contracts\VehicleRepositoryInterface;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class ReservaDetalhesController extends Controller
{
    
    protected $vehicleModelRepository;
    protected $vehicleRepository;

    public function __construct(VehicleRepositoryInterface $vehicleRepository, VehicleModelRepositoryInterface $vehicleModelRepository)
    {
        $this->vehicleModelRepository = $vehicleModelRepository;
        $this->vehicleRepository = $vehicleRepository;
    }

    public function reserva(Request $request)
    {

        return view('reserva-detalhes');
    }

    // public function reserva(Vehicle $vehicle){
    //     return view('reserva-detalhes', compact('vehicle'));
    // }
}
