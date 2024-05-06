<?php

/**
* 
*/
class consultar
{
	
	function consultarTabla()
	{
		include 'conexion.php';
		

		$queryClientes = "SELECT * FROM clientes ";
		$resultadoQueryClientes = mysql_query($queryClientes);

		while ($fila = mysql_fetch_array($resultadoQuery)) {
			$nombre "$fila []";
		}

	}
}


?>


$nombreUser = $_POST["nombreUser"];
$identUser = $_POST["identUser"];
$pswUser = $_POST["pswUser"];
if (isset($nombreUser)&&isset($identUser)&&isset($pswUser)) {
$consulta = "SELECT * FROM usuario WHERE cedula ='$identUser' AND pass ='$pswUser'";
}else {
	sleep(5);
	header("location:../../index.html");
}

if ($resultado = $mysqli->query($consulta)) {
	while ($rowQueryResult = $resultado->fetch_array()) {
		$dbPswUserResult = $rowQueryResult["pass"];
		$dbIdentUserResult = $rowQueryResult["cedula"];
	}
	$resultado->close();
}$mysqli->close();


if ($dbPswUserResult == $pswUser && $dbIdentUserResult == $identUser) {
	session_start();
	$_SESSION["logueado"] = TRUE;
	header("location:../../Vista/main.php");
	header("location:../../Vista/main.php?nameUsu=$nombreUser");
}else {
	sleep(3);
	header("location:../../index.html");
}
