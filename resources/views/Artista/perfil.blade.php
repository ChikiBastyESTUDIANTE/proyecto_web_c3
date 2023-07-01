@extends('Publico.template')

@section('botones-nav')
    <div class="row">
        <div class="col">
            <a href="{{route('artista.vista_artista')}}" class="navbar-brand">Galeria</a>
            <a href="{{route('logout')}}" class="btn btn-light">Logout</a>
        </div>
    </div>
@endsection

@section('contenido-principal')
        <div class="container min-vh-100">
            <div class="row">
                <div class="col-6 pt-5">
                    <div class="card d-flex">
                        <div class="card-header">
                            <h5>Fotos</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-5">
                                    <div class="card">
                                        <div class="card-body">
                                            aqui se supone una card por cada foto
                                            <button type="button" class="btn btn-primary">Editar</button>
                                            <button type="button" class="btn btn-warning">Elminar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 d-flex justify-content-end pt-5">
                    <div class="card d-flex">
                        <div class="card-header">
                            <h5>Añadir foto</h5>
                        </div>
                        <div class="card-body">
                            <form action="" method="POST">
                                <div class="mb-3">
                                    <label for="foto" name="archivo" class="form-label">Elegir foto</label>
                                    <input type="file" class="form-control" id="foto" aria-describedby="emailHelp"> 
                                </div>
                                <div class="mb-3">
                                    <label for="descripcion" name="descripcion" class="form-label">Descripcion</label>
                                    <input type="text" class="form-control" id="descripcion">
                                </div>
                                <button type="submit" class="btn btn-primary">Publicar</button>
                            </form>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

