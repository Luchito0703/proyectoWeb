<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MasBiomas S.A.S</title>
</head>
<body>
    <h2>Crear nuevo Boss</h2>
    <form method="POST" action="/boss">
        @csrf
        <label for="dni">Nombre:</label><br>
        <input type="text" id="dni" name="dni"><br><br>

        <label for="nombre">Nombre:</label><br>
        <input type="text" id="nombre" name="name"><br><br>

        <label for="telefono">Teléfono:</label><br>
        <input type="text" id="telefono" name="number_phone"><br><br>

        <label for="direccion">Dirección:</label><br>
        <input type="text" id="direccion" name="address"><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br><br>

        <input type="submit" value="Guardar">
    </form>
</body>
</html>