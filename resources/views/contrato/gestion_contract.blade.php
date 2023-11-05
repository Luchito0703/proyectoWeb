<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contratos</title>
</head>
<body>
    <div>
        <div>
            <form action="{{ route('contracts.store') }}" method="post">
                @csrf
                <label for="contrato">Indentificador del contrato</label>
                <input type="number" name="id_contract" id="contrato">

                <label for="contratista">Indentificador del contratista</label>
                <select name="id_contra" id="contratista">
                    <option>Seleccione un contratista</option>
                    @foreach ($contractors as $contractor)
                        <option value="{{ $contractor->id }}">{{$contractor->name_contractor}}</option>
                    @endforeach                        
                </select>

                <label for="cedula">Cedula del administrador del proyecto</label>
                <select name="dni_admin_proj" id="cedula">
                    <option>Seleccione un administrador de proyecto</option>
                    @foreach ($adminProjects as $adminProject)
                        <option value="{{ $adminProject->id }}">{{$adminProject->name}}</option>
                    @endforeach
                </select>

                <label for="cliente">Numero de nit de la empresa clienta</label>
                <select name="nit_customer" id="cliente">
                    <option>Seleccione el nit de la empresa</option>
                    @foreach($customers as $customer)
                        <option value="{{$customer->id}}">{{$customer->name}}</option>
                    @endforeach
                </select>

                <button type="submit">Enviar</button>
            </form>
        </div>
        <div>
            <table>
                <thead>
                    <tr>
                        <th>Indentificador del contrato</th>
                        <th>Indentificador del contratista</th>
                        <th>Cedula del administrador del proyecto</th>
                        <th>Nit de la empresa</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($contracts as $contract)
                        <tr>
                            <td>{{$contract->id_contract}}</td>
                            <td>{{$adminProject->id}}</td>
                            <td>{{$contractor->dni_admin_proj}}</td>
                            <td>{{$customer->nit_customer}}</td>
                            <td>
                                <a href="{{ route('contracts.edit',$contract->id)}}">Editar</a>
                                <form action="{{ route('contracts.destroy',$contract->id) }}" method="post">
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