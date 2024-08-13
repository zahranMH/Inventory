@extends('layouts.master')

@section('title', 'Form Tambah Barang')

@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Form Tambah Data Barang</h3>
                            <a href="/Barang" class="btn btn-warning">Kembali</a>
                        </div>
                        <div class="card-body">
                            <form action="/Barang" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="nama_barang" class="form-label">Nama Barang</label>
                                    <input
                                        type="text" 
                                        class="form-control @error('nama_barang') is-invalid @enderror"
                                        name="nama_barang" 
                                        id="nama_barang" 
                                        placeholder=""
                                        value="{{ old('nama_barang') }}"
                                     />
                                     @error('nama_barang') 
                                     <div class="invalid-feedback">
                                        {{ $message }}
                                     </div>
                                     @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="jenis" class="form-label">Jenis</label>
                                    <select class="form-control" aria-label="Default select example" name="jenis">
                                        @foreach($jenises as $jenis)
                                        <option value="{{ $jenis->id }}">{{ $jenis->nama_jenis }} - {{ $jenis->id }}</option>
                                        @endforeach
                                    </select>
                                    @error('jenis') 
                                     <div class="invalid-feedback">
                                        {{ $message }}
                                     </div>
                                     @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="harga_beli" class="form-label">Harga Beli</label>
                                    <input
                                        type="number" 
                                        class="form-control @error('harga_beli') is-invalid @enderror"
                                        name="harga_beli" 
                                        id="harga_beli" 
                                        placeholder=""
                                        value="{{ old('harga_beli') }}"
                                     />
                                     @error('harga_beli') 
                                     <div class="invalid-feedback">
                                        {{ $message }}
                                     </div>
                                     @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="harga_jual" class="form-label">Harga Jual</label>
                                    <input
                                        type="number" 
                                        class="form-control @error('harga_jual') is-invalid @enderror"
                                        name="harga_jual" 
                                        id="harga_jual" 
                                        placeholder=""
                                        value="{{ old('harga_jual') }}"
                                     />
                                     @error('harga_jual') 
                                     <div class="invalid-feedback">
                                        {{ $message }}
                                     </div>
                                     @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="stok" class="form-label">Stok</label>
                                    <input
                                        type="number" 
                                        class="form-control @error('stok') is-invalid @enderror"
                                        name="stok" 
                                        id="stok" 
                                        placeholder=""
                                        value="{{ old('stok') }}"
                                     />
                                     @error('stok') 
                                     <div class="invalid-feedback">
                                        {{ $message }}
                                     </div>
                                     @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="gambar" class="form-label">Gambar</label>
                                    <input
                                        type="file" 
                                        class="form-control @error('gambar') is-invalid @enderror"
                                        name="gambar" 
                                        id="gambar" 
                                        placeholder=""
                                     />
                                     @error('gambar') 
                                     <div class="invalid-feedback">
                                        {{ $message }}
                                     </div>
                                     @enderror
                                </div>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection