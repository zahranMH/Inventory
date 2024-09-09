@extends('layouts.master')

@section('title', 'Barang Keluar')

@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Halaman Data Barang Keluar</h3>
                            <a href="/BarangKeluar/create" class="btn btn-primary">Tambah Data</a>
                            <a href="/cetak_barangKeluar" class="btn btn-info"><i class="fas fa-print"></i> Cetak Laporan</a>
                            <a href="/donwload_barangKeluar" class="btn btn-info"><i class="fas fa-download"></i> Donwload Laporan</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped" id="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama Barang</th>
                                            <th scope="col">Nama Customer</th>
                                            <th scope="col">Jumlah</th>
                                            <th scope="col">Detail</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($barang_keluars as $barang_keluar)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $barang_keluar->barang->nama_barang }}</td>
                                            <td>{{ $barang_keluar->nama_customer }}</td>
                                            <td>{{ $barang_keluar->jumlah }}</td>
                                            <td>
                                                <a href="/struk_barangKeluar/{{ $barang_keluar->id }}" class="btn btn-success"><i class="fas fa-print"></i> Cetak Struk</a>
                                            </td>
                                        </tr>                                            
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @if(session('success'))
    <script>
        Swal.fire({
        title: "Berhasil",
        text: "{{ session('success') }}",
        icon: "success"
    });
    </script>
    @endif

</div>

@endsection