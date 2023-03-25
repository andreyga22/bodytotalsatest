@extends('layout')

@section('title', 'Empleados')

@section('content')

    <h1>Empleados</h1>
    @foreach($employees as $employee)
        <h2>{{ $employee->firstName }}</h2>
    @endforeach
@endsection
