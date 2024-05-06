<?php
require ("conexion.php");


if (isset($_GET["mes"]) && isset($_GET["ano"])) {


$mes = $_GET["mes"];
$ano = $_GET["ano"];

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
