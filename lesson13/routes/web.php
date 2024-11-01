<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::apiResource('hotels',\App\Http\Controllers\HotelController::class);

Route::get('menu-test', function(){
    return view('menu-test');
});
