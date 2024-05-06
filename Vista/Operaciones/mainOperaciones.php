<?php
 
 	require ("../../php/conexionApp.php");
	session_start();

	if($_SESSION["logueado"] == TRUE) {
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>..::Operaciones</title>
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

</head>
<body >


<?php
include 'recursos/nav_headerOperaciones.php';
include 'recursos/div_crearActividad.php';
include 'recursos/div_editarActividad.php';
include 'recursos/div_listarTipoEquipos.php';
include 'recursos/div_borrarActividad.php';
include 'recursos/div_limpiarActividad.php';
?>







<!-- cabecera -->
<div style="width: 100%" >
	<center>

<?php
include 'recursos/div_listaCronograma.php';
// include 'recursos/divAbsolute/div_Correctivo.php';
// include 'recursos/divAbsolute/div_Instalacion.php';
// include 'recursos/divAbsolute/div_Levantamiento.php';
// include 'recursos/divAbsolute/div_listarGantt.php';
// include 'recursos/divAbsolute/div_ObraRemodelacion.php';
// include 'recursos/divAbsolute/div_Preventivo.php';
?>
	
</center>
</div>
<br><br><br><br><br><br><br><br><br><br><br>
<script src="recursos/js/config.js"></script>
<script src="../../Controlador/jquery-2.2.4.min.js"></script>
<script src="../../Controlador/bootstrap.js"></script>
<script src="../../Controlador/swiper.min.js"></script>

<!--
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>




    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "test@hostinger-tutorials.com";
    $to = "test@gmail.com";
    $subject = "Checking PHP mail";
    $message = "PHP mail works just fine";
    $headers = "From:" . $from;
    mail($to,$subject,$message, $headers);
    echo "The email message was sent.";
);


				
-->

<script src="../../Controlador/jquery.dataTables.min.js"></script>
<script src="../../Controlador/dataTables.bootstrap.min.js"></script>
<script src="recursos/config.js"></script>
</body>


</html>


<?php
  } else {
    header("Location: ../../../index.html");
  }
 
 ?>