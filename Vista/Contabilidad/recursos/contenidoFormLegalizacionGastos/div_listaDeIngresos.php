<?php
$mesHoy = date('m');
$consultaPeriodoIngresos = "SELECT * FROM ingresoscontabilidad WHERE mesIngreso = '{$mesHoy}' ORDER BY diaInicioPeriodoIngreso DESC";
$procesar_consultaPeriodoIngresos = mysqli_query($mysqli, $consultaPeriodoIngresos);
if ($array_consultaPeriodoIngresos = mysqli_fetch_array($procesar_consultaPeriodoIngresos)) {
	$diaInicioPeriodoIngreso =  $array_consultaPeriodoIngresos['diaInicioPeriodoIngreso'];
}
$consultaListaIngreso = "SELECT * FROM ingresoscontabilidad WHERE mesIngreso = '{$mesHoy}' AND diaInicioPeriodoIngreso = '{$diaInicioPeriodoIngreso}' ";
$procesar_consultaListaIngreso = mysqli_query($mysqli, $consultaListaIngreso);
while ($array_consultaListaIngreso = mysqli_fetch_array($procesar_consultaListaIngreso)) {
	
?>


<div class="row" style="background-color: white;">
				<div class="col-md-1 celda" style="height: 60px; font-size: 14px">
					<label id="idDineroRecibidoGasto" name="idDineroRecibidoGasto">
						<?php
							echo $array_consultaListaIngreso['idIngreso'];
						?>
					</label>
				</div>
				<div class="col-md-1 celda" style="height: 60px;  font-size: 12px" >
					<label id="fechaDineroRecibidoGasto" name="fechaDineroRecibidoGasto" placeholder="fecha" >
						<?php
							echo $array_consultaListaIngreso['diaIngreso']." / ".$array_consultaListaIngreso['mesIngreso']." / ".$array_consultaListaIngreso['anoIngreso'];
						?>
					</label>
				</div>
				<div class="col-md-2 celda" style="height: 60px;  font-size: 11px">
					<label id="centroDeCostoDineroRecibidoGasto" name="centroDeCostoDineroRecibidoGasto"  placeholder="centro de costo" >
						<?php
							echo $array_consultaListaIngreso['centroDeCostoIngreso'];
						?>
					</label>
				</div>
				<div class="col-md-2 celda" style="height: 60px;  font-size: 11px">
					<label id="proveedorDineroRecibidoGasto" name="proveedorDineroRecibidoGasto"  placeholder="origen" >
						<?php
							echo $array_consultaListaIngreso['proveedorIngreso'];
						?>
					</label>
				</div>
				<div class="col-md-5 celda" style="height: 60px;  font-size: 11px">
					<label id="descripcionDineroRecibidoGasto" name="descripcionDineroRecibidoGasto"  placeholder="Descripción" >
						<?php
							echo $array_consultaListaIngreso['descripcionIngreso'];
						?>
					</label>
				</div>
				<div class="col-md-1 celda"  style="height: 60px;  font-size: 11px">
					<label id="cantidadDineroRecibidoGasto" name="cantidadDineroRecibidoGasto"  placeholder="Cantidad" >
						<?php
							echo "$".$array_consultaListaIngreso['valorIngreso'];
						?>
					</label>
				</div>
</div>





<?php
}

$sumaDineroIngresado = "SELECT SUM(valorIngreso) FROM ingresoscontabilidad WHERE mesIngreso = '{$mesHoy}' AND diaInicioPeriodoIngreso = '{$diaInicioPeriodoIngreso}'";
$procesar_sumaDineroIngresado = mysqli_query($mysqli, $sumaDineroIngresado);
if ($array_sumaDineroIngresado = mysqli_fetch_array($procesar_sumaDineroIngresado)) {



?>

<div class="row">
	<div class="col-md-6">
		
	</div>
	<div class="col-md-5 celda" style="text-align: center; background-color: white">
		<label>TOTAL INGRESADO:</label>
	</div>
	<div class="col-md-1 celda" id="valorTotal" style="background-color: white">
		<label >
			<?php
			echo "$".$array_sumaDineroIngresado[0];
			?>
		</label>
		<script type="text/javascript">
			var tomadoValorTotal = document.getElementById('valorTotal');
			if (tomadoValorTotal < 1) {
				document.getElementById('valorIngreso').style.background-color:red;
			}
		</script>
	</div>
</div>
<?php
}
?>