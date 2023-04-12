@extends('layouts.head')
@extends('layouts.footer')
@extends('layouts.aside')
@extends('layouts.header')
{{-- @section('title', 'Clientes') --}}




{{-- @section('content')
    <h1>Listado de Clientes </h1>
    <a href="{{ route('clients.create') }}">Crear Cliente</a>
    <ul>
        @foreach ($clients as $client)
            <li>
                <a href="{{ route('clients.show', $client->id) }}">{{ $client->name }}</a>
            </li>
        @endforeach
    </ul>
    {{ $clients->links() }}
@endsection --}}
