@extends('publico.template')
@section('botones-nav')
    
@endsection
{{-- PROFE SI SE QUE FALTAN COLORES AQUI :C --}}
@section('contenido-principal')
    <div class="row mt-5">
        <div class="col-3">
            <div class="card">
                <div class="card-header">
                    <h4>Tipos de perfiles</h4>
                </div>
                <div class="card-body">
                    @foreach($perfiles as $perfil)
                        <li>{{$perfil->nombre}}</li>
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
                                        <th><h5 class="mt-2">Modificar</h5></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($cuentas as $cuenta)
                                    <tr>
                                        <td>{{$cuenta->user}}</td>
                                        <td>{{$cuenta->nombre}}</td>
                                        <td>{{$cuenta->apellido}}</td>
                                        <td>{{$cuenta->perfil_id}}</td>
                                        <td> (botones)
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                </div>
            </div>
        </div>
@endsection