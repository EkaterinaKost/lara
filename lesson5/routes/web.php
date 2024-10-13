<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test_parameters', [\App\Http\Controllers\RequestTestController::class, 'testRequest']);

Route::get('/test_header',[\App\Http\Controllers\TestHeaderController::class,'getHeader']);

Route::get('/test_cookie',[\App\Http\Controllers\TestCookieController::class,'TestCookie']);

Route::get('/upload_file', [\App\Http\Controllers\FileUploadController::class,'showForm'])->name('showForm');

Route::post('/upload_file', [\App\Http\Controllers\FileUploadController::class,'fileUpload'])->name('uploadFile');

Route::post('/json_parse',[\App\Http\Controllers\JsonParseController::class,'parseJson']);
