@extends('layouts.master')

@section('title', 'User')

@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Halaman Data User</h3>
                            <a href="/User/create" class="btn btn-primary">Tambah Data</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped" id="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($users as $user)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>
                                                <a href="/User/{{ $user->id }}/edit" class="btn btn-warning">Edit</a>
                                                <form action="/User/{{ $user->id }}" class="d-inline" method="POST" onsubmit="return confirmDelete(event);">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                                </form>
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

    <script>
        function confirmDelete(event) {
            event.preventDefault();
            Swal.fire({
            title: "Yakin?",
            text: "Yakin Ingin Menghapus Data Ini",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes!"
            }).then((result) => {
            if (result.isConfirmed) {
                event.target.submit();
            }
            });
        }
    </script>

</div>

@endsection