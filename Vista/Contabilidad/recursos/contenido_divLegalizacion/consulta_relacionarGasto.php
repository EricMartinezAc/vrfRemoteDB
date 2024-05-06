<?php


$mesHoy = date('m');
$diaHoy = date('d');
$sqlGastos = " SELECT `idGasto`, `diaGasto`, `mesGasto`, `anoGasto`, `centroDeCostoGasto`, `codigoGasto`, `proveedorFacturaGasto`, `descripcionGasto`, `cantidadGasto`, `valorUnitarioGasto`, `valorTotalGasto`, `responsableGasto`, `diaInicioPeriodoGasto`, `mesInicioPeriodoGasto`, `anoInicioPeriodoGasto`, `diaCorteGasto`, `mesCorteGasto`, `anoCorteGasto`, `sedeGasto` FROM `gastos` WHERE 1" ;


$diaGasto = $_GET['diaGasto'];
$mesGasto = $_GET['mesGasto'];
$anoGasto = $_GET['anoGasto'];
$centroDeCostoGasto  = $_GET['centroDeCostoGasto'];
$codigoGasto = $_GET['codigoGasto'];
$proveedorFacturaGasto = $_GET['proveedorFacturaGasto'];
$descripcionGasto = $_GET['descripcionGasto'];
$cantidadGasto = $_GET['cantidadGasto'];
$valorUnitarioGasto = $_GET['valorUnitarioGasto'];
$responsableGasto = $_GET['responsableGasto'];
$diaInicioPeriodoGasto = $_GET['diaInicioPeriodoGasto'];
$mesInicioPeriodoGasto = $_GET['mesInicioPeriodoGasto'];
$anoInicioPeriodoGasto = $_GET['anoInicioPeriodoGasto'];
$diaCorteGasto = $_GET['diaCorteGasto'];
$mesCorteGasto = $_GET['mesCorteGasto'];
$anoCorteGasto = $_GET['anoCorteGasto'];
$sedeGasto = $_GET['sedeGasto'];



if (empty($diaGasto) || empty($mesGasto) || empty($anoGasto) || empty($centroDeCostoGasto) || empty($codigoGasto) || empty($proveedorFacturaGasto) || empty($descripcionGasto) || empty($cantidadGasto) || empty($valorUnitarioGasto) || empty($responsableGasto) || empty($diaInicioPeriodoGasto) || empty($mesInicioPeriodoGasto) || empty($anoInicioPeriodoGasto) || empty($diaCorteGasto) || empty($mesCorteGasto) || empty($anoCorteGasto) || empty($sedeGasto)) {

header("Location: ../../mainContabilidad.php");
	
}else{
	require '../../../../php/conexion.php';

	$valorTotalGasto = $valorUnitarioGasto * $cantidadGasto;

$consulta_insertarGastos = "INSERT INTO gastos (diaGasto, mesGasto, anoGasto, centroDeCostoGasto, codigoGasto, proveedorFacturaGasto, descripcionGasto, cantidadGasto, valorUnitarioGasto, valorTotalGasto, responsableGasto, diaInicioPeriodoGasto, mesInicioPeriodoGasto, anoInicioPeriodoGasto, diaCorteGasto, mesCorteGasto, anoCorteGasto, sedeGasto) VALUES ('{$diaGasto}', '{$mesGasto}', '{$anoGasto}', '{$centroDeCostoGasto}', '{$codigoGasto}', '{$proveedorFacturaGasto}', '{$descripcionGasto}', '{$cantidadGasto}', '{$valorUnitarioGasto}', '{$valorTotalGasto}', '{$responsableGasto}' , '{$diaInicioPeriodoGasto}', '{$mesInicioPeriodoGasto}', '{$anoInicioPeriodoGasto}', '{$diaCorteGasto}', '{$mesCorteGasto}', '{$anoCorteGasto}', '{$sedeGasto}')";



//ejecutar consultas para obtener todo en una variable
	if($procesar_consulta_datosGastos = mysqli_query($mysqli, $consulta_insertarGastos)){

header("Location: ../../mainContabilidad.php");



	}else{
		echo $consulta_insertarGastos;
		echo "no se pudo agregar <br>";
		$diaGasto = $_GET['diaGasto'];
echo $mesGasto ;
echo $anoGasto ;
echo $centroDeCostoGasto ;
echo $codigoGasto ;
echo $proveedorFacturaGasto ;
echo $descripcionGasto ;
echo $cantidadGasto ;
echo $valorUnitarioGasto;
echo $responsableGasto;
echo $diaInicioPeriodoGasto;
echo $mesInicioPeriodoGasto;
echo $anoInicioPeriodoGasto;
echo $diaCorteGasto;
echo $mesCorteGasto;
echo $anoCorteGasto;
echo $sedeGasto;
	}

}

?>