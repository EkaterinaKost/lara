<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';

Route::middleware('log-request')->group(function(){
    Route::get('log-ip',function(){
        return response()->json(['statuss' => 'success']);
    });
});

Route::get('users',[\App\Http\Controllers\UsersController::class,'index']);