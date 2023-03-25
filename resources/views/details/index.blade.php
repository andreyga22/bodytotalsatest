@extends('layout')

@section('title', 'Detalles')

@section('content')

    <h1>Detalles</h1>
    @foreach($details as $detail)
        <h2>{{ $detail->id }}</h2>
    @endforeach
@endsection
