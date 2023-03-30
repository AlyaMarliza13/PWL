<?php

namespace App\Http\Controllers;

use App\Models\hobbies;
use Illuminate\Http\Request;

class HobbiesController extends Controller
{
    public function index()
    {
        $hobbies = hobbies::all();
        return view('hobbies')
            ->with('hobbies', $hobbies);
    }
}
