<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LibraryUserController extends Controller
{
    protected $users = [
        ['id' => 0,'username' => 'user1', 'first_name' => 'Ivan', 'last_name' => 'Ivanov', 'list_of_books' => ['book 1', 'book 2', 'book 3']],
        ['id' => 1,'username' => 'user2', 'first_name' => 'Petr', 'last_name' => 'Petrov', 'list_of_books' => ['book 4', 'book 5', 'book 6']],
    ];
        //
    public function show($id)
    {
        return view('user',['user' => $this->users[$id]]);
    }
}
