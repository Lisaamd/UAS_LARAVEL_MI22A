<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

    <div class="row">
        <div class="col-2" style="background-color: beige; padding: 10px;">
            <nav class="nav flex-column">
                <a class="nav-link active" aria-current="page" href="/katalog">Beranda</a>
                <a class="nav-link" href="/produk">Produk</a>
                <a class="nav-link" href="/kategori">Kategori</a>
                <a class="nav-link" href="/">User</a>
                <a class="nav-link" href="/">Logout</a>
            </nav>
        </div>

        <div class="col-10" style="padding: 15px">
            @yield('content')
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
  </body>
</html>