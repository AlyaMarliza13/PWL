<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    public function show($id){
        $mahasiswa = Mahasiswa::where('id','=',$id)->first();

        return view('nilai',['mahasiswa' => $mahasiswa]);
    }
}
