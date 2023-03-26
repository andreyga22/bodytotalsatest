@extends('layout')

@section('title', 'Activos')
@section('content')

    <h1 class="tituloPrincipal">Activos</h1>

    <div class="row">
        <div class="col-sm-auto">
             <a type="button" class="btn btn-primary btn-create" href="{{ route('actives.create') }}">Agregar</a>
        </div>
    </div>

    <table class="table">
        <thead>
        <tr>
{{--            <th scope="col">ID</th>--}}
            <th scope="col">Nombre</th>
            <th scope="col">Marca</th>
            <th scope="col">Peso</th>
{{--            <th scope="col">Cantidad</th>--}}
            <th scope="col">Precio</th>
            <th scope="col">Estado</th>
            <th scope="col">Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($actives as $active)
            <tr>
                {{--         <td>{{ $active->id }}</td>--}}
                       <td>{{ $active->name }}</td>
                       <td>{{ $active->brand }}</td>
                       <td>{{ $active->weight }}</td>
           {{--              <td>{{ $active->quantity }}</td> --}}
                <td>{{ $active->price }}</td>
                <td>{{ $active->status }}</td>
                <td>
                    <div class="row">
                        <div class="col-sm-auto">
                            <button type="button" class="btn btn-primary btn-accion" href="{{ route('actives.show', $active) }}">Mostrar</button>
                        </div>
                        <div class="col-sm-auto">
                            <button type="button" class="btn btn-primary btn-accion" href="{{ route('actives.edit', $active) }}">Editar</button>
                        </div>
                        <div class="col-sm-auto">
                            <form action=" {{ route("actives.destroy", $active) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="btn btn-primary btn-accion">Eliminar</button>
                            </form>
                        </div>
                    </div>
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>
{{--esto es un test--}}
@endsection
