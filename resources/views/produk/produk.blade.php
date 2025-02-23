@extends('template')

@section('content')
    <div class="row">
        <div class="col">
            <h2>Daftar Produk</h2>
        </div>
    </div>
    <body>
    <div class="produk">
        <div style="display:flex; gap: 1em">        
            <div class="row align-items-center py-3 px-xl-5">    
                
                <h3>-- Produk --</h3>

                <form action="tambah-produk" method="get">
                    <button type="submit" name="tambah">Tambah Produk</button>
                    <br><br>
                </form>
            </div>
        </div>

        <table cellspacing="0" cellpading="8px" border="1">
                <tr>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Kategori</th>
                    <th>Aksi</th>
                </tr>    
        </table>
    </div>
@endsection


