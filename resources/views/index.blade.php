@extends('layout')

@section('title', 'Inicio')
@section('content')

    <h1 class="tituloPrincipal mb-5">Body Total S.A</h1>
    <div class="row justify-content-center">
        <div class="col mt-lg-5 ms-5 mb-4 tarjeta">
            <div class="card" style="width: 18rem;">
                <a href="{{ route('actives.index') }}">
                    <img src="https://img.freepik.com/foto-gratis/grandes-pesas-sobre-blanco_144627-24203.jpg?w=1380&t=st=1679867898~exp=1679868498~hmac=0d7879f447dc55f7ca4fc66d1ef4bdcdefc8891680b38f7245c1340e5dad1569" class="card-img-top imagen-tarjeta" alt="...">
                    <div class="card-body">
                        <p class="card-text">Manejo de activos</p>
                    </div>
                </a>
            </div>
        </div>




@endsection
