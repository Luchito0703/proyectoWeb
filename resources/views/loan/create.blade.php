<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>MasBiomas S.A.S</title>
</head>
<body>
    <div class="container text-center">
        <div>
            <h1 class="text-center">Solicitudes de equipo:</h1>
            <form action="{{ route ('loans.store') }}" method="POST" class="mt-5">
                @csrf
                <label for="prest">Identificador del prestamo</label>
                <input type="number" id="prest" name="id_prest" required><br>
                <label for="contra">Identificacion del contratista</label>
                <select name="id_contractor" id="id_contractor" class="form-control mb-3" required>
                    <option>Seleccione un contratista</option>
                    @foreach ($contractors as $contractor)
                        <option value="{{$contractor->id}}">{{$contractor->name_contractor}}</option>
                    @endforeach
                </select>
                <label for="equipo">Seleccione el equipo</label>
                <select name="id_equipment" id="id_equipment" class="form-control mb-3" required>
                    <option value="0">Seleccione el equipo necesario</option>
                    @foreach ($equipments as $equipment)
                        <option value="{{$equipment->id}}">{{$equipment->name_equipment}}</option>
                    @endforeach
                </select>
                <label for="dev">Fecha de devolucion</label>
                <input type="date" name="date_devolution" id="dev" required>
                <label for="pres">Fecha de prestamo</label>
                <input type="date" name="date_loan" id="pres" required>
                <button type="submit">Enviar solicitud</button>
            </form>
        </div>

        <div>
            <table>
                <thead>
                    <tr>
                        <th> Identificador del prestamo</th>
                        <th> Identificador del contratista</th>
                        <th> Identificador del equipo</th>
                        <th> Fecha de devolucion</th>
                        <th> Fecha de prestamo</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($loans as $loan)
                        <tr>
                            <td>{{$loan->id_prest}}</td>
                            <td>{{$loan->id_contractor}}</td>
                            <td>{{$loan->id_equipment}}</td>
                            <td>{{$loan->date_devolution}}</td>
                            <td>{{$loan->date_loan}}</td>
                            <td>
                                <a href="{{ route('loans.edit',$loan->id) }}" >Editar</a>
                                <form action="{{ route('loans.destroy', $loan->id) }}" method="post">
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