<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('book', function(){
    $email = 'skillboxlaravel@yandex.ru';
    \Illuminate\Support\Facades\Mail::to($email)->send(new \App\Mail\BookingCompletedMailing());
    return response()->json(['status'=>'succesess']);
});

Route::get('test-telegram', function(){
    \Telegram\Bot\Laravel\Facades\Telegram::sendMessage([
        'chat_id' => env('TELEGRAM_CHANNEL_ID'),
        'parse_mode' => 'html',
        'text' => 'произошло тестовое событие'
    ]);
    return response()->json(['status'=>'succesess']);
});

