<div id="divListaCronograma" style="position: absolute;" >
	<div  class="table-responsive ">
		<div>
			
			<center>

			<table class="table-bordered table-condensed " id="tablaElement">
				<tr class="info tableGeneral">
					<th>
						<center>
							<font style="color: green">
								ID
							</font>
						</center>
					</th>
					<th>
						<center>
							<font style="color: green">
								Semana
							</font>
						</center>
					</th>
					<th>
						<center>
							<font style="color: green">
								Dia de Semana
							</font>
						</center>
					</th>
					<th>
						<center>
							<font style="color: green">
								Dia
							</font>
						</center>
						
					</th>
					<th>
						<center>
							<font style="color: green">
								Mes
							</font>
						</center>
					</th>
					<th>
						<center>
							<font style="color: green">
								Año
							</font>
						</center>
					</th>	
					<th>
						<center>
							<font style="color: green">
								Cliente
							</font>
						</center>
					</th>
					<th>
						<center>
							<font style="color: green">
								Oficina
							</font>
						</center>
					</th>	
					<th>
						<center>
							<font style="color: green">
								Área
							</font>
						</center>
					</th>	
					<th>
						<center>
							<font style="color: green">
								Tipo de Actividad
							</font>
						</center>
					</th>
					<th>
						<center>
							<font style="color: green">
								Tipo Equipos
							</font>
						</center>
					</th>	
					<th>
						<center>
							<font style="color: green">
								Hr Entrada
							</font>
						</center>
					</th>
					<th>
						<center>
							<font style="color: green">
								Hr Salida
							</font>
						</center>
					</th>
					<th>
						<center>
							<font style="color: green">
								Técnicos Asignados
							</font>
						</center>
					</th>
					<th>
						<center>
							<font style="color: green">
								Técnicos Auxiliares
							</font>
						</center>
					</th>
				</tr>


<?php

$anoHoy = date('y');
$mesHoy = date('m');
$diaHoy = date('d');

$sqlCargarCronograma = "SELECT * FROM cronograma WHERE mesCronograma = $mesHoy ORDER BY diaCronograma";
$resultCargarCronograma = mysqli_query($mysqli,$sqlCargarCronograma);
	
while ($mostrar = mysqli_fetch_array($resultCargarCronograma)) {
				
?>



				<tr style="background-color: green">
					<th>
						<center>
							<font>
								<?php echo $mostrar['idCronograma'] ?>
							</font>
						</center>
					</th>	<th>
						<center>
							<font>
								<?php echo $mostrar['semanaCronograma'] ?>
							</font>
						</center>
					</th>
					<th>
						<center>
							<font>
								<?php echo $mostrar['diaSemanaCronograma'] ?>
							</font>
						</center>
					</th>
					<th>
						<center>
							<font>
								<?php echo $mostrar['diaCronograma'] ?>
							</font>
						</center>
					</th>
					<th>
						<center>
							<font>
								<?php echo $mostrar['mesCronograma'] ?>
							</font>
						</center>
					</th>	
					<th>
						<center>
							<font>
								<?php echo $mostrar['anoCronograma'] ?>
							</font>
						</center>
					</th>	
					<th>
						<center>
							<font>
								<?php echo $mostrar['clienteCronograma'] ?>
							</font>
						</center>
					</th>
					<th>
						<center>
							<font>
								<?php echo $mostrar['oficinaCronograma'] ?>
							</font>
						</center>
					</th>	
					<th>
						<center>
							<font>
								<?php echo $mostrar['areaCronograma'] ?>
							</font>
						</center>
					</th>
					<th>
						<center>
							<font>
								<?php echo $mostrar['tipoActividadCronograma'] ?>
							</font>
						</center>
					</th>
					<th>
						<center>
							<font>
								<?php echo $mostrar['tipoEquiposCronograma'] ?>	
							</font>
						</center>
					</th>
					<th>
						<center>
							<font>
								<?php echo $mostrar['hrEntradaCronograma'] ?>
							</font>
						</center>
						
					</th>
					<th>
						<center>
							<font>
								<?php echo $mostrar['hrSalidaCronograma'] ?>
							</font>
						</center>
					</th>
					<th>
						<center>
							<font>
								<?php echo $mostrar['tecnicosAsignadosCronograma'] ?>
							</font>
						</center>
						
					</th>
					<th>
						<center>
							<font>
								<?php echo $mostrar['tecnicosAuxiliaresCronograma'] ?>
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
</div>

<!--<div class="alert alert-danger">
	<label>
		<font>
		ALERTA! sin actividades, Por favor informar al supervisor de zona.			
		</font>
	</label>
</div>
-->