<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jenis;

class JenisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('home.jenis.index', [
            'jenises' => Jenis::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('home.jenis.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'nama_jenis' => 'required|min:3'
        ];

        $validatedData = $request->validate($rules);

        Jenis::create($validatedData);

        return redirect('/Jenis')->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('home.jenis.edit', [
            'jenis' => Jenis::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rules = [
            'nama_jenis' => 'required|min:3'
        ];

        $validatedData = $request->validate($rules);

        Jenis::where('id', $id)->update($validatedData);

        return redirect('/Jenis')->with('success', 'Data Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Jenis::where('id', $id)->delete();

        return redirect('/Jenis')->with('success', 'Data Berhasil Dihapus');
    }
}
