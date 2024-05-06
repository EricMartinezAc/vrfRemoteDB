<?php
$consulta_datosIngresos = "SELECT * FROM ingresoscontabilidad WHERE diaInicioPeriodoIngreso = '{$diaInicio}' AND mesInicioPeriodoIngreso = '{$mesInicio}' AND anoInicioPeriodoIngreso = '{$anoInicio}' AND diaCorteIngreso = '{$diaCorte}' AND mesCorteIngreso = '{$mesCorte}' AND anoCorteIngreso = '{$anoCorte}'";
	$consulta_datosGastos = "SELECT * FROM ingresoscontabilidad WHERE diaInicioPeriodoIngreso = '{$diaInicio}' AND mesInicioPeriodoIngreso = '{$mesInicio}' AND anoInicioPeriodoIngreso = '{$anoInicio}' AND diaCorteIngreso = '{$diaCorte}' AND mesCorteIngreso = '{$mesCorte}' AND anoCorteIngreso = '{$anoCorte}'";

//ejecutar consultas para obtener todo en una variable
	$procesar_consulta_datosGastos = mysqli_query($mysqli, $consulta_datosGastos);
	$procesar_consulta_datosIngresos = mysqli_query($mysqli, $consulta_datosIngresos);

?>