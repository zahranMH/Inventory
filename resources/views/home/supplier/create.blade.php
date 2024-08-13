@extends('layouts.master')

@section('title', 'Form Tambah Supplier')

@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Form Tambah Data Supplier</h3>
                            <a href="/Supplier" class="btn btn-warning">Kembali</a>
                        </div>
                        <div class="card-body">
                            <form action="/Supplier" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="nama_supplier" class="form-label">Nama Supplier</label>
                                    <input
                                        type="text" 
                                        class="form-control @error('nama_supplier') is-invalid @enderror"
                                        name="nama_supplier" 
                                        id="nama_supplier" 
                                        placeholder=""
                                        value="{{ old('nama_supplier') }}"
                                     />
                                     @error('nama_supplier') 
                                     <div class="invalid-feedback">
                                        {{ $message }}
                                     </div>
                                     @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="no_telp" class="form-label">No Telepon</label>
                                    <input
                                        type="number" 
                                        class="form-control @error('no_telp') is-invalid @enderror"
                                        name="no_telp" 
                                        id="no_telp" 
                                        placeholder=""
                                        value="{{ old('no_telp') }}"
                                     />
                                     @error('no_telp') 
                                     <div class="invalid-feedback">
                                        {{ $message }}
                                     </div>
                                     @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="alamat" class="form-label">Alamat</label>
                                    <textarea
                                        name="alamat" 
                                        rows="5"
                                        cols="50"
                                        id="" 
                                        class="form-control @error('alamat') is-invalid @enderror"
                                        value="{{ old('alamat') }}"
                                        >
                                    </textarea>
                                    @error('alamat') 
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