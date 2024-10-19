<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/chek_di',[\App\Http\Controllers\TestDiController::class,'showUrl']);

