<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
</head>
<body>

<div class="container">
    <h2>Registro</h2>
        @if ($errors->any())
        <div style="color: red; margin-bottom: 10px;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <input name="name" placeholder="Nombre completo" required>
        <input name="email" type="email" placeholder="Correo electrónico" required>
        <input name="password" type="password" placeholder="Contraseña" required>
        <input name="password_confirmation" type="password" placeholder="Confirmar contraseña" required>
        <button type="submit">Registrarme</button>
    </form>
    <p>¿Ya tienes cuenta? <a href="{{ route('login') }}">Inicia sesión</a></p>
</div>

</body>
</html>
