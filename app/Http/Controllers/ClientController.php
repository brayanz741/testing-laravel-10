<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::orderBy('id', 'desc')->paginate(10);
        // return view('layouts.template');
        return view('clients.index', compact('clients'));
    }

    public function create()
    {
        return view('clients.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|max:100',
            // TODO: Usar la relación de la tabla documento como validador
            'document_type_id' => 'required|max:1|integer',
            'document' => 'required|max:30',
            'check_digit' => 'required|max:1',
            'phone' => 'required|max:20',
        ]);

        $client = new Client();
        $client->name = $request->name;
        $client->document_type_id = $request->document_type_id;
        $client->document = $request->document;
        $client->check_digit = $request->check_digit;
        $client->phone = $request->phone;
        $client->address = $request->address;

        $client->save();
        return redirect()->route('clients.index');
    }

    public function show(Client $client)
    {
        return view('clients.show', compact('client'));
    }

    public function edit(Client $client)
    {
        return view('clients.edit', compact('client'));
    }

    public function update(Request $request, Client $client)
    {
        $client->name = $request->name;
        $client->document_type_id = $request->document_type_id;
        $client->document = $request->document;
        $client->check_digit = $request->check_digit;
        $client->phone = $request->phone;
        $client->address = $request->address;

        $client->save();
        return redirect()->route('clients.index');
    }
}
