<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $title = $request->input('title');
        $sort = $request->input('sort');

        $courses = Course::when($title, function($query, $title){
            return $query->title($title);
        });
 
        $courses = match($sort){
            'highest_rated' => $courses->highestRating(),
            'lowest_price' => $courses->lowestPrice(),
            'newest' => $courses->latest(),
            'popular' => $courses->popular(),
            default => $courses->latest(),
        };
        $courses = $courses->get();
        return view('course.index', ['courses' => $courses]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('course.show', [
            'course' => Course::findOrFail($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
