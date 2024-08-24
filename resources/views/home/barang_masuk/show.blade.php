@extends('layouts.master')

@section('title', 'Detail Barang Masuk')

@section('content')
<div class="content-wrapper">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <a href="/BarangMasuk" class="btn btn-warning mt-4">Kembali</a>
                    <div class="card mt-3 mb-3 d-flex" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="/storage/products/{{ $barang_masuk->barang->gambar }}" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title fs-75">{{ $barang_masuk->barang->nama_barang }}</h5>
                                    <br>
                                    <hr>
                                    <p class="card-text">Rp. {{ number_format($barang_masuk->barang->harga_beli) }}</p>
                                    <p class="card-text">{{ $barang_masuk->created_at->format('d-m-Y H:i') }}</p>
                                    <hr>
                                    <p class="card-text"><small class="text-body-secondary">Jumlah : {{ $barang_masuk->jumlah }}</small></p>
                                </div>
                        </div>
                     </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection