<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sync-news', function(){
    \App\Jobs\SyncNews::dispatch(10);
    return response(['status' => 'success']);
});

Route::get('local', function(){
    echo \Illuminate\Support\Facades\App::getLocale();
});

Route::get('local/set/{locale}', function($locale){
    \Illuminate\Support\Facades\App::getLocale($locale);
    echo \Illuminate\Support\Facades\App::getLocale();
    echo '<hr>';
    echo __('messages.greet');
});

Route::get('user/create-test/{amount}', function($amount){
    return User::factory($amount)->create();
});

Route::get('user/{user}/change-email', function(User $user,Request $request){
    $oldEmail = $user->email;
    $user->email = $request->input('email');
    $user->save();
    $user->notify(new \App\Notifications\UserEmailChangedNotification($oldEmail));

    return response(['result' => 'email changed']);
});

Route::get('user/{user}/notification', function (User $user){
    return $user->notificstions;
});


