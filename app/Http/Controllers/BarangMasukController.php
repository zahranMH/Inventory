<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BarangMasuk;
use App\Models\Barang;
use App\Models\Supplier;
use PDF;

class BarangMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('home.barang_masuk.index', [
            'barang_masuks' => BarangMasuk::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('home.barang_masuk.create', [
            'barangs' => Barang::all(),
            'suppliers' => Supplier::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'id_barang' => 'numeric',
            'id_supplier' => 'numeric',
            'jumlah' => 'required|min:1'
        ];

        $validatedData = $request->validate($rules);

        $id_barang = $request->id_barang;
        $barang = Barang::find($id_barang);

        $stok = $barang->stok;

        BarangMasuk::create($validatedData);
        // update stok barang
        $barang->update([
            'stok' => $stok + $request->jumlah
        ]);

        return redirect('/BarangMasuk')->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('home.barang_masuk.show', [
            'barang_masuk' => BarangMasuk::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function donwload()
    {
        $pdf = PDF::loadView('home.pdf.barangMasukCetak', [
            'barang_masuks' => BarangMasuk::all()
        ]);

        return $pdf->download("barang_masuk.pdf");
    }

    public function cetak()
    {
        return view("home.pdf.barangMasukCetak", [
            'barang_masuks' => BarangMasuk::all()
        ]);
    }
}
