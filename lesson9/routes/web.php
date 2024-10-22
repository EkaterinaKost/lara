<?php

use App\Events\NewsCreated;
use App\Http\Controllers\NewsController;
use App\Models\News;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    NewsCreated::dispatch(News::first());
    return view('welcome');
});

Route::get('/news-update-test', function(){
    News::withoutEvents(function(){
        News::first()->update(['title'=>'TestTest']);
    });
    return 'update';
});
