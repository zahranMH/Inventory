@extends('layouts.master')

@section('title', 'Barang Masuk')

@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Halaman Data Barang Masuk</h3>
                            <a href="/BarangMasuk/create" class="btn btn-primary">Tambah Data</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama Barang</th>
                                            <th scope="col">Nama Supplier</th>
                                            <th scope="col">Jumlah</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($barang_masuks as $barang_masuk)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $barang_masuk->barang->nama_barang }}</td>
                                            <td>{{ $barang_masuk->supplier->nama_supplier }}</td>
                                            <td>{{ $barang_masuk->jumlah }}</td>
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