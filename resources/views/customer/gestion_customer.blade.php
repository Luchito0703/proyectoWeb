<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/admins.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <header class="sticky-top py-3">
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
                <div class="text-center">
                    <h2>Crear nuevo Usuario</h2>
                    <form action="{{ route('customer.store')}}" method="post">
                        @csrf
                        <label for="dni_customer">Cédula</label><br>
                        <input type="text" id="dni_customer" name="dni_customer"><br>

                        <label for="name_customer">Nombre</label><br>
                        <input type="text" id="name_customer" name="name_customer"><br>

                        <label for="number_customer">Telefono</label><br>
                        <input type="text" id="number_customer" name="number_customer"><br>

                        <label for="address_customer">Direccion</label><br>
                        <input type="text" id="address_customer" name="address_customer"><br>

                        <label for="email_customer">Email</label><br>
                        <input type="email" id="email_customer" name="email_customer"><br>

                        <button type="submit" class="btn btn-success">Enviar</button>
                    </form>
                </div>
                <div class="text-center">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Cédula del Cliente</th>
                                <th scope="col">Nombre del Cliente</th>
                                <th scope="col">Número del Cliente</th>
                                <th scope="col">Dirección del Cliente</th>
                                <th scope="col">Email del Cliente</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($customers as $customer)
                                <tr class="container text-center">
                                    <td class="text-center align-middle">{{$customer->dni_customer}}</td>
                                    <td class="text-center align-middle">{{$customer->name_customer}}</td>
                                    <td class="text-center align-middle">{{$customer->number_customer}}</td>
                                    <td class="text-center align-middle">{{$customer->address_customer}}</td>
                                    <td class="text-center align-middle">{{$customer->email_customer}}</td>
                                    <td class="text-center align-middle">
                                        <a href="{{ route('customer.edit',$customer->id)}}"><button type="button" class="btn btn-warning">Editar</button></a>
                                        <form action="{{route('customer.destroy',$customer->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type = "submit" class="btn btn-danger">Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
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
                </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</html>