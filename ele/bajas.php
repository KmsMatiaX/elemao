<?php     
	$patente = $_POST['patente'];

	$db = "agencia2";
	$conexion = mysqli_connect("localhost","root","",$db);

	if($conexion){
		echo "conexion exitosa"."<br>";
	}else{
		echo "conexion fallida"."<br>";
	}

	$sql = "DELETE FROM autos WHERE patente = '$patente'";
	$resultado = MySqli_query($conexion,$sql);

	if($resultado){
		echo "baja exitosa"."<br>";
	}else{
		echo "baja fallida"."<br>";
	}	
	
 ?>
 <br>
 <a href="formu-general.php">Volver</a>