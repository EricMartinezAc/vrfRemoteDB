<div >
	<div  class="table-responsive ">
		<div>
			
			<center>

			<table class="table-bordered table-condensed " id="tablaElement">
				<tr class="info tableGeneral" style="font-size: 13px">
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
								NOMBRE
							</font>
						</center>
					</th>
					<th>
						<center>
							<font style="color: green">
								MARCA
							</font>
						</center>
					</th>
					<th>
						<center>
							<font style="color: green">
								TIPO
							</font>
						</center>
					</th>
					<th>
						<center>
							<font style="color: green">
								REFERENCIA
							</font>
						</center>
					</th>
					<th>
						<center>
							<font style="color: green">
								CANTIDAD
							</font>
						</center>
					</th>
					<th>
						<center>
							<font style="color: green">
								VALOR UNITARIO
							</font>
						</center>
					</th>	
					<th>
						<center>
							<font style="color: green">
								VALOR TOTAL
							</font>
						</center>
					</th>
					<th>
						<center>
							<font style="color: green">
								FECHA DE ADQUISICIÓN
							</font>
						</center>
					</th>	
					<th>
						<center>
							<font style="color: green">
								ESTADO
							</font>
						</center>
					</th>	
					<th>
						<center>
							<font style="color: green">
								SEDE
							</font>
						</center>
					</th>	
				</tr>


<?php

$anoHoy = date('y');
$mesHoy = date('m');
$diaHoy = date('d');

$sqlCargarCronograma = "SELECT * FROM inventarioAlmacen ORDER BY tipoElementoAlmacenado";
$resultCargarCronograma = mysqli_query($mysqli,$sqlCargarCronograma);
	
while ($mostrar = mysqli_fetch_array($resultCargarCronograma)) {
				
?>

				<tr style="background-color: green;color: white; font-size: 9px">
					<th>
						<center>
							<font>
								<?php echo $mostrar['codigoElementoAlmacenado'].' - '.$mostrar['idElementoAlmacenado'] ?>
							</font>
						</center>
					</th>	<th>
						<center>
							<font>
								<?php echo $mostrar['nombreElementoAlmacenado'] ?>
							</font>
						</center>
					</th>
					<th>
						<center>
							<font>
								<?php echo $mostrar['marcaElementoAlmacenado'] ?>
							</font>
						</center>
					</th>
					<th>
						<center>
							<font>
								<?php echo $mostrar['tipoElementoAlmacenado'] ?>
							</font>
						</center>
					</th>
					<th>
						<center>
							<font>
								<?php echo $mostrar['referenciaElementoAlmacenado'] ?>
							</font>
						</center>
					</th>	
					<th>
						<center>
							<font>
								<?php echo $mostrar['cantidadElementoAlmacenado'] ?>
							</font>
						</center>
					</th>	
					<th>
						<center>
							<font>
								<?php echo '$'.$mostrar['costoUnitarioElementoAlmacenado'] ?>
							</font>
						</center>
					</th>
					<th>
						<center>
							<font>
								<?php 
								$valorElemento = $mostrar['cantidadElementoAlmacenado'] * $mostrar['costoUnitarioElementoAlmacenado'];

								echo '$'.$valorElemento ?>
							</font>
						</center>
					</th>	
					<th>
						<center>
							<font>
								<?php echo $mostrar['fechaAdquisicionElementoAlmacenado'] ?>
							</font>
						</center>
					</th>
					<th>
						<center>
							<font>
								<?php echo $mostrar['estadoElementoAlmacenado'] ?>
							</font>
						</center>
					</th>
					<th>
						<center>
							<font>
								<?php echo $mostrar['sedeElementoAlmacenado'] ?>
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