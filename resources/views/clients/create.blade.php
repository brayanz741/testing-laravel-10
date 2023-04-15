@extends('layouts.template')
@section('title', 'Crear Cliente')

@section('main-content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Crear Cliente</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Inicio</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('clients.index') }}">Listado de Clientes</a></li>
                    <li class="breadcrumb-item">Crear Cliente</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Formulario de creación</h5>

                            <!-- Floating Labels Form -->
                            <form class="row g-3" action="{{ route('clients.store') }}" method="POST">
                                @csrf
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                            id="name" name="name">
                                        <label for="name">Nombre</label>
                                        @error('name')
                                            <div class="invalid-feedback">
                                                *{{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating mb-3">
                                        <select class="form-select" id="document_type_id" name="document_type_id"
                                            aria-label="State">
                                            <option value="1"> Documento Nacional de Identidad </option>
                                            <option value="2"> Carné de Extranjería</option>
                                            <option value="3"> Pasaporte</option>
                                        </select>
                                        <label for="document_type_id">Tipo de Documento</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="document" name="document">
                                            <label for="document">Numero de documento</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="check_digit" name="check_digit">
                                            <label for="check_digit">Digito Verificador</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="phone" name="phone">
                                        <label for="phone">Teléfono</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" id="address" name="address" style="height: 100px;"></textarea>
                                        <label for="address">Address</label>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Crear Cliente</button>
                                    <button type="reset" class="btn btn-secondary">Limpiar Datos</button>
                                </div>
                            </form><!-- End floating Labels Form -->

                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main><!-- End #main -->
@endsection
