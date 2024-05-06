<div style="padding: 2%;opacity: 0.9; border-style: ridge; border-radius: 20px; height: 460px">
<?php 
$consultarDatosIngresos = "SELECT * FROM ingresoscontabilidad ";
$consultarDatosGastos = "SELECT * FROM gastos ";
$procesar_consultarDatosIngresos = mysqli_query($mysqli,$consultarDatosIngresos);
$procesar_consultarDatosGastos= mysqli_query($mysqli,$consultarDatosGastos);


	
while($resultado_consultaDatosIngresos = mysqli_fetch_array($procesar_consultarDatosIngresos)) {
	while ($resultado_consultaDatosGastos = mysqli_fetch_array($procesar_consultarDatosGastos)){
echo $resultado_consultaDatosIngresos['idIngreso'];
echo $resultado_consultaDatosIngresos['noSemanaIngreso'];
echo $resultado_consultaDatosIngresos['diaIngreso'];
echo $resultado_consultaDatosIngresos['mesIngreso'];
echo $resultado_consultaDatosIngresos['anoIngreso'];
echo $resultado_consultaDatosIngresos['proveedorIngreso'];
echo $resultado_consultaDatosIngresos['centroDeCostoIngreso'];
echo $resultado_consultaDatosIngresos['descripcionIngreso'];
echo $resultado_consultaDatosIngresos['modoIngreso'];
echo $resultado_consultaDatosIngresos['valorIngreso'];
echo $resultado_consultaDatosIngresos['receptorIngreso'];
echo $resultado_consultaDatosIngresos['diaInicioPeriodoIngreso'];
echo $resultado_consultaDatosIngresos['mesInicioPeriodoIngreso'];
echo $resultado_consultaDatosIngresos['anoInicioPeriodoIngreso'];
echo $resultado_consultaDatosIngresos['diaCorteIngreso'];
echo $resultado_consultaDatosIngresos['mesCorteIngreso'];
echo $resultado_consultaDatosIngresos['anoCorteIngreso'];
echo $resultado_consultaDatosIngresos['sedeIngreso'];
echo $resultado_consultaDatosGastos['idGasto'];
echo $resultado_consultaDatosGastos['diaGasto'];
echo $resultado_consultaDatosGastos['mesGasto'];
echo $resultado_consultaDatosGastos['anoGasto'];
echo $resultado_consultaDatosGastos['centroDeCostoGasto'];
echo $resultado_consultaDatosGastos['codigoGasto'];
echo $resultado_consultaDatosGastos['proveedorFacturaGasto'];
echo $resultado_consultaDatosGastos['descripcionGasto'];
echo $resultado_consultaDatosGastos['valorUnitarioGasto'];
echo $resultado_consultaDatosGastos['valorTotalGasto'];
echo $resultado_consultaDatosGastos['responsableGasto'];
echo $resultado_consultaDatosGastos['diaInicioPeriodoGasto'];
echo $resultado_consultaDatosGastos['mesInicioPeriodoGasto'];
echo $resultado_consultaDatosGastos['anoInicioPeriodoGasto'];
echo $resultado_consultaDatosGastos['diaCorteGasto'];
echo $resultado_consultaDatosGastos['mesCorteGasto'];
echo $resultado_consultaDatosGastos['anoCorteGasto'];
echo $resultado_consultaDatosGastos['sedeGasto'];
}}
?>
							<label>Saldo inicial: </label>
							
						</div>