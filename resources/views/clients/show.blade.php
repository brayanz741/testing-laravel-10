@extends('layouts.plantilla')
@section('title', 'Clientes - ' . $client)
@section('content')
    <h1>Se esta mostrando el cliente: {{ $client }}</h1>
@endsection
