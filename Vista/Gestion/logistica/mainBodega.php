<?php
 
 	require ("../../../php/conexion.php");
	session_start();

	if($_SESSION["logueado"] == TRUE) {
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>..::Bodega</title>
	<link rel="stylesheet" type="text/css" href="../../../Controlador/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../../../Controlador/dataTables.bootstrap.min.css">
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../../../Controlador/styles.css">
	<script type="text/javascript">
	function exit() {
	window.location = "../php/salirSesion.php";
	};</script>
	<script type="text/javascript">
	</script> 

</head>
<body style="background:rgba(0,33,21,100);">

<nav class="navbar btn-default" role="navigation">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse"
            data-target=".navbar-ex1-collapse">
      <span class="sr-only">Desplegar navegación</span>
      <span class="icon-bar"><img style="width: 40px; padding-bottom: 10px; padding-right: 10px" src="../img/ico/ico_menu.png"></span>
    </button>
    <img style="width: 250px; padding-top: 10px; padding-left: 7px; padding-bottom: 7px" src="../../img/ico/logoVRF.png">
  </div>
  <div  class="collapse navbar-collapse navbar-ex1-collapse">
    <ul style="padding-left:  30px" class="nav navbar-nav">
      <li><a href="preventivo/mainPreventivo.php">Inventario</a></li>
      <li><a href="#">Almacen</a></li>
      <li><a href="#">Insumos</a></li>
        <!--<ul class="dropdown-menu">
          <li><a href="#">Informes</a></li>
          <li><a href="#">Revisión</a></li>
          <li><a href="#">Calculos</a></li>
          
          <li><a href="#">predictivo</a></li>
        </ul>-->
      
      <li><a href="#">Herramientas</a></li>
    </ul>
    <form class="navbar-form navbar-right" role="search">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Comentarios">
      </div>
      <button type="submit" class="btn btn-default">Enviar</button>
    </form>
  </div>
</nav>


<div class="container">
  <div >
    <center >
      <?php
        include 'recursos/menuAlmacen.php';
      ?>
    </center>
  </div>
</div>



<div class="container">
	<div >
    <center >
      <?php
    include 'recursos/listarInventario.php';
    ?>
    </center>
	</div>
</div>




</body>

<br><br><br><br><br><br><br><br><br><br><br>
<script src="../../../Controlador/jquery-2.2.4.min.js"></script>
<script src="../../../Controlador/bootstrap.js"></script>
<script src="../../../Controlador/swiper.min.js"></script>

<!--
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>



				
-->

<script src="../../../Controlador/jquery.dataTables.min.js"></script>
<script src="../../../Controlador/dataTables.bootstrap.min.js"></script>

<nav class="navbar"style="background: rgba(56,56,56,1);" role="navigation">
  <div class="navbar-footer" style="padding-top: 10px">
    <center>
    	<a href="#">
    	<font style="color: rgba(10,100,200,300)">
    	www.vrfingenieria.com
    	</font>
    	</a>
    </center>
    <center>
      	<a href="#">
      		<font style="color: rgba(10,100,200,300)">
      	mantenimientobquilla@vrfingenieria.com
      		</font>
      	</a>
     	 <a href="#">
     		 <font style="color: rgba(10,100,200,300)">
      	 - 
      		</font>
  		</a>
  		<a href="#">
  			<font style="color: rgba(10,100,200,300)">
  		comercial@vrfingenieria.com <br><br>
  			</font>
  		</a>
    </center>
  </div>
</nav>


</html>


<?php
	} else {
		header("Location: ../../../../index.html");
	}
 
 ?>