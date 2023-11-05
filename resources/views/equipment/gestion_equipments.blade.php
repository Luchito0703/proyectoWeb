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
            <form action="{{route('equipments.store')}}" method="post">
                @csrf
                <label for="id">Ingrese referencia del equipo</label>
                <input type="text" name="id_equipment" id="id">
                <label for="name">Ingrese nombre del equipo</label>
                <input type="text" name="name_equipment" id="name">
                <button type="submit">Guardar</button>
            </form>
        </div>
        <div>
            <table>
                <thead>
                    <tr>
                        <th>referencia del equipo</th>
                        <th>Nombre del equipo</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($equipments as $equipment)
                        <tr>
                            <td>{{$equipment->id_equipment}}</td>
                            <td>{{$equipment->name_equipment}}</td>
                            <td>
                                <a href="{{route('equipments.edit',$equipment->id)}}">Editar</a>
                                <form action="{{route('equipments.destroy',$equipment->id)}}" method="post">
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