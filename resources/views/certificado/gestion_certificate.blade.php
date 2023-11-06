<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/css/admins.css">
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
                <div class="container pt-3 container text-center">
                <div>
            @if ($errors->any())
	            @foreach ($errors->all() as $error)
		            <div class="alert alert-danger" role="alert">{{$error}}</div>
	            @endforeach
            @endif
            <form action="{{ route('certificates.store') }}" method="POST">
                @csrf
                <label for="idCertificado">Ingresar Id del certificado</label>
                <input type="text" name="id_certificate" id="idCertificado" placeholder="Ingrese el identificador" required>

                <label for="idContratista">Seleccione el contratista asociado al contrato: </label>
                <select name="id_contra" id="idContratista" required>
                    <option>Seleccione un contratista</option>
                    @foreach ($contractors as $contractor)
                        <option value="{{$contractor->id}}">{{$contractor->name_contractor}}</option>
                    @endforeach
                </select>

                <label for="nitCustomer">Seleccion el nit del cliente asociado al certificado</label>
                <select name="nit_customer" id="nitCustomer" required>
                    <option>Seleccione el cliente</option>
                    @foreach ($customers as $customer)
                        <option value="{{$customer->id}}">{{$customer->id}}</option>
                    @endforeach
                </select>

                <label for="idContract">Seleccione el contrato asociado al certificado</label>
                <select name="id_contract" id="idContract" required>
                    <option>Seleccione el contratista</option>
                    @foreach ($contracts as $contract)
                        <option value="{{$contract->id}}">{{$contract->id_contract}}</option>
                    @endforeach
                </select>

                <label for="dateExp">Ingrese fecha de expedicion</label>
                <input type="date" name="date_expedition" id="dateExp" required>

                <label for="tema" >Ingrese tema del certificado a generar</label>
                <input type="text" name="issue" id="tema" placeholder="Ingrese el tema" required>
                <button type="submit" class="btn btn-info">Generar certificado</button>
            </form>
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
</body>
</html>