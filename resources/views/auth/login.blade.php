<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar sesión</title>
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
</head>
<body>

<div class="container">
    <h2>Iniciar sesión</h2>
        @if (session('success'))
        <div style="color: green; margin-bottom: 10px;">
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div style="color: red; margin-bottom: 10px;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <input name="email" type="email" placeholder="Correo electrónico" required>
        <input name="password" type="password" placeholder="Contraseña" required>
        <button type="submit">Entrar</button>
    </form>
    <p>¿No tienes cuenta? <a href="{{ route('register') }}">Regístrate</a></p>
</div>

</body>
</html>
