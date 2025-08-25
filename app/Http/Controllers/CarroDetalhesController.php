<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use App\Services\FrontService;
use Illuminate\Http\Request;

class CarroDetalhesController extends Controller
{

    protected $frontService;

     public function __construct(FrontService $frontService)
    {
        $this->frontService = $frontService;
    }
    public function detalhes(Vehicle $vehicle){
        return view('carro-detalhes', compact('vehicle'));
    }
}
