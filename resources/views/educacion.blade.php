@extends('layouts.plantilla')

@section('titulo', 'Educación')

@section('contenido')
    <h1>Formación académica</h1>
    <br>
    <ul>
        <strong><h3>Ingeniería en Sistemas Computacionales</h3></strong> <strong><h3>Realizada en el ICEST Campus Victoria (2022 - 2025)</h3></strong>
    </ul>

    <div class="imagenes-doble">
    <img src="{{ asset('imagenes/logo_icest.png') }}" alt="Logo Icest" class="imagen-seccion">
    <img src="{{ asset('imagenes/sistemas.webp') }}" alt="Sistemas" class="imagen-seccion">
    </div>
@endsection
