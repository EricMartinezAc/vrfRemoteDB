


<?php
require ("conexion.php");


if (isset($_GET["idActividad"])) {


$idActividad = $_GET["idActividad"];

$eliminar = "DELETE FROM cronograma WHERE idCronograma = '{$idActividad}'";

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
