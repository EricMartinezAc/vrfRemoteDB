

<?php
require ("../../../../php/conexion.php");


if (isset($_GET["mes"]) || isset($_GET["ano"])) {

$mes = $_GET['mes'];
$ano = $_GET["ano"];

$eliminar = "DELETE FROM cronograma WHERE mesCronograma = '{$mes}' OR anoCronograma = '{$ano}'";

	if ($resultado_eliminar = mysqli_query($mysqli, $eliminar)) {
		header('location:../../mainOperaciones.php');
	}else{
		echo "ERROR INTERNO";
	}


			
	
}else{
		echo "no se pudo eliminar";
}

?>