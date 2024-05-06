<?php
 
 	require ("../php/conexion.php");
	session_start();

	if($_SESSION["logueado"] == TRUE) {
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>..::VRFGestion</title>
	<link rel="stylesheet" type="text/css" href="../Controlador/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../Controlador/dataTables.bootstrap.min.css">
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../Controlador/styles.css">
	<script type="text/javascript">
	function exit() {
	window.location = "php/salirSesion.php";
	};</script>
	<script type="text/javascript">
	</script> 
	
</head>
<body style="background-image: url('img/fondos/lgmultiv5.jpg'); background-repeat: repeat-y;background-size: 1700px 2000px;">


<!-- cabecera -->
<div class="container"><br>
<div class="row">
<div class="col-md-8">
<img src="img/ico/logo.png" id="imgLogoMain">
</div>
<div class="col-md-1">

</div>
<div class="col-md-2 btn-default" style="border-style: ridge;border-radius: 20px; padding-bottom: 1%">
<br><br>
<center><label>USUARIO</label>											
<br>

<font>
	<label style="color: rgba(11,10,6,1);">
		<?php 
				    	$sqlCargarUltUSU = "SELECT * FROM historialvisitas ORDER BY idHistorial DESC";
  						$resultCargarUltUsu = mysqli_query($mysqli,$sqlCargarUltUSU);

					if ($mostrarUsuAct = mysqli_fetch_array($resultCargarUltUsu)) {
				    	echo $mostrarUsuAct['nombreVisitanteHistorial'];
				    }else{
				    	header('Location: ../index.php');
				    }
		?>

	</label>
</font><br>
<font>
	<button class="btn btnExit" onclick="exit()">Salir</button>
</font>
</center>
</div>

</div>
<br><br>

		<?php
include 'recursos/div_menu.php'
	?>												
															
</div>



<br>


</header>
</div>
<!-- fin de cabecera -->

</div>


<!-- contenido-->
<div >
		<?php
			include 'recursos/div_infoLegal.php';
		?><br><br><br>
		<?php
			include 'recursos/div_pieDePag.php';
		?>	

</div>



<!-- 
<div class="container">
<center>

              $sqlCargarClientes = "SELECT * FROM clientes";
              $resultCargarCliente = mysqli_query($mysqli,$sqlCargarClientes);

          if ($mostrarCliente = mysqli_fetch_array($resultCargarCliente)) {

 
    <div>
      include 'recursos/div_clientes.php'
      <br>  
    </div>
  
            }
  
</center>
</div>

-->


<!-- pie de pagina-->

<br>



<!-- modal ver Lista Equipos -->


<div class="container">

	<div class="modal fade" id="verListEq" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Listado de Equipos</h4>
      </div>
      
      <div class="modal-body">
      	<?php
      		$anoHoy = date('y');
			$mesHoy = date('m');
			$diaHoy = date('d');

			$sqlCargarListaEq = "SELECT * FROM lista_tipo_equipos";
			$resultCargarListEq = mysqli_query($mysqli,$sqlCargarListaEq);
	while ($mostrarListaEq = mysqli_fetch_array($resultCargarListEq)) {

			 ?>
			 <center>
			 <div class="row" style="border-right-style: ridge;">
			 	<div class="col-md-1">
			 		
			 	</div>
			 	<div class="col-md-10" style="border-top-style: ridge;">
			 		<label>
			 			<?php echo $mostrarListaEq['aliasEquipo'].": ".$mostrarListaEq['nombreEquipo']?>
			 		</label><br>
			 		<label><?php echo "Tipo: ".$mostrarListaEq['tipoEquipo'] ?></label>
			 	</div>
			 	<div class="col-md-1">
			 		
			 	</div>
			 	
			 </div>
			</center>
				<?php
			}

				?>
			 

      </div>
      
      
    </div>
  </div>
</div>

</div>



<script src="../Controlador/jquery-2.2.4.min.js"></script>
<script src="../Controlador/bootstrap.js"></script>
<script src="../Controlador/swiper.min.js"></script>

<!--
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
-->

<script src="../Controlador/jquery.dataTables.min.js"></script>
<script src="../Controlador/dataTables.bootstrap.min.js"></script>
<script src="../Controlador/config.js"></script>
</body>
</html>

<?php
	} else {
		header("Location: ../index.html");
	}
 
 ?>






 <!-- 











modal ir a cliente edificio banco de bogotá EDBDB1016BQ elemento



















<div class="container">

	<div class="modal fade" id="mnsAgregadoAct" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Resultado de la búsqueda</h4>
      </div>
      
      <div class="modal-body">

      <h3>resultado aparecería aquí</h3>
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">atras</button>

                	    
      </div>
    </div>
  </div>
</div>
</div>
menu edif  banco de bogotá barranquilla modal
<div class="container">

	<div class="modal fade" id="menuEbbbquilla" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Resultado de la búsqueda</h4>
      </div>
      
      <div class="modal-body">
      <center>
      <h3>Escoja una opción</h3><br>
      <a href="ebbbquilla.html" class="btn btn-primary">Edificio Banco de Bogotá Barranquilla</a><br><br>
      <a href="bancodebogotabquilla.html" class="btn btn-primary">Banco de Bogotá Regional Bquilla</a>
      </center>
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">atras</button>

                	    
      </div>
    </div>
  </div>
</div>
</div>

 menu cargar datos modal
<div class="container">

	<div class="modal fade" id="menuBdBBquilla" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Banco de Bogotá Regional Barranquilla</h4>
        <h5 class="modal-title" id="myModalLabel">calle 86 No 51B - 51</h5>
      </div>
      
      <div class="modal-body">
      <center>
      <img style="width: 30%; height: 70%; " src="img/banco-de-bogota.png">
      </center>
      <br>
      <div class="row">
      
      	<div class="col-md-1 ">
      <a href="Clientes/BdBBquilla/5toPiso.php" class="btn btn-primary">5to piso</a><br><br>
      <a href="Clientes/BdBBquilla/4toPiso.php" class="btn btn-primary">4to piso</a><br><br>
      <a href="Clientes/BdBBquilla/3erPiso.php" class="btn btn-primary">3er piso</a><br><br>
      <a href="Clientes/BdBBquilla/2doPiso.php" class="btn btn-primary">2do piso</a><br><br>
      
     	</div>
      	<div class="col-md-2">
      		
      	</div>
      	<div class="col-md-2">
      <a href="Clientes/BdBBquilla/localVivienda.php" class="btn btn-primary">Local Vivienda</a><br><br>
      <a href="Clientes/BdBBquilla/localPremium.php" class="btn btn-primary">Local Premium</a><br><br>
      <a href="Clientes/BdBBquilla/localSucBancaria.php" class="btn btn-primary">Local Sucursal Bancaria</a><br><br>
      <a href="Clientes/BdBBquilla/localExperiencia.php" class="btn btn-primary">Local Experiencia</a><br><br>
      	</div>
      	<div class="col-md-3">
      		
      	</div>
      	<div class="col-md-2">
      <a href="Clientes/BdBBquilla/CADsotanos.php" class="btn btn-primary">Archivos CAD sótanos</a><br><br>
      <a href="Clientes/BdBBquilla/UPSsotano.php" class="btn btn-primary">UPS sótano 1</a><br><br>
       	</div>



      </div>
     
      
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">atras</button>

                	    
      </div>
    </div>
  </div>
</div>
</div>







menu pfizer barranquilla modal
<div class="container">

	<div class="modal fade" id="EDBDB1016BQ" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">modal nuevo cverga</h4>
      </div>
      
      <div class="modal-body">
      <center>
      <h3>Escoja una opción</h3><br>
      <a href="oficinasPfizerBquilla.html" class="btn btn-primary">Oficinas Bquilla</a><br><br>
      <a href="archivoPfizerBquilla.html" class="btn btn-primary">Archivos Bquilla</a>
      </center>
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">atras</button>

                	    
      </div>
    </div>
  </div>
</div>
</div>

















<div class="ventanaMain" id="loginVRF">
<h1>Ingrese los datos del elemento</h1><br><br>

<div class="row">
	<div class="col-md-1">
		Nombre: 
	</div>
	<div class="col-md-6" id="nombreElement">
		<input type="text" name="nombreTXT" size="60%">     
	</div>
	<div class="col-md-1">
		 Tipo:
	</div>
	<div class="col-md-2" id="selectTipo">
		<select name="tipoElement" id="tipoElement">							   			              select = tipoElement
			<option>Material</option>						
			<option>herramienta</option>  					
		</select>
	</div>
	<div class="col-md-2">
	</div>
</div> 
<br>
<div class="row">
	<div class="col-md-1">
		Marca: 
	</div>
	<div class="col-md-5">
		<input type="text" name="marcaElement" size="40%">
	</div>
	<div class="col-md-1">
		Referencia: 
	</div>
	<div class="col-md-5">
		<input type="text" name="refElement" size="40%">	
	</div>
</div><br>
<div class="row">
	<div class="col-md-1">
		Cantidad: 
	</div>
	<div class="col-md-5">
		<input type="text" name="cantElement" size="40%">  
	</div>
	<div class="col-md-1">
		Serial: 
	</div>
	<div class="col-md-5">
		<input type="text" name="serialElement" size="40%"> 
	</div>
</div><br>
<div class="row">
	<div class="col-md-1">
		sede: 
	</div>
	<div class="col-md-11">
		<input type="text" name="sedeElement" size="60%">
	</div>
</div><br>
<div class="row">
	<div class="col-md-1">
		Estado:
	</div>
	<div class="col-md-5" id="estadoElement">
	<select name="estadoElement">											
		<option>										
			nuevo 
		</option>
		<option>										
			Usado
		</option>
		<option>
			Dañado										
		</option>
	</select>
	</div>
	<div class="col-md-2">
	<button  type="button" class="btn btn-primary" data-toggle="modal" data-target="#buscar" style="width: 100%"><label>Buscar</label></button>
	</div>
	<div class="col-md-1">
	</div>
	<div class="col-md-2">
		<input type="submit" id="btnRegistrarElement" value="Registrar" class=" btn btn-success" name="btnRegistrarElement" style="width: 100%">
	</div>
	<div class="col-md-1">
	</div>
</div><br>
<div class="modal fade" id="popup" tabindex="-1" role="dialog" aria-labellebdy="myModalLabel" arial-hidden="true">
	<div class="popup-contenedor" >
		
			
				<button type="button" class="popup-cerrar">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title" id="myModalLabel">Resultado de la busqueda</h4>
				<div class="modal-body">
				xxxx
				</div>
	</div>
</div>


	
</div>
<br>
<div class="row">
	<div class="col-md-1">
	</div>


</div><br><br><br>

</form>            
--><!-- ventana Sistema 16 -->
			