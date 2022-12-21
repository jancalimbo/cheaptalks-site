<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::whereHas('posts')->with('posts')->orderBy('username')->simplePaginate(10);
        return view('posts.authors',  compact('users'));

    }
    
    public function userPage(){
        return view('user.dashboard');
    }

    public function logs(){
        $logs = auth()->user()->logs;
        return view('user.logs', compact('logs'));
    }
}
