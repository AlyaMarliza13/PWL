<?php

namespace App\Http\Controllers;

use App\Models\families;
use Illuminate\Http\Request;

class FamiliesController extends Controller
{
    public function index()
    {
        $families = families::all();
        return view('families')
            ->with('families', $families);
    }
}
