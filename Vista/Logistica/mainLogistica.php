<?php
 
 	require ("../../php/conexionApp.php");
	session_start();

	if($_SESSION["logueado"] == TRUE) {
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>..::logística</title>
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
<body style="background-image: url('../img/fondos/fondo_r.jpeg');background-size: 100% 70%">





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
      <li>
        <a href="preventivo/mainPreventivo.php" class="dropdown-toggle" data-toggle="dropdown">Inventario <b class="caret"></b>
        </a>
        
        <ul class="dropdown-menu">
          <li>
            <a href="#">Agregar
              <b>
                <img style="width: 20px" src="../img/fondos/ico_add_1.png">
              </b>
            </a>
          </li>
          <li>
            <a href="#">Eliminar
              <b>
                <img style="width: 20px" src="../img/fondos/ico_borrar.png">
              </b>
            </a>
          </li>
        </ul>
      </li>
      <li><a href="#">Proveedores</a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          Analisis <b class="caret"></b>
        </a>
        <ul class="dropdown-menu">
          <li><a href="#">Empty</a></li>
          <li><a href="#">Empty</a></li>
          <li><a href="#">Empty</a></li>
          <li><a href="#">Empty</a></li>
        </ul>
      </li>        
    </ul>
     
    <?php
      include 'recursos/form_buscarElemento.php';
    ?>
 
    
  </div>
</nav>




<!-- cabecera -->
<div class="container" style="opacity: 0.9"><br>

<?php
include 'recursos/div_listarInventario.php'
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


</html>


<?php
  } else {
    header("Location: ../../../index.html");
  }
 
 ?>