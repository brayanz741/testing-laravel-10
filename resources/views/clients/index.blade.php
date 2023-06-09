@extends('layouts.template')
@section('title', 'Clientes - Listado')

@section('main-content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Listado de Clientes
                <a href="{{ route('clients.create') }}" class="btn btn-primary">
                    <i class="bx bx-plus-circle"></i> Crear Cliente
                </a>
            </h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Inicio</a></li>
                    <li class="breadcrumb-item">Listado de Clientes</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Filtros de búsqueda</h5>

                            <!-- Floating Labels Form -->
                            <form class="row g-3">
                                <div class="col-md-4">
                                    <label for="name" class="form-label">Nombre</label>
                                    <input type="text" class="form-control" id="name">
                                </div>
                                <div class="col-md-4">
                                    <label for="phone" class="form-label">Teléfono</label>
                                    <input type="text" class="form-control" id="phone">
                                </div>
                                <div class="col-md-4 ">
                                    <div class="d-flex justify-content-around w-100 position-relative top-45-percent">
                                        <button type="submit" class="btn btn-primary">Buscar datos</button>
                                        <button type="reset" class="btn btn-secondary">Limpiar datos</button>
                                    </div>
                                </div>
                            </form><!-- End floating Labels Form -->

                            <h5 class="card-title">Listado de Clientes</h5>

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
                                                <a href="{{ route('clients.edit', $client) }}"class="btn btn-info"
                                                    data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                    data-bs-original-title="Editar"><i
                                                        class="bi  bi-pencil-square "></i></a>

                                                <button type="button" class="btn btn-danger"data-bs-toggle="tooltip"
                                                    data-bs-placement="bottom" data-bs-original-title="Eliminar"><i
                                                        class="bi bi-trash"></i></button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            <div class="d-flex">
                                {!! $clients->links() !!}
                            </div>
                            <!-- End Bordered Table -->

                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main><!-- End #main -->
@endsection
