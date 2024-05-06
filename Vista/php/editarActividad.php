


<?php
require ("conexion.php");


if (isset($_GET["idActividad"]) && isset($_GET["horaEntrada"]) && isset($_GET["horaSalida"])&&isset($_GET["ano"]) && isset($_GET["mes"]) && isset($_GET["dia"]) && isset($_GET["noSemana"]) && isset($_GET["tipoActividad"]) && isset($_GET["cliente"]) && isset($_GET["oficina"]) &&isset($_GET["area"]) && isset($_GET["tipoEquipos"]) && isset($_GET["tecnicoAsignado"]) && isset($_GET["auxiliarTecnico"])) {

$idActividad = $_GET["idActividad"];
$horaEntrada = $_GET["horaEntrada"];
$horaSalida = $_GET["horaSalida"];
$ano = $_GET["ano"];
$mes = $_GET["mes"];
$dia = $_GET["dia"];
$noSemana = $_GET["noSemana"];
$tipoActividad = $_GET["tipoActividad"];
$cliente = $_GET["cliente"];
$oficina = $_GET["oficina"];
$area = $_GET["area"];
$tipoEquipos = $_GET["tipoEquipos"];
$tecnicoAsignado = $_GET["tecnicoAsignado"];
$auxiliarTecnico = $_GET["auxiliarTecnico"];

$update = "UPDATE cronograma SET dia = '{$dia}', mes = '{$mes}', ano = '{$ano}', cliente = '{$cliente}', oficina = '{$oficina}', area = '{$area}', tipoActividad = '{$tipoActividad}', equipos = '{$tipoEquipos}', hrEntrada = '{$horaEntrada}', hrSalida = '{$horaSalida}', noSemana = '{$noSemana}', tecnicoAsignado = '{$tecnicoAsignado}', auxiliarTecnico = '{$auxiliarTecnico}' WHERE idCronograma = '{$idActividad}'";

	if ($resultado_update = mysqli_query($mysqli, $update)) {
		header('location:../main.php');
	}else{
		
		echo "ERROR INTERNO";
		echo $resultado_eliminar;
	}

}else{
		echo "no se pudo agrear";
}

?>
