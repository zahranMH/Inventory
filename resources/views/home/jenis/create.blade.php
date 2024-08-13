@extends('layouts.master')

@section('title', 'Form Tambah Jenis')

@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Form Tambah Data Jenis</h3>
                            <a href="/Jenis" class="btn btn-warning">Kembali</a>
                        </div>
                        <div class="card-body">
                            <form action="/Jenis" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="nama_jenis" class="form-label">Nama Jenis</label>
                                    <input
                                        type="text" 
                                        class="form-control"
                                        name="nama_jenis" 
                                        id="nama_jenis" 
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
@endsection