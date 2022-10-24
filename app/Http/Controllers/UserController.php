<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::whereHas('posts')->with('posts')->orderBy('username')->simplePaginate(10);
        return view('authors',  compact('users'));

        //
    }
}
