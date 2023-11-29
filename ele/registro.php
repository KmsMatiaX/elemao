
<?php
include 'conexion.php'; 

$patente = $_POST['patente'];
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$anio = $_POST['anio'];
$peso = $_POST['peso'];

$sql = "INSERT INTO autos (patente, marca, modelo, año, peso) VALUES ($patente, '$marca', '$modelo', '$anio', '$peso')";

if ($conexion->query($sql) === TRUE) {
    echo "Auto registrado exitosamente.";
} else {
    echo "Error: " . $sql . "<br>" . $conexion->error;
}

$conexion->close();
?>
<br>
<a href="formu-general.php">Volver</a>