<?php

namespace App\Http\Controllers;

use App\Models\courses;
use App\Models\coursesModel;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = courses::all();
        return view ('courses.courses')
                    ->with('courses', $courses);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('courses.create_courses')
                    ->with('url_form', url('/courses'));
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
            'nama_mata_kuliah' => 'required|string|max:50',
            'dosen_pengampu' => 'required|string|max:50',
            'jumlah_sks' => 'required|integer',
            'semester' => 'required|integer',
        ]);

        $data = courses::create($request->except(['_token']));
        return redirect('courses')
                    ->with('success', 'courses berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\courses  $courses
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\courses  $courses
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $courses = courses::find($id);
        return view('courses.create_courses')
                ->with('courses', $courses)
                ->with('url_form', url('/courses/'. $id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\courses  $courses
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_mata_kuliah' => 'required|string|max:50'.$id,
            'dosen_pengampu' => 'required|string|max:50',
            'jumlah_sks' => 'required|integer',
            'semester' => 'required|integer',
        ]);

        $data = courses::where('id', '=', $id)->update($request->except(['_token', '_method']));
        return redirect('courses')
                    ->with('success', 'courses berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\courses  $courses
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        courses::where('id', '=', $id)->delete();
        return redirect('courses')
        ->with('success', 'courses Berhasil dihapus');
    }
}
