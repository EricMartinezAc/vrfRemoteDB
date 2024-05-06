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
	
	
</head>
<body>
<!-- HEADER -->
<div class="container"  >
	<div class="headerBdB" >
		<img src="../img/bdb/logoBdB.png" style="width: 30%;height: 10%">
		
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

				<span class="navbar-brand" onclick="mostrarDivMenu()">INICIO</span>

			</div>



			<div class="collapse navbar-collapse" id="menu">

				<ul class="nav navbar-nav">
					
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
						Piso 5
						<span class="caret"></span>
						</a>
							<ul class="dropdown-menu " role="Menu">
								<li class="dropdown">
									<button type="button" onclick="mostrarDivSist17()" class="btn-null btn btn-default" style="width: 100%"> 
										<label >
										Sistema 17
										</label>
									</button>
								</li>
								<li class="dropdown">
									<button type="button" onclick="mostrarDivSist16()" class="btn-null btn btn-default" style="width: 100%"> 
										<label >
										Sistema 16
										</label>
									</button>
								</li>
								<li class="dropdown">
									<button type="button" onclick="mostrarDivSist15()" class="btn-null btn btn-default" style="width: 100%"> 
										<label >
										Sistema 15
										</label>
									</button>
								</li>
								<li class="dropdown">
									<button type="button" onclick="mostrarDivSist14()" class="btn-null btn btn-default" style="width: 100%"> 
										<label >
										Sistema 14
										</label>
									</button>
								</li>
								<li class="dropdown">
									<button type="button" onclick="mostrarDivSist13()" class="btn-null btn btn-default" style="width: 100%"> 
										<label >
										Sistema 13
										</label>
									</button>
								</li>

							</ul>
					</li>




					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
						Piso 4
						<span class="caret"></span>
						</a>
							<ul class="dropdown-menu " role="Menu">
								<button type="button" onclick="mostrarDivSist12()" class="btn-null btn btn-default" style="width: 100%"> 
										<label >
										Sistema 12
										</label>
									</button>
								<li class="dropdown">
									<button type="button" onclick="mostrarDivSist11()" class="btn-null btn btn-default" style="width: 100%"> 
										<label >
										Sistema 11
										</label>
									</button>
								</li>
								<li class="dropdown">
									<button type="button" onclick="mostrarDivSist10()" class="btn-null btn btn-default" style="width: 100%"> 
										<label >
										Sistema 10
										</label>
									</button>
								</li>
								<li class="dropdown">
									<button type="button" onclick="mostrarDivSist9()" class="btn-null btn btn-default" style="width: 100%"> 
										<label >
										Sistema 9
										</label>
									</button>
								</li>
								<li class="dropdown">
									<button type="button" onclick="mostrarDivSist8()" class="btn-null btn btn-default" style="width: 100%"> 
										<label >
										Sistema 8
										</label>
									</button>
								</li>

							</ul>
					</li>



					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
						Piso 3
						<span class="caret"></span>
						</a>
							<ul class="dropdown-menu " role="Menu">
								<li class="dropdown">
									<button type="button" onclick="mostrarDivSist7()" class="btn-null btn btn-default" style="width: 100%"> 
										<label >
										Sistema 7
										</label>
									</button>
								</li>
								<li class="dropdown">
									<button type="button" onclick="mostrarDivSist6()" class="btn-null btn btn-default" style="width: 100%"> 
										<label >
										Sistema 6
										</label>
									</button>
								</li>
								<li class="dropdown">
									<button type="button" onclick="mostrarDivSist5()" class="btn-null btn btn-default" style="width: 100%"> 
										<label >
										Sistema 5
										</label>
									</button>
								</li>
							</ul>
					</li>
					


					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
						Piso 2
						<span class="caret"></span>
						</a>
							<ul class="dropdown-menu " role="Menu">
								<button type="button" onclick="mostrarDivSistA()" class="btn-null btn btn-default" style="width: 100%"> 
										<label >
										Sistema A
										</label>
								</button>
								<li class="dropdown">
									<button type="button" onclick="mostrarDivSistB()" class="btn-null btn btn-default" style="width: 100%"> 
										<label >
										Sistema B
										</label>
									</button>
								</li>
								<li class="dropdown">
									<button type="button" onclick="mostrarDivSistC()" class="btn-null btn btn-default" style="width: 100%"> 
										<label >
										Sistema C
										</label>
									</button>
								</li>
							</ul>
					</li>

					<li>
						<a>	<button class="btn-null"  onclick="mostrarUPS()"> UPS sótano 1</button></a>
				    </li>
					<li>
						<a>	<button class="btn-null"  onclick="mostrarCAD()"> Archivos CAD</button></a>
				    </li>
				    <li>
							<a><button class="btn-null"  onclick="mostrarCE()">Cuartos eléctricos</button></a>
				    </li>
				    <li>
							<a><button class="btn-null" onclick="mostrarCR()">Cuartos de rack</button></a>
				    </li>
				</ul>
			</div>
		
		</div>
	</nav>



	<section>
		<div class="main">
			<!-- ventana INICIO -->
			<div id="inicioMain" style="opacity: 0; position: absolute;">
				<div class="contenido">
					<p style="padding: 10px">
						VRF INGENIERIA les saluda y les agradece por tenernos en cuenta para atender sus necesidades en Climatización y Control. 
						
						Éstos equípos se encuentran bajo un programa de mantenimientos preventivos rutinarios mensuales a cargo de la empresa VRF ingeniería S.A.S.<br>
						Los datos de los mantenimientos se encuentran en la pestaña correspondiente al sistema.

						Estamos atentos a despejar las inquietudes que se presenten y a revisar para mejora de nuestro servicio las observaciones y sugerencias que el cliente tenga en consideración. 
					</p>  
				</div>
			</div>
			<!-- ventana Sistema 17 -->
<div id="ventSist17" style="opacity: 0.9; position: absolute;">
<div class="contenido">
<div class="row" >
						
<div class="container" style="background-image: url('../img/edificio.jpg'); background-repeat: no-repeat;"><br>
	<label style="color: white">Listado de Equipos</label>
<br><br>


<!-- cabecera -->
	<center>
	<div class="row" style="background-color: #efe;">
		<div class="col-md-1">
				
		</div>
		<div class="col-md-2">
			<label>CODIGO</label>
		</div>
		<div class="col-md-2">
			<label>UBICACION</label>
		</div>
		<div class="col-md-2">
			<label>NO. ACTIVO</label>
		</div>
		<div class="col-md-2">
			<label>TIPO DE EQUIPO</label>
		</div>
		<div class="col-md-2">
			<label>MENÚ</label>
		</div>
		<div class="col-md-1">
			
		</div>
	</div>
	</center><br>

<!-- Fin cabecera -->

<!-- fila -->
<?php
 $anoHoy = date('y');
 $mesHoy = date('m');
 $diaHoy = date('d');
 $sqlCargarEquipos = "SELECT * FROM listado_equipos_bbogota_regional_bq WHERE sistema = 17";
 $resultCargar = mysqli_query($mysqli,$sqlCargarEquipos);

	while ($mostrar = mysqli_fetch_array($resultCargar)) {

?>
<center>
<div class="row">
	<div class="col-md-1">
		
	</div>
	<div class="col-md-2">
		<label style="width: 100%;" class="btn-default btn"><?php echo $mostrar['codigo'];?></label><br><br>
	</div>
	<div class="col-md-2">
		<label style="width: 100%;" class="btn-default btn"><?php echo $mostrar['ubicacion'];?></label>
	</div>
		<div class="col-md-2">
		<label style="width: 100%;" class="btn-default btn"><?php echo $mostrar['noActivo'];?></label>
		</div>
		<div class="col-md-2">
		<label style="width: 100%;" class="btn-default btn"><?php echo $mostrar['tipoUnidad']." ".$mostrar['tipoEquipo'];?></label>
		</div>
		<div class="col-md-2">
			<button href="#" class="dropdown-toggle btn btn-default cienResponsive " data-toggle="dropdown" role="button">
			<label>VER</label>
			<span class="caret"></span>
			</button>
			<ul class="dropdown-menu " role="Menu">
				<li class="dropdown">
					<button  type="button" class=" btn btn-default cienResponsive" data-toggle="modal" data-target="#datosAA3" style="width: 100% ">
					<label>Datos del equipo</label>	
					</button>
				</li>
				<li>
					<a  type="button" class="btn btn-default" href="historial/localExperiencia/aireAcond3.php" style="width: 100%">
					<label>Historial</label>
					</a>
				</li>
			</ul>
		</div>
		<div class="col-md-1">
			
		</div>
</div>
</center>
<?php
};
?>



<!-- Fin Fila -->
	
</div>

</div>

</div>
</div>








			<!-- ventana Sistema 16 -->
			<div id="ventSist16" style="opacity: 0; position: absolute;">
				<div class="contenido">
					

<div class="row" >
						
<div class="container" style="background-image: url('../img/edificio.jpg'); background-repeat: no-repeat;"><br>
	<label style="color: white">Listado de Equipos</label>
<br><br>


<!-- cabecera -->
	<center>
	<div class="row" style="background-color: #efe;">
		<div class="col-md-1">
				
		</div>
		<div class="col-md-2">
			<label>CODIGO</label>
		</div>
		<div class="col-md-2">
			<label>UBICACION</label>
		</div>
		<div class="col-md-2">
			<label>NO. ACTIVO</label>
		</div>
		<div class="col-md-2">
			<label>TIPO DE EQUIPO</label>
		</div>
		<div class="col-md-2">
			<label>MENÚ</label>
		</div>
		<div class="col-md-1">
			
		</div>
	</div>
	</center><br>

<!-- Fin cabecera -->

<!-- fila -->
<?php
 $anoHoy = date('y');
 $mesHoy = date('m');
 $diaHoy = date('d');
 $sqlCargarEquipos = "SELECT * FROM listado_equipos_bbogota_regional_bq WHERE sistema = 16";
 $resultCargar = mysqli_query($mysqli,$sqlCargarEquipos);

	while ($mostrar = mysqli_fetch_array($resultCargar)) {

?>
<center>
<div class="row">
	<div class="col-md-1">
		
	</div>
	<div class="col-md-2">
		<label style="width: 100%;" class="btn-default btn"><?php echo $mostrar['codigo'];?></label><br><br>
	</div>
	<div class="col-md-2">
		<label style="width: 100%;" class="btn-default btn"><?php echo $mostrar['ubicacion'];?></label>
	</div>
		<div class="col-md-2">
		<label style="width: 100%;" class="btn-default btn"><?php echo $mostrar['noActivo'];?></label>
		</div>
		<div class="col-md-2">
		<label style="width: 100%;" class="btn-default btn"><?php echo $mostrar['tipoUnidad']." ".$mostrar['tipoEquipo'];?></label>
		</div>
		<div class="col-md-2">
			<button href="#" class="dropdown-toggle btn btn-default cienResponsive " data-toggle="dropdown" role="button">
			<label>VER</label>
			<span class="caret"></span>
			</button>
			<ul class="dropdown-menu " role="Menu">
				<li class="dropdown">
					<button  type="button" class=" btn btn-default cienResponsive" data-toggle="modal" data-target="#datosAA3" style="width: 100% ">
					<label>Datos del equipo</label>	
					</button>
				</li>
				<li>
					<a  type="button" class="btn btn-default" href="historial/localExperiencia/aireAcond3.php" style="width: 100%">
					<label>Historial</label>
					</a>
				</li>
			</ul>
		</div>
		<div class="col-md-1">
			
		</div>
</div>
</center>
<?php
};
?>



<!-- Fin Fila -->
	
</div>

</div>




				</div>
			</div>
			<!-- ventana Sistema 15 -->
			<div id="ventSist15" style="opacity: 0; position: absolute;">
				<div class="contenido">













				</div>
			</div>
			<!-- ventana Sistema 14 -->
			<div id="ventSist14" style="opacity: 0; position: absolute;">
				<div class="contenido">
					Sistema 14
				</div>
			</div>
			<!-- ventana Sistema 13 -->
			<div id="ventSist13" style="opacity: 0; position: absolute;">
				<div class="contenido">
					Sistema 13
				</div>
			</div>
			<!-- ventana Sistema 12 -->
			<div id="ventSist12" style="opacity: 0; position: absolute;">
				<div class="contenido">
					Sistema 12
				</div>
			</div>
			<!-- ventana Sistema 11 -->
			<div id="ventSist11" style="opacity: 0; position: absolute;">
				<div class="contenido">
					Sistema 11
				</div>
			</div>
			<!-- ventana Sistema 10 -->
			<div id="ventSist10" style="opacity: 0; position: absolute;">
				<div class="contenido">
					Sistema 10
				</div>
			</div>
			<!-- ventana Sistema 9 -->
			<div id="ventSist9" style="opacity: 0; position: absolute;">
				<div class="contenido">
					Sistema 9
				</div>
			</div>
			<!-- ventana Sistema 8 -->
			<div id="ventSist8" style="opacity: 0; position: absolute;">
				<div class="contenido">
					Sistema 8
				</div>
			</div>
			<!-- ventana Sistema 7 -->
			<div id="ventSist7" style="opacity: 0; position: absolute;">
				<div class="contenido">
					Sistema 7
				</div>
			</div>
			<!-- ventana Sistema 6 -->
			<div id="ventSist6" style="opacity: 0; position: absolute;">
				<div class="contenido">
					Sistema 6
				</div>
			</div>
			<!-- ventana Sistema 5 -->
			<div id="ventSist5" style="opacity: 0; position: absolute;">
				<div class="contenido">
					Sistema 5
				</div>
			</div>
			<!-- ventana Sistema A -->
			<div id="ventSistA" style="opacity: 0; position: absolute;">
				<div class="contenido">
					Sistema A
				</div>
			</div>
			<!-- ventana Sistema B -->
			<div id="ventSistB" style="opacity: 0; position: absolute;">
				<div class="contenido">
					Sistema B
				</div>
			</div>
			<!-- ventana Sistema C -->
			<div id="ventSistC" style="opacity: 0; position: absolute;">
				<div class="contenido">
					Sistema C
				</div>
			</div>
			<!-- ventana UPS -->
			<div id="ventUPS" style="opacity: 0; position: absolute;">
				<div class="contenido">
					UPS sótano 1
				</div>
			</div>
			<!-- ventana archivos CAD -->
			<div id="ventCAD" style="opacity: 0; position: absolute;">
				<div class="contenido">
					archivos CAD
				</div>
			</div>
			<!-- ventana cuartos eléctricos -->
			<div id="ventCE" style="opacity: 0; position: absolute;">
				<div class="contenido">
					Cuartos Eléctricos
				</div>
			</div>
			<!-- ventana cuartos de rack -->
			<div id="ventCR" style="opacity: 0; position: absolute;">
				<div class="contenido">
					Cuartos de Rack
				</div>
			</div>
			
		</div>
	</section>

	</div>
</div>	
		


<br><br><br><br><br><br><br><br><br><br><br>

<script src="../../Controlador/jquery-2.2.4.min.js"></script>
<script src="../../Controlador/bootstrap.js"></script>
<script src="../../Controlador/swiper.min.js"></script>
<script type="text/javascript">
	function exit() {
	window.location = "../php/salirSesion.php";
	};


</script>


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