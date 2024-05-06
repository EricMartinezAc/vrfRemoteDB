<?php

$mesHoy = date('m');
$diaHoy = date('d');
$sql = " SELECT `idGasto`, `diaGasto`, `mesGasto`, `anoGasto`, `centroDeCostoGasto`, `codigoGasto`, `proveedorFacturaGasto`, `descripcionGasto`, `cantidadGasto`, `valorUnitarioGasto`, `valorTotalGasto`, `responsableGasto`, `diaInicioPeriodoGasto`, `mesInicioPeriodoGasto`, `anoInicioPeriodoGasto`, `diaCorteGasto`, `mesCorteGasto`, `anoCorteGasto`, `sedeGasto` FROM `gastos` WHERE 1" ;

$diaCorteGasto = $_GET['diaCorteGasto'];
$mesCorteGasto = $_GET['mesCorteGasto'];
$anoCorteGasto = $_GET['anoCorteGasto'];
$diaInicioPeriodoGasto = $_GET['diaInicioPeriodoGasto'];
$mesInicioPeriodoGasto = $_GET['mesInicioPeriodoGasto'];
$anoInicioPeriodoGasto = $_GET['anoInicioPeriodoGasto'];



if (empty($diaCorteGasto) || empty($mesCorteGasto) || empty($anoCorteGasto) || empty($diaInicioPeriodoGasto) || empty($mesInicioPeriodoGasto) || empty($anoInicioPeriodoGasto)) {

header("Location: ../../mainContabilidad.php")
	
}else{

	
}
$consultaPeriodoGastos = "SELECT * FROM gastos WHERE mesCorteGasto = '{$mesHoy}' AND diaGasto >= '{$diaHoy}' ORDER BY diaGasto ASC ";
$procesar_consultaPeriodoGasto = mysqli_query($mysqli, $consultaPeriodoGastos);
while ($array_consultaPeriodoGasto = mysqli_fetch_array($procesar_consultaPeriodoGasto)) {
$diaInicioPeriodoGasto =  $array_consultaPeriodoGasto['diaInicioPeriodoGasto']


?>

<div class="row" style="background-color: white;">
				<div class="col-md-1 celda" style="height: 60px; font-size: 14px">
					<label id="idDineroRecibidoGasto" name="idDineroRecibidoGasto">
						<?php
							echo $array_consultaPeriodoGasto['idGasto'];
						?>
					</label>
				</div>
				<div class="col-md-1 celda" style="height: 60px;  font-size: 12px" >
					<label id="fechaDineroRecibidoGasto" name="fechaDineroRecibidoGasto" placeholder="fecha" >
						<?php
							echo $array_consultaPeriodoGasto['diaGasto']." / ".$array_consultaPeriodoGasto['mesGasto']." / ".$array_consultaPeriodoGasto['anoGasto'];
						?>
					</label>
				</div>
				<div class="col-md-2 celda" style="height: 60px;  font-size: 11px">
					<label id="centroDeCostoDineroRecibidoGasto" name="centroDeCostoDineroRecibidoGasto"  placeholder="centro de costo" >
						<?php
							echo $array_consultaPeriodoGasto['centroDeCostoGasto'];
						?>
					</label>
				</div>
				<div class="col-md-2 celda" style="height: 60px;  font-size: 11px">
					<label id="proveedorDineroRecibidoGasto" name="proveedorDineroRecibidoGasto"  placeholder="origen" >
						<?php
							echo $array_consultaPeriodoGasto['proveedorFacturaGasto'];
						?>
					</label>
				</div>
				<div class="col-md-3 celda" style="height: 60px;  font-size: 11px">
					<label id="descripcionDineroRecibidoGasto" name="descripcionDineroRecibidoGasto"  placeholder="Descripción" >
						<?php
							echo $array_consultaPeriodoGasto['descripcionGasto'];
						?>
					</label>
				</div>
				<div class="col-md-1 celda"  style="height: 60px;  font-size: 11px">
					<label id="cantidadDineroRecibidoGasto" name="cantidadDineroRecibidoGasto"  placeholder="Cantidad" >
						<?php
							echo $array_consultaPeriodoGasto['cantidadGasto'];
						?>
					</label>
				</div>
				<div class="col-md-1 celda"  style="height: 60px;  font-size: 11px">
					<label id="valorUnitDineroRecibidoGasto" name="valorUnitDineroRecibidoGasto"  placeholder="Cantidad" >
						<?php
							echo "$".$array_consultaPeriodoGasto['valorUnitarioGasto'];
						?>
					</label>
				</div>
				
				<div class="col-md-1 celda"  style="height: 60px;  font-size: 11px">
					<label id="valorTotalDineroRecibidoGasto" name="valorTotalDineroRecibidoGasto"  placeholder="Cantidad" >
						<?php
							echo "$".$array_consultaPeriodoGasto['valorTotalGasto'];
						?>
					</label>
				</div>
</div>

<?php

}
$sumaDineroGastado = "SELECT SUM(valorTotalGasto) FROM gastos WHERE mesGasto = '{$mesHoy}' AND diaInicioPeriodoGasto = '{$diaInicioPeriodoGasto}'";
$procesar_sumaDineroGastado = mysqli_query($mysqli, $sumaDineroGastado);
if ($array_sumaDineroGastado = mysqli_fetch_array($procesar_sumaDineroGastado)) {



?>

<div class="row">
	<div class="col-md-6">
		
	</div>
	<div class="col-md-5 celda" style="text-align: center; background-color: white">
		<label>TOTAL GASTADO:</label>
	</div>
	<div class="col-md-1 celda" id="valorTotal" style="background-color: white">
		<label >
			<?php
			echo "$".$array_sumaDineroGastado[0];
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
	echo "NO HAY GASTOS";
}
include 'div_valorTotal.php';
?>