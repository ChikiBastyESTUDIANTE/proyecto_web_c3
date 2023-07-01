@extends('publico.template')
@section('botones-nav')
    <div class="row">
        <div class="col">
            <a href="{{route('admin.listarPerfiles')}}" class="navbar-brand navbar-dark">Listado</a>
            <a href="{{route('admin.imagenes')}}" class="navbar-brand">Imagenes</a>
        </div>
    </div>
    <a href="{{route('logout')}}" class="btn btn-light">Logout</a>
@endsection
{{-- PROFE SI SE QUE FALTAN COLORES AQUI :C --}}
@section('contenido-principal')
    <div class="row mt-5">
        <div class="col-3">
            <div class="card">
                <div class="card-header">
                    <h4>Tipos de perfiles</h4>
                    {{-- {{auth()->user()->nombre}}  TODO LO QUE ME INGENIE EN EL TRABAJO PASADO FUE EN VANOOOOOOOOOOOO--}}
                </div>
                <div class="card-body">
                    @foreach($perfiles as $perfil)
                        <li>{{$perfil->id}}) {{$perfil->nombre}}</li>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-9">
            <div class="card">
                <div class="card-header">
                    <h4>Cuentas</h4>
                </div>
                <div class="card-body">
                <table class="table table-bordered">
                        <thead class="bg-secondary">
                            <tr>
                                <th><h5 class="mt-2">User</h5></th>
                                <th><h5 class="mt-2">Nombre</h5></th>
                                <th><h5 class="mt-2">Apellido</h5></th>
                                <th><h5 class="mt-2">Perfil_id</h5></th>
                                <th><h5 class="mt-2">Opciones</h5></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($cuentas as $cuenta)
                            <tr>
                                <td>{{$cuenta->user}}</td>
                                <td>{{$cuenta->nombre}}</td>
                                <td>{{$cuenta->apellido}}</td>
                                <td>{{$cuenta->perfil_id}}</td>
                                <td>
                                    <form action="{{route('admin.eliminar',$cuenta->user)}}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                        @if(!($cuenta->perfil_id == 1))
                                            <button type="submit" class="btn btn-danger">Eliminar</button>
                                        @endif
                                        <a href="{{route('admin.modificar',$cuenta->user)}}" class="btn btn-warning">Modificar</a>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
@endsection