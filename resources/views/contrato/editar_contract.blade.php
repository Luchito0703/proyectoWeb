<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/empleados.css">
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
                </div>
            </div>
        </header>
    <div>
        <div class="text-center">
        <h2>Actualizar Contrato</h2>
            <form action="{{route('contracts.update',$contract->id) }}" method="post">
                @csrf
                @method('PUT')
                <label for="contrato">Identificador del contrato</label>
                <input type="number" name="id_contract" id="contrato">

                <label for="contratista">Identificador del contratista</label>
                <select name="id_contra" id="contratista">
                    <option>Seleccione un contratista</option>
                    @foreach ($contractors as $contractor)
                        <option value="{{ $contractor->id }}">{{ $contractor->name_contractor }}</option>
                    @endforeach                        
                </select>

                <label for="cedula">Cédula del administrador del proyecto</label>
                <select name="dni_admin_proj" id="cedula">
                    <option>Seleccione un administrador de proyecto</option>
                    @foreach ($adminProjects as $adminProject)
                        <option value="{{ $adminProject->id }}">{{ $adminProject->dni }}</option>
                    @endforeach
                </select>

                <label for="cliente">Número de nit de la empresa cliente</label>
                <select name="nit_customer" id="cliente">
                    <option>Seleccione el nit de la empresa</option>
                    @foreach($customers as $customer)
                        <option value="{{ $customer->id }}">{{ $customer->name_customer }}</option>
                    @endforeach
                </select>

                <button type="submit">Enviar</button>
            </form>
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
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>           
</body>
</html>