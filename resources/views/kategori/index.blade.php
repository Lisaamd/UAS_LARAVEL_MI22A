@extends('template')

@section('content')

    <!DOCTYPE html>
    <html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Daftar Kategori</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                margin: 20px;
                padding: 20px;
            }
            table {
                width: 100%;
                border-collapse: collapse;
                margin-top: 20px;
            }
            th, td {
                border: 1px solid #ddd;
                padding: 10px;
                text-align: left;
            }
            th {
                background-color: #f4f4f4;
            }
            a {
                text-decoration: none;
                color: blue;
            }
            .container {
                max-width: 800px;
                margin: auto;
            }
            .btn {
                padding: 5px 10px;
                border: none;
                color: white;
                cursor: pointer;
                text-decoration: none;
            }
            .btn-edit {
                background-color: orange;
            }
            .btn-delete {
                background-color: red;
            }
        </style>
    </head>
    <body>

    <div class="container">
        <h1>Kategori</h1>
        <a href="{{ route('kategori.create') }}" class="btn btn-add">Tambah Kategori</a>

        <table>
            <thead>
                <tr>
                    <th>Kategori</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kategori as $item)
                    <tr>
                        <td>{{ $item->nama_kategori }}</td>
                        <td>
                            <a href="{{ route('kategori.edit', $item->id) }}" class="btn btn-edit">Edit</a>
                            <form action="{{ route('kategori.destroy', $item->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-delete" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    </body>
    </html>
@endsection