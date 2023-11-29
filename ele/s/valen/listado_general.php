<?php
include 'conexion.php'; 

$sql = "SELECT * FROM productos";
$result = $conexion->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Listado General de Productos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 20px;
        }
        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Listado General de Productos</h2>

    <?php
    if ($result->num_rows > 0) {
        echo '<table>';
        echo '<tr><th>ID</th><th>Nombre</th><th>Descripción</th><th>Precio</th><th>Imagen</th></tr>';
        while($row = $result->fetch_assoc()) {
            echo '<tr>';
            echo '<td>' . $row["id"] . '</td>';
            echo '<td>' . $row["nombre"] . '</td>';
            echo '<td>' . $row["descripcion"] . '</td>';
            echo '<td>$' . $row["precio"] . '</td>';
            echo '<td><img src="' . $row["imagen"] . '" alt="Imagen" width="50"></td>';
            echo '</tr>';
        }
        echo '</table>';
    } else {
        echo "No hay productos creados.";
    }
    ?>

</body>
</html>