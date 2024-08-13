@extends('layouts.master')

@section('title', 'Form Edit User')

@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Form Edit Data User</h3>
                            <a href="/User" class="btn btn-warning">Kembali</a>
                        </div>
                        <div class="card-body">
                            <form action="/User/{{ $user->id }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="mb-3">
                                    <label for="name" class="form-label">Nama User</label>
                                    <input
                                        type="text" 
                                        class="form-control"
                                        name="name" 
                                        id="name" 
                                        placeholder=""
                                        value="{{ $user->name }}"
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
                                        value="{{ $user->email }}"
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