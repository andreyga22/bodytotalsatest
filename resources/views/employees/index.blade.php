@extends('layout')

@section('title', 'Empleados')

@section('content')
    <h1 class="tituloPrincipal">Empleados</h1>

    <div class="row">
        <div class="col-sm-auto">
            <a type="button" class="btn btn-primary btn-create" href="{{route('employees.create')}}">Agregar</a>
        </div>
    </div>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Apellidos</th>
            <th scope="col">Age</th>
            <th scope="col">NationalId</th>
            <th scope="col">Status</th>
            <th scope="col">Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($employees as $employee)
            <tr>
                <td>{{$employee->firstName}} {{$employee->secondName}}</td>
                <td>{{$employee->firstLastName}} {{$employee->secondLastName}}</td>
                <td>{{$employee->age}}</td>
                <td>{{$employee->nationalId}}</td>
                <td>{{$employee->status}}</td>

                <td>
                    <div class="row">
                        <div class="col-sm-auto">
                            <a type="button" class="btn btn-primary btn-accion" href="{{route('employees.show', $employee)}}">Mostrar</a>
                        </div>
                        <div class="col-sm-auto">
                            <a type="button" class="btn btn-primary btn-accion" href="{{ route('employees.edit', $employee) }}">Editar</a>
                        </div>
                        <div class="col-sm-auto">
                            <form action=" {{ route("employees.destroy", $employee) }}" method="POST">
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
