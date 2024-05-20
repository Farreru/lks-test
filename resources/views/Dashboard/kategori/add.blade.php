@extends('Layouts.main')

@section('content')
    <div class="card">
        <div class="card-body">
            <h2>Tambah Kategori</h2>
            <form action="{{ route('kategori.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" id="nama" class="form-control">
                </div>
                <button class="btn btn-primary">Tambah Data</button>
            </form>
        </div>
    </div>
@endsection
