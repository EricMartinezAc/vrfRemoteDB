
<!DOCTYPE html>
<html>
<head>
	<title>..::Index</title>
	<link rel="stylesheet" type="text/css" href="Controlador/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="Controlador/dataTables.bootstrap.min.css">
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="Controlador/styles.css">
</head>

<body style="background-image: url('Vista/img/fondos/edificio.jpg'); background-repeat: no-repeat;background-size: 100% 200%; background-position: center;" >
	
<div class="container-fluid"><br><br>
	<div class="row"  >


		<div class="col-md-4" id="col1" >
			
		</div>

		<div class="col-md-4" id="loginVRF" >

		<center>
		<form action="php/login.php" method="POST" >
			<br><br>
			<img id="imgLogo" src="Vista/img/ico/logo.png">
			<br><br>
			<label>INGRESE SU NOMBRE</label>
			<br>
				<input value="Eric" class="btn" type="text" style="width: 60%" name="nombreUser" size="40px" placeholder="">
			<br><br>
			<label>INGRESE SU IDENTIFICACION</label>
			<br>
				<input value="1140851982" class="btn" type="text" style="width: 60%" name="identUser" size="40px" placeholder="">
			<br><br>
			<label>INGRESE SU CONTRASEÑA</label>
			<br>
				<input value="qwerty" class="btn" type="password" style="width: 60%" name="pswUser" size="40px">
			<br><br><br>

				<input type="submit" class="btn btn-primary" style="width: 60%" name="enviar" value="Enviar" placeholder="xxxxxxxxxxxx">
				
			<br><br>
			<br><br><br>
		</form>
		</center>

		</div>

		<div class="col-md-4" id="col3">
			<!--empty -->
		</div>
	</div>
</div>
<script src="Controlador/jquery-2.2.4.min.js"></script>
<script src="Controlador/bootstrap.js"></script>
<script src="Controlador/swiper.min.js"></script>

<!--
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>



if (!EMPTY&&isset($_POST["identUser"])&&isset($_POST["pswUser"])) {
	
	echo $fechaDia.$nombreUser.$identUser.$pswUser;
	$consulta = "SELECT * FROM empleados WHERE noIdentificacionEmpleado ='$identUser' AND pswAsignadoEmpleado ='$pswUser'";
	$insert_usuAct = "INSERT INTO historialVisitas(nombreVisitanteHistorial, noIdentificacionVisitanteHistorial, fechaHoraHistorial) VALUES ('{$nombreUser}', '{$identUser}', '{$fechaDia}')";

	if ($resultado = $mysqli->query($consulta)) {

		$usuarioActivo = mysqli_query($mysqli,$insert_usuAct);
		while ($rowQueryResult = $resultado->fetch_array()) {
		$dbPswUserResult = $rowQueryResult["pswAsignadoEmpleado"];
		$dbIdentUserResult = $rowQueryResult["noIdentificacionEmpleado"];
		}
		$resultado->close();

		if ($dbPswUserResult == $pswUser && $dbIdentUserResult == $identUser) {
			session_start();
			$_SESSION["logueado"] = TRUE;
			$nombreUser = $_POST["nombreUser"];
			header("location:../../Vista/main.php");
			header("location:../../Vista/main.php?nameUsu=$nombreUser");
			$mysqli->close();
		}else {
			sleep(3);
			header("location:../../index.php");
		}
	
	}else {
	sleep(5);
	header("location:../../index.php");
}
}
};
-->

<script src="Controlador/jquery.dataTables.min.js"></script>
<script src="Controlador/dataTables.bootstrap.min.js"></script>
<script src="Controlador/config.js"></script>
</body>
</html>