<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Gate;

class UsersController extends Controller
{
    //
    public function index()
    {
        $this->authorize('view-any',User::class);
        return User::all();
    }

    public function show(User $user)
    {
        $this->authorize('view',$user);
        return $user->isAdmin();
    }
}
