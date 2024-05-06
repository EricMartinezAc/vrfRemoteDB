<?php

require '../../php/conexion.php';

$diaHoy = date('d') - 1;
$mesHoy = date('m');
$anoHoy = date('a');

$consulta = "SELECT * FROM cronograma";

$resultado_consulta = mysqli_query($mysqli, $consulta);
$numRowConsulta = mysqli_num_rows($resultado_consulta);
while($arrayResultadoConsulta = mysqli_fetch_array($resultado_consulta)){
	//la hora de entrada es igual a horas y minutos

	if ($arrayResultadoConsulta['minEntradaCronograma'] == 30) {
		$minEntrada = 50;
	}else{
		$minEntrada = $arrayResultadoConsulta['minEntradaCronograma'];
	}
	if ($arrayResultadoConsulta['minSalidaCronograma'] == 30) {
		$minSalida = 50;
	}else{
		$minSalida = $arrayResultadoConsulta['minSalidaCronograma'];
	}
$horaEntrada = $arrayResultadoConsulta['horaEntradaCronograma'].$minEntrada;
$horaSalida = $arrayResultadoConsulta['horaSalidaCronograma'].$minSalida;


if ($horaSalida > $horaEntrada) {
	$horasGastadas = $horaSalida - $horaEntrada;
}

echo $horaEntrada."---";
echo $horaSalida."---";
echo $horasGastadas."---";







}




?>
