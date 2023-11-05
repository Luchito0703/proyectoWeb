<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>MasBiomas S.A.S</title>
</head>
<body>
    <div>
        <div>
            <h2>Crear nuevo Boss</h2>

            
            <form action="{{ route('adminBoss.store') }}" method="post">
                @csrf
                <label for="dni">Cedula:</label><br>
                <input type="text" id="dni" name="dni" required><br><br>

                <label for="nombre">Nombre:</label><br>
                <input type="text" id="nombre" name="name" required><br><br>

                <label for="telefono">Teléfono:</label><br>
                <input type="text" id="telefono" name="number_phone" required><br><br>

                <label for="direccion">Dirección:</label><br>
                <input type="text" id="direccion" name="address" required><br><br>

                <label for="email">Email:</label><br>
                <input type="email" id="email" name="email" required><br><br>

                <button type="submit">Guardar</button>
            </form>
        </div>
        <div>
            <table>
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
                                <a href="{{ route('adminBoss.edit', $adminBoss->id)}}">Editar</a>
                                <form action="{{ route('adminBoss.destroy', $adminBoss->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>