<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StorePostRequest;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function __construct()
    {
        
    }
    public function signup(StorePostRequest $request) {
        $validated = $request->validated();
        $user = DB::table('users')->insert([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => bcrypt($validated['password']),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        if ($user) {
            return redirect()->route('auth.signin.show')
            ->with('success', 'You are signed up successfully')
            ->withInput(['email' => $validated['email'], 'password' => $validated['password']]);;
        }
        return redirect()->route('auth.signup.show')->with('error', 'Something went wrong');
    }

    public function signin(Request $request)
    {   
        $incomingFields = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if (Auth::attempt(['email' => $incomingFields['email'], 'password' => $incomingFields['password']])) {
            $request->session()->regenerate();

            return redirect()->route('homepage')
            ->with('success', 'You are signed in successfully');
        }
        return redirect()->route('auth.signin.show')->with('error', 'Email or password is incorrect');
    }
}
