<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Vehicle;
use App\Models\VehicleModel;
use Illuminate\Http\Request;
use App\Services\FrontService;

class FrotaController extends Controller
{
    protected $frontService;

     public function __construct(FrontService $frontService)
    {
        $this->frontService = $frontService;
    }

    public function index(Request $request)
{
    $query = Vehicle::with(['vehicleModel.brand', 'vehicleModel.category']);

    // Filtrar por categorias
    if ($request->has('categories')) {
        $categories = $request->get('categories');
        $query->whereHas('vehicleModel.category', function ($q) use ($categories) {
            $q->whereIn('id', $categories);
        });
    }

    // Filtrar por combustível
    if ($request->has('fuel_types')) {
        $fuels = $request->get('fuel_types');
        $query->whereHas('vehicleModel', function ($q) use ($fuels) {
    $q->whereIn('fuel_type', $fuels);
});
    }

    // Filtrar por transmissão
    if ($request->has('transmissions')) {
        $transmissions = $request->get('transmissions');
        $query->whereHas('vehicleModel', function ($q) use ($transmissions) {
            $q->whereIn('transmission', $transmissions);
        });
    }

    $vehicles = $query->get();

    $categories = Category::all(); // mantém as categorias disponíveis

    return view('frotas', compact('vehicles', 'categories'));
}

    // pesquisar pelo termo
    public function search(Request $request){

        if (!$request->has('term') || empty($request->input('term'))) {
            return redirect()->route('front.frotas');
        }
        $term = $request->input('term');
        $vehicles = $this->frontService->searchVehicle($term);
        $dados = $this->frontService->getFrontPageData();

        if ($vehicles->isEmpty()) {
            return redirect()->route('front.frotas')->with('error', 'Nenhum veículo encontrado para o termo: ' . $term);
        }
        return view('frotas', array_merge($dados, ['vehicles' => $vehicles]));
    }
}
