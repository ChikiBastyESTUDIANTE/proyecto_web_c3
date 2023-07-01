@extends('Publico.template')

@section('contenido-principal')
    <div class="container">
        <div class="row">
            <div class="col d-flex justify-content-center">
                <div class="card" style="width: 18rem;">
                    <img src="imagenes/fotoperfil.jpg" class="card-img-top" alt="100px">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <div class="card-body">
                        <form action="..." method="POST">
                            <div><input type="file" name="archivo" id="archivo" class="form-control"></div>
                            <div class="mt-3"><button type="submit" class="btn btn-secondary-rojo">Subir propuesta</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
