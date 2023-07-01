@extends('publico.template')

@section('botones-nav')
    <a href="{{route('login')}}" class="btn btn-light">Iniciar sesion</a>
@endsection

@section('contenido-principal')
    <div class="row mt-5">
        <div class="col-3">
            <div class="card">
                <div class="card-header">
                    <h4>Buscar artista</h4>
                </div>
                <div class="card-body">
                    <form action="">
                    <select name="" id="" class="form-control">
                        @foreach($cuentas as $cuenta)
                            @if($cuenta->perfil_id!=1)
                                <option value="{{$cuenta->user}}">{{$cuenta->user}}</option>
                            @endif
                        @endforeach
                    </select>
                    <button type="submit" class="form-control mt-2">Buscar</button>
                    </form>
                </div>
            </div>
        </div>
        <div>
            @foreach($imagenes as $imagen)
                <div class="card">
                    <div class="card-header">
                        {{$imagen->titulo}}
                    </div>
                    <div class="card-body">
                        {{$imagen->archivo}}
                        {{$imagen->cuenta_user}}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection