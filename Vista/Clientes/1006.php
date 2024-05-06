<?php
 
	session_start();
	$prueba = "Texto de Prueba PHP";

	if($_SESSION["logueado"] == TRUE) {
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>..::Local Experiencia</title>
	<link rel="stylesheet" type="text/css" href="../../Controlador/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../../Controlador/dataTables.bootstrap.min.css">
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../../Controlador/styles.css">
	<script type="text/javascript">
	function exit() {
	window.location = "php/salirSesion.php";
	};</script>
	<script type="text/javascript">
	</script> 
	
</head>
<body>
<header>
<center>
<div class="container">
<img  src="../../img/bdb/BdBBq.jpg">
<br>
<br>
	<div>
		<div >
			<img style="width: 60%" src="../../img/2doPisoPlane.png">
		</div>
		<br>
		<label>Listado de Equipos</label>
		<br><br>


		<div class="row">
			<div class="col-md-1">
				
			</div>
			<div class="col-md-2">
				<label>No. Item</label>
			</div>
			<div class="col-md-4"><label>Tipo de Equipo</label></div>
			<div class="col-md-4">
				<label>Menú</label>
			</div>
			<div class="col-md-1">
				
			</div>
		</div>


<br>


		<div class="row">
			<div class="col-md-1">
				
			</div>
			<div class="col-md-2">
				<label>1</label>
			</div>
			<div class="col-md-4"><label>Aire Acondicionado</label></div>
			<div class="col-md-4">
				<button href="#" class="dropdown-toggle btn btn-default cienResponsive " data-toggle="dropdown" role="button">
						Hall Oficinas #1
						<span class="caret"></span>
						</button>
						
						<ul class="dropdown-menu " role="Menu">

							<li class="dropdown">
								<button  type="button" class=" btn btn-default cienResponsive" data-toggle="modal" data-target="#datosAA1" style="width: 100% ">
								Datos de Equipo								
								</button>
							</li>

							<li>
								<a  type="button" class="btn btn-default" href="historial/localExperiencia/aireAcond1.php" style="width: 100%">
								<label>
									Historial
								</label>
								</a>
							</li>
						</ul>
			</div>
			<div class="col-md-1">
				
			</div>
		</div>


<br>
		<div class="row">
			<div class="col-md-1">
				
			</div>
			<div class="col-md-2">
				<label>2</label>
			</div>
			<div class="col-md-4"><label>Aire Acondicionado</label></div>
			<div class="col-md-4">
				<button href="#" class="dropdown-toggle btn btn-default cienResponsive " data-toggle="dropdown" role="button">
						Hall Oficinas #2
						<span class="caret"></span>
						</button>
						
						<ul class="dropdown-menu " role="Menu">

							<li class="dropdown">
								<button  type="button" class=" btn btn-default cienResponsive" data-toggle="modal" data-target="#datosAA2" style="width: 100% ">
									Datos de Equipo
								</button>
							</li>

							<li>
								<a  type="button" class="btn btn-default" href="historial/localExperiencia/aireAcond2.php" style="width: 100%">
								<label>
									Historial
								</label>
								</a>
							</li>
						</ul>
			</div>
			<div class="col-md-1">
				
			</div>
		</div>

<br>


		<div class="row">
			<div class="col-md-1">
				
			</div>
			<div class="col-md-2">
				<label>3</label>
			</div>
			<div class="col-md-4"><label>Aire Acondicionado</label></div>
			<div class="col-md-4">
				<button href="#" class="dropdown-toggle btn btn-default cienResponsive " data-toggle="dropdown" role="button">
						Hall Oficinas #3
						<span class="caret"></span>
						</button>
						
						<ul class="dropdown-menu " role="Menu">

							<li class="dropdown">
								<button  type="button" class=" btn btn-default cienResponsive" data-toggle="modal" data-target="#datosAA3" style="width: 100% ">
								Datos de Equipo								
								</button>
							</li>

							<li>
								<a  type="button" class="btn btn-default" href="historial/localExperiencia/aireAcond3.php" style="width: 100%">
								<label>
									Historial
								</label>
								</a>
							</li>
						</ul>
			</div>
			<div class="col-md-1">
				
			</div>
		</div>

		<br>

		<div class="row">
			<div class="col-md-1">
				
			</div>
			<div class="col-md-2">
				<label>4</label>
			</div>
			<div class="col-md-4"><label>Extractor</label></div>
			<div class="col-md-4">
				<button href="#" class="dropdown-toggle btn btn-default cienResponsive " data-toggle="dropdown" role="button">
						Baños Hombres
						<span class="caret"></span>
						</button>
						
						<ul class="dropdown-menu " role="Menu">

							<li class="dropdown">
								<button  type="button" class=" btn btn-default cienResponsive" data-toggle="modal" data-target="#datosExtraccBañoHombre" style="width: 100% ">
								Datos de Equipo								
								</button>
							</li>

							<li>
								<a  type="button" class="btn btn-default" href="historial/localExperiencia/extrBanoHombre.php" style="width: 100%">
								<label>
									Historial
								</label>
								</a>
							</li>
						</ul>
			</div>
			<div class="col-md-1">
				
			</div>
		</div>


<br>


		<div class="row">
			<div class="col-md-1">
				
			</div>
			<div class="col-md-2">
				<label>5</label>
			</div>
			<div class="col-md-4"><label>Extractor</label></div>
			<div class="col-md-4">
				<button href="#" class="dropdown-toggle btn btn-default cienResponsive " data-toggle="dropdown" role="button">
						Baños Mujeres
						<span class="caret"></span>
						</button>
						
						<ul class="dropdown-menu " role="Menu">

							<li class="dropdown">
								<button  type="button" class=" btn btn-default cienResponsive" data-toggle="modal" data-target="#extrBanoMujer" style="width: 100% ">
								Datos de Equipo								
								</button>
							</li>

							<li>
								<a  type="button" class="btn btn-default" href="historial/localExperiencia/extrBanoMujer.php" style="width: 100%">
								<label>
									Historial
								</label>
								</a>
							</li>
						</ul>
			</div>
			<div class="col-md-1">
				
			</div>
		</div>

		<br>


		<div class="row">
			<div class="col-md-1">
				
			</div>
			<div class="col-md-2">
				<label>6</label>
			</div>
			<div class="col-md-4"><label>Ventilador</label></div>
			<div class="col-md-4">
				<button href="#" class="dropdown-toggle btn btn-default cienResponsive " data-toggle="dropdown" role="button">
						Ventilador Renovacion de Aire
						<span class="caret"></span>
						</button>
						
						<ul class="dropdown-menu " role="Menu">

							<li class="dropdown">
								<button  type="button" class=" btn btn-default cienResponsive" data-toggle="modal" data-target="#ventSum" style="width: 100% ">
								Datos de Equipo								
								</button>
							</li>

							<li>
								<a  type="button" class="btn btn-default" href="historial/localExperiencia/ventSum.php" style="width: 100%">
								<label>
									Historial
								</label>
								</a>
							</li>
						</ul>
			</div>
			<div class="col-md-1">
				
			</div>
		</div>

		<br>
		<br>








	</div>
</div>
</center>
</header>
<!-- inicio de modal-->


<!-- modal aa1 modal-->
<div class="container">

	<div class="modal" id="datosAA1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Aire Acondicionado No 1</h4>
      </div>
      
      <div class="modal-body">
      <center><br>
      <label>Tipo:</label><?php echo $prueba;  ?><br>
      <label>Modelo:</label><?php echo $prueba;  ?><br>
      <label>Serial:</label><?php echo $prueba;  ?><br>
      <label>Capacidad:</label><?php echo $prueba;  ?><br>
      </center>
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">atras</button>

                	    
      </div>
    </div>
  </div>
</div>
</div>

<!-- modal aa2-->
<div class="container">

	<div class="modal" id="datosAA2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Aire Acondicionado No 2</h4>
      </div>
      
      <div class="modal-body">
      <center><br>
      <label>Tipo:</label><?php echo $prueba;  ?><br>
      <label>Modelo:</label><?php echo $prueba;  ?><br>
      <label>Serial:</label><?php echo $prueba;  ?><br>
      <label>Capacidad:</label><?php echo $prueba;  ?><br>
      </center>
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">atras</button>

                	    
      </div>
    </div>
  </div>
</div>
</div>

<!-- modal aa3-->
<div class="container">

	<div class="modal" id="datosAA3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Aire Acondicionado No 3</h4>
      </div>
      
      <div class="modal-body">
      <center><br>
      <label>Tipo:</label><?php echo $prueba;  ?><br>
      <label>Modelo:</label><?php echo $prueba;  ?><br>
      <label>Serial:</label><?php echo $prueba;  ?><br>
      <label>Capacidad:</label><?php echo $prueba;  ?><br>
      </center>
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">atras</button>

                	    
      </div>
    </div>
  </div>
</div>
</div>


<!-- modal extraccion baño hombres-->
<div class="container">

	<div class="modal" id="datosExtraccBañoHombre" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Unidad de Extraccion Baño Hombres</h4>
      </div>
      
      <div class="modal-body">
      <center><br>
      <label>Tipo:</label><?php echo $prueba;  ?><br>
      <label>Modelo:</label><?php echo $prueba;  ?><br>
      <label>Serial:</label><?php echo $prueba;  ?><br>
      <label>Capacidad:</label><?php echo $prueba;  ?><br>
      </center>
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">atras</button>

                	    
      </div>
    </div>
  </div>
</div>
</div>

<!-- modal extraccion baño mujeres-->
<div class="container">

	<div class="modal" id="extrBanoMujer" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Unidad de Extraccion Baño Mujeres</h4>
      </div>
      
      <div class="modal-body">
      <center><br>
      <label>Tipo:</label><?php echo $prueba;  ?><br>
      <label>Modelo:</label><?php echo $prueba;  ?><br>
      <label>Serial:</label><?php echo $prueba;  ?><br>
      <label>Capacidad:</label><?php echo $prueba;  ?><br>
      </center>
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">atras</button>

                	    
      </div>
    </div>
  </div>
</div>
</div>

<!-- modal ventilador Suministro-->
<div class="container">

	<div class="modal" id="ventSum" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Unidad de Ventilación de Renobación de Aire</h4>
      </div>
      
      <div class="modal-body">
      <center><br>
      <label>Tipo:</label><?php echo $prueba;  ?><br>
      <label>Modelo:</label><?php echo $prueba;  ?><br>
      <label>Serial:</label><?php echo $prueba;  ?><br>
      <label>Capacidad:</label><?php echo $prueba;  ?><br>
      </center>
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">atras</button>

                	    
      </div>
    </div>
  </div>
</div>
</div>

</body>

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
<script src="../../Controlador/config.js"></script>


</html>
<?php
	} else {
		header("Location: ../../index.html");
	}
 
 ?>


 <!--  <div >

		<div class="row " >
		<div class="col-md-4">
			
		</div>
			<div class="col-md-1">
						

						<button href="#" class="dropdown-toggle btn btn-default cienResponsive " data-toggle="dropdown" role="button">
						Equipos
						<span class="caret"></span>
						</button>
						
						<ul class="dropdown-menu " role="Menu">

							<li class="dropdown">
								<button  type="button" class=" btn btn-default cienResponsive" data-toggle="modal" data-target="#menuEbbbquilla" style="width: 100% ">
								
									Edif. Banco de Bogotá 
								
								</button>
							</li>

							<li>
								<button  type="button" class="btn btn-default" data-toggle="modal" data-target="#menuPfizerBquilla" style="width: 100%">
								<label>
									Pfizer
								</label>
								</button>
							</li>

							<li class="dropdown">
								<button  type="button" class=" btn btn-default" data-toggle="modal" data-target="#menuBdBBquilla" style="width: 100% ">
								<label>
									Banco de Bogotá Bquilla 
								</label>
								</button>
							</li>
						</ul>
					

			</div>

			<div class="col-md-1">
			<button href="#" class="dropdown-toggle btn btn-default cienResponsive " data-toggle="dropdown" role="button">
						Equipos
						<span class="caret"></span>
						</button>
						
						<ul class="dropdown-menu " role="Menu">

							<li class="dropdown">
								<button  type="button" class=" btn btn-default cienResponsive" data-toggle="modal" data-target="#menuEbbbquilla" style="width: 100% ">
								
									Edif. Banco de Bogotá 
								
								</button>
							</li>

							<li>
								<button  type="button" class="btn btn-default" data-toggle="modal" data-target="#menuPfizerBquilla" style="width: 100%">
								<label>
									Pfizer
								</label>
								</button>
							</li>

							<li class="dropdown">
								<button  type="button" class=" btn btn-default" data-toggle="modal" data-target="#menuBdBBquilla" style="width: 100% ">
								<label>
									Banco de Bogotá Bquilla 
								</label>
								</button>
							</li>
						</ul>
			</div>
			
			<div class="col-md-1">
				<button href="#" class="dropdown-toggle btn btn-default cienResponsive " data-toggle="dropdown" role="button">
						Equipos
						<span class="caret"></span>
						</button>
						
						<ul class="dropdown-menu " role="Menu">

							<li class="dropdown">
								<button  type="button" class=" btn btn-default cienResponsive" data-toggle="modal" data-target="#menuEbbbquilla" style="width: 100% ">
								
									Edif. Banco de Bogotá 
								
								</button>
							</li>

							<li>
								<button  type="button" class="btn btn-default" data-toggle="modal" data-target="#menuPfizerBquilla" style="width: 100%">
								<label>
									Pfizer
								</label>
								</button>
							</li>

							<li class="dropdown">
								<button  type="button" class=" btn btn-default" data-toggle="modal" data-target="#menuBdBBquilla" style="width: 100% ">
								<label>
									Banco de Bogotá Bquilla 
								</label>
								</button>
							</li>
						</ul>
			</div>
			
			<div class="col-md-1">
				<button href="#" class="dropdown-toggle btn btn-default cienResponsive " data-toggle="dropdown" role="button">
						Equipos
						<span class="caret"></span>
						</button>
						
						<ul class="dropdown-menu " role="Menu">

							<li class="dropdown">
								<button  type="button" class=" btn btn-default cienResponsive" data-toggle="modal" data-target="#menuEbbbquilla" style="width: 100% ">
								
									Edif. Banco de Bogotá 
								
								</button>
							</li>

							<li>
								<button  type="button" class="btn btn-default" data-toggle="modal" data-target="#menuPfizerBquilla" style="width: 100%">
								<label>
									Pfizer
								</label>
								</button>
							</li>

							<li class="dropdown">
								<button  type="button" class=" btn btn-default" data-toggle="modal" data-target="#menuBdBBquilla" style="width: 100% ">
								<label>
									Banco de Bogotá Bquilla 
								</label>
								</button>
							</li>
						</ul>
			</div>
			<div class="col-md-4">
			
		</div>
		</div>
	</div>  -->