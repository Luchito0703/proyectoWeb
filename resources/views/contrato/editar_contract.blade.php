<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contrato</title>
</head>
<body>
    <div>
        <div>
            <h2>Actualizar Contrato</h2>
            <form action="{{route('contracts.update',$contract->id) }}" method="post">
                @csrf
                @method('PUT')
                <label for="contrato">Identificador del contrato</label>
                <input type="number" name="id_contract" id="contrato">

                <label for="contratista">Identificador del contratista</label>
                <select name="id_contra" id="contratista">
                    <option>Seleccione un contratista</option>
                    @foreach ($contractors as $contractor)
                        <option value="{{ $contractor->id }}">{{ $contractor->name_contractor }}</option>
                    @endforeach                        
                </select>

                <label for="cedula">Cédula del administrador del proyecto</label>
                <select name="dni_admin_proj" id="cedula">
                    <option>Seleccione un administrador de proyecto</option>
                    @foreach ($adminProjects as $adminProject)
                        <option value="{{ $adminProject->id }}">{{ $adminProject->dni }}</option>
                    @endforeach
                </select>

                <label for="cliente">Número de nit de la empresa cliente</label>
                <select name="nit_customer" id="cliente">
                    <option>Seleccione el nit de la empresa</option>
                    @foreach($customers as $customer)
                        <option value="{{ $customer->id }}">{{ $customer->name_customer }}</option>
                    @endforeach
                </select>

                <button type="submit">Enviar</button>
            </form>
        </div>
    </div>
    
</body>
</html>