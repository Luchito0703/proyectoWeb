<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equipo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/css/admins.css">
    <script src="/js/validates/equipmentValidate"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <header class="sticky-top py-3">
            <div class="logo">
                <img id="logo"  src="/img/logo.png" alt="" srcset="">
                <h4>Más Biomas S.A.S</h4>
            </div>
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="usuarioMenu" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://www.softzone.es/app/uploads/2018/04/guest.png?x=480&quality=40" alt="perfil de usuario" width="30" height="30" class="rounded-circle">
                    <span class="d-none d-sm-inline mx-1">{{ $user->name}}</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                    <li><a class="dropdown-item" href="#">Mensajes</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li>
                        <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Cerrar sesión
                        </a>
                    </li>
                </ul>
            </div>
    </header>

    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 " id="columenu">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                    <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <span class="fs-5 d-none d-sm-inline m-3">Home</span>
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
                            <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                                <i class="fs-4"></i> <span class="ms-1 d-none d-sm-inline">Equipo de campo</span></a>
                            <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Solicitudes</span></a>
                                </li>
                                <li class="w-100">
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">En posesion</span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col">
                <div class="container pt-3 container text-center">
                    <h1>Crear nuevo equipo</h1>
                    <form action="{{route('equipments.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="id">Ingrese referencia del equipo</label>
                            <input type="text" class="form-control text-center" name="id_equipment" id="id" placeholder="Referencia del equipo">
                        </div>

                        <div class="form-group">
                            <label for="name" class="mt-2">Ingrese nombre del equipo</label>
                            <input type="text" class="form-control text-center" name="name_equipment" id="name" placeholder="Nombre del equipo">
                        </div>

                        <button type="submit" class="btn btn-success mt-3" onclick="validateEquipmentForm()">Guardar</button>
                    </form>
                </div>
            <div class="text-center">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Referencia del equipo</th>
                            <th scope="col">Nombre del equipo</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($equipments as $equipment)
                            <tr class="container text-center">
                                <td class="text-center align-middle">{{$equipment->id_equipment}}</td>
                                <td class="text-center align-middle">{{$equipment->name_equipment}}</td>
                                <td class="text-center align-middle">
                                    <a href="{{route('equipments.edit',$equipment->id)}}"class="btn btn-primary">Editar</a>
                                    <form action="{{route('equipments.destroy',$equipment->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger mt-2">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <button onclick="generarReporte()" class="btn btn-primary">Exportar a Excel</button>
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
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.5/xlsx.full.min.js"></script>
    <script src="{{ asset('/js/excel.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>
</html>
            