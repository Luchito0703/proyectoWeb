<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <div>
            <form action="{{ route('adminProjects.store') }}" method="post">
                @csrf
                <label for="identificador">Ingrese su numero de cedula</label>
                <input type="text" name="dni" id="identificador">
                <label for="nombre">Ingrese su nombre</label>
                <input type="text" name="name">
                <label for="telefono">Ingrese su numero de telefono</label>
                <input type="text" name="number_phone" id="telefono">
                <label for="direccion">Ingrese su direccion</label>
                <input type="text" name="address" id="direccion">
                <label for="email">Ingrese su email</label>
                <input type="text" name="email" id="email">
                <button type="submit">Enviar</button>
            </form>
        </div>
        <div>
            <table>
                <thead>
                    <tr>
                        <th>Numero de cedula</th>
                        <th>Nombre del administrador del proyecto</th>
                        <th>Numero de telefono del administrador del proyecto</th>
                        <th>Direccion del administrador del proyecto</th>
                        <th>Correo electronico del administrador del proyecto</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($adminProjects as $adminProject)
                        <tr>
                            <td>{{$adminProject->dni}}</td>
                            <td>{{$adminProject->name}}</td>
                            <td>{{$adminProject->number_phone}}</td>
                            <td>{{$adminProject->address}}</td>
                            <td>{{$adminProject->email}}</td>
                            <td>
                                <a href="{{ route('adminProjects.edit', $adminProject->id) }}">Editar</a>
                                <form action="{{ route('adminProjects.destroy', $adminProject->id) }}" method="post">
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
</body>
</html>