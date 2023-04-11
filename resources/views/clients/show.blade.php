@extends('layouts.plantilla')
@section('title', 'Clientes - ' . $client->name)
@section('content')
    <h1>Datos del cliente: {{ $client->name }}</h1>
    <a href="{{ route('clients.index') }}">Volver a Clientes</a>
    <ul>
        <li><b>Identificación:</b> {{ $client->rut }}-{{ $client->check_digit }}</li>
        <li><b>Teléfono:</b> {{ $client->phone }}</li>
        <li><b>Dirección:</b> {{ $client->address }}</li>
    </ul>
@endsection
