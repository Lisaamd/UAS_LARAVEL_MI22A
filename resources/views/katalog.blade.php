@extends('template')

@section('content')

    <style>
        /* Styling Global */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }

        /* Header Styling */
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

        /* Container untuk Card */
        .container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
            margin-top: 20px;
        }

        /* Card Styling */
        .card {
            width: 250px;
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 15px;
            text-align: center;
            background: white;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .card img {
            width: 100%;
            height: 150px;
            object-fit: contain;
            border-bottom: 1px solid #ddd;
            padding-bottom: 10px;
        }

        .btn {
            display: inline-block;
            padding: 8px 12px;
            margin-top: 10px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        .btn:hover {
            background-color: #0056b3;
        }
    </style>

    <body>
        <!-- Header -->
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

        <div class="container">
            <div class="card">
                <img src="https://th.bing.com/th/id/R.8bac4b12a550e9d8996b2860387fbb88?rik=Pyg5xV1NHPyLjw&riu=http%3a%2f%2fcms.dailysocial.id%2fwp-content%2fuploads%2f2021%2f10%2f8ba6173e02ca4840e00b8677cde78ac5_Apple_MacBook-Pro_16-inch-Screen_10182021.jpg&ehk=f6pVKzqEjDZOfg6utgKUeJvlSFGKyRNdO25OIu941DM%3d&risl=&pid=ImgRaw&r=0" 
                    alt="MacBook Pro">
                <h5>MacBook Pro</h5>
                <p>Ini Laptop</p>
                <a href="/katalog/detail" class="btn">Lihat</a>
            </div>

            <div class="card">
                <img src="https://www.bing.com/th?id=OADD2.8246441878943_1AO3H6RU55FKVZBT1T&pid=21.2" 
                    alt="Samsung Z Flip">
                <h5>Samsung Z Flip</h5>
                <p>Ini Hp</p>
                <a href="/katalog/detail" class="btn">Lihat</a>
            </div>

            <div class="card">
                <img src="https://www.bing.com/th?id=OIP.ih06jv4hB3qdSDCllzcUmAHaEu&w=192&h=150&c=8&rs=1&qlt=90&o=6&pid=3.1&rm=2" 
                    alt="">
                <h5>Samsung Odyssey G7</h5>
                <p>Ini Monitor</p>
                <a href="/katalog/detail" class="btn">Lihat</a>
            </div>

            <div class="card">
                <img src="https://www.bing.com/th?id=OIP.lmcJLeo0Unl7XB3TdALGegHaHp&w=144&h=150&c=8&rs=1&qlt=90&o=6&pid=3.1&rm=2" 
                    alt="">
                <h5>Iphone 11</h5>
                <p>Ini Iphone 11</p>
                <a href="/katalog/detail" class="btn">Lihat</a>
            </div>

            <div class="card">
                <img src="https://th.bing.com/th/id/OIP.evJadDOV8fCafwFpfXlCFwHaHb?rs=1&pid=ImgDetMain" 
                    alt="">
                <h5>Samsung S24 Ultra</h5>
                <p>Ini Samsung S24 Ultra</p>
                <a href="/katalog/detail" class="btn">Lihat</a>
            </div>
        </div>
    </body>

@endsection
