@extends('Publico.template')

@section('contenido-principal')
    <div class="container">
        <div class="row">
            <div class="col d-flex justify-content-center">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <body>
                            <div class="profile">
                                <div class="profile-header">
                                    <img src="imagenes/fotoperfil.jpg" alt="Profile Picture" class="profile-picture">
                                <div class="profile-info">
                                    <div class="profile-username">Nombre de Usuario</div>
                                    <div class="profile-bio">Biografía del usuario</div>
                                </div>
                                </div>
                                
                                <div class="profile-posts">
                                <div class="post">
                                    <img src="imagenes/fotoperfil.jpg" alt="Post 1" class="post-image">
                                </div>
                                <div class="post">
                                    <img src="post2.jpg" alt="Post 2" class="post-image">
                                </div>
                                </div>
                            </div>
                        </body>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
