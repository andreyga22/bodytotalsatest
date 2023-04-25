@extends('layout')

@section('title', 'Mostrar Transaccion')
@section('content')

    <h1 class="tituloPrincipal">Mostrar Transaccion</h1>

    <div class="row justify-content-center">
        <div class="col justify-content-center">
            <h1 class="text-primary">Transaccion #{{ $transaction->id }}</h1>
            <p><strong>Tipo: {{ $transaction->type }}</strong></p>
            <h2 class="text-primary">Informacion de la transaccion:</h2>
            <p><strong>Precio:</strong> {{ $transaction->price }}</p>
            <p><strong>Fecha:</strong> {{ $transaction->date }}</p>
        </div>
    </div>

    <div>
        @foreach($employees as $employee)
            @if($employee->id === $transaction->idEmployee)
                <h2 class="text-primary">Empleado:</h2>
                <p>{{ $employee->firstName }} {{$employee->secondName }}</p>
            @endif
        @endforeach
    </div>

    <div>
        @foreach($clients as $client)
            @if($client->id === $transaction->idClient)
                <h2 class="text-primary">Cliente:</h2>
                <p>{{ $client->firstName }} {{$client->secondName }}</p>
            @endif
        @endforeach
    </div>

    <div>
        <h2 class="text-primary">Detalles:</h2>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID Activo</th>
                <th scope="col">Nombre Activo</th>
                <th scope="col">Cantidad</th>
            </tr>
            </thead>
            @foreach($details as $detail)

                @if($detail->idTransaction === $transaction->id)
                    @foreach($actives as $active)
                        @if($active->id === $detail->idActive)

                            <tbody>
                            <tr>
                                <td>{{ $active->id }}</td>
                                <td>{{ $active->name }}</td>
                                <td>{{ $detail->quantity }}</td>
                            </tr>
                            </tbody>
                        @endif
                    @endforeach
                @endif
            @endforeach
        </table>
    </div>



    <div class="row mt-5 mb-5">
        <div class="col-auto">
            <a class="btn btn-secondary" href="{{ route('transactions.index') }}">Regresar</a>
        </div>
    </div>

@endsection
