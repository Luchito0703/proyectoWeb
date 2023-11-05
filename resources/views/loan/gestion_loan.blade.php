<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container text-center">
        <div>
            <h1 class="text-center">Solicitudes de equipo:</h1>
            <form action="{{ route ('loans.store') }}" method="POST">
                @csrf
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
</body>
</html>
        
