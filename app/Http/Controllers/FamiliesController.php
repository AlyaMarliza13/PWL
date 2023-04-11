<?php

namespace App\Http\Controllers;

use App\Models\families;
use App\Models\familiesModel;
use Illuminate\Http\Request;

class familiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $families = families::all();
        return view ('families.families')
                    ->with('families', $families);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('families.create_families')
                    ->with('url_form', url('/families'));
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
            'status_keluarga' => 'required|string|max:50',
            'pekerjaan' => 'required|string|max:100',
            'alamat' => 'required|string|max:100'
        ]);

        $data = families::create($request->except(['_token']));
        return redirect('families')
                    ->with('success', 'families berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\families  $families
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\families  $families
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $families = families::find($id);
        return view('families.create_families')
                ->with('families', $families)
                ->with('url_form', url('/families/'. $id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\families  $families
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:50,'.$id,
            'status_keluarga' => 'required|string|max:50',
            'pekerjaan' => 'required|string|max:100',
            'alamat' => 'required|string|max:100'
        ]);

        $data = families::where('id', '=', $id)->update($request->except(['_token', '_method']));
        return redirect('families')
                    ->with('success', 'families berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\families  $families
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        families::where('id', '=', $id)->delete();
        return redirect('families')
        ->with('success', 'families Berhasil dihapus');
    }
}
