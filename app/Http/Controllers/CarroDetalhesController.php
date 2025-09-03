<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use App\Services\FrontService;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CarroDetalhesController extends Controller
{

    protected $frontService;

     public function __construct(FrontService $frontService)
    {
        $this->frontService = $frontService;
    }
    public function detalhes(Vehicle $vehicle){
        $offices = DB::table('offices')->select('*')->get();
        $provinces = DB::table('provinces')->select('*')->get();
        return view('carro-detalhes', compact('vehicle','offices','provinces'));
    }
}
