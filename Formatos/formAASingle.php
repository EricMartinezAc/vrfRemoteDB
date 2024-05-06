<?php
 	 require '../Resource/conexion.php';
 	 $Con = new conexion();
 	 $Con -> conectarse();



	session_start();

	if($_SESSION["logueado"] == TRUE) {
		//56 inputs sin contar firmas
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">
	<title>Formato Aire Acondicionado Single</title>
	<link rel="stylesheet" type="text/css" href="../Controlador/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../Controlador/dataTables.bootstrap.min.css">
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../Controlador/styles.css">
	<link rel="stylesheet" type="text/css" href="../Controlador/styles2.css">
</head>
<body>
<center>
<div class="container">
	<div >
		<div>

			
			<div class="row ">
				<div class="col-md-10 celda letrasGrandes">
				<br>
					<h3>Reporte de Actividad Sistemas de Aire Acondicionado Single</h3>
				<br>
				</div>
				<div class="col-md-2 ">
				<center>
				<script type="text/javascript">
					function eliminar(){
						location.href = "../Resource/consultarDatosAASingle.php";
					};
				</script>
					<img id="logoEncabezadoAASingle" onclick="guardar()" src="../Vista/img/logo.png">
				</center>
				</div>
			</div>
			<div class="row letrasPequeñas2">
				<div class="col-md-4 celda">
					Fecha de Emisión: 2018-11-05
				</div>
				<div class="col-md-2 celda">
					Revisión: 01
				</div>
				<div class="col-md-4 celda">
					Página 1 de 1
				</div>
				
				<div  class="col-md-2 celda">
					Nit. 900383679-8
				</div>
			</div>

			<br>


			<div class="row">
				<div class="col-md-2 celda ">
					<label >Cliente:</label>
				</div>
				<div class="col-md-4 celda">
					<input type="text" value="" id="cliente" name="cliente" placeholder="Ingrese nombre del cliente">
				</div>
				
				<div class="col-md-2 celda">
					<label>Ciudad:</label>
				</div>
				<div class="col-md-4 celda">
					<input type="text" value="" id="ciudad" name="ciudad" placeholder="Ingrese ciudad">
				</div>
				
			</div>


			<br>

			<div class="row">
				<div class="col-md-2 celda ">
					<label onclick="buscarIDOT()">Orden de trabajo</label>
				</div>
				<div class="col-md-3 celda">
					<input type="text" value="" id="ot" name="ot" placeholder="Ingrese id de orden de trabajo">
				</div>
				<div class="col-md-1">
					
				</div>
				
				<div class="col-md-2 celda">
					<label>H.Entrada:</label>
				</div>
				<div class="col-md-4 celda">
					<input type="text" value="" id="horaEntrada" name="horaEntrada" placeholder="Ingrese la Hora de entrada">
				</div>
				
			</div>
			<div class="row">
				<div class="col-md-2 celda ">
					<label>Fecha:</label>
				</div>
				<div class="col-md-1 celda">
					<input type="text" value="" id="diaActividad" name="diaActividad" placeholder="Día">
				</div>
				<div class="col-md-1 celda">
					<input type="text" value="" id="mesActividad" name="mesActividad" placeholder="Mes">
				</div>
				<div class="col-md-1 celda">
					<input type="text" value="" id="anoActividad" name="anoActividad" placeholder="Año">
				</div>
				<div class="col-md-1 ">
					
				</div>
				<div class="col-md-2 celda">
					<label>H.Salida:</label>
				</div>
				<div class="col-md-4 celda">
					<input type="text" value="" id="horaSalidaTech" name="horaSalidaTech" placeholder="Ingrese la Hora de salida">
				</div>
				
			</div>
			<br>
			<div class="encabezadoFormAASingle">
			<center><label>TIPO DE SERVICIO</label></center>
			</div>
			<br>
			<div class="row">
				<div class="col-md-2 celda ">
					<label>Tipo Actividad: </label>
				</div>
				<div class="col-md-3 ">
					<select name="tiposActividad" id="tiposActividad">
						<option id="preventivo" value="preventivo">
							Preventivo
						</option>
						<option id="correctivo" value="correctivo">
							Correctivo
						</option>
						<option id="instalacion" value="instalacion">
							Instalación
						</option>
						<option id="visita" value="visita">
							Visita
						</option>
						<option id="emergencia" value="emergencia">
							Emergencia
						</option>
					</select>
				</div>
				<div class="col-md-2 ">
					
				</div>
				<div class="col-md-2 celda">
					<label>No ATS:</label>
				</div>
				<div class="col-md-3 celda ">
					<input type="text" id="IDats" name="IDats" value="" placeholder="ID inspección de seguridad">
				</div>				
			</div>
			<br>
			<div class="encabezadoFormAASingle">
				<center><label>DATOS DEL EQUIPO</label></center>
			</div>
			<br>
			<div class="row">
				<div class="col-md-2 celda ">
					<label>Sistema Tipo: </label>
				</div>
				<div class="col-md-3  celda">
					<input type="text" value="" id="tipoSistema" name="tipoSistema" placeholder="Tipo de sistema">
				</div>
				<div class="col-md-2  ">
				</div>

				<div class="col-md-2 celda">
					<label>Capacidad:</label>
				</div>
				<div class="col-md-3 celda ">
					<input type="text" value="" id="capacidadBTU" name="capacidadBTU" placeholder="Capacidad en Btu/hr">
				</div>				
			</div>

			
			<div class="row">
				<div class="col-md-2 celda ">
					<label>Marca: </label>
				</div>
				<div class="col-md-3  celda">
					<input type="text" value="" id="marcaEquipo" name="marcaEquipo" placeholder="Marca de equipo">
				</div>
				<div class="col-md-2  ">
				</div>

				<div class="col-md-2 celda">
					<label>Refrigerante:</label>
				</div>
				<div class="col-md-3 celda ">
					<input type="text" value="" id="tipoRefrigerante" name="tipoRefrigerante" placeholder="Tipo de Refrigerante">
				</div>				
			</div>


			<div class="row">
				<div class="col-md-2 celda ">
					<label>Ubicación/área: </label>
				</div>
				<div class="col-md-3  celda">
					<input type="text" value="" id="areaAtencion" name="areaAtencion" placeholder="Área de atención">
				</div>
				<div class="col-md-2  ">
				</div>

				<div class="col-md-2 celda">
					<label>Equipo No:</label>
				</div>
				<div class="col-md-3 celda ">
					<input type="text" value="" id="noEquipo" name="noEquipo" placeholder="Equipo Mo.">
				</div>				
			</div>

			
			<div class="row">
				<div class="col-md-2 celda ">
					<label>Modelo: </label>
				</div>
				<div class="col-md-3  celda">
					<input type="text" value="" id="modelo" name="modelo" placeholder="Modelo">
				</div>
				<div class="col-md-2  ">
				</div>

				<div class="col-md-2 celda">
					<label>Serial:</label>
				</div>
				<div class="col-md-3 celda ">
					<input type="text" value="" id="serial" name="serial" placeholder="Serial">
				</div>				
			</div>
			<br>
			<div class="encabezadoFormAASingle">
			<center><label>PLAN DE INSPECCIÓN</label></center>
			</div>
			<br>

			<div class="row">
				<div class="col-md-3 celda ">
					<label>ITEMs</label>
				</div>
				<div class="col-md-1 celda">
					<label>SI</label>
				</div>
				<div class="col-md-1 celda">
					<label>NO</label>
				</div>
				<div class="col-md-2  ">
					
				</div>
				<div class="col-md-3 celda ">
					<label>ITEMs</label>
				</div>
				<div class="col-md-1 celda">
					<label>SI</label>
				</div>
				<div class="col-md-1 celda">
					<label>NO</label>
				</div>				
			</div>
			<div class="row">
				<div class="col-md-3 celda ">
					<label>Revisión general</label>
				</div>
				<div class="col-md-1 celda">
					<input type="text" value="" id="siRevisionGeneral" name="siRevisionGeneral" placeholder="">
				</div>
				<div class="col-md-1 celda">
					<input type="text" value="" id="noRevisionGeneral" name="noRevisionGeneral" placeholder="">
				</div>
				<div class="col-md-2  ">
					
				</div>
				<div class="col-md-3 celda ">
					<label>Revisión del Ventilador</label>
				</div>
				<div class="col-md-1 celda">
					<input type="text" value="" id="siRevisionVentilador" name="siRevisionVentilador" placeholder="">
				</div>
				<div class="col-md-1 celda">
					<input type="text" value="" id="noRevisionVentilador" name="noRevisionVentilador" placeholder="">
				</div>				
			</div>
			<div class="row">
				<div class="col-md-3 celda ">
					<label>Medición de Presión</label>
				</div>
				<div class="col-md-1 celda">
					<input type="text" value="" id="siMedicionPresion" name="siMedicionPresion" placeholder="">
				</div>
				<div class="col-md-1 celda">
					<input type="text" value="" id="noMedicionPresion" name="noMedicionPresion" placeholder="">
				</div>
				<div class="col-md-2  ">
					
				</div>
				<div class="col-md-3 celda ">
					<label>Limpieza Control Eléc.</label>
				</div>
				<div class="col-md-1 celda">
					<input type="text" value="" id="siLimpControlElect" name="siLimpControlElect" placeholder="">
				</div>
				<div class="col-md-1 celda">
					<input type="text" value="" id="noLimpControlElect" name="noLimpControlElect" placeholder="">
				</div>				
			</div>
			<div class="row">
				<div class="col-md-3 celda ">
					<label>Medición de Temperaturas</label>
				</div>
				<div class="col-md-1 celda">
					<input type="text" value="" id="siMedicionTemp" name="siMedicionTemp" placeholder="">
				</div>
				<div class="col-md-1 celda">
					<input type="text" value="" id="noMedicionTemp" name="noMedicionTemp" placeholder="">
				</div>
				<div class="col-md-2  ">
					
				</div>
				<div class="col-md-3 celda ">
					<label>Limpieza de Drenajes</label>
				</div>
				<div class="col-md-1 celda">
					<input type="text" value="" id="siLimpDrenajes" name="siLimpDrenajes" placeholder="">
				</div>
				<div class="col-md-1 celda">
					<input type="text" value="" id="noLimpDrenajes" name="noLimpDrenajes" placeholder="">
				</div>				
			</div>
			<div class="row">
				<div class="col-md-3 celda ">
					<label>Medición de Ampejare</label>
				</div>
				<div class="col-md-1 celda">
					<input type="text" value="" id="siMedicionAmp" name="siMedicionAmp" placeholder="">
				</div>
				<div class="col-md-1 celda">
					<input type="text" value="" id="noMedicionAmp" name="noMedicionAmp" placeholder="">
				</div>
				<div class="col-md-2  ">
					
				</div>
				<div class="col-md-3 celda ">
					<label>Limpieza de Filtros</label>
				</div>
				<div class="col-md-1 celda">
					<input type="text" value="" id="siLimpFiltros" name="siLimpFiltros" placeholder="">
				</div>
				<div class="col-md-1 celda">
					<input type="text" value="" id="noLimpFiltros" name="noLimpFiltros" placeholder="">
				</div>				
			</div>
			<div class="row">
				<div class="col-md-3 celda ">
					<label>Ajuste de Tornillos</label>
				</div>
				<div class="col-md-1 celda">
					<input type="text" value="" id="siAjusteTornillos" name="siAjusteTornillos" placeholder="">
				</div>
				<div class="col-md-1 celda">
					<input type="text" value="" id="noAjusteTornillos" name="noAjusteTornillos" placeholder="">
				</div>
				<div class="col-md-2  ">
					
				</div>
				<div class="col-md-3 celda ">
					<label>Pruebas de Funcionamiento</label>
				</div>
				<div class="col-md-1 celda">
					<input type="text" value="" id="siPruebasFunc" name="siPruebasFunc" placeholder="">
				</div>
				<div class="col-md-1 celda">
					<input type="text" value="" id="noPruebasFunc" name="noPruebasFunc" placeholder="">
				</div>				
			</div>
			<div class="row">
				<div class="col-md-3 celda ">
					<label>Limpieza de Serpentines</label>
				</div>
				<div class="col-md-1 celda">
					<input type="text" value="" id="siLimpSerp" name="siLimpSerp" placeholder="">
				</div>
				<div class="col-md-1 celda">
					<input type="text" value="" id="noLimpSerp" name="noLimpSerp" placeholder="">
				</div>
				<div class="col-md-2  ">
					
				</div>
				<div class="col-md-3 celda ">
					<label>Limpieza área de Trabajo</label>
				</div>
				<div class="col-md-1 celda">
					<input type="text" value="" id="noRevisionG" name="noRevisionG" placeholder="">
				</div>
				<div class="col-md-1 celda">
					<input type="text" value="" id="noRevisionG" name="noRevisionG" placeholder="">
				</div>				
			</div>

			<br>
			<div class="celda"><label >TOMA DE PÁRMETROS</label></div>

			

			<br>
			<div class="row">
				<div class="col-md-2 celda">
					<label>Presión(PSI)</label>
				</div>
				<div class="col-md-4 celda">
					<label>Temperatura(°C)</label>
				</div>
				<div class="col-md-3 celda">
					<label>Voltaje(VAC)</label>
				</div>
				<div class="col-md-3 celda">
					<label>Consumo(ACV)</label>
				</div>
			</div>

			<div class="row">
				<div class="col-md-1 celda">
					<input type="text" value="" id="Psuccion" name="Psuccion" placeholder="Succión">
				</div>
				<div class="col-md-1 celda">
					<input type="text" value="" id="Pdescarga" name="Pdescarga" placeholder="Descarga">
				</div>
				<div class="col-md-1 celda">
					<input type="text" value="" id="Tin" name="Tin" placeholder="Tin">
				</div>
				<div class="col-md-1 celda">
					<input type="text" value="" id="Tout" name="Tout" placeholder="Tout">
				</div>
				<div class="col-md-1 celda">
					<input type="text" value="" id="TinA" name="TinA" placeholder="TinA">
				</div>
				<div class="col-md-1 celda">
					<input type="text" value="" id="TouA" name="ToutA" placeholder="TouA">
				</div>
				<div class="col-md-1 celda">
					<input type="text" value="" id="L1V" name="L1V" placeholder="L1">
				</div>
				<div class="col-md-1 celda">
					<input type="text" value="" id="L2V" name="L2V" placeholder="L2">
				</div>
				<div class="col-md-1 celda">
					<input type="text" value="" id="L3V" name="L3V" placeholder="L3">
				</div>
				<div class="col-md-1 celda">
					<input type="text" value="" id="L1A" name="L1A" placeholder="L1">
				</div>
				<div class="col-md-1 celda">
					<input type="text" value="" id="L2A" name="L2A" placeholder="L2">
				</div>
				<div class="col-md-1 celda">
					<input type="text" value="" id="L3A" name="L3A" placeholder="L3">
				</div>
			</div>
			<br>
			<div class="celda">
				<label>OBSERVACIONES</label>
			</div>
			<br>
			<div class="cuadroTXT">
				<p id="observaciones" name="observaciones" >Se deja equipo en operación con parámetros normales.</p>
			</div>
			<br>
			<div class="celda">
				<label>Requerimientos</label>
			</div>
			<br>
			<div class="cuadroTXT">
				<p id="requerimientos" name="requerimientos">
				 VRF INGENIERIA les saluda y les agradece por tenernos en cuenta para atender
				 sus necesidades en Climatización y Control. Estamos atentos a despejar las inquietudes 
				 que se presenten y a revisar para mejora de nuestro servicio las observaciones y 
				 sugerencias que el cliente tenga en consideración.
				</p>
			</div>
			<br>
			<div class="row">
				<div class="col-md-3">
					<div class="celda">
					<br>
					<input type="text" value="" id="firmaTecnico"  name="firmaTecnico" placeholder="Firma Técnico"> 
					<br>
					<br>
					</div>
				</div>
				<div class="col-md-1">
					
				</div>
				<div class="col-md-3">
					<div class="celda">
					<br>
					<input type="text" value="" id="VoBoCliente" name="VoBoCliente" placeholder="VoBo Cliente">
					<br>
					<br>
					</div>
				</div>
				<div class="col-md-1">
					
				</div>
				<div class="col-md-4">
					<div class="celda"><br>
					<input type="text" value="" id="firmaCliente" name="firmaCliente" placeholder="Firma Cliente">
					<br>
					<br>
					</div>
				</div>
			</div>


			<div class="row">
				<div class="col-md-3">
				<input type="text" value="" id="nombreTecnico" name="nombreTecnico" placeholder="Nombre Técnico">
				</div>
				<div class="col-md-1">
					
				</div>
				<div class="col-md-3">
				<input type="text" value="" id="nombreVoBo" name="nombreVoBo" placeholder="Nombre VoBo">
				</div>
				<div class="col-md-1">
					
				</div>
				<div class="col-md-4">
					<input type="text" value="" id="nombreCliente" name="nombreCliente" placeholder="Nombre Cliente">
				</div>
			</div>
			<br>
			<br>
			<div class="row">
				<div onclick="eliminar()" class="col-md-12">
				<?php 
				include ("pieDePagina.php");
				  ?>
				</div>
			</div>




		</div>
	</div>
</div>
</center>
</body>
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
</html>
<?php
	} else {
		header("Location: ../index.html");
	}
 
 ?>