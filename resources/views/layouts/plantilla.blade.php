<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo', 'Mi Portafolio')</title>
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            margin: 0;
            padding: 0;
            background: #99a0d0;
        }

        nav {
            background: #336f44;
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: white;
        }

        nav h1 {
            margin: 0;
            font-size: 20px;
        }

        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            gap: 50px;
        }

        nav ul li {
            display: inline;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }

        nav ul li a:hover {
            text-decoration: underline;
        }

        .contenido {
            padding: 40px 30px;
        }

        footer {
            background: #336f44;
            color: white;
            text-align: center;
            padding: 10px;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
    </style>
</head>
<body>

<nav>
    <h1>Mi Portafolio</h1>
    <ul>
        <li><a href="{{ route('dashboard') }}">Inicio</a></li>
        <li><a href="{{ route('sobre-mi') }}">Sobre mí</a></li>
        <li><a href="{{ route('portafolio') }}">Portafolio</a></li>
        <li><a href="{{ route('educacion') }}">Educación</a></li>
        <li><a href="{{ route('habilidades') }}">Habilidades</a></li>
        <li><a href="{{ route('contacto') }}">Contacto</a></li>
    </ul>

    <form method="POST" action="{{ route('logout') }}" style="margin-left: 20px;">
    @csrf
    <button type="submit" style="
        background-color: #e74c3c;
        color: white;
        border: none;
        padding: 8px 14px;
        border-radius: 5px;
        font-weight: bold;
        cursor: pointer;
    ">Cerrar sesión</button>
    </form>

</nav>

<div class="contenido">
    @yield('contenido')
</div>

<footer>
    © {{ date('Y') }} Luis Ramírez. Todos los derechos reservados.
</footer>

</body>
</html>
