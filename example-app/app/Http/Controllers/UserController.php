<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    
    public function __invoke()
    {
        $users = DB::connection('mysql')->table('user')->select(['first_name','email'])->get();
       return view('users',['user' => $users]);
   }
}
