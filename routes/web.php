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
use App\Http\Controllers\EmailController;
use App\Http\Controllers\ContactController;

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', [FrontController::class, 'index'])->name('front.index');
Route::get('/sobre', [FrontController::class, 'sobre'])->name('front.sobre');
Route::get('/faqs', [FrontController::class, 'faqs'])->name('front.faqs');
Route::get('/historia', [FrontController::class, 'historia'])->name('front.historia');
Route::get('/equipa', [FrontController::class, 'equipa'])->name('front.equipa');
Route::get('/termos', [FrontController::class, 'termos'])->name('front.termos');
// Route::get('sobre', function () { return view('sobre');})->name('front.sobre');
Route::get('frotas', [FrotaController::class, 'index'])->name('front.frotas');
Route::get('frotas/search', [FrotaController::class, 'search'])->name('front.frotas.search');
Route::get('contacto', [FrontController::class, 'contacto'])->name('front.contacto');
Route::get('/carro-detalhes/{vehicle:slug}', [CarroDetalhesController::class, 'detalhes'])->name('front.carro-detalhes');
Route::get('/reserva-detalhes/{vehicle:slug}', [ReservaDetalhesController::class, 'reserva'])->name('front.reserva-detalhes');
Route::post('/custumer', [CustumerController::class,'store'])->name('custumer.store');
Route::post('/booking_dados', [BookingController::class,'reserveData'])->name('front.bookingdata');

// Rotas de email
// Route::get('/email', [EmailController::class, 'index'])->name('email.index');
// Route::post('/send-email', [EmailController::class, 'sendEmail'])->name('email.send');

Route::get('/enviar-email', [EmailController::class, 'enviar'])->name('enviar.email');
Route::post('/contact/send', [ContactController::class, 'send'])->name('front.contact.send');

// routes/web.php
Route::get('/success/{booking_code}', function ($booking_code) {
    $booking = Booking::with('customer', 'vehicle')
        ->where('booking_code', $booking_code)
        ->firstOrFail();

    return view('success', compact('booking'));
})->name('success');

