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
                                            id="name" name="name" value="{{ @old('name') }}">
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
                                        {{-- TODO: traer los datos desde la base de datos --}}
                                        <select class="form-select @error('document_type_id') is-invalid @enderror"
                                            id="document_type_id" name="document_type_id" aria-label="State">
                                            <option></option>
                                            @foreach ($document_types as $document_type)
                                                <option value="{{ $document_type->id }}" @selected($document_type->id == old('document_type_id'))>
                                                    {{ $document_type->acronym }}</option>
                                            @endforeach
                                        </select>
                                        <label for="document_type_id">Tipo de Documento</label>
                                        @error('document_type_id')
                                            <div class="invalid-feedback">
                                                *{{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <input type="text"
                                                class="form-control @error('document') is-invalid @enderror" id="document"
                                                name="document" value="{{ @old('document') }}">
                                            <label for="document">Número de documento</label>
                                            @error('document')
                                                <div class="invalid-feedback">
                                                    *{{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <input type="text"
                                                class="form-control @error('check_digit') is-invalid @enderror"
                                                id="check_digit" name="check_digit" value="{{ @old('check_digit') }}">
                                            <label for="check_digit">Digito Verificador</label>
                                            @error('check_digit')
                                                <div class="invalid-feedback">
                                                    *{{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-floating">
                                        <input type="text" class="form-control @error('phone') is-invalid @enderror"
                                            id="phone" name="phone" value="{{ @old('phone') }}">
                                        <label for="phone">Teléfono</label>
                                        @error('phone')
                                            <div class="invalid-feedback">
                                                *{{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" id="address" name="address" style="height: 100px;"> {{ @old('address') }}</textarea>
                                        <label for="address">Dirección</label>
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
