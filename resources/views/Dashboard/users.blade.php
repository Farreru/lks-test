@extends('Layouts.main')

@section('content')
    <div class="card">
        <div class="card-body">
            <h2>Users</h2>
            <div class="float-right mb-3">
                <button class="btn btn-primary">Tambah Data</button>
            </div>

            <div class="">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Muhamad Nauval Azhar</td>
                            <td>nauvalazhar@gmail.com</td>
                            <td>Admin</td>
                            <td>
                                <button id="swal-3" class="btn btn-primary">Edit</button>
                                <button class="btn btn-danger">Hapus</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection

@push('tambahan-js')
    <script src="assets/js/page/modules-sweetalert.js"></script>
@endpush
