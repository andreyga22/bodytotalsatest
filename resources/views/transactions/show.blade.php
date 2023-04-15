@extends('layout')

@section('title', 'Mostrar Transaccion')
@section('content')

    <h1 class="tituloPrincipal">Mostrar Transaccion</h1>

    <div class="row justify-content-center">
        <div class="col justify-content-center">
            <h1 class="text-primary">{{ $transaction->id }}</h1>
            <p><strong>{{ $transaction->type }}</strong></p>
            <h2 class="text-primary">Informacion del activo:</h2>
            <p><strong>Precio:</strong> {{ $transaction->price }}</p>
            <p><strong>Fecha:</strong> {{ $transaction->date }}</p>
        </div>

    </div>

    <div class="row mt-5">
        <div class="col-auto">
            <a class="btn btn-secondary" href="{{ route('transactions.index') }}">Regresar</a>
        </div>
    </div>

@endsection
