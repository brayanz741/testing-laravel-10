<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    //Index función para mostrar pagina principal (una convención)
    public function index()
    {
        return view('clients.index');
    }
    //Create función para mostrar formularios de creación (una convención)
    public function create()
    {
        return view('clients.create');
    }
    // funcion para mostrar la información basado en un criterio (una convención)
    public function show($client)
    {
        return view('clients.show', compact('client'));
    }
}
