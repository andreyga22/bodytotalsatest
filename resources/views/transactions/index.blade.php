@extends('layout')

@section('title', 'Transaccion')
@section('content')

    <h1 class="tituloPrincipal">Transacciones</h1>

    <div class="row">
        <div class="col-sm-auto">
            <a type="button" class="btn btn-primary btn-create" href="{{ route('transactions.create') }}">Agregar</a>
        </div>
    </div>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Tipo</th>
            <th scope="col">Precio</th>
            <th scope="col">Fecha</th>
            <th scope="col">Empleado</th>
            <th scope="col">Cliente</th>
        </tr>
        </thead>
        <tbody>
        @foreach($transactions as $transaction)
            <tr>
                <td>{{ $transaction->id }}</td>
                <td>{{ $transaction->type }}</td>
                <td>{{ $transaction->price }}</td>
                <td>{{ $transaction->date }}</td>
                <td>{{ $transaction->employees->firstName }}</td>
                <td>{{ $transaction->employees->lastName }}</td>
                <td>
                    <div class="row">
                        <div class="col-sm-auto">
                            <a type="button" class="btn btn-primary btn-accion" href="{{ route('transactions.show', $transaction) }}">Mostrar</a>
                        </div>
                        <div class="col-sm-auto">
                            <a type="button" class="btn btn-primary btn-accion" href="{{ route('transactions.edit', $transaction) }}">Editar</a>
                        </div>
{{--                        <div class="col-sm-auto">--}}
{{--                            <form action=" {{ route("transactions.destroy", $transaction) }}" method="POST">--}}
{{--                                @csrf--}}
{{--                                @method('DELETE')--}}
{{--                                <input type="submit" class="btn btn-danger btn-accion" value="Eliminar"/>--}}
{{--                            </form>--}}
{{--                        </div>--}}
                    </div>
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>
    {{--esto es un test--}}
@endsection
