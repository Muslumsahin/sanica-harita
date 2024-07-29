<?php

use App\Http\Controllers\BayiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IllerController;

Route::get('/', [IllerController::class, 'index'])->name('home');

Route::get('/bayi-ekle', [BayiController::class, 'index'])->name('bayi.create');
Route::post('/bayi-ekle', [BayiController::class, 'store'])->name('bayi.store');

Route::get('/get-bayiler/{ilId}', [BayiController::class, 'getBayiler']);
