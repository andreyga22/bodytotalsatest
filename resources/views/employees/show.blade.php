@extends('layout')

@section('title', 'Mostrar Empleado')
@section('content')

    <h1 class="tituloPrincipal">Mostrar Empleado</h1>

    <div class="row justify-content-center">
        <div class="col justify-content-center">
            <h1 class="text-primary">Informacion del empleado:</h1>
            <p><strong>Nombre:</strong>{{$employee->firstName}} {{$employee->secondName}}</p>
            <p><strong>Apellidos:</strong> {{ $employee->firstLastName}} {{$employee->secondLastName}}</p>
            <p><strong>Edad:</strong> {{ $employee->age }}</p>
            <p><strong>Cedula:</strong> {{ $employee->nationalId }}</p>
            <p><strong>Estado:</strong> {{ $employee->status }}</p>

        </div>
    </div>

    <div class="row mt-5">
        <div class="col-auto">
            <a class="btn btn-secondary" href="{{ route('employees.index') }}">Regresar</a>
        </div>
    </div>

@endsection
