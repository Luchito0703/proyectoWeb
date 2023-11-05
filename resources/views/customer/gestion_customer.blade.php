<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Customer</title>
</head>
<body>
    <div>
        <div>
            <h2>Crear nuevo Usuario</h2>
            <form action="{{ route('customer.store')}}" method="post">
                @csrf
                <label for="dni_customer">Cédula</label><br>
                <input type="text" id="dni_customer" name="dni_customer"><br>

                <label for="name_customer">Nombre</label><br>
                <input type="text" id="name_customer" name="name_customer"><br>

                <label for="number_customer">Telefono</label><br>
                <input type="text" id="number_customer" name="number_customer"><br>

                <label for="address_customer">Direccion</label><br>
                <input type="text" id="address_customer" name="address_customer"><br>

                <label for="email_customer">Cédula</label><br>
                <input type="email" id="email_customer" name="email_customer"><br>

                <button type="submit">Enviar</button>
            </form>
        </div>
        <div>
            <table>
                <thead>
                    <tr>
                        <th>Cédula del Cliente</th>
                        <th>Nombre del Cliente</th>
                        <th>Número del Cliente</th>
                        <th>Dirección del Cliente</th>
                        <th>Email del Cliente</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($customers as $customer)
                        <tr>
                            <td>{{$customer->dni_customer}}</td>
                            <td>{{$customer->name_customer}}</td>
                            <td>{{$customer->number_customer}}</td>
                            <td>{{$customer->address_customer}}</td>
                            <td>{{$customer->email_customer}}</td>
                            <td>
                                <a href="{{ route('customer.edit',$customer->id)}}"><button type="button" class="btn btn-warning">Editar</button></a>
                                <form action="{{route('customer.destroy',$customer->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type = "submit" class="btn btn-danger">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>