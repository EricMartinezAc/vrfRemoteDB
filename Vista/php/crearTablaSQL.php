<?php
require ("conexion.php");


if (isset($_GET["nombreTabla"]) && isset($_GET["noColumnas"])) {


$noColumnas = $_GET["noColumnas"];
$nombreTabla = $_GET["nombreTabla"];



$eliminar = "DELETE FROM cronograma WHERE mes = '{$mes}' AND ano = '{$ano}'";

	if ($resultado_eliminar = mysqli_query($mysqli, $eliminar)) {
		header('location:../main.php');
	}else{
		echo "ERROR INTERNO";
		echo $eliminar;
	}


			
	
}else{
		echo "no se pudo eliminar";
}

?>
