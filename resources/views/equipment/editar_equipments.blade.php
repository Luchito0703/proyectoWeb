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
            <h1>Actualizar Equipo de campo</h1>
            <form action="{{route('equipments.update',$equipments->id)}}" method="post">
                @csrf
                @method('PUT')
                <label for="id">Ingrese nuevo id</label>
                <input type="text" name="id_equipment" id="id" value="{{$equipments->id_equipment}}" readonly required>
                <label for="name">Ingrese nuevo nombre del equipo: </label>
                <input type="text" name="name_equipment" id="name" value="{{$equipments->name_equipment}}" required>
                <button type="submit">Actualizar</button>
            </form>
        </div>
    </div>
</body>
</html>