<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Bienvenido</title>
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
    <style>
        body {
            background: linear-gradient(135deg, #667eea, #764ba2);
            font-family: 'Segoe UI', sans-serif;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card {
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
            max-width: 400px;
            text-align: center;
        }

        .card h1 {
            margin-bottom: 20px;
            color: #333;
        }

        .card p {
            color: #666;
            margin-bottom: 30px;
        }

        .card a {
            display: inline-block;
            padding: 12px 24px;
            margin: 5px;
            background-color: #4e54c8;
            color: white;
            text-decoration: none;
            border-radius: 6px;
            transition: background 0.3s ease;
        }

        .card a:hover {
            background-color: #5e64e1;
        }
    </style>
</head>
<body>

<div class="card">
    <h1>Bienvenido a mi portafolio</h1>
    <p>Luis Ramírez</p>

    <a href="{{ route('login') }}">Iniciar sesión</a>
    <a href="{{ route('register') }}">Registrarse</a>
</div>

</body>
</html>
