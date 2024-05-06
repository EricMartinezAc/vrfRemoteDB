<?php
require ("../../../../php/conexion.php");

$horaEntrada = $_GET["horaEntrada"];
$minEntrada = $_GET["minEntrada"];
$horaSalida = $_GET["horaSalida"];
$minSalida = $_GET["minSalida"];
$horaEntrada2 = $_GET["horaEntrada2"];
$minEntrada2 = $_GET["minEntrada2"];
$horaSalida2 = $_GET["horaSalida2"];
$minSalida2 = $_GET["minSalida2"];
$horaEntrada3 = $_GET["horaEntrada3"];
$minEntrada3 = $_GET["minEntrada3"];
$horaSalida3 = $_GET["horaSalida3"];
$minSalida3 = $_GET["minSalida3"];
$ano = $_GET["ano"];
$mes = $_GET["mes"];
$dia = $_GET["dia"];
$diaSemana = $_GET["diaSemana"];
$noSemana = $_GET["noSemana"];
$tipoActividad = $_GET["tipoActividad"];
$cliente = $_GET["cliente"];
$oficina = $_GET["oficina"];
$area = $_GET["area"];
$tipoEquipos = $_GET["tipoEquipos"];
$tecnicoAsignado = $_GET["tecnicoAsignado"];
$auxiliarTecnico = $_GET["auxiliarTecnico"];
$tipoActividad2 = $_GET["tipoActividad2"];
$cliente2 = $_GET["cliente2"];
$oficina2 = $_GET["oficina2"];
$area2 = $_GET["area2"];
$tipoEquipos2 = $_GET["tipoEquipos2"];
$tecnicoAsignado2 = $_GET["tecnicoAsignado2"];
$auxiliarTecnico2 = $_GET["auxiliarTecnico2"];
$tipoActividad3 = $_GET["tipoActividad3"];
$cliente3 = $_GET["cliente3"];
$oficina3 = $_GET["oficina3"];
$area3 = $_GET["area3"];
$tipoEquipos3 = $_GET["tipoEquipos3"];
$tecnicoAsignado3 = $_GET["tecnicoAsignado3"];
$auxiliarTecnico3 = $_GET["auxiliarTecnico3"];

if (empty($horaEntrada) || empty($minEntrada) || empty($horaSalida) || empty($minSalida) || empty($horaEntrada2) || empty($minEntrada2) || empty($horaSalida2) || empty($minSalida2) || empty($horaEntrada3) || empty($minEntrada3) || empty($horaSalida3) || empty($minSalida3) || empty($ano) || empty($mes) || empty($dia)  || empty($diaSemana)  || empty($noSemana) || empty($tipoActividad) || empty($cliente)  || empty($oficina) ||  empty($area) || empty($tipoEquipos) || empty($tecnicoAsignado) || empty($auxiliarTecnico)  || empty($tipoActividad2) || empty($cliente2)  || empty($oficina2) ||  empty($area2) || empty($tipoEquipos2) || empty($tecnicoAsignado2) || empty($auxiliarTecnico2)  || empty($tipoActividad3) || empty($cliente3)  || empty($oficina3) ||  empty($area3) || empty($tipoEquipos3) || empty($tecnicoAsignado3) || empty($auxiliarTecnico3)) {
	echo "no se pudo cargar";
	
}else{
$insert1 = "INSERT INTO `cronograma`(`semanaCronograma`, `diaSemanaCronograma`, `diaCronograma`, `mesCronograma`, `anoCronograma`, `clienteCronograma`, `oficinaCronograma`, `areaCronograma`, `tipoActividadCronograma`, `tipoEquiposCronograma`, `horaEntradaCronograma`, `minEntradaCronograma`, `horaSalidaCronograma`, `minSalidaCronograma`, `tecnicosAsignadosCronograma`, `tecnicosAuxiliaresCronograma`) VALUES('{$noSemana}', '{$diaSemana}','{$dia}', '{$mes}', '{$ano}', '{$cliente}', '{$oficina}', '{$area}', '{$tipoActividad}','{$tipoEquipos}', '{$horaEntrada}', '{$minEntrada}','{$horaSalida}', '{$minSalida}', '{$tecnicoAsignado}', '{$auxiliarTecnico}')";

$insert2 = "INSERT INTO `cronograma`(`semanaCronograma`, `diaSemanaCronograma`, `diaCronograma`, `mesCronograma`, `anoCronograma`, `clienteCronograma`, `oficinaCronograma`, `areaCronograma`, `tipoActividadCronograma`, `tipoEquiposCronograma`, `horaEntradaCronograma`, `minEntradaCronograma`, `horaSalidaCronograma`, `minSalidaCronograma`, `tecnicosAsignadosCronograma`, `tecnicosAuxiliaresCronograma`) VALUES('{$noSemana}', '{$diaSemana}','{$dia}', '{$mes}', '{$ano}', '{$cliente2}', '{$oficina2}', '{$area2}', '{$tipoActividad2}','{$tipoEquipos2}', '{$horaEntrada2}', '{$minEntrada2}','{$horaSalida2}', '{$minSalida2}', '{$tecnicoAsignado2}', '{$auxiliarTecnico2}')";

$insert3 = "INSERT INTO `cronograma`(`semanaCronograma`, `diaSemanaCronograma`, `diaCronograma`, `mesCronograma`, `anoCronograma`, `clienteCronograma`, `oficinaCronograma`, `areaCronograma`, `tipoActividadCronograma`, `tipoEquiposCronograma`, `horaEntradaCronograma`, `minEntradaCronograma`, `horaSalidaCronograma`, `minSalidaCronograma`, `tecnicosAsignadosCronograma`, `tecnicosAuxiliaresCronograma`) VALUES('{$noSemana}', '{$diaSemana}','{$dia}', '{$mes}', '{$ano}', '{$cliente3}', '{$oficina3}', '{$area3}', '{$tipoActividad3}','{$tipoEquipos3}', '{$horaEntrada3}', '{$minEntrada3}','{$horaSalida3}', '{$minSalida3}', '{$tecnicoAsignado3}', '{$auxiliarTecnico3}')";
}
if ($resultado_insertar = mysqli_query($mysqli, $insert1) && $resultado_insertar2 = mysqli_query($mysqli, $insert2) && $resultado_insertar3 = mysqli_query($mysqli, $insert3)) {
header("location: ../../mainOperaciones.php");

	}else{
		echo "actividad no almacenada";
	}

?>