<?php 
	$patente = $_POST['patente'];
	$marca = $_POST['marca'];
	$modelo = $_POST['modelo'];
	$anio = $_POST['anio'];
	$peso = $_POST['peso'];

	$db = "agencia2";
	$conexion = mysqli_connect("localhost","root","",$db);

	if($conexion){
		echo "conexion exitosa"."<br>";
	}else{
		echo "conexion fallida"."<br>";
	}

	$sql = "INSERT INTO autos (patente, marca, modelo, año, peso) VALUES ($patente, '$marca', '$modelo', '$anio', '$peso')";
	$resultado = MySqli_query($conexion,$sql);

	if($resultado){
		echo "insercion exitosa"."<br>";
	}else{
		echo "insercion fallida"."<br>";
	}	

 ?>
 <br>
 <a href="formu-general.php">Volver</a>