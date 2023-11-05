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
            <h1>Actualizar cliente</h1>
            <form action="{{route('customer.update',$customer->id)}}" method="post">
                @csrf
                @method('PUT')
                <label for="dni_customer">Cédula</label><br>
                <input type="text" id="dni_customer" name="dni_customer" value="{{$customer->dni_customer}}"><br>

                <label for="name_customer">Nombre</label><br>
                <input type="text" id="name_customer" name="name_customer" value="{{$customer->name_customer}}"><br>

                <label for="number_customer">Telefono</label><br>
                <input type="text" id="number_customer" name="number_customer" value="{{$customer->number_customer}}"><br>

                <label for="address_customer">Direccion</label><br>
                <input type="text" id="address_customer" name="address_customer" value="{{$customer->address_customer}}"><br>

                <label for="email_customer">Cédula</label><br>
                <input type="email" id="email_customer" name="email_customer" value="{{$customer->email_customer}}"><br>

                <button type="submit">Actualizar</button>

            </form>
        </div>
    </div>
</body>
</html>