<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KuliahController extends Controller
{
    function kuliah()
    {
        return view(('kuliah'));
    }
}
