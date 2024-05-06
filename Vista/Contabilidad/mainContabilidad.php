<?php
 
 	require ("../../php/conexion.php");
	session_start();

	if($_SESSION["logueado"] == TRUE) {
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>..::Contabilidad</title>
	<link rel="stylesheet" type="text/css" href="../../Controlador/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../../Controlador/dataTables.bootstrap.min.css">
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../../Controlador/styles.css">
	<script type="text/javascript">
	function exit() {
	window.location = "../php/salirSesion.php";
	};</script>
	<script type="text/javascript">
	</script> 
<?php
include 'recursos/div_headerContabilidad.php';
?>
</head>
<body style="background-color: rgba(112,114,112,1);">
<!-- cabecera -->
<div class="container" style="position: relative; top: 1px"><br>
<div style="position: absolute;top: 5px; ">
				<?php
					include 'recursos/div_balanceSemana.php';
					include 'recursos/div_balanceMes.php';
					include 'recursos/div_balanceFinal.php';
					include 'recursos/div_historialBalance.php';
					include 'recursos/div_libroMayor.php';
					include 'recursos/modal_PeriodoALegalizar.php';
					include 'recursos/div_libroMenor.php';
					include 'recursos/modal_agregarGasto.php';
				?>
</div>			
</div>

<br><br><br><br><br><br><br><br><br><br><br>
<script src="../../Controlador/jquery-2.2.4.min.js"></script>
<script src="../../Controlador/bootstrap.js"></script>
<script src="../../Controlador/swiper.min.js"></script>

<!--
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>



				
-->

<script src="../../Controlador/jquery.dataTables.min.js"></script>
<script src="../../Controlador/dataTables.bootstrap.min.js"></script>
<script src="recursos/js/config.js"></script>
<script src="recursos/js/diagramas.js"></script>
</body>


</html>


<?php
  } else {
    header("Location: ../../../index.html");
  }
 
 ?>