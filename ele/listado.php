<h3>LISTADO</h3>
<?php

	$db = "agencia2";
	$conexion = mysqli_connect("localhost","root","",$db);

	if($conexion){
		echo "conexion exitosa"."<br>";
	}else{
		echo "conexion fallida"."<br>";
	}

	$sql = "SELECT patente, marca, modelo, año, peso FROM autos";
	$resultado = MySqli_query($conexion,$sql);

	echo "<table border=2 cellspacing=2 cellpadding=3>";

	echo "<tr>";
		echo "<th>Patente</th>";
		echo "<th>Marca</th>";
		echo "<th>Modelo</th>";
        echo "<th>Año</th>";
		echo "<th>Peso</th>";
	echo "</tr>";

	while($registro = MySqli_fetch_row( $resultado )){
		echo "<tr>";
		foreach ($registro as $campo) {
			echo "<td>".$campo."</td>";			
		}
		echo "</tr>";		
	}
	echo "</table>";
 ?>
 <a href="formu-general.php">Volver</a>