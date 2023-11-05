<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>MasBiomas S.A.S</title>
</head>
<body>
    <h2>Crear nuevo Boss</h2>
    <form method="POST" action="/boss">
        <label for="dni">Cedula:</label><br>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>