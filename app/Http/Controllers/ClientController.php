<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    //Index función para mostrar pagina principal (una convención)
    public function index()
    {
        $clients = Client::paginate();
        // return view('layouts.template');
        return view('clients.index', compact('clients'));
    }
    //Create función para mostrar formularios de creación (una convención)
    public function create()
    {
        return view('clients.create');
    }
    // funcion para mostrar la información basado en un criterio (una convención)
    public function show($id)
    {
        $client = Client::find($id);
        return view('clients.show', compact('client'));
    }
}
