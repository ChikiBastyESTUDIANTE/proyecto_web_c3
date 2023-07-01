@extends('publico.template')
@section('botones-nav')
    <div class="row">
        <div class="col">
            <a href="{{route('admin.listarPerfiles')}}" class="navbar-brand">Listado</a>
            <a href="{{route('admin.imagenes')}}" class="navbar-brand navbar-dark">Imagenes</a>
        </div>
    </div>
    <a href="{{route('logout')}}" class="btn btn-light">Logout</a>
@endsection
@section('contenido-principal')
    <div class="row pt-5">
        <div class="col">
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
    </div>
@endsection