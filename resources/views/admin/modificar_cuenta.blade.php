<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <div class="container min-vh-100">
        <div class="row">
            <div class="col min-vh-100 d-flex flex-column justify-content-center">
                <div class="row">
                    <div class="col-12 col-lg-6 offset-lg-3">
                        <div class="card">
                            <div class="card-header"><h4>Modificar cuenta</h4></div>
                            <div class="card-body">
                                <form action="{{route('admin.modificarConfirmado', $cuenta->user)}}" method="POST">
                                @method('PUT')
                                @csrf
                                    <div class="mb-2">
                                        <label class="form-label" for="">Nombre de usuario</label>
                                        <input class="form-control" type="text" name="nombreUsuarioM" value="{{$cuenta->user}}">
                                    </div>
                                    <div class="mb-2">
                                        <label class="form-label" for="">Nombre</label>
                                        <input class="form-control" type="text" name="nombreM" value="{{$cuenta->nombre}}">
                                    </div>
                                    <div class="mb-2">
                                        <label class="form-label" for="">Apellido</label>
                                        <input class="form-control" type="text" name="apellidoM" value="{{$cuenta->apellido}}">
                                    </div>
                                    <div>
                                        <div class="row">
                                        <div class="col-10"><button class="btn btn-warning" type="submit">Modificar cuenta</button></div>
                                        <div class="col-2"><a href="{{route('admin.listarPerfiles')}}" class="btn btn-danger text-end">Cancelar</a></div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>