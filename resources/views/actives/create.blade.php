@extends('layout')

@section('title', 'Activos')
@section('content')

    <h1 class="tituloPrincipal">Agregar Activo</h1>

    <form action="{{ route('actives.store' )}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="name">
        </div>
        <div class="mb-3">
            <label for="brand" class="form-label">Marca</label>
            <input type="text" class="form-control" id="brand">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Precio</label>
            <input type="number" class="form-control" id="price">
        </div>
        <div class="mb-3" >
            <label for="weight" class="form-label">Peso</label>
            <input type="number" class="form-control" id="weight">
        </div>
        <div class="mb-3">
            <label for="quantity" class="form-label">Cantidad</label>
            <input type="number" class="form-control" id="quantity">
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Estado</label>
            <input type="text" class="form-control" id="status">
        </div>
        <div class="row justify-content-center">
            <input type="submit" class="btn btn-primary col-3" value="Agregar">
        </div>
    </form>

    @if(session()->has('success'))
        <div class="alert alert-primary alert-dismissible mt-4 fade show" role="alert">
            {{ session()->get('success') }}
            <a type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></a>
        </div>
    @endif



@endsection
