@extends('publico.template')

@section('botones-nav')
    <div class="row">
        <div class="col">
            <a href="{{route('artista.perfil')}}" class="navbar-brand">Perfil</a>
            <a href="{{route('logout')}}" class="btn btn-light">Logout</a>
        </div>
    </div>
@endsection

@section('contenido-principal')
        <div class="row">
            @foreach($imagenes as $imagen)   
                <div class="card">
                    <div class="card-header">
                        <h5>{{$imagen->titulo}}</h5>
                        {{$imagen->cuenta_user}}
                    </div>
                    <div class="card-body">
                        {{$imagen->archivo}}
                    </div>
                </div>
            @endforeach
        </div>
@endsection