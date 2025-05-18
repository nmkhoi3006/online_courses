<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show()
    {
        // Trả về view profile
        $user = auth()->user();
        return view('profile', compact('user'));
    }

    public function edit()
    {

        $user = auth()->user();
        return view('edit_profile', compact('user'));
    }
}