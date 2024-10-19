<?php

use Illuminate\Support\Facades\Route;
use \Illuminate\Http\Response;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/test_url', function () {
    //$response = new Response('Test content',200);
    return response('New test URL', 200)
        ->header('X-HEADER-1','test')//$response;
        ->header('Content-Type','application/json');
    });

    Route::get('/test_url2', function () {
        return redirect()->route('home');
    });

    Route::get('/test_cookie', function () {
        return response('my first cookie')
            ->cookie('my_testcookie', 'test content', 5)
            ->header('Set-cookie',"my_test_c00kie2=10")
            ->header('X-HEADER-TEST1','IT WORKS!')
            ->header('X-HEADER-TEST2','IT WORKS!')
            ->header('X-HEADER-TEST3','IT WORKS!');
        });
    


Route::get('/counter', function(){
    $counterValue = session('counter',0);
    $counterValue++;
    session(['counter'=>$counterValue,]);
    return 'ok';
});

Route::get('/result_counter',function(){
    //return session('counter',0);
    if(session()->has('counter')){
        session()->forget('counter');//удаление сессий
    }
    var_dump(session()->all());
});

Route::get('/list_of_books', function(){
    $listOfBooks = session()->get('list_of_books','');
    return response()->json(['status' => 'received','list_of_books' => $listOfBooks ? unserialize($listOfBooks): 'The list is empty']);
});

Route::post('/list_of_books', function(\Illuminate\Http\Request $request){
    $listOfBooks = session()->get('list_of_books','');
    $listOfBooks = $listOfBooks ? unserialize($listOfBooks) : [];
    $listOfBooks[] = ['autor' => $request->get('autor'), 'title' => $request->get('title')];

    session()->put('list_of_books', serialize($listOfBooks));
    return response()->json(['status' => 'saved','list_of_books' => $listOfBooks]);
});

Route::delete('/list_of_books/{id}', function($id){
    $listOfBooks = session()->get('list_of_books','');
    $listOfBooks =$listOfBooks ? unserialize($listOfBooks) : [];
    if (array_key_exists($id, $listOfBooks)){
        unset($listOfBooks[$id]);
    }

    session()->put('list_of_books', serialize($listOfBooks));

    return response()->json(['status' => 'deleted', 'list_of_books' => $listOfBooks]);
});

Route::get('/file_download', function(){
    return response()->download(base_path() . '/test.txt', 'my_test');

});

Route::get('/file_download2', function(){
    return response()->streamDownload(function(){
        echo file_get_contents('https://google.com');
    }, name:'google.html');

});

Route::get('/file_show', function(){
    return response()->file(base_path() . '/test.txt');
});
