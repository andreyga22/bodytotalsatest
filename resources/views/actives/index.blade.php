@extends('layout')

@section('title', 'Activos')

@section('content')

    <h1>Activos</h1>
    @foreach($actives as $active)
        <h2>{{ $active->name }}</h2>
    @endforeach
@endsection
