<?php

$mesHoy = date('m');
$diaHoy = date('d');
$sqlGastos = " SELECT `idGasto`, `diaGasto`, `mesGasto`, `anoGasto`, `centroDeCostoGasto`, `codigoGasto`, `proveedorFacturaGasto`, `descripcionGasto`, `cantidadGasto`, `valorUnitarioGasto`, `valorTotalGasto`, `responsableGasto`, `diaInicioPeriodoGasto`, `mesInicioPeriodoGasto`, `anoInicioPeriodoGasto`, `diaCorteGasto`, `mesCorteGasto`, `anoCorteGasto`, `sedeGasto` FROM `gastos` WHERE 1" ;
$sqlIngresoscontabilidad = "SELECT `idIngreso`, `noSemanaIngreso`, `diaIngreso`, `mesIngreso`, `anoIngreso`, `proveedorIngreso`, `centroDeCostoIngreso`, `descripcionIngreso`, `modoIngreso`, `valorIngreso`, `receptorIngreso`, `diaInicioPeriodoIngreso`, `mesInicioPeriodoIngreso`, `anoInicioPeriodoIngreso`, `diaCorteIngreso`, `mesCorteIngreso`, `anoCorteIngreso`, `sedeIngreso` FROM `ingresoscontabilidad` WHERE 1";

$diaInicio = $_GET['diaInicio'];
$mesInicio = $_GET['mesInicio'];
$anoInicio = $_GET['anoInicio'];
$diaCorte = $_GET['diaCorte'];
$mesCorte = $_GET['mesCorte'];
$anoCorte = $_GET['anoCorte'];



if (empty($diaInicio) || empty($mesInicio) || empty($anoInicio) || empty($diaCorte) || empty($mesCorte) || empty($anoCorte)) {

header("Location: ../mainContabilidad.php");
	
}else{
	require '../../../php/conexion.php';

//cadena de texto que consulta todo donde corresponda al periodo solicitado

	$consulta_datosIngresos = "SELECT * FROM ingresoscontabilidad WHERE diaInicioPeriodoIngreso = '{$diaInicio}' AND mesInicioPeriodoIngreso = '{$mesInicio}' AND anoInicioPeriodoIngreso = '{$anoInicio}' AND diaCorteIngreso = '{$diaCorte}' AND mesCorteIngreso = '{$mesCorte}' AND anoCorteIngreso = '{$anoCorte}'";
	$consulta_datosGastos = "SELECT * FROM gastos WHERE diaInicioPeriodoGasto = '{$diaInicio}' AND mesInicioPeriodoGasto = '{$mesInicio}' AND anoInicioPeriodoGasto = '{$anoInicio}' AND diaCorteGasto = '{$diaCorte}' AND mesCorteGasto = '{$mesCorte}' AND anoCorteGasto = '{$anoCorte}'";

//ejecutar consultas para obtener todo en una variable
	$procesar_consulta_datosGastos = mysqli_query($mysqli, $consulta_datosGastos);
	$procesar_consulta_datosIngresos = mysqli_query($mysqli, $consulta_datosIngresos);

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>..::Contabilidad</title>
	<link rel="stylesheet" type="text/css" href="../../../Controlador/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../../../Controlador/dataTables.bootstrap.min.css">
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../../../Controlador/styles.css">
</head>
<body style="background-color: rgba(112,114,112,1); padding: 10px">


<div id="" style="opacity: 0.9;">
<div class="container">













<center>
		<div >
			<div class="row " style="background-color: white;">
				<div class="col-md-7 celda letrasGrandes" style="background-color: SeaGreen;" >
				<br>
					<h3>Formato de legalización de Gastos</h3>
				<br>
				</div>
				<div class="col-md-5 celda ">
				<center>
				<script type="text/javascript">
					function eliminar(){
						location.href = "../Resource/consultarDatosAASingle.php";
					};
				</script>
					<img id="logoEncabezadoAASingle" style="width: 300px; padding-top: 4%; padding-bottom: 3%" onclick="guardar()" src="../../img/ico/logoVRF.png">
				</center>
				</div>
			</div>


			<div class="row letrasPequeñas2" style="background-color: white;">
				<div class="col-md-4 celda">
					Fecha de Emisión: 2018-AGO-12
				</div>
				<div class="col-md-2 celda">
					Revisión: 01
				</div>
				<div class="col-md-4 celda">
					Página 1 de 1
				</div>
				
				<div  class="col-md-2 celda">
					Nit. 900383679-8
				</div>
			</div>
</center>
<br>













<center>
<div class="row" style="background-color: rgba(105,180,100,4);">
	<div class="col-md-12 celda">
		<label>DATOS DE LEGALIZACIÓN</label>
	</div>
</div>



<?php
if ($array_procesar_consulta_datosIngresos = mysqli_fetch_array($procesar_consulta_datosIngresos)) {
	

?>


<div class="row" style="background-color: white">
				<div class="col-md-2 celda ">
					<label >Responsable:</label>
				</div>
				<div class="col-md-5 celda " style="padding-top: 5px;">
					<lable style="width: 100%; text-align: center;" type="text" value="" id="responsableIngreso" name="responsableIngreso" placeholder="Ingrese el nombre del responsable de zona">
						<?php echo $array_procesar_consulta_datosIngresos['receptorIngreso'] ?>
					</lable>
				</div>
				
				<div class="col-md-2 celda">
					<label>Fecha inicial</label>
				</div>
				<div class="col-md-3 celda">
					<label style="width: 100%; text-align: center;" type="text" value="" id="fechaInicioIngreso" name="fechaInicioIngreso" placeholder="Fecha inicio periodo">
						<?php echo $array_procesar_consulta_datosIngresos['diaInicioPeriodoIngreso']." / ". $array_procesar_consulta_datosIngresos['mesInicioPeriodoIngreso']." / ". $array_procesar_consulta_datosIngresos['anoInicioPeriodoIngreso'] ?>
					</label>
				</div>
</div>
<div class="row" style="background-color: white">
				<div class="col-md-2 celda">
					<label>Ciudad/Zona:</label>
				</div>
				<div class="col-md-5 celda">
					<label style="width: 100%; text-align: center;" type="text" value="" id="ciudadZonaIngreso" name="ciudadZonaIngreso" placeholder="Barranquilla - Atlántico">
						<?php echo $array_procesar_consulta_datosIngresos['sedeIngreso'] ?>
					</label>
				</div>
				
				<div class="col-md-2 celda">
					<label>Fecha Final:</label>
				</div>
				<div class="col-md-3 celda">
					<label style="width: 100%; text-align: center;" type="text" value="" id="fechaCorteIngreso" name="fechaCorteIngreso" placeholder="Fecha de corte">
						<?php echo $array_procesar_consulta_datosIngresos['diaCorteIngreso']." / ". $array_procesar_consulta_datosIngresos['mesCorteIngreso']." / ". $array_procesar_consulta_datosIngresos['anoCorteIngreso'] ?>
					</label>
				</div>
</div>


<div class="row" style="background-color: white">
				<div class="col-md-2 celda ">
					<label>Dirección:</label>
				</div>
				<div class="col-md-5 celda">
					<label id="direccionIngreso" name="direccionIngreso">Calle 86 #51b - 51</label>
				</div>
				
				<div class="col-md-2 celda">
					<label>Forma de pago</label>
				</div>
				<div class="col-md-3 celda">
					<label id="formaPagoIngreso" name="formaPagoIngreso" >Contado</label>
				</div>
</div>
<div class="row" style="background-color: white">
				<div class="col-md-2 celda ">
					<label>Motivo:</label>
				</div>
				<div class="col-md-5 celda">
					<label id="direccionIngreso" name="direccionIngreso">Caja Menor Barranquilla</label>
				</div>
				
				<div class="col-md-2 celda">
					<label>Moneda</label>
				</div>
				<div class="col-md-3 celda">
					<label id="formaPagoIngreso" name="formaPagoIngreso" >COP</label>
				</div>
</div>
</center>




<?php
}else{
	echo "SIN DATOS DE LEGALIZACÓN";
}
?>





<br>
<center>
<div class="row celda" style="background-color: rgba(105,180,100,4);">
	<div class="col-md-12">
		<label>DINERO RECIBIDO</label>
	</div>
</div>	
</center>

<center>
<div class="row" style="background-color: SeaGreen;">
				<div class="col-md-1 celda" style="padding-top: 10px; padding-bottom: 10px">
					<label>ID</label>
				</div>
				<div class="col-md-1 celda" style="padding-top: 10px; padding-bottom: 10px">
					<label>Fecha</label>
				</div>
				<div class="col-md-2 celda" style="padding-top: 10px; padding-bottom: 10px">
					<label>Centro de costo</label>
				</div>
				<div class="col-md-2 celda" style="padding-top: 10px; padding-bottom: 10px">
					<label>Proveedor</label>
				</div>
				<div class="col-md-5 celda" style="padding-top: 10px; padding-bottom: 10px">
					<label>Descripción</label>
				</div>
				<div class="col-md-1 celda" style="padding-top: 10px; padding-bottom: 10px">
					<label>Valor</label>
				</div>
				
</div>
</center>
<?php

$consulta_datosIngresos = "SELECT * FROM ingresoscontabilidad WHERE diaInicioPeriodoIngreso = '{$diaInicio}' AND mesInicioPeriodoIngreso = '{$mesInicio}' AND anoInicioPeriodoIngreso = '{$anoInicio}' AND diaCorteIngreso = '{$diaCorte}' AND mesCorteIngreso = '{$mesCorte}' AND anoCorteIngreso = '{$anoCorte}'";

if($procesar_consulta_datosIngresos = mysqli_query($mysqli, $consulta_datosIngresos)){

while ($array_procesar_consulta_datosIngresos = mysqli_fetch_array($procesar_consulta_datosIngresos)) {


?>




<center>
<div class="row" style="background-color: white;">
				<div class="col-md-1 celda" style="height: 60px; font-size: 14px">
					<label id="idDineroRecibidoGasto" name="idDineroRecibidoGasto">
						<?php
							echo $array_procesar_consulta_datosIngresos['idIngreso'];
						?>
					</label>
				</div>
				<div class="col-md-1 celda" style="height: 60px;  font-size: 11px" >
					<label id="fechaDineroRecibidoGasto" name="fechaDineroRecibidoGasto" placeholder="fecha" >
						<?php
							echo $array_procesar_consulta_datosIngresos['diaIngreso']." / ".$array_procesar_consulta_datosIngresos['mesIngreso']." / ".$array_procesar_consulta_datosIngresos['anoIngreso'];
						?>
					</label>
				</div>
				<div class="col-md-2 celda" style="height: 60px;  font-size: 11px">
					<label id="centroDeCostoDineroRecibidoGasto" name="centroDeCostoDineroRecibidoGasto"  placeholder="centro de costo" >
						<?php
							echo $array_procesar_consulta_datosIngresos['centroDeCostoIngreso'];
						?>
					</label>
				</div>
				<div class="col-md-2 celda" style="height: 60px;  font-size: 11px">
					<label id="proveedorDineroRecibidoGasto" name="proveedorDineroRecibidoGasto"  placeholder="origen" >
						<?php
							echo $array_procesar_consulta_datosIngresos['proveedorIngreso'];
						?>
					</label>
				</div>
				<div class="col-md-5 celda" style="height: 60px;  font-size: 11px">
					<label id="descripcionDineroRecibidoGasto" name="descripcionDineroRecibidoGasto"  placeholder="Descripción" >
						<?php
							echo $array_procesar_consulta_datosIngresos['descripcionIngreso'];
						?>
					</label>
				</div>
				<div class="col-md-1 celda"  style="height: 60px;  font-size: 11px">
					<label id="cantidadDineroRecibidoGasto" name="cantidadDineroRecibidoGasto"  placeholder="Cantidad" >
						<?php
							echo "$".$array_procesar_consulta_datosIngresos['valorIngreso'];
						?>
					</label>
				</div>
</div>


<?php
}
}else{
	echo "SIN DATOS DE INGRESOS";
}
?>








<div class="row">
	<div class="col-md-6">
		
	</div>
	<div class="col-md-5 celda" style="background-color: white">
		 TOTAL INGRESADO: 
	</div>
	<div class="col-md-1 celda" style="background-color: white">
		<?php

$consulta_ingresoTotal = "SELECT SUM(valorIngreso) FROM ingresoscontabilidad WHERE diaInicioPeriodoIngreso = '{$diaInicio}' AND mesInicioPeriodoIngreso = '{$mesInicio}' AND anoInicioPeriodoIngreso = '{$anoInicio}' AND diaCorteIngreso = '{$diaCorte}' AND mesCorteIngreso = '{$mesCorte}' AND anoCorteIngreso = '{$anoCorte}'";

$procesar_consulta_ingresoTotal = mysqli_query($mysqli, $consulta_ingresoTotal);
if($array_ingresoTotal = mysqli_fetch_array($procesar_consulta_ingresoTotal)){

			echo "$".$array_ingresoTotal[0];
}else{
	echo "$0";
}
		?>
	</div>
</div>

</center>













<center>
	
<br>
<div class="row" style="background-color: rgba(105,180,100,4);">
	<div class="col-md-12 celda">
		<label>DINERO GASTADO</label>
	</div>
</div>
			<div class="row" style="background-color: SeaGreen">
				<div class="col-md-1 celda" style="padding-top: 10px; padding-bottom: 10px">
					<label>ITEM</label>
				</div>
				<div class="col-md-1 celda" style="padding-top: 10px; padding-bottom: 10px">
					<label>Fecha</label>
				</div>
				<div class="col-md-2 celda" style="padding-top: 10px; padding-bottom: 10px">
					<label>Centro de costo</label>
				</div>
				<div class="col-md-2 celda" style="padding-top: 10px; padding-bottom: 10px">
					<label>Proveedor</label>
				</div>
				<div class="col-md-3 celda" style="padding-top: 10px; padding-bottom: 10px">
					<label>Descripción</label>
				</div>
				<div class="col-md-1 celda" style="padding-top: 10px; padding-bottom: 10px">
					<label>Cantidad</label>
				</div>
				<div class="col-md-1 celda">
					<label>Valor Unit</label>
				</div>
				<div class="col-md-1 celda">
					<label>Valor Total</label>
				</div>
			</div>
</center>

			<?php 

while($array_listaGastos = mysqli_fetch_array($procesar_consulta_datosGastos)){

			?>

	

<div class="row" style="background-color: white; text-align: center;">
				<div class="col-md-1 celda" style="text-align: center;height: 60px; font-size: 14px">
					<label id="idDineroRecibidoGasto" name="idDineroRecibidoGasto">
						<?php
							echo $array_listaGastos['idGasto'];
						?>
					</label>
				</div>
				<div class="col-md-1 celda" style="text-align: center;height: 60px;  font-size: 12px" >
					<label id="fechaDineroRecibidoGasto" name="fechaDineroRecibidoGasto" placeholder="fecha" >
						<?php
							echo $array_listaGastos['diaGasto']." / ".$array_listaGastos['mesGasto']." / ".$array_listaGastos['anoGasto'];
						?>
					</label>
				</div>
				<div class="col-md-2 celda" style="text-align: center;height: 60px;  font-size: 11px">
					<label id="centroDeCostoDineroRecibidoGasto" name="centroDeCostoDineroRecibidoGasto"  placeholder="centro de costo" >
						<?php
							echo $array_listaGastos['centroDeCostoGasto'];
						?>
					</label>
				</div>
				<div class="col-md-2 celda" style="text-align: center;height: 60px;  font-size: 11px">
					<label id="proveedorDineroRecibidoGasto" name="proveedorDineroRecibidoGasto"  placeholder="origen" >
						<?php
							echo $array_listaGastos['proveedorFacturaGasto'];
						?>
					</label>
				</div>
				<div class="col-md-3 celda" style="text-align: center;height: 60px;  font-size: 11px">
					<label id="descripcionDineroRecibidoGasto" name="descripcionDineroRecibidoGasto"  placeholder="Descripción" >
						<?php
							echo $array_listaGastos['descripcionGasto'];
						?>
					</label>
				</div>
				<div class="col-md-1 celda"  style="text-align: center;height: 60px;  font-size: 11px">
					<label id="cantidadDineroRecibidoGasto" name="cantidadDineroRecibidoGasto"  placeholder="Cantidad" >
						<?php
							echo $array_listaGastos['cantidadGasto'];
						?>
					</label>
				</div>
				<div class="col-md-1 celda"  style="height: 60px;  font-size: 11px; text-align: center;">
					<label id="valorUnitDineroRecibidoGasto" name="valorUnitDineroRecibidoGasto"  placeholder="Cantidad" >
						<?php
							echo "$".$array_listaGastos['valorUnitarioGasto'];
						?>
					</label>
				</div>
				
				<div class="col-md-1 celda"  style="text-align: center;height: 60px;  font-size: 11px">
					<label id="valorTotalDineroRecibidoGasto" name="valorTotalDineroRecibidoGasto"  placeholder="Cantidad" >
						<?php
						$totalFacturaListaGastos = $array_listaGastos['valorUnitarioGasto']*$array_listaGastos['cantidadGasto'];
							echo "$".$totalFacturaListaGastos;
						?>
					</label>
				</div>
</div>

</center>

<?php
}
$consulta_gastoTotal ="SELECT SUM(valorTotalGasto) FROM gastos WHERE diaInicioPeriodoGasto = '{$diaInicio}' AND mesInicioPeriodoGasto = '{$mesInicio}' AND anoInicioPeriodoGasto = '{$anoInicio}' AND diaCorteGasto = '{$diaCorte}' AND mesCorteGasto = '{$mesCorte}' AND anoCorteGasto = '{$anoCorte}'";
$procesar_consulta_gastoTotal = mysqli_query($mysqli, $consulta_gastoTotal);
if($array_gastoTotal = mysqli_fetch_array($procesar_consulta_gastoTotal)){
?>
<div class="row" style=" background-color: white">
	<div class="col-md-6" style="border-left-style: solid; background-color: white">
		Observaciones:
	</div>
	<div class="col-md-5 celda" style="background-color: white">
		 TOTAL GASTADO: 
	</div>
	<div class="col-md-1 celda" style="background-color: white">
<?php echo "$".$array_gastoTotal[0];
}else{
	echo "$0";
}

$saldoCM = $array_ingresoTotal[0] - $array_gastoTotal[0];
if ($saldoCM < 1){ 
	$colorSaldoCM = "red"; 
}else{ 
	$colorSaldoCM = "blue";
	 }
?>
	</div>
</div>




<div class="row" style=" background-color: white">
	<div class="col-md-6 "style="border-left-style: solid; background-color: white">
		//
	</div>
	<div class="col-md-5 celda" style="font-size: 14px; font: bold; font:cursive; background-color: white">
		 ANTICIPO: 
	</div>
	<div class="col-md-1 celda" style="font-size: 15px; font: bold; font:cursive; background-color: white">
<?php echo "$".$array_ingresoTotal[0];?>
	</div>
</div>






<div class="row" style=" background-color: white">
	<div class="col-md-6" style="border-left-style: solid;  background-color: white">
		//
	</div>
	<div class="col-md-5 celda" style="font-size: 14px; font: bold; font:cursive; background-color: white">
		 TOTAL A FAVOR DE VRF INGENIERIA S.A.S.: 
	</div>
	<div class="col-md-1 celda" style="font-size: 15px; font: bold; font:cursive; background-color: <?php echo $colorSaldoCM ?>; color: white">
<?php echo "$".$saldoCM;?>
	</div>
</div>

 <div class="row" style=" background-color: white">
	<div class="col-md-12" style="border-left-style: solid;  background-color: white">
		//
	</div>
</div>






<div class="row celda" style="height: 150px; background-color: white">
	<div class="col-md-8" style="border-left-style: solid;  background-color: white">
		NOTA:
	</div>
	<div class="col-md-2 " style="padding-top: 90px; border-left-style: solid; font-size: 14px; font: bold; font:cursive; background-color: white">
		 <label style="border-top-style: ridge;"> Dto. Compras</label> 			
	</div>
	
	<div class="col-md-2 " style="padding-top: 90px; border-left-style: solid;  font-size: 15px; font: bold; font:cursive; background-color:  white">
		<label style="border-top-style: ridge;">Proveedor</label> 
	</div>
	
</div>	



<br><br>
<center>
	<div style="width: 100%; position: relative; background-color: #000; opacity: 0.8; padding-top: 10px; padding-bottom: 10px">
		<font style=" font-style: italic; color: #fff">
		www.vrfingenieria.com
		</font>
		<br>
		<font style="font-style: italic; color: #fff">
		comercial@vrfingenieria.com - mantenimiento@vrfingenieria.com
		</font>
	</div>
</center>




		</div>
	</div>
	</form>
</div>
<br><br><br><br><br><br><br><br><br><br><br>
<script src="../../Controlador/jquery-2.2.4.min.js"></script>
<script src="../../Controlador/bootstrap.js"></script>
<script src="../../Controlador/swiper.min.js"></script>

<!--
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>



				
-->

<script src="../../Controlador/jquery.dataTables.min.js"></script>
<script src="../../Controlador/dataTables.bootstrap.min.js"></script>
<script src="recursos/js/config.js"></script>
<script src="recursos/js/diagramas.js"></script>
</body>


</html>
<?php

}

?>