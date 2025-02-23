<style>
    /* public/css/style.css */
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }

    header {
        background-color: #007bff;
        color: white;
        padding: 10px;
        text-align: center;
    }

    header nav ul {
        list-style-type: none;
        padding: 0;
    }

    header nav ul li {
        display: inline;
        margin: 0 15px;
    }

    header nav ul li a {
        color: white;
        text-decoration: none;
    }

    a {
        color: white;
        text-decoration: none;
    }

    .card {
        width: 250px;
        border: 1px solid #ccc;
        border-radius: 8px;
        padding: 15px;
        margin: 10px;
        text-align: center;
        background: white;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }


    .image-placeholder {
        width: 100%;
        height: 150px;
        background-color: #eee;
        margin-bottom: 10px;
    }

</style>

@extends('template')

@section('content')
    <body>
        <header>
            <h1>Kedai Uncle Muthu</h1>
            <nav>
            <ul>
                <li><a href="dashboard">Home</a></li>
                <li><a href="produk">Produk</a></li>
                <li><a href="tentang">Tentang</a></li>
                <li><a href="login">Login</a></li>
            </ul>
            </nav>
        </header>

    <div class="row">
            @for ($i = 0; $i < 8; $i++)
                <div class="col-lg-3">
                    <div class="card mb-2">
                        <img style="width: 100%" src="https://th.bing.com/th/id/R.8bac4b12a550e9d8996b2860387fbb88?rik=Pyg5xV1NHPyLjw&riu=http%3a%2f%2fcms.dailysocial.id%2fwp-content%2fuploads%2f2021%2f10%2f8ba6173e02ca4840e00b8677cde78ac5_Apple_MacBook-Pro_16-inch-Screen_10182021.jpg&ehk=f6pVKzqEjDZOfg6utgKUeJvlSFGKyRNdO25OIu941DM%3d&risl=&pid=ImgRaw&r=0" class="card-body">
                        <div class="card-body">
                            <h5 class="card-title">MacBook Pro</h5>
                            <p class="card-text">Ini Laptop</p>
                            <a href="/katalog/detail" class="btn btn-primary">Lihat</a>
                        </div>
                    </div>
                </div>
            @endfor
    </div>
@endsection