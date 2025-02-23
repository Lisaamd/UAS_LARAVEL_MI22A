@extends('template') <!-- Jika ada layout utama -->

@section('content')
    <div class="container">
        <h2>Selamat Datang, <strong>{{ Auth::user()->name ?? 'Admin??' }}</strong></h2>
        <p>Email: {{ Auth::user()->email ?? 'Tidak tersedia' }}</p>


        <div class="row">
            <!-- Kartu untuk Produk -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <h5>Produk</h5>
                        <strong>{{ $produk }}</strong> <!-- Jumlah produk -->
                    </div>
                </div>
            </div>

            <!-- Kartu untuk Kategori -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <h5>Kategori</h5>
                        <strong>{{ $kategori }}</strong> <!-- Jumlah kategori -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
