@extends('layouts.plantilla')

@section('titulo', 'Sobre mí')

@section('contenido')
    <h1>Sobre mí</h1>
    <p><h3>Soy un desarrollador apasionado por la tecnología y el aprendizaje continuo. Me especializo en el desarrollo web con Laravel y PHP, y me encanta crear aplicaciones eficientes y fáciles de usar.</h3></p>
    <p><h3>Además de programar, me gustan los videojuegos, el futbol, la música y aprender nuevas herramientas para mejorar mis proyectos.</h3></p>

    <div class="imagenes-doble">
    <img src="{{ asset('imagenes/juegos.jpg') }}" alt="Videojuegos" class="imagen-seccion">
        <img src="{{ asset('imagenes/futbol.webp') }}" alt="Futbol" class="imagen-seccion">
    </div>


@endsection
