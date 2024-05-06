<?php
require ("conexionApp.php");
$nombreUser = $_POST["nombreUser"];
$identUser = $_POST["identUser"];
$pswUser = $_POST["pswUser"];
if (isset($nombreUser)&&isset($identUser)&&isset($pswUser)) {
$consulta = "SELECT * FROM empleados WHERE noIdentificacionEmpleado ='{$identUser}' AND pswAsignadoEmpleado ='{$pswUser}'";
$insertarUsuActivo = "INSERT INTO `historialvisitas`( `nombreVisitanteHistorial`, `noIdentificacionVisitanteHistoral`, `fechaHoraHistorial`) VALUES ('{$nombreUser}', '{$identUser}', 'porDefinir' )";
}else {
	sleep(5);
	header("location:../../index.php");
}

if ($resultado = $mysqli->query($consulta)) {
	$mysqli->query($insertarUsuActivo);
	while ($rowQueryResult = $resultado->fetch_array()) {
		$dbPswUserResult = $rowQueryResult["pswAsignadoEmpleado"];
		$dbIdentUserResult = $rowQueryResult["noIdentificacionEmpleado"];
	}
	$resultado->close();
	$mysqli->close();
}else{
	sleep(5);
	header("location:../../index.php");
}

if ($dbPswUserResult == $pswUser && $dbIdentUserResult == $identUser) {
	session_start();
	$_SESSION["logueado"] = TRUE;
	header("location:../Vista/main.php");
}else {
	sleep(3);
	header("location:../index.php");
}


?>
