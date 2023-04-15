@extends('layout')

@section('title', 'Clientes')

@section('content')
    <h1 class="tituloPrincipal">Clientes</h1>

    <div class="row">
        <div class="col-sm-auto">
            <a type="button" class="btn btn-primary btn-create" href="{{route('clients.create')}}">Agregar</a>
        </div>
    </div>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Apellidos</th>
            <th scope="col">Años</th>
            <th scope="col">Nationalidad</th>
            <th scope="col">Peso</th>
            <th scope="col">Altura</th>
            <th scope="col">Status</th>
        </tr>
        </thead>
        <tbody>
        @foreach($clients as $client)
            <tr>`
                <td>{{$client->firstName}} {{$client->secondName}}</td>
                <td>{{$client->firstLastName}} {{$client->secondLastName}}</td>
                <td>{{$client->age}}</td>
                <td>{{$client->nationalId}}</td>
                <td>{{$client->weght}}</td>
                <td>{{$client->height}}</td>
                <td>{{$client->status}}</td>

                <td>
                    <div class="row">
                        <div class="col-sm-auto">
                            <a type="button" class="btn btn-primary btn-accion" href="{{route('clients.show', $client)}}">Mostrar</a>
                        </div>
                        <div class="col-sm-auto">
                            <a type="button" class="btn btn-primary btn-accion" href="{{ route('clients.edit', $client) }}">Editar</a>
                        </div>
                        <div class="col-sm-auto">
                            <form action=" {{ route("clients.destroy", $client) }}" method="POST">
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
