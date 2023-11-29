<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];

    $rutaDestino = 'uploads/valenprogram' . $_FILES['imagen']['name'];
    move_uploaded_file($_FILES['imagen']['tmp_name'], $rutaDestino);

    $sql = "INSERT INTO productos (nombre, descripcion, precio, imagen) VALUES ('$nombre', '$descripcion', '$precio', '$rutaDestino')";

    if ($conexion->query($sql) === TRUE) {
        echo '<script>alert("Producto registrado exitosamente.");</script>';
    } else {
        echo "Error: " . $sql . "<br>" . $conexion->error;
    }

    $conexion->close();
}
?>