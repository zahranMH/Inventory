<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Jenis;
use Illuminate\Support\Facades\Storage;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('home.barang.index', [
            'barangs' => Barang::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('home.barang.create', [
            'jenises' => Jenis::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'nama_barang' => 'required|min:3',
            'jenis' => 'required|numeric',
            'harga_beli' => 'required|numeric',
            'harga_jual' => 'required|numeric',
            'stok' => 'required|numeric',
            'gambar' => 'required|image|mimes:jpeg,jpg,png|max:2048'
        ];

        $request->validate($rules);

        $gambar = $request->file('gambar');
        $gambar->storeAs('public/products', $gambar->hashName());

        Barang::create([
            'gambar' => $gambar->hashName(),
            'nama_barang' => $request->nama_barang,
            'id_jenis' => $request->jenis,
            'harga_beli' => $request->harga_beli,
            'harga_jual' => $request->harga_jual,
            'stok' => $request->stok
        ]);

        return redirect('/Barang')->with('success', 'Data Berhasil Ditambahkan');   
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
        return view('home.barang.edit', [
            'barang' => Barang::find($id),
            'jenises' => Jenis::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rules = [
            'nama_barang' => 'required|min:3',
            'jenis' => 'required|numeric',
            'harga_beli' => 'required|numeric',
            'harga_jual' => 'required|numeric',
            'stok' => 'required|numeric',
            'gambar' => 'image|mimes:jpeg,jpg,png|max:2048'
        ];

        $request->validate($rules);

        $barang = Barang::find($id);

        if($request->hasFile('gambar')) {

            $gambar = $request->file('gambar');
            $gambar->storeAs('public/products', $gambar->hashName());

            Storage::delete('public/products/' . $barang->gambar);

            $barang->update([
                'gambar' => $gambar->hashName(),
                'nama_barang' => $request->nama_barang,
                'jenis' => $request->jenis,
                'harga_beli' => $request->harga_beli,
                'harga_jual' => $request->harga_jual,
                'stok' => $request->stok
            ]);
        } else {
            
            $barang->update([
                'nama_barang' => $request->nama_barang,
                'jenis' => $request->jenis,
                'harga_beli' => $request->harga_beli,
                'harga_jual' => $request->harga_jual,
                'stok' => $request->stok
            ]);

        }

        return redirect('/Barang')->with('success', 'Data Berhasil Diedit');   
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $barang = Barang::find($id);

        Storage::delete('public/products/' . $barang->gambar);

        $barang->delete();

        return redirect('/Barang')->with('success', 'Data Berhasil Dihapus');   
    }
}
