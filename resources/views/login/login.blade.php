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
            <div class="col-12 col-lg-6 offset-lg-3">
                <div class="card">
                    <div class="card-header"><h4>Inicio de sesión</h4></div>
                    <div class="card-body">
                        <form action="{{route('login.inicio')}}" method="POST">
                        @csrf
                            <div class="mb-2">
                                <label class="form-label" for="">Nombre de usuario</label>
                                <input class="form-control" type="text" name="user">
                            </div>
                            <div class="mb-2">
                                <label class="form-label" for="">Contraseña</label>
                                <input class="form-control" type="password" name="contrasena">
                            </div>
                            <div>
                                <div class="row">
                                <div class="col-9"><button class="btn btn-outline-dark" type="submit">Iniciar</button></div>
                                <div class="col-3 pt-2 ps-5"><a href="{{route('login.datosCuenta')}}" class="mt-2 text-end">Crear cuenta</a></div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>