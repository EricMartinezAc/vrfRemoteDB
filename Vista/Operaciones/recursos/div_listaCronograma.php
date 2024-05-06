
<div id="">
	<div  class="table-responsive "  >
		<div >
			<br><br><br>
			<center>
				<div class="row" style="background-color: white">
					<div class="col-md-7">
						<?php
						
						$anoHoy = date('y');
						$mesHoy = date('m');
						$diaHoy = date('d');
						$sqlCargarMesAnoCronograma = "SELECT * FROM cronograma";
						$result = mysqli_query($mysqli,$sqlCargarMesAnoCronograma);
	
						if ($mostrarMesAno = mysqli_fetch_array($result)) {
						?>
						<label style="font-size: 30px;padding-top: 30px">
							Cronograma de Actividades
							<?php echo $mostrarMesAno['mes']." / ".$mostrarMesAno['ano']; ?>

						</label><br>
						

						<?php
						}
						?>
					</div>
					<div class="col-md-5 " style="border-right-style: ridge;">
						<img src="../img/ico/logoVRF.png">
					</div>
					
				</div><br><br>

			<table  style=" width: 99%" class=" table-bordered table-condensed " id="tablaElement">
				<tr class="info tableGeneral">
					<th>
						<center>
							<font style="color: white">
								ID
							</font>
						</center>
					</th>
					<th>
						<center>
							<font style="color: white">
								Semana
							</font>
						</center>
						
					</th>	
					<th>
						<center>
							<font style="color: white">
								fecha (DD/MM/AA)
							</font>
						</center>
						
					</th>	
					<th>
						<center>
							<font style="color: white">
								Cliente
							</font>
						</center>
					</th>
					<th>
						<center>
							<font style="color: white">
								Oficina
							</font>
						</center>
					</th>	
					<th>
						<center>
							<font style="color: white">
								Área
							</font>
						</center>
					</th>	
					<th>
						<center>
							<font style="color: white">
								Tipo de Actividad
							</font>
						</center>
					</th>
					<th>
						<center>
							<font style="color: white">
								Equipos
							</font>
						</center>
					</th>	
					<th>
						<center>
							<font style="color: white">
								Hr Entrada
							</font>
						</center>
					</th>
					<th>
						<center>
							<font style="color: white">
								Hr Salida
							</font>
						</center>
					</th>
					<th>
						<center>
							<font style="color: white">
								Técnicos Asignados
							</font>
						</center>
					</th>
					<th>
						<center>
							<font style="color: white">
								Técnicos Auxiliares
							</font>
						</center>
					</th>
				</tr>


<?php


$sqlCargarCronograma = "SELECT * FROM cronograma ORDER BY dia, hrEntrada";
$resultCargarCronograma = mysqli_query($mysqli,$sqlCargarCronograma);
	
while ($mostrar = mysqli_fetch_array($resultCargarCronograma)) {
	$fechaQ = $mostrar['dia']."/".$mostrar['mes']."/".$mostrar['ano']
				
?>



				<tr class="btn-success " style="font-size: 12px">
					<th>
						<center>
							<font>
								<?php echo $mostrar['idCronograma'] ?>
							</font>
						</center>
					</th>
					<th>
						<center>
							<font>
								<?php echo $mostrar['noSemana']?>
							</font>
						</center>
					</th>	
					<th>
						<center>
							<font>
								<?php echo $fechaQ ?>
							</font>
						</center>
					</th>
					<th>
						<center>
							<font>
								<?php echo $mostrar['cliente'] ?>
							</font>
						</center>
					</th>
					<th>
						<center>
							<font>
								<?php echo $mostrar['oficina'] ?>
							</font>
						</center>
					</th>	
					<th>
						<center>
							<font>
								<?php echo $mostrar['area'] ?>
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
								<?php echo $mostrar['equipos'] ?>	
							</font>
						</center>
					</th>
					<th>
						<center>
							<font>
								<?php echo $mostrar['hrEntrada'] ?>
							</font>
						</center>
						
					</th>
					<th>
						<center>
							<font>
								<?php echo $mostrar['hrSalida'] ?>
							</font>
						</center>
					</th>
					<th>
						<center>
							<font>
								<?php echo $mostrar['tecnicoAsignado'] ?>
							</font>
						</center>
						
					</th>
					<th>
						<center>
							<font>
								<?php echo $mostrar['auxiliarTecnico'] ?>
							</font>
						</center>
					</th>		
				</tr>


<?php
}
?>
			</table>
			</center>
			<br>
		</div>
	</div>

<!--<div class="alert alert-danger">
	<label>
		<font>
		ALERTA! sin actividades, Por favor informar al supervisor de zona.			
		</font>
	</label>
</div>
-->
</div>
