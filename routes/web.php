<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\CarroDetalhes;
use App\Http\Controllers\CarroDetalhesController;
use App\Http\Controllers\CustumerController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\FrotaController;
use App\Http\Controllers\ReservaDetalhesController;
use App\Models\Booking;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', [FrontController::class, 'index'])->name('front.index');
Route::get('/sobre', [FrontController::class, 'sobre'])->name('front.sobre');
Route::get('/faqs', [FrontController::class, 'faqs'])->name('front.faqs');
Route::get('/historia', [FrontController::class, 'historia'])->name('front.historia');
Route::get('/equipa', [FrontController::class, 'equipa'])->name('front.equipa');
// Route::get('sobre', function () { return view('sobre');})->name('front.sobre');
Route::get('frotas', [FrotaController::class, 'index'])->name('front.frotas');
Route::get('contacto', [FrontController::class, 'contacto'])->name('front.contacto');
Route::get('/carro-detalhes/{vehicle:slug}', [CarroDetalhesController::class, 'detalhes'])->name('front.carro-detalhes');
Route::get('/reserva-detalhes/{vehicle:slug}', [ReservaDetalhesController::class, 'reserva'])->name('front.reserva-detalhes');
Route::post('/custumer', [CustumerController::class,'store'])->name('custumer.store');
Route::post('/booking_dados', [BookingController::class,'reserveData'])->name('bookingdata');

// routes/web.php
Route::get('/success/{booking_code}', function ($booking_code) {
    $booking = Booking::with('customer', 'vehicle')
        ->where('booking_code', $booking_code)
        ->firstOrFail();

    return view('success', compact('booking'));
})->name('success');

