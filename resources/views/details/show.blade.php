@extends('layout')

@section('title', 'Mostrar Detail')
@section('content')

    <h1 class="tituloPrincipal">Mostrar Detail</h1>

    <div class="row justify-content-center">
        <div class="col justify-content-center">
            <h1 class="text-primary">ID detalle: {{ $detail->id }}</h1>
            <p><strong>Transaccion #: {{ $detail->idTransaction }}</strong></p>
            <h2 class="text-primary">Informacion del detalle:</h2>
            <p><strong>Activo #:</strong> {{ $detail->idActive }}</p>
            <p><strong>Cantidad:</strong> {{ $detail->quantity }} Kg</p>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-auto">
            <a class="btn btn-secondary" href="{{ route('details.index') }}">Regresar</a>
        </div>
    </div>

@endsection
