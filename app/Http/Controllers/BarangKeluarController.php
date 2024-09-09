<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BarangKeluar;
use App\Models\Barang;
use PDF;

class BarangKeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('home.barang_keluar.index', [
            'barang_keluars' => BarangKeluar::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('home.barang_keluar.create', [
            'barangs' => Barang::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'id_barang' => 'numeric',
            'nama_customer' => 'required|min:3',
            'jumlah' => 'required|min:1'
        ];

        $validatedData = $request->validate($rules);

        $id_barang = $request->id_barang;
        $barang = Barang::find($id_barang);

        $stok = $barang->stok;

        if ($stok < $request->jumlah ) {
           return redirect()->back()->with('failed', 'Stok Kurang');
        } else {
            BarangKeluar::create($validatedData);
            // update stok barang
            $barang->update([
                'stok' => $stok - $request->jumlah
            ]);

            return redirect('/BarangKeluar')->with('success', 'Data Berhasil Ditambahkan');
        }

        
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

    public function cetak()
    {
        return view('home.pdf.barangKeluarCetak', [
            'barang_keluars' => BarangKeluar::all()
        ]);
    }

    public function donwload()
    {
        $pdf = PDF::loadview('home.pdf.barangKeluarCetak', [
            'barang_keluars' => BarangKeluar::all()
        ]);

        return $pdf->download("barang_keluar.pdf");
    }

    public function cetakStruk(String $id)
    {
        $barang_keluar = BarangKeluar::find($id);

        $harga_jual = $barang_keluar->barang->harga_jual;
        $jumlah_keluar = $barang_keluar->jumlah;

        $total = $harga_jual * $jumlah_keluar;

        return view('home.pdf.strukBarangKeluar', [
            'barang_keluar' => BarangKeluar::find($id),
            'total' => $total
        ]);
    }
}
