<?php

$idActividadEdit = $_GET['idActividadEdit'];
$semanaCronogramaEdit = $_GET['semanaCronogramaEdit'];
$diaSemanaCronogramaEdit  = $_GET['diaSemanaCronogramaEdit'];
$diaCronogramaEdit = $_GET['diaCronogramaEdit'];
$mesCronogramaEdit = $_GET['mesCronogramaEdit'];
$anoCronogramaEdit = $_GET['anoCronogramaEdit'];
$clienteCronogramaEdit = $_GET['clienteCronogramaEdit'];
$oficinaCronogramaEdit = $_GET['oficinaCronogramaEdit'];
$areaCronogramaEdit = $_GET['areaCronogramaEdit'];
$tipoActividadCronogramaEdit = $_GET['tipoActividadCronogramaEdit'];
$tipoEquiposCronogramaEdit = $_GET['tipoEquiposCronogramaEdit'];
$horaEntradaCronogramaEdit = $_GET['horaEntradaCronogramaEdit'];
$minEntradaCronogramaEdit = $_GET['minEntradaCronogramaEdit'];
$horaSalidaCronogramaEdit = $_GET['horaSalidaCronogramaEdit'];
$minSalidaCronogramaEdit = $_GET['minSalidaCronogramaEdit'];
$tecnicosAsignadosCronogramaEdit = $_GET['tecnicosAsignadosCronogramaEdit'];
$tecnicosAuxiliaresCronogramaEdit = $_GET['tecnicosAuxiliaresCronogramaEdit'];



require '../../../../php/conexion.php';

$actualizarDatosAlter = "UPDATE cronograma SET semanaCronograma='{$semanaCronogramaEdit}',diaSemanaCronograma='{$diaSemanaCronogramaEdit}',diaCronograma='{$diaCronogramaEdit}',mesCronograma='{$mesCronogramaEdit}',anoCronograma='{$anoCronogramaEdit}',clienteCronograma='{$clienteCronogramaEdit}',oficinaCronograma='{$oficinaCronogramaEdit}',areaCronograma='{$areaCronogramaEdit}',tipoActividadCronograma='{$tipoActividadCronogramaEdit}',tipoEquiposCronograma='{$tipoEquiposCronogramaEdit}',horaEntradaCronograma='{$horaEntradaCronogramaEdit}',minEntradaCronograma='{$minEntradaCronogramaEdit}',horaSalidaCronograma='{$horaSalidaCronogramaEdit}',minSalidaCronograma='{$minSalidaCronogramaEdit}',tecnicosAsignadosCronograma='{$tecnicosAsignadosCronogramaEdit}',tecnicosAuxiliaresCronograma='{$tecnicosAuxiliaresCronogramaEdit}' WHERE idCronograma='{$idActividadEdit}'";
if ($resultadoConsultaDatosAlter = mysqli_query($mysqli, $actualizarDatosAlter)) {
		header("Location: ../../mainOperaciones.php");
}else{
	echo "no se pudo actualizar";
}


?>