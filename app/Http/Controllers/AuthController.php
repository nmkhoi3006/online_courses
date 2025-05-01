<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function __construct()
    {
        
    }

    public function index()
    {
        return view('signin');
    }

    public function signin(Request $request)
    {   
        $incomingFields = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if (Auth::attempt(['email' => $incomingFields['email'], 'password' => $incomingFields['password']])) {
            $request->session()->regenerate();
            return redirect()->route('homepage')->with('success', 'You are signed in successfully');
        }
        
        return redirect()->route('auth.signin.show')->with('error', 'Email or password is incorrect');
    }
}
