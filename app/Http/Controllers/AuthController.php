<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;


class AuthController extends Controller
{

    //cher angel functions
    public function loginForm() {
        if(auth()->check()){
            return redirect('/dashboard');
        }
        return view('authentication.login');
    }

    public function registerForm() {
        if(auth()->check()){
            return redirect('/dashboard');
        }
        return view('authentication.register');
    }

    public function register(Request $request){
        $request->validate([
            'fname' => 'required|string',
            'lname' => 'required|string',
            'username' => 'required|string|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|string',
        ]);

        $token = Str::random(24);

        $user = User::create([
            'fname' => $request->fname,
            'lname' => $request->lname,
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => $token,
        ]);

        Mail::send('authentication.verification-mail', ['user' => $user], function ($mail) use($user){
            $mail->to($user->email);
            $mail->subject('Account Verification');
        });
        
        return redirect('/')->with('message', 'Your account has been created successfully. Please check your mail for verification.');

    }

    public function verification(User $user, $token){
        if($user->remember_token !== $token){
            return redirect('/')->with('error', 'Invalid token. The attached token is invalid or has already been consumed.');
        }

        $user->email_verified_at = now();
        $user->save();

        return redirect('/')->with('message', 'Your account has been verified. You can log in now.');
    }
    
    public function login(Request $request) {
        $request->validate([
            'username' => 'string|required',
            'password' => 'string|required'
        ]);

        $user = User::where('username', $request->username)->first();

        if(!$user || $user->email_verified_at == null){
            return redirect('/')->with('error', 'Sorry your account is not yet verified or does not exist.');
        }
        
        $login = auth()->attempt([
            'username' => $request->username,
            'password' => $request->password
        ]);

        if(!$login) {
            return back()->with('error','Invalid user credentials.');
        }
        return redirect('/dashboard');
        
    }

    public function logout()
    {
        auth()->logout();

        return redirect('/')->with('message', 'Logged out successfully.');
    }

    //added functions
    // if(auth()->guest()){
    //     return redirect('/')->with('error', 'Please log in first.');
    // }
    
}
