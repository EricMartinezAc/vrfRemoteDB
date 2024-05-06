<?php

$mesHoy = date('m');
$consultaPeriodoGastosTotal = "SELECT * FROM gastos WHERE mesGasto = '{$mesHoy}' ORDER BY diaInicioPeriodoGasto DESC";
if($procesar_consultaPeriodoGastoTotal = mysqli_query($mysqli, $consultaPeriodoGastosTotal)){
if ($array_consultaPeriodoGastoTotal = mysqli_fetch_array($procesar_consultaPeriodoGastoTotal)) {
	$diaInicioPeriodoGastoTotal =  $array_consultaPeriodoGastoTotal['diaInicioPeriodoGasto'];


$consultaPeriodoIngresosTotal = "SELECT * FROM ingresoscontabilidad WHERE mesIngreso = '{$mesHoy}' ORDER BY diaInicioPeriodoIngreso DESC";
$procesar_consultaPeriodoIngresosTotal = mysqli_query($mysqli, $consultaPeriodoIngresosTotal);
if ($array_consultaPeriodoIngresosTotal = mysqli_fetch_array($procesar_consultaPeriodoIngresosTotal)) {
	$diaInicioPeriodoIngresoTotal =  $array_consultaPeriodoIngresosTotal['diaInicioPeriodoIngreso'];
}


$sumaDineroIngresadoTotal = "SELECT SUM(valorIngreso) FROM ingresoscontabilidad WHERE mesIngreso = '{$mesHoy}' AND diaInicioPeriodoIngreso = '{$diaInicioPeriodoIngresoTotal}'";
$procesar_sumaDineroIngresadoTotal = mysqli_query($mysqli, $sumaDineroIngresadoTotal);
if ($array_sumaDineroIngresadoTotal = mysqli_fetch_array($procesar_sumaDineroIngresadoTotal)) {
$sumaDineroGastadoTotal = "SELECT SUM(valorTotalGasto) FROM gastos WHERE mesGasto = '{$mesHoy}' AND diaInicioPeriodoGasto = '{$diaInicioPeriodoGastoTotal}'";
$procesar_sumaDineroGastadoTotal = mysqli_query($mysqli, $sumaDineroGastadoTotal);
if ($array_sumaDineroGastadoTotal = mysqli_fetch_array($procesar_sumaDineroGastadoTotal)) {

		$totalCM = $array_sumaDineroIngresadoTotal[0] - $array_sumaDineroGastadoTotal[0]

?>


<?php
}else{
	echo "...";
}
}
}
}
?>
<div class="row">
	<div class="col-md-6">
		
	</div>
	<div class="col-md-5 celda" style="text-align: center; background-color: white">
		<label>TOTAL A FAVOR DE VRF INGENIERIA S.A.S.:</label>
	</div>
	<div class="col-md-1 celda" id="valorTotal" style="background-color: white">
		<label >
			<?php
			echo "$".$totalCM;
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