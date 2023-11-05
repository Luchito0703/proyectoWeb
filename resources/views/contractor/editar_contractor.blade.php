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
            <h1>Actualizar contratista:</h1>
            <form action="{{ route('contractors.update',$contractors->id) }}" method="post">
                @csrf
                @method('PUT')
                <label for="indetificador">indetificador del contratista</label>
                <input type="text" name="id_contractor" id="identificador" value="{{$contractor->id_contractor}}">

                <label for="nombre">Nombre del contratista</label>
                <input type="text" name="name_contractor" id="nombre" value="{{$contractor->name_contractor}}">

                <label for="telefono">Numero de telefono del contratista</label>
                <input type="text" name="number_phone" id="telefono" value="{{$contractor->number_phone}}">

                <label for="direccion">Direccion del contratista</label>
                <input type="text" name="address_contractor" value="{{$contractor->address_contractor}}">

                <label for="cedula">Cedula del contratista</label>
                <input type="text" name="dni_contractor" id="cedula" value="{{$contractor->dni_contractor}}">
            
                <label for="emaul">Correo electronico del contratista</label>
                <input type="text" name="email_contractor" value="{{$contractor->email_contractor}}">

                <button type="submit">Guardar</button>
            </form>
        </div>
    </div>
</body>
</html>