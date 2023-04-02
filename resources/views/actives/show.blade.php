@extends('layout')

@section('title', 'Mostrar Activo')
@section('content')

    <h1 class="tituloPrincipal">Mostrar Activo</h1>

    <div class="row justify-content-center">
        <div class="col justify-content-center">
            <h1 class="text-primary">{{ $active->name }}</h1>
            <p><strong>{{ $active->brand }}</strong></p>
            <h2 class="text-primary">Informacion del activo:</h2>
            <p><strong>Precio:</strong> {{ $active->price }}</p>
            <p><strong>Peso:</strong> {{ $active->weight }} Kg</p>
            <p><strong>Cantidad:</strong> {{ $active->quantity }}</p>
            <p><strong>Estado:</strong> {{ $active->status }}</p>
        </div>

    </div>

    <div class="row mt-5">
        <div class="col-auto">
            <a class="btn btn-secondary" href="{{ route('actives.index') }}">Regresar</a>
        </div>
    </div>

@endsection
