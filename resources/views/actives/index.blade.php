@extends('layout')

@section('title', 'Activos')

@section('content')

    <h1>Activos</h1>
    @foreach($actives as $active)
        <h1>Hola esto es una prueba</h1>
        <h2>{{ $active->name }}</h2>
    @endforeach
@endsection
