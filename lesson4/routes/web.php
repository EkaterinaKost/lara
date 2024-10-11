<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/main', function () {
    return view('mainpage');
});

Route::get('/about', function () {
    return view('about');
});


Route::get('/users_list', function () {
    $users = ['Ivan', 'Petr', 'Oleg','Nikolay', 'Vasily'];
    return view('users', ['userlist' => $users]);
});

Route::get('/uppercase', function () {
    return view('testdir');
});