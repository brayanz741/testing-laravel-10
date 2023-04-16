<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Modelos
use App\Models\Client;
use App\Models\DocumentType;

//Form Request
use App\Http\Requests\StoreClient;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::orderBy('id', 'desc')->paginate(10);
        // return view('layouts.template');
        return view('clients.index')->with(compact('clients'));
    }

    public function create()
    {
        $document_types = DocumentType::all('id', 'acronym', 'status')->where('status', 1);
        return view('clients.create')->with(compact('document_types'));
    }

    public function store(StoreClient $request)
    {
        Client::create($request->all());
        return redirect()->route('clients.index');
    }

    public function show(Client $client)
    {
        return view('clients.show', compact('client'));
    }

    public function edit(Client $client)
    {
        $document_types = DocumentType::all('id', 'acronym', 'status')->where('status', 1);
        return view('clients.edit')->with(compact('client'))->with(compact('document_types'));
    }

    public function update(Request $request, Client $client)
    {
        $client->update($request->all());
        return redirect()->route('clients.index');
    }
}
