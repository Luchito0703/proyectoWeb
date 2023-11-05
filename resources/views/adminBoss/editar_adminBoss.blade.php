<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/estilosheader.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <header>
            <div class="logo">
                <img id="logo"  src="/imgs/logo.png" alt="" srcset="">
                <h4>Más Biomas S.A.S</h4>
            </div>
                    <div class="dropdown">
                        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="usuarioMenu" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="https://www.softzone.es/app/uploads/2018/04/guest.png?x=480&quality=40" alt="perfil de usuario" width="30" height="30" class="rounded-circle">
                            <span class="d-none d-sm-inline mx-1">Nombre usuario</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                            <li><a class="dropdown-item" href="#">Mensajes</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Sign out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
    <div>
        <div>
            <h2>Actualizar administrador jefe</h2>
            <form action="{{route('adminBoss.update',$adminBoss->id)}}" method="post">
                @csrf
                @method('PUT')
                <label for="dni">Cedula:</label><br>
                <input type="text" id="dni" name="dni" value="{{$adminBoss->dni}}"><br><br>

                <label for="nombre">Nombre:</label><br>
                <input type="text" id="nombre" name="name" value="{{$adminBoss->name}}"><br><br>

                <label for="telefono">Teléfono:</label><br>
                <input type="text" id="telefono" name="number_phone" value="{{$adminBoss->number_phone}}"><br><br>

                <label for="direccion">Dirección:</label><br>
                <input type="text" id="direccion" name="address" value="{{$adminBoss->address}}"><br><br>

                <label for="email">Email:</label><br>
                <input type="email" id="email" name="email" value="{{$adminBoss->email}}"><br><br>

                <button type="submit">Actualizar</button>

            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>
</html>