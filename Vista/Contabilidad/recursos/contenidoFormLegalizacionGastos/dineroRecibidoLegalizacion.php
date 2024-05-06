<?php
$mesHoy = date('m');
$consultar_ultimoPeriodoLegalizado2 = "SELECT * FROM ingresoscontabilidad WHERE mesIngreso = '{$mesHoy}'";
$resultado_ultimoPeriodoLegalizado2 = mysqli_query($mysqli, $consultar_ultimoPeriodoLegalizado2);
while ($array_ultimoPeriodoLegalizado2 = mysqli_fetch_array($resultado_ultimoPeriodoLegalizado2)) {

$sql = "`idIngreso`, `noSemanaIngreso`, `diaIngreso`, `mesIngreso`, `anoIngreso`, `proveedorIngreso`, `centroDeCostoIngreso`, `descripcionIngreso`, `modoIngreso`, `valorIngreso`, `receptorIngreso`, `diaInicioPeriodoIngreso`, `mesInicioPeriodoIngreso`, `anoInicioPeriodoIngreso`, `diaCorteIngreso`, `mesCorteIngreso`, `anoCorteIngreso`, `sedeIngreso` FROM `ingresoscontabilidad`";

?>


<div class="row" style="background-color: white;">
				<div class="col-md-1 celda" style="height: 60px; font-size: 14px">
					<label id="idDineroRecibidoGasto" name="idDineroRecibidoGasto">
						<?php
							echo $array_ultimoPeriodoLegalizado2['idIngreso'];
						?>
					</label>
				</div>
				<div class="col-md-1 celda" style="height: 60px;  font-size: 12px" >
					<label id="fechaDineroRecibidoGasto" name="fechaDineroRecibidoGasto" placeholder="fecha" >
						<?php
							echo $array_ultimoPeriodoLegalizado2['diaIngreso']." / ".$array_ultimoPeriodoLegalizado2['mesIngreso']." / ".$array_ultimoPeriodoLegalizado2['anoIngreso'];
						?>
					</label>
				</div>
				<div class="col-md-2 celda" style="height: 60px;  font-size: 11px">
					<label id="centroDeCostoDineroRecibidoGasto" name="centroDeCostoDineroRecibidoGasto"  placeholder="centro de costo" >
						<?php
							echo $array_ultimoPeriodoLegalizado2['centroDeCostoIngreso'];
						?>
					</label>
				</div>
				<div class="col-md-2 celda" style="height: 60px;  font-size: 11px">
					<label id="proveedorDineroRecibidoGasto" name="proveedorDineroRecibidoGasto"  placeholder="origen" >
						<?php
							echo $array_ultimoPeriodoLegalizado2['proveedorIngreso'];
						?>
					</label>
				</div>
				<div class="col-md-5 celda" style="height: 60px;  font-size: 11px">
					<label id="descripcionDineroRecibidoGasto" name="descripcionDineroRecibidoGasto"  placeholder="Descripción" >
						<?php
							echo $array_ultimoPeriodoLegalizado2['descripcionIngreso'];
						?>
					</label>
				</div>
				<div class="col-md-1 celda"  style="height: 60px;  font-size: 11px">
					<label id="cantidadDineroRecibidoGasto" name="cantidadDineroRecibidoGasto"  placeholder="Cantidad" >
						<?php
							echo "$".$array_ultimoPeriodoLegalizado2['valorIngreso'];
						?>
					</label>
				</div>
</div>


<?php
}
?>