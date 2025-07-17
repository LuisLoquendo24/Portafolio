@extends('layouts.plantilla')

@section('titulo', 'Inicio')

@section('contenido')
    <h1>Bienvenido</h1>
    <p><h3>¡Hola! Soy Luis Ramírez, desarrollador web con experiencia en Laravel, PHP y demás. Bienvenido a mi portafolio personal.</h3></p>
    <p><h3>Explora mi perfil, mis habilidades, educación y proyectos destacados.</h3></p>

    <div class="imagenes-doble">
    <img src="{{ asset('imagenes/Woocas.jpeg') }}" alt="Foto de perfil" class="imagen-seccion">
    </div>
@endsection
