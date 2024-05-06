<?php
 
 	require ("../../php/conexion.php");
	session_start();

	if($_SESSION["logueado"] == TRUE) {
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>..::Actividades</title>
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
<body style="background-image: url('../img/fondos/fondo_r.jpeg'); background-repeat: no-repeat;background-size: 100% 100%; background-position: center;">





<nav class="navbar btn-default" role="navigation">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse"
            data-target=".navbar-ex1-collapse">
      <span class="sr-only">Desplegar navegación</span>
      <span class="icon-bar"><img style="width: 40px; padding-bottom: 10px; padding-right: 10px" src="../img/ico/ico_menu.png"></span>
    </button>
    <img style="width: 250px; padding-top: 10px; padding-left: 7px; padding-bottom: 7px" src="../img/ico/logoVRF.png">
  </div>
  <div  class="collapse navbar-collapse navbar-ex1-collapse">
    <ul style="padding-left:  30px" class="nav navbar-nav">
      <li><a href="preventivo/mainPreventivo.php">Preventivo</a></li>
      <li><a href="#">Correctivo</a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          Analisis <b class="caret"></b>
        </a>
        <ul class="dropdown-menu">
          <li><a href="#">Informes</a></li>
          <li><a href="#">Revisión</a></li>
          <li><a href="#">Calculos</a></li>
          
          <li><a href="#">predictivo</a></li>
        </ul>
      </li>
      <li><a href="#">Obras</a></li>
      <li><a href="#">Instalaciones</a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          Administración <b class="caret"></b>
        </a>
        <ul class="dropdown-menu">
          <li><a href="#">legalización</a></li>
          <li><a href="#">gastos</a></li>
          <li><a href="#">porveedores</a></li>
          <li><a href="#">contratistas</a></li>
          <li><a href="#">RRHH</a></li>
          <!--<li class="divider"></li>-->
        </ul>
      </li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          Logística <b class="caret"></b>
        </a>
        <ul class="dropdown-menu">
          <li><a href="logistica/mainBodega.php">Bodega</a></li>
          <li><a href="#">Empty</a></li>
        </ul>
      </li>
    </ul>
 
    
 
    <form class="navbar-form navbar-right" role="search">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Comentarios">
      </div>
      <button type="submit" class="btn btn-default">Enviar</button>
    </form>
  </div>
</nav>







<!-- cabecera -->
<div class="container" style="opacity: 0.9"><br>

<?php
include 'recursos/menuCronogramaAct.php';
echo "<br><br>";
include 'recursos/tablaCronograma.php';
?>

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
<script src="recursos/config.js"></script>
</body>
<nav class="navbar" style="background: rgba(56,56,56,1);" role="navigation">
  <div class="navbar-footer" style="padding-top: 10px">
    <center><a href="#">www.vrfingenieria.com</a></center>
    <center>
      <a href="#">mantenimientobquilla@vrfingenieria.com</a>
      <label> - </label>
      <a href="#">comercial@vrfingenieria.com</a>
    </center>
  </div>
</nav>


</html>

<?php
include 'recursos/crearActividad.php';
include 'recursos/editarActividad.php';
include 'recursos/borrarActividad.php';
include 'recursos/limpiarCronograma.php';
include 'recursos/listarTipoEquipos.php';
?>



<?php
	} else {
		header("Location: ../../../index.html");
	}
 
 ?>