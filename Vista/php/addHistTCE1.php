


<?php
require ("conexion.php");



if (isset($_GET["fechaEjecucion"]) && isset($_GET["horaEntrada"]) && isset($_GET["horaSalida"])&&isset($_GET["tipoActividad"]) && isset($_GET["marcaEquipo"]) && isset($_GET["modeloEq"]) && isset($_GET["serialEq"]) && isset($_GET["nombreEquipo"]) && isset($_GET["presionSistPSI"]) && isset($_GET["tSupplySistC"]) &&isset($_GET["tReturnSistC"]) && isset($_GET["tAmbienteC"]) && isset($_GET["v1_3"]) && isset($_GET["v2_3"]) &&isset($_GET["v1_2"]) && isset($_GET["a1"]) && isset($_GET["a2"]) && isset($_GET["a3"]) &&isset($_GET["hzOp"]) && isset($_GET["caudalGPM"]) && isset($_GET["pruebasRealizadas"])&& isset($_GET["actividadesRealizadas"]) && isset($_GET["repuestosRQ"])&& isset($_GET["observaciones"])) {

$fechaEjecucion = $_GET["fechaEjecucion"];
$horaEntrada = $_GET["horaEntrada"];
$horaSalida = $_GET["horaSalida"];
$tipoActividad = $_GET["tipoActividad"];
$marcaEquipo = $_GET["marcaEquipo"];
$modeloEq = $_GET["modeloEq"];
$serialEq = $_GET["serialEq"];
$nombreEquipo = $_GET["nombreEquipo"];
$presionSistPSI = $_GET["presionSistPSI"];
$tSupplySistC = $_GET["tSupplySistC"];
$tReturnSistC = $_GET["tReturnSistC"];
$tAmbienteC = $_GET["tAmbienteC"];
$v1_3 = $_GET["v1_3"];
$v1_2 = $_GET["v1_2"];
$v2_3 = $_GET["v2_3"];
$a1 = $_GET["a1"];
$a2 = $_GET["a2"];
$a3 = $_GET["a3"];
$hzOp = $_GET["hzOp"];
$caudalGPM = $_GET["caudalGPM"];
$actividadesRealizadas = $_GET["actividadesRealizadas"];
$pruebasRealizadas = $_GET["pruebasRealizadas"];
$repuestosRQ = $_GET["repuestosRQ"];
$observaciones = $_GET["observaciones"];

//parametros_mtto_torres(fechaEjecucion, horaEntrada, horaSalida, tipoActividad, marcaEquipo, modeloEq, serialEq, nombreEquipo, presionSistPSI, tSupplySistC, tReturnSistC, tAmbienteC, v1_2, v2_3, v1_3, a1, a2, a3, hzOp, caudalGPM, pruebasRealizadas, actividadesRealizadas, repuestosRQ, observaciones)

$insert = "INSERT INTO parametros_mtto_torres (fechaEjecucion, horaEntrada, horaSalida, tipoActividad, marcaEquipo, modeloEq, serialEq, nombreEquipo, presionSistPSI, tSupplySistC, tReturnSistC, tAmbienteC, v1_2, v2_3, v1_3, a1, a2, a3, hzOp, caudalGPM, pruebasRealizadas, actividadesRealizadas, repuestosRQ, observaciones) VALUES ('{$fechaEjecucion}','{$horaEntrada}','{$horaSalida}','{$tipoActividad}','{$marcaEquipo}','{$modeloEq}','{$serialEq}','{$nombreEquipo}','{$presionSistPSI}','{$tSupplySistC}','{$tReturnSistC}','{$tAmbienteC}','{$v1_2}','{$v2_3}','{$v1_3}','{$a1}','{$a2}','{$a3}','{$hzOp}','{$caudalGPM}','{$pruebasRealizadas}','{$actividadesRealizadas}','{$repuestosRQ}','{$observaciones}')";

	if ($resultado_insert = mysqli_query($mysqli, $insert)) {
		header('location:../Clientes/1001.php');
	}else{
		echo "Error";
	}

}else{
		echo "no se pudo agrear";
}

?>
