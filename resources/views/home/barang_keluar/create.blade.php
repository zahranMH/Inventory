@extends('layouts.master')

@section('title', 'Form Tambah Barang Keluar')

@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Form Tambah Data Barang Keluar</h3>
                            <a href="/BarangKeluar" class="btn btn-warning">Kembali</a>
                        </div>
                        <div class="card-body">
                            <form action="/BarangKeluar" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="barang" class="form-label">Barang</label>
                                    <select class="form-control" aria-label="Default select example" name="id_barang">
                                        @foreach($barangs as $barang)
                                        <option value="{{ $barang->id }}">{{ $barang->nama_barang }} - {{ $barang->id }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="nama_customer" class="form-label">Nama Customer</label>
                                    <input
                                        type="text" 
                                        class="form-control"
                                        name="nama_customer" 
                                        id="nama_customer" 
                                        placeholder=""
                                     />
                                </div>
                                <div class="mb-3">
                                    <label for="jumlah" class="form-label">Jumlah</label>
                                    <input
                                        type="number" 
                                        class="form-control"
                                        name="jumlah" 
                                        id="jumlah" 
                                        placeholder=""
                                     />
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

@if(session('failed'))
    <script>
        Swal.fire({
        title: "Gagal",
        text: "{{ session('failed') }}",
        icon: "error"
    });
    </script>
@endif
@endsection