<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function logs(){
        $logs = auth()->user()->logs;
        return view('user.logs', compact('logs'));

        
    }
}
