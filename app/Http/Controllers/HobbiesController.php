<?php

namespace App\Http\Controllers;

use App\Models\hobbies;
use App\Models\hobbiesModel;
use Illuminate\Http\Request;

class hobbiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hobbies = hobbies::all();
        return view ('hobbies.hobbies')
                    ->with('hobbies', $hobbies);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hobbies.create_hobbies')
                    ->with('url_form', url('/hobbies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:50',
            'umur' => 'required|integer',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'hobi' => 'required|string|max:50',
            'kategori' => 'required|in:kesenian,olahraga,fashion'
        ]);

        $data = hobbies::create($request->except(['_token']));
        return redirect('hobbies')
                    ->with('success', 'hobbies berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\hobbies  $hobbies
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\hobbies  $hobbies
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hobbies = hobbies::find($id);
        return view('hobbies.create_hobbies')
                ->with('hobbies', $hobbies)
                ->with('url_form', url('/hobbies/'. $id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\hobbies  $hobbies
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:50,'. $id,
            'umur' => 'required|integer',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'hobi' => 'required|string|max:50',
            'kategori' => 'required|in:kesenian,olahraga,fashion'
        ]);

        $data = hobbies::where('id', '=', $id)->update($request->except(['_token', '_method']));
        return redirect('hobbies')
                    ->with('success', 'hobbies berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\hobbies  $hobbies
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        hobbies::where('id', '=', $id)->delete();
        return redirect('hobbies')
        ->with('success', 'hobbies Berhasil dihapus');
    }
}
