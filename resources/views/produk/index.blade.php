@extends('template')

@section('content')
<div class="container">
    <h2>Daftar Produk</h2>
    <a href="{{ route('produk.create') }}" class="btn btn-primary">Tambah Produk</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered mt-3">
        <tr>
            <th>Kode Produk</th>
            <th>Nama Produk</th>
            <th>Kategori</th>
            <th>Aksi</th>
        </tr>
        @foreach ($produks as $produk)
        <tr>
            <td>{{ $produk->id }}</td>
            <td>{{ $produk->nama_produk }}</td>
            <td>{{ $produk->nama_kategori }}</td>
            <td>
                <a href="{{ route('produk.edit', $produk->id) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('produk.destroy', $produk->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
