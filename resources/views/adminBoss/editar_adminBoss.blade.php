<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/admins.css" rel="stylesheet">
    <script src="/js/tu_archivo.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
    <link rel="stylesheet" href="/css/estilosheader.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <header class="sticky-top py-3">
        <div class="logo">
            <img id="logo"  src="/img/logo.png" alt="" srcset="">
            <h4 class="font-weight-bold">Más Biomas S.A.S</h4>
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
    </header>
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0" id="columenu">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                    <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <span class="fs-5 d-none d-sm-inline mt-3">Home</span>
                    </a>
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                        <li>
                            <a href="#datosP" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                <i class="fs-4"></i> <span class="ms-1 d-none d-sm-inline">Datos personales</span> </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link px-0 align-middle">
                                <i class="fs-4"></i> <span class="ms-1 d-none d-sm-inline">Contratos</span></a>
                        </li>
                        <li>
                            <a href="#submenu" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                                <i class="fs-4"></i> <span class="ms-1 d-none d-sm-inline">Solicitudes</span></a>
                            <ul class="collapse nav flex-column ms-1" id="submenu" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Nuevas</span></a>
                                </li>
                                <li class="w-100">
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Colección</span></a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                                <i class="fs-4"></i> <span class="ms-1 d-none d-sm-inline">Equipo de campo</span></a>
                            <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Registrar</span></a>
                                </li>
                                <li class="w-100">
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">En prestamo</span></a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                                <i class="fs-4"></i> <span class="ms-1 d-none d-sm-inline">Proyectos</span></a>
                            <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Registrar</span></a>
                                </li>
                                <li class="w-100">
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Ver</span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="container pt-5 container text-center">
                <div>
                    <h1>Actualizar administrador jefe</h1>
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
        </div>
    </div>
    <footer>
        <div id="divFo" class="container">
            <div class="row justify-content-start">
                <div class="col-5 mt-4">
                    <p>&COPY; copyright 2023 MAS BIOMAS S.A.S | Todos los derechos reservados</p>
                </div>
                <div class="col-4 mt-4">
                    <p>
                        <a class="underline" href="">Terminos y condiciones</a>
                        |
                        <a class="underline" target="_blank" rel="noopener noreferrer" href="">Politicas de privacidad de la información</a>
                    </p>
                </div>
                <div id="iconosFo" class="col-3 mt-4">
                    <i class="fa-brands fa-instagram" style="color: #000000;"></i>
                    <i class="fa-brands fa-linkedin" style="color: #000000;"></i>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>