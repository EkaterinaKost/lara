<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SendFileController extends Controller
{
    //
    public function __invoke()
    {
        return response()->file('C:\Users\Professional\Desktop\laravel\lesson2\public\uploads\test.pdf');
    }
}
