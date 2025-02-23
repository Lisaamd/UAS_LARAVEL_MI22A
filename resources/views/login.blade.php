<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <style>
        
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        
        .container {
            background-color: #87A2FF;
            border-radius: 8px;
            padding: 30px;
            width: 400px;
            color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        
        h1 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #00224D;
        }

        
        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            font-size: 16px;
            margin-bottom: 5px;
            color: #00224D;
            font-weight: bold;
        }

        input {
            width: 95%;
            padding: 10px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        
        .buttons {
            display: flex;
            justify-content: center;
            gap : 10px;
            margin-top: 20px;
            
        }

        .btn {
            text-decoration: none;
            padding: 10px 20px;
            font-size: 15px;
            border: 1px solid #666;
            background-color: #C4D7FF;
            color: #00224D;
            border-radius: 5px;
            cursor: pointer;
            transition: all 0.3s ease;
            font-weight: bold;
        }

        .btn:hover {
            background-color: #FFF4B5;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Login</h1>

        @if (!empty(Session::has('pesan'))) 
            <p style="color:red">{{ Session::get('pesan') }}</p>
        @endif
        <form action="" method="POST">
        
            <div class="form-group">
                <input type="email" id="email" name="email" placeholder="Email">
            </div>
            <div class="form-group">
                <input type="password" id="password" name="password" placeholder="Password">
            </div>
            <div class="buttons">
            <a href="">
            <a href="/dashboard" class="btn">Login</a>
            </a>
                
                <a href="/daftar" class="btn">Kembali</a>
            </div>
        </form>
    </div>
</body>
</html>
