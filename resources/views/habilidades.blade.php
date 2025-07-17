@extends('layouts.plantilla')

@section('titulo', 'Habilidades')

@section('contenido')
    <h1>Habilidades técnicas</h1>
    <ul>
        <li><h3>Laravel y PHP</h3></li>
        <li><h3>MySQL y phpMyAdmin</h3></li>
        <li><h3>HTML, CSS, JavaScript, Java, Kotlin y C#</h3></li>
        <li><h3>Visual Studio Code, Android Studio, IntelliJ y XAMPP</h3></li>
    </ul>

    <div class="imagenes-doble">
        <img src="{{ asset('imagenes/php.png') }}" alt="PHP" class="imagen-seccion">
        <img src="{{ asset('imagenes/laravel.webp') }}" alt="Laravel" class="imagen-seccion">
        <img src="{{ asset('imagenes/mysql.png') }}" alt="MySQL" class="imagen-seccion">
        <img src="{{ asset('imagenes/myadmin.jpg') }}" alt="PhpMyAdmin" class="imagen-seccion">
        <img src="{{ asset('imagenes/java.jpg') }}" alt="Java" class="imagen-seccion">
        <img src="{{ asset('imagenes/visual.jpg') }}" alt="Visual Studio" class="imagen-seccion">
        <img src="{{ asset('imagenes/android.jpg') }}" alt="Android Studio" class="imagen-seccion">
        <img src="{{ asset('imagenes/intellij.jpg') }}" alt="IntelliJ" class="imagen-seccion">
    </div>
@endsection
