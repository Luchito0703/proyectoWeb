<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contratista</title>
</head>
<body>
    <div>
        <div>
            <form action="{{ route('contractors.store') }}" method="post">
                @csrf
                <label for="identificador">Identificador unico</label>
                <input type="text" name="id_contractor" id="identificador">
                <label for="nombre">Ingrese su nombre</label>
                <input type="text" name="name_contractor">
                <label for="telefono">Ingrese su numero de telefono</label>
                <input type="text" name="number_phone" id="telefono">
                <label for="direccion">Ingrese su direccion</label>
                <input type="text" name="address_contractor" id="direccion">
                <label for="cedula">Ingrese su cedula de ciudadania:</label>
                <input type="text" name="dni_contractor" id="cedula">
                <label for="email">Ingrese su email</label>
                <input type="text" name="email_contractor" id="email">
                <button type="submit">Enviar</button>
            </form>
        </div>
        <div>
            <table>
                <thead>
                    <tr>
                        <th>Identificador del contratista</th>
                        <th>Nombre del contratista</th>
                        <th>Numero de telefono del contratista</th>
                        <th>Direccion del contratista</th>
                        <th>Cedula de ciudadania del contratista</th>
                        <th>Correo electronico del contratista</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($contractors as $contractor)
                        <tr>
                            <td>{{$contractor->id_contractor}}</td>
                            <td>{{$contractor->name_contractor}}</td>
                            <td>{{$contractor->number_phone}}</td>
                            <td>{{$contractor->address_contractor}}</td>
                            <td>{{$contractor->dni_contractor}}</td>
                            <td>{{$contractor->email_contractor}}</td>
                            <td>
                                <a href="{{ route('contractors.edit',$contractor->id) }}">Editar</a>
                                <form action="{{ route('contractors.destroy',$contractor->id) }}" method="post">
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