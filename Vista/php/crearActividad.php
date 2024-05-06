


<?php
require ("conexion.php");


if (isset($_GET["horaEntrada"]) && isset($_GET["horaSalida"])&&isset($_GET["ano"]) && isset($_GET["mes"]) && isset($_GET["dia"]) && isset($_GET["noSemana"]) && isset($_GET["tipoActividad"]) && isset($_GET["cliente"]) && isset($_GET["oficina"]) &&isset($_GET["area"]) && isset($_GET["tipoEquipos"]) && isset($_GET["tecnicoAsignado"]) && isset($_GET["auxiliarTecnico"])) {



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

$insert = "INSERT INTO cronograma ( dia, mes, ano, cliente, oficina, area, tipoActividad,  equipos ,hrEntrada, hrSalida, noSemana, tecnicoAsignado, auxiliarTecnico) VALUES ('{$dia}', '{$mes}', '{$ano}', '{$cliente}', '{$oficina}', '{$area}', '{$tipoActividad}','{$tipoEquipos}', '{$horaEntrada}', '{$horaSalida}', '{$noSemana}', '{$tecnicoAsignado}', '{$auxiliarTecnico}')";

	if ($resultado_insertar = mysqli_query($mysqli, $insert)) {
		header('location:../main.php');
	}else{
		echo "error interno";
	}


			
	
}else{
		echo "no se pudo agrear";
}

?>
