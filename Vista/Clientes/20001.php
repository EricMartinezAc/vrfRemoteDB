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
	<link rel="stylesheet" type="text/css" href="../../Controlador/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../../Controlador/dataTables.bootstrap.min.css">
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../../Controlador/styles.css">
	<link rel="stylesheet" type="text/css" href="../../Controlador/estiloBdB.css">
	<script type="text/javascript">
	function exit() {
	window.location = "../php/salirSesion.php";
	};</script>
	
</head>
<body onload="ValidarCaudal()">
<!-- HEADER -->
<div class="container"  >
	<div class="headerBdB" >
		<img src="../img/bdb/logoBdB.png" style="width: 30%;height: 10%">
		<label>PATRIMONIOS AUTONOMOS</label>
<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">

			<div class="btn-group">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu">
					<span class="sr-only"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>

				<span class="navbar-brand" >INICIO</span>

			</div>



			<div class="collapse navbar-collapse" id="menu">

				<ul class="nav navbar-nav">
					
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
						Planta de condensación
						<span class="caret"></span>
						</a>
							<ul class="dropdown-menu " role="Menu">
								<li class="dropdown">
									<button type="button" onclick="mostrarDivTorre1()" class="btn-null btn btn-default" style="width: 100%"> 
										<label >
										Torre 1
										</label>
									</button>
								</li>
								<li class="dropdown">
									<button type="button" onclick="mostrarDivTorre2()" class="btn-null btn btn-default" style="width: 100%"> 
										<label >
										Torre 2
										</label>
									</button>
								</li>
								<li class="dropdown">
									<button type="button" onclick="mostrarDivBAC1()" class="btn-null btn btn-default" style="width: 100%"> 
										<label >
										Bomba 1
										</label>
									</button>
								</li>
								<li class="dropdown">
									<button type="button" onclick="mostrarDivBAC2()" class="btn-null btn btn-default" style="width: 100%"> 
										<label >
										Bomba 2
										</label>
									</button>
								</li>
								<li class="dropdown">
									<button type="button" onclick="mostrarDivECOPlanta()" class="btn-null btn btn-default" style="width: 100%"> 
										<label >
										ECOPlanta
										</label>
									</button>
								</li>

							</ul>
					</li>





					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
						Circuito Cerrado
						<span class="caret"></span>
						</a>
							<ul class="dropdown-menu " role="Menu">
								<li class="dropdown">
									<button type="button" onclick="mostrarDivBAF1()" class="btn-null btn btn-default" style="width: 100%"> 
										<label >
										Bomba 1
										</label>
									</button>
								</li>
								<li class="dropdown">
									<button type="button" onclick="mostrarDivBAF2()" class="btn-null btn btn-default" style="width: 100%"> 
										<label >
										Bomba 2
										</label>
									</button>
								</li>
								<li class="dropdown">
									<button type="button" onclick="mostrarDivBAF3()" class="btn-null btn btn-default" style="width: 100%"> 
										<label >
										Bomba 3
										</label>
									</button>
								</li>
								<li class="dropdown">
									<button type="button" onclick="mostrarDivBAF4()" class="btn-null btn btn-default" style="width: 100%"> 
										<label >
										Bomba 4
										</label>
									</button>
								</li>

							</ul>
					</li>


					<li>
						<a>	<button class="btn-null"  onclick="mostrarDivLobby()"> Lobby</button></a>
				    </li>
					<li>
						<a>	<button class="btn-null"  onclick="mostrarDivOfAdmon()"> Of. Admon</button></a>
				    </li>
				    <li>
						<a><button class="btn-null"  onclick="mostrarDivOfMonitoreo()">Of. Monitoreo</button></a>
				    </li>
				</ul>
			</div>



		</div>
	</nav>

	</div>
</div>	

<!-- CONTENIDO -->














<div class="container">
	
<section>
<div class="main">
			<!-- ventana INICIO -->

			













			<!-- ventana Torre 1 -->
<div id="divTorre1" style="color:opacity: 0.9; position: absolute;">
<div class="contenido">						
<div class="container" >

	<br>
<div style="background-color: #ccc;width: 100%">
<br><br>


<!-- cabecera -->
	<center>
		
			<br><br>
			<img src="../img/bdb/torreProtec.jpeg"><br>
			<br><br>










<div class="row">
			<div class="col-md-3">
				
			</div>
			<div class="col-md-2">
				<label>TCE1</label>
			</div>
			<div class="col-md-2"><label>Torre de Enfriamiento</label></div>
			<div class="col-md-2">
				<button href="#" class="dropdown-toggle btn btn-default cienResponsive " data-toggle="dropdown" role="button">
						Opciones
						<span class="caret"></span>
						</button>
						
						<ul class="dropdown-menu " role="Menu">

							<li class="dropdown">
								<button  type="button" class=" btn btn-default cienResponsive" data-toggle="modal" data-target="#addHistTCE" style="width: 100% ">
								Agregar Historial					
								</button>
							</li>

							<li>
								<a  type="button" class="btn btn-default" href="../php/VerHistorialTC1.php" style="width: 100%">
								<label>
									Historial
								</label>
								</a>
							</li>
						</ul>
			</div>
			<div class="col-md-3">
				
			</div>
</div>



















	</center>
</div>
<center>
<?php
 $anoHoy = date('y');
 $mesHoy = date('m');
 $diaHoy = date('d');
 $sqlCargarHist = "SELECT * FROM parametros_mtto_torres WHERE nombreEquipo = 'TCE1' ORDER BY fechaEjecucion DESC";
 $resultCargar = mysqli_query($mysqli,$sqlCargarHist);

	if ($mostrar = mysqli_fetch_array($resultCargar)) {

?>
<br>
<div class="row">
	<div class="col-md-12">
		<label>Fecha de ejecución:</label>
		<label>
		<?php echo $mostrar['fechaEjecucion'] ?>
		</label>
	</div>
</div>
<br><br>


<div class="row" style="padding-right: 7%; padding-left: 7%">
	<div class="col-md-3" style="border-bottom-style: ridge;">
		<label>Hora de Entrada:</label>
	</div>
	<div class="col-md-3" style="border-bottom-style: ridge;">
		<label><?php echo $mostrar['horaEntrada'] ?></label>
	</div>
	<div class="col-md-3" style="border-bottom-style: ridge;">
		<label>Hora de Salida:</label>
	</div>
	<div class="col-md-3" style="border-bottom-style: ridge;">
		<label><?php echo $mostrar['horaSalida'] ?></label>
	</div>		
</div>
<br>
<div class="row" style="padding-right: 7%; padding-left: 7%">
	<div class="col-md-3" style="border-bottom-style: ridge;">
		<label>Tipo de Actividad:</label>
	</div>
	<div class="col-md-3" style="border-bottom-style: ridge;">
		<label><?php echo $mostrar['tipoActividad'] ?></label>
	</div>
	<div class="col-md-3" style="border-bottom-style: ridge;">
		<label>Marca:</label>
	</div>
	<div class="col-md-3" style="border-bottom-style: ridge;">
		<label><?php echo $mostrar['marcaEquipo'] ?></label>
	</div>
</div>
<br>
<div class="row" style="padding-right: 7%; padding-left: 7%">
	<div class="col-md-3" style="border-bottom-style: ridge;">
		<label>Modelo:</label>
	</div>
	<div class="col-md-3" style="border-bottom-style: ridge;">
		<label><?php echo $mostrar['modeloEq'] ?></label>
	</div>
	<div class="col-md-3" style="border-bottom-style: ridge;">
		<label>Serial:</label>
	</div>
	<div class="col-md-3" style="border-bottom-style: ridge;">
		<label><?php echo $mostrar['serialEq'] ?></label>
	</div>		
</div>
<br><br>

<div class="row" style="padding-right: 7%; padding-left: 7%">
	<div class="col-md-3" >
		
	</div>
	<div class="col-md-6" >
		<label>Parámetros de Funcionamiento</label>
	</div>
	<div class="col-md-3" >
		
	</div>		
</div>
<br>

<div class="row" style="padding-right: 7%; padding-left: 7%">
	<div class="col-md-3" style="border-bottom-style: ridge;">
		<label>Presión (PSI):</label>
	</div>
	<div class="col-md-3" style="border-bottom-style: ridge;">
		<label><?php echo $mostrar['presionSistPSI'] ?></label>
	</div>
	<div class="col-md-3" style="border-bottom-style: ridge;">
		<label>Temperatura Ambiente (C°):</label>
	</div>
	<div class="col-md-3" style="border-bottom-style: ridge;">
		<label><?php echo $mostrar['tAmbienteC'] ?></label>
	</div>		
</div>
<br>

<div class="row" style="padding-right: 7%; padding-left: 7%">
	<div class="col-md-3" style="border-bottom-style: ridge;">
		<label>Temp de Agua Entrada (C°):</label>
	</div>
	<div class="col-md-3" style="border-bottom-style: ridge;">
		<label><?php echo $mostrar['tReturnSistC'] ?></label>
	</div>
	<div class="col-md-3" style="border-bottom-style: ridge;">
		<label>Temp de Agua Salida (C°):</label>
	</div>
	<div class="col-md-3" style="border-bottom-style: ridge;">
		<label><?php echo $mostrar['tSupplySistC'] ?></label>
	</div>		
</div>
<br>

<div class="row" style="padding-right: 7%; padding-left: 7%">
	<div class="col-md-3" style="border-bottom-style: ridge;">
		<label>Frecuencia Operacional (Hz):</label>
	</div>
	<div class="col-md-3" style="border-bottom-style: ridge;">
		<label><?php echo $mostrar['hzOp'] ?></label>
	</div>
	<div class="col-md-3" style="border-bottom-style: ridge;">
		<label>Caudal de Agua (GPM):</label>
	</div>
	<div class="col-md-3" style="border-bottom-style: ridge;">
		<label id="caudalimetro"><?php echo $mostrar['caudalGPM'] ?></label>
	</div>		
</div>
<br>


<div class="row" style="padding-right: 7%; padding-left: 7%">
	<div class="col-md-2" style="border-bottom-style: ridge;">
		<label>Volt L1-L2:</label>
	</div>
	<div class="col-md-2" style="border-bottom-style: ridge;">
		<label><?php echo $mostrar['v1_2'] ?></label>
	</div>
	<div class="col-md-2" style="border-bottom-style: ridge;">
		<label>Volt L1 - L3:</label>
	</div>
	<div class="col-md-2" style="border-bottom-style: ridge;">
		<label><?php echo $mostrar['v1_3'] ?></label>
	</div>	
	<div class="col-md-2" style="border-bottom-style: ridge;">
		<label>Volt L2 - L3:</label>
	</div>
	<div class="col-md-2" style="border-bottom-style: ridge;">
		<label><?php echo $mostrar['v2_3'] ?></label>
	</div>	
</div>
<br>
<div class="row" style="padding-right: 7%; padding-left: 7%">
	<div class="col-md-2" style="border-bottom-style: ridge;">
		<label>Amp L1</label>
	</div>
	<div class="col-md-2" style="border-bottom-style: ridge;">
		<label><?php echo $mostrar['a1'] ?></label>
	</div>	
	<div class="col-md-2" style="border-bottom-style: ridge;">
		<label>Amp L2</label>
	</div>
	<div class="col-md-2" style="border-bottom-style: ridge;">
		<label><?php echo $mostrar['a2'] ?></label>
	</div>	
	<div class="col-md-2" style="border-bottom-style: ridge;">
		<label>Amp L3</label>
	</div>
	<div class="col-md-2" style="border-bottom-style: ridge;">
		<label><?php echo $mostrar['a3'] ?></label>
	</div>	
</div>
<br><br>	
<div class="row" style="padding-right: 7%; padding-left: 7%">
	<div class="col-md-3" >
		
	</div>
	<div class="col-md-6" >
		<label>Pruebas Realizadas</label>
	</div>
	<div class="col-md-3" >
		
	</div>		
</div>
<br>


<div class="row" style="padding-right: 7%; padding-left: 7%">
	<div class="col-md-1" ">
		
	</div>
	<div class="col-md-10" style="border-bottom-style: ridge;">
		<p><?php echo $mostrar['pruebasRealizadas'] ?></p>
	</div>
	<div class="col-md-1" ">
		
	</div>	
</div>
<br>

<div class="row" style="padding-right: 7%; padding-left: 7%">
	<div class="col-md-3" >
		
	</div>
	<div class="col-md-6" >
		<label>Actividades Realizadas</label>
	</div>
	<div class="col-md-3" >
		
	</div>		
</div>
<br>


<div class="row" style="padding-right: 7%; padding-left: 7%">
	<div class="col-md-1" >
		
	</div>
	<div class="col-md-10" style="border-bottom-style: ridge;">
		<p><?php echo $mostrar['actividadesRealizadas'] ?></p>
	</div>
	<div class="col-md-1">
		
	</div>	
</div>
<br>

<div class="row" style="padding-right: 7%; padding-left: 7%">
	<div class="col-md-3" >
		
	</div>
	<div class="col-md-6" >
		<label>Repuestos Requeridos</label>
	</div>
	<div class="col-md-3" >
		
	</div>		
</div>
<br>

<div class="row" style="padding-right: 7%; padding-left: 7%">
	<div class="col-md-1" >
		
	</div>
	<div class="col-md-10" style="border-bottom-style: ridge;">
		<p><?php echo $mostrar['repuestosRQ'] ?></p>
	</div>
	<div class="col-md-1" >
		
	</div>	
</div>
<br>

<div class="row" style="padding-right: 7%; padding-left: 7%">
	<div class="col-md-3" >
		
	</div>
	<div class="col-md-6" >
		<label>Observaciones</label>
	</div>
	<div class="col-md-3" >
		
	</div>		
</div>
<br>

<div class="row" style="padding-right: 7%; padding-left: 7%">
	<div class="col-md-1" >
		
	</div>
	<div class="col-md-10" style="border-bottom-style: ridge;">
		<p><?php echo $mostrar['observaciones'] ?></p>
	</div>
	<div class="col-md-1" >
		
	</div>	
</div>
<br>


</div><br>

		
	</center><br>
<?php
}else{
	?>
	<center> <label>no existen datos</label></center>
	<?php
}
?>

<!-- Fin cabecera 
INSERT INTO `parametros_mtto_torres` (`idhistorial`, `fechaEjecucion`, `horaEntrada`, `horaSalida`, `tipoActividad`, `modeloEq`, `serialEq`, `nombreEquipo`, `presionSistPSI`, `tSupplySistC`, `tReturnSistC`, `tAmbienteC`, `v1_2`, `v2_3`, `v1_3`, `a1`, `a2`, `a3`, `hzOp`, `caudalGPM`, `pruebasRealizadas`, `actividadesRealizadas`, `repuestosRQ`, `observaciones`) VALUES -->

<!-- fila -->


<!-- Fin Fila -->
	
</div>

</div>

</div>
</div>







			<!-- ventana Torre 2 -->
<div id="divTorre2" style="opacity: 0; position: absolute;">
<div class="contenido">
<div class="row" >
						
<div class="container" style="background-image: url('../img/edificio3.jpg'); background-repeat: no-repeat;"><br>
	<label style="color: white">Listado de Parámetros</label>
<br><br>


<!-- cabecera -->
	<center>
	
			<img src="../img/torreObj.png"><br>
			<label>Torre de Enfriamiento No2</label>
			<br>
<?php
 $anoHoy = date('y');
 $mesHoy = date('m');
 $diaHoy = date('d');
 $sqlCargarHist = "SELECT * FROM parametros_mtto_torres WHERE nombreEquipo = 'TCE2'";
 $resultCargar = mysqli_query($mysqli,$sqlCargarHist);

	if ($mostrar = mysqli_fetch_array($resultCargar)) {

?>
<div class="row">
	<div class="col-md-2">
		<?php echo $mostrar['fechaEjecucion'] ?>
	</div>
	<div class="col-md-2">
		<?php echo $mostrar['horaEntrada'] ?>
	</div>
	<div class="col-md-2">
		<?php echo $mostrar['horaSalida'] ?>
	</div>
	<div class="col-md-2">
		<?php echo $mostrar['tipoActividad'] ?>
	</div>
	<div class="col-md-2">
		<?php echo $mostrar['modeloEq'] ?>
	</div>
	<div class="col-md-2">
		<?php echo $mostrar['serialEq'] ?>
	</div>
</div><br>
<div class="row">
	<div class="col-md-2">
		<?php echo $mostrar['nombreEquipo'] ?>
	</div>
	<div class="col-md-2">
		<?php echo $mostrar['presionSistPSI'] ?>
	</div>
	<div class="col-md-2">
		<?php echo $mostrar['tSupplySistC'] ?>
	</div>
	<div class="col-md-2">
		<?php echo $mostrar['tReturnSistC'] ?>
	</div>
	<div class="col-md-2">
		<?php echo $mostrar['tAmbienteC'] ?>
	</div>
	<div class="col-md-2">
		<?php echo $mostrar['v1_2'] ?>
	</div>
</div><br>
<div class="row">
	<div class="col-md-2">
		<?php echo $mostrar['v2_3'] ?>
	</div>
	<div class="col-md-2">
		<?php echo $mostrar['v1_3'] ?>
	</div>
	<div class="col-md-2">
		<?php echo $mostrar['a1'] ?>
	</div>
	<div class="col-md-2">
		<?php echo $mostrar['a2'] ?>
	</div>
	<div class="col-md-2">
		<?php echo $mostrar['a3'] ?>
	</div>
	<div class="col-md-2">
		<?php echo $mostrar['hzOp'] ?>
	</div>
</div><br>
<div class="row">
	<div class="col-md-2">
		<?php echo $mostrar['caudalGPM'] ?>
	</div>
	<div class="col-md-2">
		<?php echo $mostrar['pruebasRealizadas'] ?>
	</div>
	<div class="col-md-2">
		<?php echo $mostrar['actividadesRealizadas'] ?>
	</div>
	<div class="col-md-2">
		<?php echo $mostrar['repuestosRQ'] ?>
	</div>
	<div class="col-md-4">
		<?php echo $mostrar['observaciones'] ?>
	</div>
</div>

		
	</center><br>
<?php
}else{
	?>
	<center> <label>no existen datos</label></center>
	<?php
}
?>

<!-- Fin cabecera 
INSERT INTO `parametros_mtto_torres` (`idhistorial`, `fechaEjecucion`, `horaEntrada`, `horaSalida`, `tipoActividad`, `modeloEq`, `serialEq`, `nombreEquipo`, `presionSistPSI`, `tSupplySistC`, `tReturnSistC`, `tAmbienteC`, `v1_2`, `v2_3`, `v1_3`, `a1`, `a2`, `a3`, `hzOp`, `caudalGPM`, `pruebasRealizadas`, `actividadesRealizadas`, `repuestosRQ`, `observaciones`) VALUES -->

<!-- fila -->


<!-- Fin Fila -->
	
</div>

</div>

</div>
</div>














			<!-- ventana BAC1 -->
			<div id="divBAC1" style="opacity: 0; position: absolute;">
				<div class="contenido">
					BAC1
				</div>
			</div>
			<!-- ventana BAC2 -->
			<div id="divBAC2" style="opacity: 0; position: absolute;">
				<div class="contenido">
					BAC2
				</div>
			</div>
			<!-- ventana ECOPLANTA -->
			<div id="divECOP" style="opacity: 0; position: absolute;">
				<div class="contenido">
					ECOPLANTA
				</div>
			</div>
			<!-- ventana bf1 -->
			<div id="divBAF1" style="opacity: 0; position: absolute;">
				<div class="contenido">
					BAF1
				</div>
			</div>
			<!-- ventana baf2 -->
			<div id="divBAF2" style="opacity: 0; position: absolute;">
				<div class="contenido">
					BAF2
				</div>
			</div>
			<!-- ventana baf3 -->
			<div id="divBAF3" style="opacity: 0; position: absolute;">
				<div class="contenido">
					BAF3
				</div>
			</div>
			<!-- ventana baf4 -->
			<div id="divBAF4" style="opacity: 0; position: absolute;">
				<div class="contenido">
					BAF4
				</div>
			</div>
			<!-- ventana lobby -->
			<div id="divLobby" style="opacity: 0; position: absolute;">
				<div class="contenido">
					Lobby
				</div>
			</div>
			<!-- ventana of admon -->
			<div id="divOfAdmon" style="opacity: 0; position: absolute;">
				<div class="contenido">
					Of. admon
				</div>
			</div>
			<!-- ventana of monitoreo -->
			<div id="divOfMonitoreo" style="opacity: 0; position: absolute;">
				<div class="contenido">
					Of. monitoreo
				</div>
			</div>
			<!-- ventana cuartos de rack -->
			<div id="divECOP" style="opacity: 0; position: absolute;">
				<div class="contenido">
					ECOPlanta
				</div>
			</div>
			
		</div>
	</section>

</div>



<!-- Modals -------------------------  -->

<!-- modal agregar Actividad TCE -->


<div class="container">

	<div class="modal fade" id="addHistTCE" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Historial</h4>
      </div>
      
      <div class="modal-body">
<center>
      <form id="formVerHistTC1" method="GET" action="../php/addHistTCE1.php">

      	<br>
      	<label>Fecha de ejecución</label>
       <input type="text" class="form-control"  name="fechaEjecucion" placeholder="00.mes.1999" >
      <br>  
       <div class="row">
       	<div class="col-md-6">
       	<label>Hora de entrada</label>
       <input type="text" class="form-control"  name="horaEntrada" placeholder="00:00:00 (HH:MM:SS)" >
       	</div>
       	<div class="col-md-6">
       		<label>Hora de salida</label>
       <input type="text" class="form-control"  name="horaSalida" placeholder="00:00:00 (HH:MM:SS)" >
       	</div>
       </div>
       <br>
       <label>Tipo deActividad</label>
       <input type="text" class="form-control"  name="tipoActividad" placeholder="Tipo de Actividad" >
       <br>
       <label>Marca del Equipo</label>
       <input type="text" class="form-control"  name="marcaEquipo" placeholder="Ingresa la marca del equipo" >
       <br>
       <label>Modelo del equipo</label>
       <input type="text" class="form-control"  name="modeloEq" placeholder="Ingresa el modelo del equipo" >
       <br>
       <label>Serial del equipo</label>
       <input type="text" class="form-control"  name="serialEq" placeholder="Ingresa el serial del equipo" >
       <br>
       <label>nombre del Equipo</label>
       <input type="text" class="form-control"  name="nombreEquipo" placeholder="Ingresa la fecha de actividad a consultar" >
       <br><br>

<label> Parámetros de Funcionamiento</label>
<br><br>

       <div class="row">

       	<div class="col-md-4">
       <input type="number" class="form-control"  name="presionSistPSI" placeholder=" presión del sistema (PSI)" >
       	</div>
       	<div class="col-md-4">
       		<input type="number" class="form-control"  name="hzOp" placeholder="Frecuencia en operación ideal (Hz)" >
       	</div>
       	<div class="col-md-4">
       <input type="number" class="form-control"  name="caudalGPM" placeholder="Caudalímetro (GPM)" >
       	</div>

       </div>
       <br>

       <div class="row">
       	<div class="col-md-4">
       <input type="number" class="form-control"  name="tSupplySistC" placeholder="TSupply C°" >
       	</div>
       	<div class="col-md-4">
       <input type="number" class="form-control"  name="tReturnSistC" placeholder="tReturn C°" >
       	</div>
       	<div class="col-md-4">
       <input type="number" class="form-control"  name="tAmbienteC" placeholder="TAmbiente C°" >
       	</div>
       </div>

       <br>
       <div class="row">
       	<div class="col-md-4">
       <input type="number" class="form-control"  name="v1_2" placeholder="VAC L1 - L2" >
       	</div>
       	<div class="col-md-4">
       <input type="number" class="form-control"  name="v2_3" placeholder="VAC L2 - L3" >	
       	</div>
       	<div class="col-md-4">
       <input type="number" class="form-control"  name="v1_3" placeholder="VAC L1 - L3" >	
       	</div>
       </div>
       <br>

       <div class="row">
       	<div class="col-md-4">
       <input type="number" class="form-control"  name="a1" placeholder="Amper L1" >
       	</div>
       	<div class="col-md-4">
       	<input type="number" class="form-control"  name="a2" placeholder="Amper L2" >	
       	</div>
       	<div class="col-md-4">
       	<input type="number" class="form-control"  name="a3" placeholder="Amper L3" >	
       	</div>
       </div>
 
       <br>
       
       <label>Pruebas Realizadas</label>
       <input type="text" class="form-control"  name="pruebasRealizadas" placeholder="Ingrese un texto aquí" >
       <br>
       <label>Actividades Realizadas</label>
       <input type="text" class="form-control"  name="actividadesRealizadas" placeholder="Ingrese un texto aquí" >
       <br>
       <label>Repuestos requeridos</label>
       <input type="text" class="form-control"  name="repuestosRQ" placeholder="Enliste y separe por punto y coma (;) los repuestos requeridos" >
       <br>
       <label>Observaciones</label>
       <input type="text" class="form-control"  name="observaciones" placeholder="Detalle las observaciones encontradas" >
<div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Agregar</button>
       
        </form>
    </center>
        
                	    
      </div>
      </div>
      
      
    </div>
  </div>
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
<script src="recursos/config.js"></script>
<script src="recursos/alertasTorres.js"></script>
</body>
</html>



<?php
	} else {
		header("Location: ../../../index.html");
	}
 
 ?>