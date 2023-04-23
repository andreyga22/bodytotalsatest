@extends('layout')

@section('title', 'Editar Detalle')
@section('content')

    <h1 class="tituloPrincipal">Editar Detalle</h1>

    <div class="row mb-5">
        <div class="col-auto">
            <a class="btn btn-secondary" href="{{ route('details.index') }}">Regresar</a>
        </div>
    </div>

    <form action="{{ route('details.update', $detail) }}" method="POST">
        @csrf
        @method('PATCH')
        @include('details.form')

    </form>

    @if($errors->any())
        @foreach($errors->all() as $error)
            <div class="alert alert-danger alert-dismissible mt-4 fade show" role="alert">
                {{ $error }}
                <a type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></a>
            </div>
        @endforeach
    @endif

    @if(session()->has('success'))
        <div class="alert alert-primary alert-dismissible mt-4 fade show" role="alert">
            {{ session()->get('success') }}
            <a type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></a>
        </div>
    @endif



@endsection
