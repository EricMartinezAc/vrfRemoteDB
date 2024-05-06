<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>..::Historial TC1</title>
	<link rel="stylesheet" type="text/css" href="../../Controlador/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../../Controlador/dataTables.bootstrap.min.css">
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../../Controlador/styles.css">
</head>
<body>
<div style="padding-left: 2%; padding-right: 2%"><br>
	<div>
		<div>
			<div>
				<div>
					<center>
					<br><br>
					<h2><label>HISTORIA DE ACTIVIDADES TORRE DE ENFIAMIENTO No 1.</label></h2>
					<br><br>
<div  class="table-responsive">
	<div>
		<div>
			<table class="table table-bordered table-hover table-condensed" id="tablaHistActTC1">
				<tr class="info">
					<th>
						<center>
							<font>
						Id de Actividad
							</font>
						</center>
					</th>
					<th>
						<center>
							<font>
						Nombre Equipo
							</font>
						</center>
					</th>
					<th>
						<center>
							<font>
						Fecha de Ejecución
				        	</font>
				        </center>
					</th>
					<th>
					<center>
						<font>
						Hora Entrada
						</font>
					</center>
					</th>
					<th>
						<center>
							<font>
						Hora Salida
							</font>
						</center>
					</th>	
					<th>
						<center>
							<font>
						Tipo de Actividad
							</font>
						</center>
					</th>	
					<th>
						<center>
							<font>
						Presión del Sistema (PSI)
							</font>
						</center>
					</th>
					<th>
						<center>
							<font>
						Temp. de agua suministrada (C°)
							</font>
						</center>
						
					</th>	
					<th>
						<center>
							<font>
						Temp. de agua en retorno (C°)	
							</font>
						</center>
					</th>	
					<th>
						<center>
							<font>
						Temp. Ambiente (C°)
							</font>
						</center>
					</th>
					<th>
						<center>
							<font>
						Volt L1-L2
							</font>
						</center>
					</th>
					<th>
						<center>
							<font>
						Volt L2-L3
							</font>
						</center>
					</th>
					<th>
						<center>
							<font>
						Volt L1-L3
							</font>
						</center>
					</th>
					<th>
						<center>
							<font>
						Consumo L1 (A)
							</font>
						</center>
					</th>
					<th>
						<center>
							<font>
						Consumo L2 (A)
							</font>
						</center>
					</th>
					<th>
						<center>
							<font>
						Consumo L3 (A)
							</font>
						</center>
					</th>
					<th>
						<center>
							<font>
						Frecuencia Operacional (Hz)
							</font>
						</center>
					</th>
					<th>
						<center>
							<font>
						Caudalímetro (GPM)
							</font>
						</center>
					</th>
					<th>
						<center>
							<p>
						Actividades Realizadas
							</p>
						</center>
					</th>
					<th>
						<center>
							<p>
						Repuestos requeridos
							</p>
						</center>
					</th>
					<th>
						<center>
							<p>
						Observaciones
							</p>
						</center>
					</th>
				</tr>


<!-- INICIO DE CONSULTA -->


<?php
 $anoHoy = date('y');
 $mesHoy = date('m');
 $diaHoy = date('d');
 require ("conexion.php");

$eq = "TCE1";
 
$sqlCargarHist = "SELECT * FROM parametros_mtto_torres WHERE nombreEquipo = '{$eq}'";
 if($resultCargar = mysqli_query($mysqli,$sqlCargarHist))
{
	while ($mostrar = mysqli_fetch_array($resultCargar)) {

      ?>
    
				<tr>
					<th>
						<center>
							<font>
						<?php echo $mostrar['idhistorial'] ?>
							</font>
						</center>
					</th>
					<th>
						<center>
							<font>
						<?php echo $mostrar['nombreEquipo'] ?>
							</font>
						</center>
					</th>
					<th>
						<center>
							<font>
						<?php echo $mostrar['fechaEjecucion'] ?>
				        	</font>
				        </center>
					</th>
					<th>
					<center>
						<font>
						<?php echo $mostrar['horaEntrada'] ?>
						</font>
					</center>
					</th>
					<th>
						<center>
							<font>
						<?php echo $mostrar['horaSalida'] ?>
							</font>
						</center>
					</th>	
					<th>
						<center>
							<font>
						<?php echo $mostrar['tipoActividad'] ?>
							</font>
						</center>
					</th>	
					<th>
						<center>
							<font>
						<?php echo $mostrar['presionSistPSI'] ?>
							</font>
						</center>
					</th>
					<th>
						<center>
							<font>
						<?php echo $mostrar['tSupplySistC'] ?>
							</font>
						</center>
						
					</th>	
					<th>
						<center>
							<font>
						<?php echo $mostrar['tReturnSistC'] ?>	
							</font>
						</center>
					</th>	
					<th>
						<center>
							<font>
						<?php echo $mostrar['tAmbienteC'] ?>
							</font>
						</center>
					</th>
					<th>
						<center>
							<font>
						<?php echo $mostrar['v1_2'] ?>
							</font>
						</center>
					</th>
					<th>
						<center>
							<font>
						<?php echo $mostrar['v2_3'] ?>
							</font>
						</center>
					</th>
					<th>
						<center>
							<font>
						<?php echo $mostrar['v1_3'] ?>
							</font>
						</center>
					</th>
					<th>
						<center>
							<font>
						<?php echo $mostrar['a1'] ?>
							</font>
						</center>
					</th>
					<th>
						<center>
							<font>
						<?php echo $mostrar['a2'] ?>
							</font>
						</center>
					</th>
					<th>
						<center>
							<font>
						<?php echo $mostrar['a3'] ?>
							</font>
						</center>
					</th>
					<th>
						<center>
							<font>
						<?php echo $mostrar['hzOp'] ?>
							</font>
						</center>
					</th>
					<th>
						<center>
							<font>
						<?php echo $mostrar['caudalGPM'] ?>
							</font>
						</center>
					</th>
					<th>
						<center>
							<p>
						<?php echo $mostrar['actividadesRealizadas'] ?>
							</p>
						</center>
					</th>
					<th>
						<center>
							<p>
						<?php echo $mostrar['repuestosRQ'] ?>
							</p>
						</center>
					</th>
					<th>
						<center>
							<p>
						<?php echo $mostrar['observaciones'] ?>
							</p>
						</center>
					</th>
				</tr>



<?php
}
}else {
		echo "datos no existen";
	}
?>


				



				
			</table>
		</div>
	</div>
</div>
</center>
				</div>
			</div>
		</div>
	</div>
</div>
<script src="../controlador/jquery-2.2.4.min.js"></script>
<script src="../controlador/bootstrap.js"></script>
<script src="../controlador/swiper.min.js"></script>

<!--
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
-->

<script src="../../Controlador/jquery.dataTables.min.js"></script>
<script src="../../Controlador/dataTables.bootstrap.min.js"></script>
</body>
</html>
