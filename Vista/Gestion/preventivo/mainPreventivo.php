<?php
 
 	require ("../../php/conexion.php");
	session_start();

	if($_SESSION["logueado"] == TRUE) {
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>..::Principal</title>
	<link rel="stylesheet" type="text/css" href="../../../Controlador/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../../../Controlador/dataTables.bootstrap.min.css">
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../../../Controlador/styles.css">
	<script type="text/javascript">
	function exit() {
	window.location = "php/salirSesion.php";
	};</script>
	<script type="text/javascript">
	</script> 
	
</head>
<body style="background-image: url('img/lgmultiv5.jpg'); background-repeat: no-repeat;background-size: 100% 200%; background-position: center;">


<!-- cabecera -->
<div class="container"><br>

<?php
include 'recursos/div_preventivo.php'
?>

</div>



<script src="../../../Controlador/jquery-2.2.4.min.js"></script>
<script src="../../../Controlador/bootstrap.js"></script>
<script src="../../../Controlador/swiper.min.js"></script>

<!--
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>





<div class="row" >
	<div class="col-md-1"></div>
	<div class="col-md-2">
		<button  type="button" style="width: 100%" class=" btn btn-default" data-toggle="modal" data-target="#crearActividad" >
			<label>
				Agregar    
			</label>
		</button>
	</div>
	<div class="col-md-2">
		<button  type="button" style="width: 100%" class=" btn btn-default" data-toggle="modal" data-target="#editarActividad" >
			<label>
				 Editar   
			</label>
		</button>
	</div>
	<div class="col-md-2">
		<button  type="button" style="width: 100%" class=" btn btn-default" data-toggle="modal" data-target="#borrarActividad" >
			<label>
				Borrar   
			</label>
		</button>
	</div>
	<div class="col-md-2">
		<button type="button" style="width: 100%" class=" btn btn-default" data-toggle="modal" data-target="#verListEq">
			<label>
				lista de equipos
			</label>
			
		</button>
	</div>
	<div class="col-md-2">
		<button  type="button" style="width: 100%" class=" btn btn-default" data-toggle="modal" data-target="#LimpiarTablaActividad" >
			<label>
				Limpiar   
			</label>
		</button>
	</div>
	
</div>









-->

<script src="../../../Controlador/jquery.dataTables.min.js"></script>
<script src="../../../Controlador/dataTables.bootstrap.min.js"></script>
<script src="../../../Controlador/config.js"></script>
</body>
</html>

<?php
	} else {
		header("Location: ../../../index.html");
	}
 
 ?>

