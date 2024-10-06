<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestRedirectController extends Controller
{
    //
    public function __invoke()
    {
        //return redirect()->away('http://google.com');
       // return redirect()->route('books');
       return redirect()->action([LibraryUserController::class,'show'],['id' => 0]);
    }
}
