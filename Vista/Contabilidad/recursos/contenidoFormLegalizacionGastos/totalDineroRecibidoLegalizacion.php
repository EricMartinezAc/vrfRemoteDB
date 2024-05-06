<?php
$consultar_ultimoPeriodoLegalizado = "SELECT * FROM ingresoscontabilidad ORDER BY diaInicioPeriodoIngreso DESC";
$resultado_ultimoPeriodoLegalizado = mysqli_query($mysqli, $consultar_ultimoPeriodoLegalizado);
if ($array_ultimoPeriodoLegalizado = mysqli_fetch_array($resultado_ultimoPeriodoLegalizado)) {
	$diaInicioPeriodoIngreso = $array_ultimoPeriodoLegalizado['diaInicioPeriodoIngreso'];

}else{
	$diaInicioPeriodoIngreso = 01;
}


$consultarDinieroTotalRecibidoLegalizacion = "SELECT SUM(valorIngreso) as valorTotal FROM ingresoscontabilidad WHERE mesIngreso = '{$mesHoy}' AND diaInicioPeriodoIngreso = '{$diaInicioPeriodoIngreso}'";
if ($procesar_consultaDineroTotalRecibidoLegalizacion = mysqli_query($mysqli, $consultarDinieroTotalRecibidoLegalizacion)) {
	$result = mysqli_fetch_array($procesar_consultaDineroTotalRecibidoLegalizacion);



$sql = "`idIngreso`, `noSemanaIngreso`, `diaIngreso`, `mesIngreso`, `anoIngreso`, `proveedorIngreso`, `centroDeCostoIngreso`, `descripcionIngreso`, `modoIngreso`, `valorIngreso`, `receptorIngreso`, `diaInicioPeriodoIngreso`, `mesInicioPeriodoIngreso`, `anoInicioPeriodoIngreso`, `diaCorteIngreso`, `mesCorteIngreso`, `anoCorteIngreso`, `sedeIngreso` FROM `ingresoscontabilidad`";

?>

<div class="row">
	<div class="col-md-6">
		
	</div>
	<div class="col-md-5" style="text-align: center; background-color: white">
		<label>TOTAL INGRESADO:</label>
	</div>
	<div class="col-md-1" id="valorTotal" style="background-color: white">
		<label >
			<?php
			echo "$".$result['valorTotal'];
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
}else{
	echo "sin datos del mes: ".$mesHoy." del ".date('a');
}
?>