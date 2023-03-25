@extends('layout')

@section('title', 'Transacciones')

@section('content')

    <h1>Transacciones</h1>
    @foreach($transactions as $transaction)
        <h2>{{ $transaction->id }}</h2>
    @endforeach
@endsection
