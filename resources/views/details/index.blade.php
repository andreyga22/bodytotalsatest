@extends('layout')

@section('title', 'Detalles')
@section('content')

    <h1 class="tituloPrincipal">Detalles</h1>

    <div class="row">
        <div class="col-sm-auto">
             <a type="button" class="btn btn-primary btn-create" href="{{ route('details.create') }}">Agregar</a>
        </div>
    </div>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">Transaccion</th>
            <th scope="col">Activo</th>
            <th scope="col">Cantidad</th>
        </tr>
        </thead>
        <tbody>
        @foreach($details as $detail)
            <tr>
                       <td>{{ $detail->idTransaction }} </td>
                       <td>{{ $detail->idActive }}</td>
                       <td>{{ $detail->quantity }}</td>
                <td>
                    <div class="row">
                        <div class="col-sm-auto">
                            <a type="button" class="btn btn-primary btn-accion" href="{{ route('details.show', $detail) }}">Mostrar</a>
                        </div>
                        <div class="col-sm-auto">
                            <a type="button" class="btn btn-primary btn-accion" href="{{ route('details.edit', $detail) }}">Editar</a>
                        </div>
                        <div class="col-sm-auto">
                            <form action=" {{ route("details.destroy", $detail) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="submit" class="btn btn-danger btn-accion" value="Eliminar"/>
                            </form>
                        </div>
                    </div>
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>
@endsection
