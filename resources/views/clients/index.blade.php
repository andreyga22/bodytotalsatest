@extends('layout')

@section('title', 'Clientes')

@section('content')

    <h1>Clientes</h1>
    @foreach($clients as $client)
        <h2>{{ $client->firstName }}</h2>
    @endforeach
@endsection
