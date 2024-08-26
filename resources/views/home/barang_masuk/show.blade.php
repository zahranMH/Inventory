{{-- ganti sesuai alamat layout master --}}
@extends('layouts.master')

@section('title', 'Detail Barang Masuk')

{{-- ganti sesuai nama section di layout master --}}
@section('content')

<div class="content-wrapper">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- Card Kiri -->
                <div class="col-md-3 mt-5">
                    <div class="card h-100">
                        {{-- ganti sesuai database --}}
                        <img src="/storage/products/{{ $barang_masuk->barang->gambar }}" class="card-img-top img-fluid" alt="...">
                    </div>
                </div>

                <!-- Card Kanan -->
                <div class="col-lg-4 mt-5">
                    <div class="card">
                        <div class="card-body">
                            {{-- ganti sesuai database --}}
                            <h5 class="card-title fs-75">{{ $barang_masuk->barang->nama_barang }}</h5>
                            <br>
                            <hr>
                            {{-- ganti sesuai database $barang_masuk->barang->harga_beli --}}
                            <p class="card-text">Rp. {{ number_format($barang_masuk->barang->harga_beli) }}</p>

                            {{-- ganti sesuai database $barang_masuk->created_at format nya ikutin --}}
                            <p class="card-text">{{ $barang_masuk->created_at->format('d-m-Y H:i') }}</p>
                            <hr>

                            {{-- ganti jumlah sesuai database --}}
                            <p class="card-text"><small class="text-body-secondary">Jumlah : {{ $barang_masuk->jumlah }}</small></p>
                        </div>
                    </div>

                    {{-- ganti href sesuai web.php barangmasuk --}}
                    <a href="/BarangMasuk" class="btn btn-warning">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection