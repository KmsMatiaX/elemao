<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <h2>Formulario de Autos</h2>
    <form action="registro.php" method="post">
        Patente: <input type="number" name="patente" required><br>
        Marca: <input type="text" name="marca" required><br>
        Modelo: <input type="text" name="modelo" required><br>
        Año: <input type="number" name="anio" required><br>
        Peso: <input type="number" name="peso" required><br>
    <input type="submit" value="Agregar"></form>
    <br>
    <a href="formu-general.php">Volver</a>
</body>
</html>