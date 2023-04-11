<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Funcion __invoke controla una unica ruta, si se tiene esta función el sistema
     * entenderá que debe entrar a esta función aún si existen otras
     */
    public function __invoke()
    {
        return view('home');
    }
}
