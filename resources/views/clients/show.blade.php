@extends('layout')

@section('title', 'Mostrar Clientes')
@section('content')

    <h1 class="tituloPrincipal">Mostrar Clientes</h1>

    <div class="row justify-content-center">
        <div class="col justify-content-center">
            <h1 class="text-primary">Informacion del Cliente:</h1>
            <p><strong>Nombre:</strong>{{$client->firstName}} {{$client->secondName}}</p>
            <p><strong>Apellidos:</strong> {{ $client->firstLastName}} {{$client->secondLastName}}</p>
            <p><strong>Edad:</strong> {{ $client->age }}</p>
            <p><strong>Cedula:</strong> {{ $client->nationalId }}</p>
            <p><strong>Peso:</strong> {{ $client->weight }}</p>
            <p><strong>Altura:</strong> {{ $client->height }}</p>
            <p><strong>Estatus:</strong> {{ $client->status }}</p>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-auto">
            <a class="btn btn-secondary" href="{{ route('clients.index') }}">Regresar</a>
        </div>
    </div>

@endsection
