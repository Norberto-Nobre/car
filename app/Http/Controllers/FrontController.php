<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use App\Services\FrontService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class FrontController extends Controller
{

    protected $frontService;

    public function __construct(FrontService $frontService)
    {
        $this->frontService = $frontService;
    }

     public function index(){

        $vehicleModels = $this->frontService->getFrontPageData();
        /*dd($data); */
        return view('index', [
            'vehicleModels' => $vehicleModels,
        ]);
    }

}
