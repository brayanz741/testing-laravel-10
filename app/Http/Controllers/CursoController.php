<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    //Index función para mostrar pagina principal (una convención)
    public function index()
    {
        return view('cursos.index');
    }
    //Create función para mostrar formularios de creación (una convención)
    public function create()
    {
        return view('cursos.create');
    }
    // funcion para mostrar la información basado en un criterio (una convención)
    public function show($curso)
    {
        return view('cursos.show', compact('curso'));
    }
}
