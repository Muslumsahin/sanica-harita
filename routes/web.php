<?php

use App\Http\Controllers\BayiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IllerController;



Route::get('/bayi-ekle',[BayiController::class, 'index']);
    


Route::get('/', [IllerController::class , 'index']);