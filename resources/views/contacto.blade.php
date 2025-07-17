@extends('layouts.plantilla')

@section('titulo', 'Contacto')

@section('contenido')
    <h1>Contáctame</h1>
    <p><h3>Puedes escribirme por correo:</h3></p>
    <p><h3><strong>Email:</h3></strong> <a href="mailto:luiseramren2@gmail.com"><h3>luiseramren2@gmail.com</a></h3></p>

    <p><h3>O visitar mi perfil de GitHub:</h3></p>
    <p><h3><a href="https://github.com/LuisLoquendo24" target="_blank">https://github.com/LuisLoquendo24</a></h3></p>

    <div class="imagenes-doble">
    <img src="{{ asset('imagenes/Woocas.jpeg') }}" alt="Foto de perfil" class="imagen-seccion">
    </div>
@endsection
