@extends('layouts.master')

@section('title', 'Form Edit Jenis')

@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Form Edit Data Jenis</h3>
                            <a href="/Jenis" class="btn btn-warning">Kembali</a>
                        </div>
                        <div class="card-body">
                            <form action="/Jenis/{{ $jenis->id }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="mb-3">
                                    <label for="nama_jenis" class="form-label">Nama Jenis</label>
                                    <input
                                        type="text" 
                                        class="form-control"
                                        name="nama_jenis" 
                                        id="nama_jenis" 
                                        placeholder=""
                                        value="{{ $jenis->nama_jenis }}"
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