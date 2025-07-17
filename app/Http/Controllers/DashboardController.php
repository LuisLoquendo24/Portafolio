<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function inicio()     { return view('dashboard'); }
    public function sobreMi()    { return view('sobre-mi'); }
    public function portafolio() { return view('portafolio'); }
    public function educacion()  { return view('educacion'); }
    public function habilidades(){ return view('habilidades'); }
    public function contacto()   { return view('contacto'); }
}


