<?php

use App\Http\Controllers\FrontController;
use App\Http\Controllers\FrotaController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', [FrontController::class, 'index'])->name('front.index');
Route::get('sobre', function () { return view('sobre');})->name('front.sobre');
Route::get('fotas', [FrotaController::class, 'index'])->name('front.frotas');
