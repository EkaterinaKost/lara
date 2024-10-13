<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestHeaderController extends Controller
{
    //
    public function getHeader(Request $request)
    {
        $userAgent = $request->header('User-Agent');
        echo $userAgent;

        if($request->hasHeader('My-Header')){
            echo $request->header('My-Header');
        }
    }
}
