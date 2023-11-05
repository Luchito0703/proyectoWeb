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
            <h1>Actualizar administrador jefe</h1>
            <form action="{{route('adminBoss.update',$adminBoss->id)}}" method="post">
                @csrf
                @method('PUT')
                <label for="dni">Cedula:</label><br>
                <input type="text" id="dni" name="dni" value="{{$adminBoss->dni}}"><br><br>

                <label for="nombre">Nombre:</label><br>
                <input type="text" id="nombre" name="name" value="{{$adminBoss->name}}"><br><br>

                <label for="telefono">Teléfono:</label><br>
                <input type="text" id="telefono" name="number_phone" value="{{$adminBoss->number_phone}}"><br><br>

                <label for="direccion">Dirección:</label><br>
                <input type="text" id="direccion" name="address" value="{{$adminBoss->address}}"><br><br>

                <label for="email">Email:</label><br>
                <input type="email" id="email" name="email" value="{{$adminBoss->email}}"><br><br>

                <button type="submit">Actualizar</button>

            </form>
        </div>
    </div>
</body>
</html>