@extends('layouts.head')
@extends('layouts.footer')
@extends('layouts.aside')
@extends('layouts.tables')
@extends('layouts.header')

@section('title', 'Clientes')
@section('page-title', 'Listado de Clientes')
@section('breadcrumbs')
    <li class="breadcrumb-item"><a href="{{ route('home') }}">Inicio</a></li>
    <li class="breadcrumb-item"><a href="{{ route('clients.index') }}">Listado de Clientes</a></li>
@endsection
@section('card-title', 'Listado')
@section('table')
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Dirección</th>
                <th scope="col">Teléfono</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clients as $client)
                <tr>
                    <th scope="row" class="text-center">{{ $client->id }}</th>
                    <td>{{ $client->name }}</td>
                    <td>{{ $client->address }}</td>
                    <td>{{ $client->phone }}</td>
                    <td class="text-center">
                        <button type="button" class="btn btn-danger"data-bs-toggle="tooltip" data-bs-placement="bottom"
                            data-bs-original-title="Eliminar"><i class="bi bi-trash"></i></button>
                        <button type="button" class="btn btn-info" data-bs-toggle="tooltip" data-bs-placement="bottom"
                            data-bs-original-title="Editar"><i class="bi  bi-pencil-square "></i></button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="d-flex">
        {!! $clients->links() !!}
    </div>
@endsection


<script>
    window.onload = function() {
        const el = document.querySelector('#sidebar-nav>li>a');
        el.classList.add("collapsed");

        const element = document.querySelector('.nav-clients-index');
        element.classList.remove('collapsed')
    };
</script>

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
