<?php

namespace App\Http\Controllers;

use App\Models\ArtikelModel;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class ArtikelModelController extends Controller
{
    public function index()
    {
        $artikel_models = ArtikelModel::all();
        return view('article')
            ->with('artikel_models', $artikel_models);
    }
}
