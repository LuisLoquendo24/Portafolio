@extends('layouts.plantilla')

@section('titulo', 'Portafolio')

@section('contenido')
    <h1>Proyectos destacados</h1>
    <br>
    <div class="proyectos">
        <div class="proyecto">
            <h4>Portafolio Personal</h4>
            <p>Mi sitio web personal construido con Laravel y diseño responsivo.</p>
            <a href="https://github.com/usuario/mi-portafolio" target="_blank">Ver en GitHub</a>
        </div>

        <div class="proyecto">
            <h4>Aplicación Móvil</h4>
            <p>Aplicación móvil con autenticación y registro de usuarios.</p>
            <a href="https://github.com/usuario/blog-laravel" target="_blank">Ver en GitHub</a>
        </div>

        <div class="proyecto">
            <h4>Sitio Roux Academy</h4>
            <p>Página web de una academia inglesa hecha con Laravel.</p>
            <a href="https://github.com/usuario/blog-laravel" target="_blank">Ver en GitHub</a>
        </div>

        <div class="proyecto">
            <h4>Biblioteca Virtual</h4>
            <p>Biblioteca Virtual sobre la carrera de Ingeniería en Sistemas de la Universidad ICEST.</p>
            <a href="https://github.com/usuario/blog-laravel" target="_blank">Ver en GitHub</a>
        </div>

        <div class="proyecto">
            <h4>Bot Telegram Python</h4>
            <p>Algoritmo para realizar tu propio bot de IA para Telegram usando Python.</p>
            <a href="https://github.com/usuario/blog-laravel" target="_blank">Ver en GitHub</a>
        </div>

        <div class="proyecto">
            <h4>Aplicación Intents</h4>
            <p>Aplicación móvil que explica las funciones básicas de los intents.</p>
            <a href="https://github.com/usuario/blog-laravel" target="_blank">Ver en GitHub</a>
        </div>
    </div>
@endsection

