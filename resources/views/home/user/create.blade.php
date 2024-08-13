@extends('layouts.master')

@section('title', 'Form Tambah User')

@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Form Tambah Data User</h3>
                            <a href="/User" class="btn btn-warning">Kembali</a>
                        </div>
                        <div class="card-body">
                            <form action="/User" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="name" class="form-label">Nama User</label>
                                    <input
                                        type="text" 
                                        class="form-control"
                                        name="name" 
                                        id="name" 
                                        placeholder=""
                                     />
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input
                                        type="email" 
                                        class="form-control"
                                        name="email" 
                                        id="email" 
                                        placeholder=""
                                     />
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input
                                        type="password" 
                                        class="form-control"
                                        name="password" 
                                        id="password" 
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