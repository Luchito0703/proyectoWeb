<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prestamo</title>
</head>
<body>
    <div>
        <div>
            <h1>Actualizar prestamo</h1>
            <form action="{{ route('loans.update',$loan->id) }}" method="post">
                @csrf
                @method('PUT')
                <label for="prestamo">Identificador del prestamo</label>
                <input type="number" id="prestamo" name="id_prest" required><br>
                <label for="contratista">Identificacion del contratista</label>
                <select name="id_equipment" id="equipo" required>
                    <option value="0">Seleccione el contratista</option>
                    @foreach ($contractors as $contra)
                        <option value="{{$contra->id}}">{{$contra->name_contractor}}</option>
                    @endforeach
                </select>
                <label for="equipo">Seleccione el equipo</label>
                <select name="id_equipment" id="equipo" required>
                    <option value="0">Seleccione el equipo necesario</option>
                    @foreach ($equipments as $equipment)
                        <option value="{{$equipment->id}}">{{$equipment->name_equipment}}</option>
                    @endforeach
                </select>
                <label for="devolucion">Fecha de devolucion</label>
                <input type="date" name="date_devolution" id="devolucion" required>
                <label for="prestacion">Fecha de prestamo</label>
                <input type="date" name="date_loan" id="prestacion" required>
            </form>
        </div>
    </div>
</body>
</html>