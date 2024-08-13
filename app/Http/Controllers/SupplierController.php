<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('home.supplier.index', [
            'suppliers' => Supplier::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('home.supplier.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'nama_supplier' => 'required|min:3',
            'no_telp' => 'required|min:3',
            'alamat' => 'required|min:3'
        ];

        $validatedData = $request->validate($rules);

        Supplier::create($validatedData);

        return redirect('/Supplier')->with('success', 'Data Berhasil Ditambahkan');   
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
        return view('home.supplier.edit', [
            'supplier' => Supplier::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rules = [
            'nama_supplier' => 'required|min:3',
            'no_telp' => 'required|min:3',
            'alamat' => 'required|min:3'
        ];

        $validatedData = $request->validate($rules);

        Supplier::where('id', $id)->update($validatedData);

        return redirect('/Supplier')->with('success', 'Data Berhasil Diedit');   
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Supplier::where('id', $id)->delete();

        return redirect('/Supplier')->with('success', 'Data Berhasil Dihapus');   
    }
}
