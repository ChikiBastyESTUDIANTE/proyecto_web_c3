@extends('Publico.template')
@section('Botones-nav')
    
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
                    {{-- @foreach($prefiles as $perfil)
                        <li>asdhjashdjk</li>
                    @endforeach --}}
                </div>
            </div>
        </div>
        <div class="col-9">
            <div class="card">
                <div class="card-header">
                    <h4>Cuentas</h4>
                </div>
                <div class="card-body">
                    {{-- @foreach($prefiles as $perfil)
                        <li>asdhjashdjk</li>
                    @endforeach --}}
                </div>
            </div>
        </div>
@endsection