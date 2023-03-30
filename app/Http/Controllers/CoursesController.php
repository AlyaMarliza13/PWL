<?php

namespace App\Http\Controllers;

use App\Models\courses;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function index()
    {
        $courses = courses::all();
        return view('courses')
            ->with('courses', $courses);
    }
}
