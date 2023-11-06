<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contratista</title>
</head>
<body>
    <div>
        <div>
            @if ($errors->any())
	            @foreach ($errors->all() as $error)
		            <div class="alert alert-danger" role="alert">{{$error}}</div>
	            @endforeach
            @endif
            <form action="{{route('contractors.store')}}" method="post">
                @csrf
                <label for="indetificador">indetificador del contratista</label>
                <input type="text" name="id_contractor" id="identificador">

                <label for="nombre">Nombre del contratista</label>
                <input type="text" name="name_contractor" id="nombre">

                <label for="telefono">Numero de telefono del contratista</label>
                <input type="text" name="number_phone" id="telefono">

                <label for="direccion">Direccion del contratista</label>
                <input type="text" name="address_contractor">

                <label for="cedula">Cedula del contratista</label>
                <input type="text" name="dni_contractor" id="cedula">
            
                <label for="emaul">Correo electronico del contratista</label>
                <input type="text" name="email_contractor">

                <button type="submit">Guardar</button>
            </form>
        </div>
        <div>
            <table>
                <thead>
                    <tr>
                        <th>identificador del contratista</th>
                        <th>Nombre del contratista</th>
                        <th>Numero de telefono del contratista</th>
                        <th>Direccion del contratista</th>
                        <th>Cedula del contratista</th>
                        <th>Correo electronico del contratista</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contractors as $contractor)
                        <tr>
                            <td>{{$contractor->id_contractor}}</td>
                            <td>{{$contractor->name_contractor}}</td>
                            <td>{{$contractor->number_phone}}</td>
                            <td>{{$contractor->address_contractor}}</td>
                            <td>{{$contractor->dni_contractor}}</td>
                            <td>{{$contractor->email_contractor}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>