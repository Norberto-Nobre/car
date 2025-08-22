<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\FrontService;

class FrotaController extends Controller
{
    protected $frontService;

     public function __construct(FrontService $frontService)
    {
        $this->frontService = $frontService;
    }

    public function index(){
        $dados = $this->frontService->getFrontPageData();
        return view('frotas', $dados);
    }
}
