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

        $dados = $this->frontService->getFrontPageData();
        /*dd($data); */
        return view('index', $dados);
    }

    public function sobre(){
        return view('sobre');
    }

    public function contacto(){
        return view('contacto');
    }

    public function faqs(){
        return view('faqs');
    }

    public function historia(){
        return view('historia');
    }

    public function equipa(){
        return view('equipa');
    }

    public function termos(){
        return view('termos');
    }

    public function searchBooking(){
        return view('search-booking');
    }

    public function searchByCode(Request $request){
        $booking = $this->frontService->findByCode($request->input('term'));

        if(!$booking){
            return redirect()->back()->with('error', 'Código de reserva não encontrado. Por favor, verifique e tente novamente.');
        }

        return view('booking-result', compact('booking'));
    }
}
