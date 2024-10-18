<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/form',[\App\Http\Controllers\TestFormController::class,'displayForm'])->name('show_form');
Route::post('/form',[\App\Http\Controllers\TestFormController::class,'postForm'])->name('post_form');

Route::post('/employee',[\App\Http\Controllers\EmployeeController::class,'store'])->name('store_employee');
Route::get('/employee/{$id?}',[\App\Http\Controllers\EmployeeController::class,'show'])->name('show_employee');

Route::get('/security_test',[\App\Http\Controllers\TestSecurityController::class,'show'])->name('show_security_form');
Route::post('/security_test',[\App\Http\Controllers\TestSecurityController::class,'post'])->name('post_security_form');

Route::get('/test_validation',[\App\Http\Controllers\TestValidationController::class,'show'])->name('show_validation_form');
Route::post('/test_validation',[\App\Http\Controllers\TestValidationController::class,'post'])->name('post_validation_form');

