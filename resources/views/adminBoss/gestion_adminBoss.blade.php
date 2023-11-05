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
        <div class="text-center">
            <h2>Crear nuevo Boss</h2>
            <form action="{{ route('adminBoss.store') }}" method="post">
                @csrf
                <label for="dni">Cedula:</label><br>
                <input type="text" id="dni" name="dni"><br><br>

                <label for="nombre">Nombre:</label><br>
                <input type="text" id="nombre" name="name"><br><br>

                <label for="telefono">Teléfono:</label><br>
                <input type="text" id="telefono" name="number_phone"><br><br>

                <label for="direccion">Dirección:</label><br>
                <input type="text" id="direccion" name="address"><br><br>

                <label for="email">Email:</label><br>
                <input type="email" id="email" name="email"><br><br>

                <button type="button" class="btn btn-success">Guardar</button>

            </form>
        </div>
        <div>
            <table class="table">
                <thead>
                    <tr>
                        <th>Cedula del administrador jefe</th>
                        <th>Nombre del administrador jefe</th>
                        <th>Numero de telefono del administrador jefe</th>
                        <th>Direccion del administrador jefe</th>
                        <th>Email del administrador jefe</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($adminBosses as $adminBoss)
                        <tr>
                            <td>{{$adminBoss->dni}}</td>
                            <td>{{$adminBoss->name}}</td>
                            <td>{{$adminBoss->number_phone}}</td>
                            <td>{{$adminBoss->address}}</td>
                            <td>{{$adminBoss->email}}</td>
                            <td>
                                <a href="{{ route('adminBoss.edit', $adminBoss->id)}}"><button type="button" class="btn btn-info">Editar</button></a>
                                <form action="{{ route('adminBoss.destroy', $adminBoss->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-danger">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>
</html>