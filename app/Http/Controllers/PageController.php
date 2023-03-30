<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    function index()
    {
        echo "Selamat Datang";
    }

    function about()
    {
        echo "2141720004 || Alya Marliza Koesnanto";
    }

    function articles($id)
    {
        echo "Halaman Artikel dengan ID " . $id;
    }
}
