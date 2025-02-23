@extends('template')

@section('content')
    <div class="row">
        <div class="col">
            <h2>Daftar Produk</h2>
        </div>
    </div>
    <body>
        <div class="category">
            <div style="display:flex; gap: 1em">        
                <div class="row align-items-center py-3 px-xl-5">    
                    
                    <h3>-- Kategori --</h3>

                    <form action="tambah-kategori" method="get">
                        <button type="submit" class="btn btn-success">Tambah Kategori</button>
                        <br><br>
                    </form>
                </div>
            </div>

            <table cellspacing="0" cellpading="8px" border="1">
                    <tr>
                        <th>Kategori</th>
                        <th>Aksi</th>
                    </tr>    
            </table>
        </div>
    </body>
@endsection


