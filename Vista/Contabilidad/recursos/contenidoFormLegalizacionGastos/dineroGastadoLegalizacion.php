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
}else{
	$result = 0;
}
$consultar_ultimoPeriodoGastado = "SELECT * FROM gastos ORDER BY diaInicioPeriodoGasto DESC";
$resultado_ultimoPeriodoGastado = mysqli_query($mysqli, $consultar_ultimoPeriodoGastado);
if ($array_ultimoPeriodoGastado = mysqli_fetch_array($resultado_ultimoPeriodoGastado)) {
	$diaInicioPeriodoGastado = $array_ultimoPeriodoGastado['diaInicioPeriodoGasto'];
	$mesInicioPeriodoGasto = $array_ultimoPeriodoGastado['mesInicioPeriodoGasto'];
	$mesHoy = date('m');

	$consulta_valorTotalGasto = "SELECT SUM(valorTotalGasto) FROM gastos WHERE mesGasto = '{$mesInicioPeriodoGasto}' AND diaInicioPeriodoGasto = '{$diaInicioPeriodoGastado}' ";
	$procesar_valorTotalGasto = mysqli_query($mysqli, $consulta_valorTotalGasto);
	$array_valorTotal = mysqli_fetch_array($procesar_valorTotalGasto);
	$valorEnCaja = $result[0] - $array_valorTotal[0];


}else{
	$diaInicioPeriodoIngreso2 = 01;
}


$consultarDinieroGastadoLegalizacion = "SELECT * FROM gastos WHERE mesGasto = '{$mesInicioPeriodoGasto}' AND diaInicioPeriodoGasto = '{$diaInicioPeriodoGastado}'";
if ($procesar_consultaDineroGastadoLegalizacion = mysqli_query($mysqli, $consultarDinieroGastadoLegalizacion)) {
while ($arrayResult_dineroGastadoLegalizacion = mysqli_fetch_array($procesar_consultaDineroGastadoLegalizacion)) {

$sql = "SELECT `idGasto`, `diaGasto`, `mesGasto`, `anoGasto`, `centroDeCostoGasto`, `codigoGasto`, `proveedorFacturaGasto`, `descripcionGasto`, `cantidadGasto`, `valorUnitarioGasto`, `valorTotalGasto`, `responsableGasto`, `diaInicioPeriodoGasto`, `mesInicioPeriodoGasto`, `anoInicioPeriodoGasto`, `diaCorteGasto`, `mesCorteGasto`, `anoCorteGasto`, `sedeGasto` FROM `gastos` WHERE 1";

?>


<div class="row" style="background-color: white;">
				<div class="col-md-1 celda" style="height: 60px; font-size: 14px">
					<label id="idDineroRecibidoGasto" name="idDineroRecibidoGasto">
						<?php
							echo $arrayResult_dineroGastadoLegalizacion['idGasto'];
						?>
					</label>
				</div>
				<div class="col-md-1 celda" style="height: 60px;  font-size: 12px" >
					<label id="fechaDineroRecibidoGasto" name="fechaDineroRecibidoGasto" placeholder="fecha" >
						<?php
							echo $arrayResult_dineroGastadoLegalizacion['diaGasto']." / ".$arrayResult_dineroGastadoLegalizacion['mesGasto']." / ".$arrayResult_dineroGastadoLegalizacion['anoGasto'];
						?>
					</label>
				</div>
				<div class="col-md-2 celda" style="height: 60px;  font-size: 11px">
					<label id="centroDeCostoDineroRecibidoGasto" name="centroDeCostoDineroRecibidoGasto"  placeholder="centro de costo" >
						<?php
							echo $arrayResult_dineroGastadoLegalizacion['centroDeCostoGasto'];
						?>
					</label>
				</div>
				<div class="col-md-2 celda" style="height: 60px;  font-size: 11px">
					<label id="proveedorDineroRecibidoGasto" name="proveedorDineroRecibidoGasto"  placeholder="origen" >
						<?php
							echo $arrayResult_dineroGastadoLegalizacion['proveedorFacturaGasto'];
						?>
					</label>
				</div>
				<div class="col-md-3 celda" style="height: 60px;  font-size: 11px">
					<label id="descripcionDineroRecibidoGasto" name="descripcionDineroRecibidoGasto"  placeholder="Descripción" >
						<?php
							echo $arrayResult_dineroGastadoLegalizacion['descripcionGasto'];
						?>
					</label>
				</div>
				<div class="col-md-1 celda"  style="height: 60px;  font-size: 11px">
					<label id="cantidadDineroRecibidoGasto" name="cantidadDineroRecibidoGasto"  placeholder="Cantidad" >
						<?php
							echo $arrayResult_dineroGastadoLegalizacion['cantidadGasto'];
						?>
					</label>
				</div>
				<div class="col-md-1 celda"  style="height: 60px;  font-size: 11px">
					<label id="valorUnitDineroRecibidoGasto" name="valorUnitDineroRecibidoGasto"  placeholder="Cantidad" >
						<?php
							echo "$".$arrayResult_dineroGastadoLegalizacion['valorUnitarioGasto'];
						?>
					</label>
				</div>
				
				<div class="col-md-1 celda"  style="height: 60px;  font-size: 11px">
					<label id="valorTotalDineroRecibidoGasto" name="valorTotalDineroRecibidoGasto"  placeholder="Cantidad" >
						<?php
							echo "$".$arrayResult_dineroGastadoLegalizacion['valorTotalGasto'];
						?>
					</label>
				</div>
</div>


<?php
}
}else{
	echo "sin datos del mes: ".$mesHoy." del ".date('a');
}
?>


<div class="row">
	<div class="col-md-6">
		
	</div>
	<div class="col-md-5 celda" style="text-align: center; background-color: white">
		<label>TOTAL GASTADO:</label>
	</div>
	<div class="col-md-1 celda" style="background-color: white">
		<label id="valorTotalGastos"><?php 
echo "$".$array_valorTotal[0];
		 ?></label>
		 
	</div>
</div>
<div class="row">
	<div class="col-md-6">
		
	</div>
	<div class="col-md-5 celda" style="text-align: center; background-color: white">
		<label>TOTAL EN CAJA:</label>
	</div>
	<div class="col-md-1 celda" style="background-color: white">
		<label id="valorTotalGastos"><?php 
echo "$".$valorEnCaja;
		 ?></label>
		 
	</div>
</div>

