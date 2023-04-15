@extends('layouts.template')
@section('title')
    Editar Cliente - {{ $client->name }}
@endsection

@section('main-content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Editar Cliente</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Inicio</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('clients.index') }}">Listado de Clientes</a></li>
                    <li class="breadcrumb-item">Editar Cliente</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        {{-- {{--  --}}
        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Formulario de edición</h5>

                            <!-- Floating Labels Form -->
                            <form class="row g-3" action="{{ route('clients.update', $client) }}" method="POST">
                                @csrf
                                @method('put')
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" name="name"
                                            value="{{ $client->name }}">
                                        <label for="name">Nombre</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating mb-3">
                                        <select class="form-select" id="document_type_id" name="document_type_id"
                                            aria-label="State">
                                            <option {{ $client->document_type_id == 1 ? 'selected' : '' }} value="1">
                                                Documento Nacional de
                                                Identidad
                                            </option>
                                            <option {{ $client->document_type_id == 2 ? 'selected' : '' }} value="2">
                                                Carné
                                                de Extranjería</option>
                                            <option {{ $client->document_type_id == 3 ? 'selected' : '' }} value="3">
                                                Pasaporte</option>
                                        </select>
                                        <label for="document_type_id">Tipo de Documento</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="document" name="document"
                                                value="{{ $client->document }}">
                                            <label for="document">Numero de documento</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="check_digit"
                                                value="{{ $client->check_digit }}">
                                            <label for="check_digit">Digito Verificador</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="phone" name="phone"
                                            value="{{ $client->phone }}">
                                        <label for="phone">Teléfono</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Address" id="address" name="address" style="height: 100px;"> {{ $client->address }}</textarea>
                                        <label for="address">Address</label>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Editar Cliente</button>
                                    <button type="reset" class="btn btn-secondary">Limpiar Datos</button>
                                </div>
                            </form><!-- End floating Labels Form -->

                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main><!-- End #main -->
@endsection}
