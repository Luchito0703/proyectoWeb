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
            <h1>Actualizar administrador de proyecto</h1>
            <form action="{{route('adminProjects.update', $adminProject->id)}}" method="post">
                @csrf
                @method('PUT')
                <label for="identificador">Ingrese su numero de cedula</label>
                <input type="text" name="dni" id="identificador" value="{{ $adminProject->dni }}" required>
                <label for="nombre">Ingrese su nombre</label>
                <input type="text" name="name" value="{{ $adminProject->email }}" required>
                <label for="telefono">Ingrese su numero de telefono</label>
                <input type="text" name="number_phone" id="telefono" value="{{ $adminProject->number_phone }}" required>
                <label for="direccion">Ingrese su direccion</label>
                <input type="text" name="address" id="direccion" value="{{ $adminProject->address }}" required>
                <label for="email">Ingrese su email</label>
                <input type="text" name="email" id="email" value="{{ $adminProject->email }}" required>
                <button type="submit">Enviar</button>
            </form>
        </div>
    </div>
</body>
</html>