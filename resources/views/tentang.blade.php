<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: auto;
        }
        h1 {
            text-align: left;
        }
        .profile {
            display: flex;
            align-items: center;
            border-bottom: 1px solid #ccc;
            padding: 20px 0;
        }
        .profile img {
            width: 80px;
            height: 80px;
            background: #ccc;
            margin-right: 15px;
        }
        .profile-info {
            flex: 1;
        }
        .profile-info h2, .profile-info p {
            margin: 5px 0;
        }
    </style>
</head>
@extends('template')

@section('content')
    <body>
        <div class="container">
            <h1>Tentang Kami</h1>
            
            <div class="profile">
                <img src="../image/lisa.jpg">
                <div class="profile-info">
                    <p>2257401085</p>
                    <p>Lisa Amanda</p>
                    <p>MI22A</p>
                    <p>Kontribusi yang saya lakukan adalah Berperan sebagai pengembang utama, bertanggung jawab atas desain, termasuk pengembangan kode, desain antarmuka pengguna, dan basis data</p>
                    <p>Github saya: <a href="https://github.com/Lisaamd">https://github.com/LisaAmanda</a></p>
                </div>
            </div>

            <div class="profile">
                <img src="../image/selva.jpg">
                <div class="profile-info">
                    <p>2257401068</p>
                    <p>Selva Oktaviani</p>
                    <p>MI22A</p>
                    <p>Kontribusi yang saya lakukan adalah membuat halaman dashboard, termasuk dashboard controller, dan cssnya.</p>
                    <p>Github saya: <a href="https://github.com/SelvaOktaviani">https://github.com/SelvaOktaviani</a></p>
                </div>
            </div>
            
            <div class="profile">
                <img src="../image/wulan.jpg">
                <div class="profile-info">
                    <p>2257401093</p>
                    <p>Wulansari</p>
                    <p>MI22A</p>
                    <p>Kontribusi yang saya lakukan adalah memberikan support system dan membantu memecahkan masalah. Tak hanya itu, saya pun membantu membuat tampilan sederhana dengan memanfaatkan teknologi AI</p>
                    <p>Github saya: <a href="https://github.com/sayawulansari">https://github.com/Wulansari</a></p>
                </div>
            </div>

            <div class="profile">
                <img src="../image/Lita.jpg">
                <div class="profile-info">
                    <p>2257401018</p>
                    <p>Lita Yuliana</p>
                    <p>MI22A</p>
                    <p>Kontribusi yang saya lakukan adalah membuat halaman edit produk beserta cssnya dan membantu memecahkan masalah.</p>
                    <p>Github saya: <a href="https://github.com/litayuliana">https://github.com/LitaYuliana</a></p>
                </div>
            </div>

        </div>
    </body>
    </html>


@endsection