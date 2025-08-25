<?php

use App\Http\Controllers\CarroDetalhes;
use App\Http\Controllers\CarroDetalhesController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\FrotaController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', [FrontController::class, 'index'])->name('front.index');
Route::get('/sobre', [FrontController::class, 'sobre'])->name('front.sobre');
// Route::get('sobre', function () { return view('sobre');})->name('front.sobre');
Route::get('frotas', [FrotaController::class, 'index'])->name('front.frotas');
Route::get('contacto', [FrontController::class, 'contacto'])->name('front.contacto');
Route::get('/carro-detalhes/{vehicle:id}', [CarroDetalhesController::class, 'detalhes'])->name('front.carro-detalhes');
