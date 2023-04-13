@extends('layouts.head')
@extends('layouts.footer')
@extends('layouts.aside')
@extends('layouts.components.floating_form')
@extends('layouts.header')
@section('title', 'Editar Cliente')

@section('floating-form-title')
    <h1>Editar Cliente </h1>
@endsection


@section('breadcrumbs')
    <li class="breadcrumb-item"><a href="{{ route('home') }}">Inicio</a></li>
    <li class="breadcrumb-item"><a href="{{ route('clients.index') }}">Listado de Clientes</a></li>
    <li class="breadcrumb-item">Editar Cliente</li>
@endsection

@section('floating-form-content')
    <h5 class="card-title">Formulario de edición</h5>

    <!-- Floating Labels Form -->
    <form class="row g-3">
        <div class="col-md-12">
            <div class="form-floating">
                <input type="text" class="form-control" id="floatingName" placeholder="Your Name"
                    value="{{ $client->name }}">
                <label for="floatingName">Nombre</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-floating mb-3">
                <select class="form-select" id="floatingSelect" aria-label="State">
                    <option {{ $client->document_type == 1 ? 'selected' : '' }} value="1">Documento Nacional de
                        Identidad
                    </option>
                    <option {{ $client->document_type == 2 ? 'selected' : '' }} value="2">Carné de Extranjería</option>
                    <option {{ $client->document_type == 3 ? 'selected' : '' }} value="3">Pasaporte</option>
                </select>
                <label for="floatingSelect">Tipo de Documento</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="col-md-12">
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingCity" placeholder="City"
                        value="{{ $client->rut }}">
                    <label for="floatingCity">Numero de documento</label>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="col-md-12">
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingCity" placeholder="City"
                        value="{{ $client->check_digit }}">
                    <label for="floatingCity">Digito Verificador</label>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-floating">
                <input type="text" class="form-control" id="floatingZip" placeholder="Zip" value="{{ $client->phone }}">
                <label for="floatingZip">Teléfono</label>
            </div>
        </div>
        <div class="col-12">
            <div class="form-floating">
                <textarea class="form-control" placeholder="Address" id="floatingTextarea" style="height: 100px;"> {{ $client->address }}</textarea>
                <label for="floatingTextarea">Address</label>
            </div>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Crear Cliente</button>
            <button type="reset" class="btn btn-secondary">Limpiar Datos</button>
        </div>
    </form><!-- End floating Labels Form -->
@endsection


<script>
    window.onload = function() {
        const el = document.querySelector('#sidebar-nav>li>a');
        el.classList.add("collapsed");

        const element = document.querySelector('.nav-clients-index');
        element.classList.remove('collapsed')
    };
</script>