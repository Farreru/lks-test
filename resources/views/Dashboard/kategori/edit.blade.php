@extends('Layouts.main')

@section('content')
    <div class="card">
        <div class="card-body">
            <h2>Edit Kategori</h2>
            <form action="{{ route('kategori.update', $data->id) }}" method="post">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" id="nama" class="form-control" value="{{ $data->nama }}">
                </div>
                <button class="btn btn-primary">Edit Data</button>
            </form>
        </div>
    </div>
@endsection
