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
            @if ($errors->any())
	            @foreach ($errors->all() as $error)
		            <div class="alert alert-danger" role="alert">{{$error}}</div>
	            @endforeach
            @endif
            <form action="{{ route('certificates.store') }}" method="POST">
                @csrf
                <label for="idCertificado">Ingresar Id del certificado</label>
                <input type="text" name="id_certificate" id="idCertificado" required>
                <label for="idContratista">Ingrese el contratista asociado al contrato: </label>
                <select name="id_contra" id="idContra" required>
                    <option>Seleccione un contratista</option>
                    @foreach ($contractors as $contractor)
                        <option value="{{$contractor->id}}">{{$contractor->name_contractor}}</option>
                    @endforeach
                </select>
                <select name="nit_customer" id="nitCustomer" required>
                    <option>Seleccione el cliente al que esta asociado el certificado: </option>
                    @foreach ($customers as $customer)
                        <option value="{{$customer->id}}">{{$customer->name_customer}}</option>
                    @endforeach
                </select>
                <select name="id_contract" id="idContract" required>
                    <option>Seleccione el cliente al que esta asociado el certificado: </option>
                    @foreach ($contracts as $contract)
                        <option value="{{$contract->id}}">{{$contract->id_contract}}</option>
                    @endforeach
                </select>
                <label for="dateExp">Ingrese fecha de expedicion</label>
                <input type="date" name="date_expedition" id="dateExp" required>
                <label for="tema">Ingrese tema del certificado a generar</label>
                <input type="date" name="issue" id="tema" required>
                <button type="submit">Generar certificado</button>
            </form>
        </div>
    </div>
</body>
</html>