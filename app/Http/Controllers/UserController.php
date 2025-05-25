<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showYourCourses()
    {
        $user = Auth::user();
        // danh sách các khóa học của user
        $courses = $user->courses()->get();
        // view 
        return view('user.courses', compact('courses'));
    }
}
