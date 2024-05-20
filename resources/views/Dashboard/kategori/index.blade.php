@extends('Layouts.main')

@section('content')
    <div class="card">
        <div class="card-body">
            <h2>Kategori</h2>
            <div class="float-right mb-3">
                <a href="{{ route('kategori.add') }}" class="btn btn-primary">Tambah Data</a>
            </div>

            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $index => $item)
                            <tr>
                                <td>{{ ($data->currentPage() - 1) * $data->perPage() + $index + 1 }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>

                                    <div class="d-flex">
                                        <a href="{{ route('kategori.edit', $item->id) }}"
                                            class="btn btn-warning btn-sm mr-2">Edit</a>

                                        <form action="{{ route('kategori.destroy', $item->id) }}"
                                            onsubmit="return confirm('Apakah Anda yakin? Setelah dihapus, Anda tidak akan dapat memulihkan data ini!')"
                                            method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm mr-2">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="mt-3">
                    {{ $data->links('pagination::bootstrap-5') }}
                </div>
            </div>
        </div>
    </div>
@endsection

@push('tambahan-js')
@endpush
