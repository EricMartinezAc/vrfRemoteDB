<?php
require ("../../../../php/conexion.php");

$diaGasto = $_GET["diaGasto"];
$mesGasto = $_GET["mesGasto"];
$anoGasto = $_GET["anoGasto"];
$centroDeCostoGasto = $_GET["centroDeCostoGasto"];
$codigoGasto = $_GET["codigoGasto"];
$proveedorFacturaGasto = $_GET["proveedorFacturaGasto"];
$descripcionGasto = $_GET["descripcionGasto"];
$cantidadGasto = $_GET["cantidadGasto"];
$valorUnitarioGasto = $_GET["valorUnitarioGasto"];
$valorTotalGasto = $valorUnitarioGasto * $cantidadGasto;
$responsableGasto  = $_GET["responsableGasto"];
$diaCorteGasto = $_GET["diaCorteGasto"];
$mesCorteGasto = $_GET["mesCorteGasto"];
$anoCorteGasto = $_GET["anoCorteGasto"];
$sedeGasto = $_GET["sedeGasto"];

if (empty($diaGasto) || empty($diaGasto) || empty($mesGasto) || empty($anoGasto) || empty($centroDeCostoGasto)  || empty($codigoGasto)  || empty($proveedorFacturaGasto) || empty($descripcionGasto) || empty($cantidadGasto)  || empty($valorUnitarioGasto) ||  empty($valorTotalGasto) || empty($responsableGasto) || empty($diaCorteGasto) || empty($mesCorteGasto) || empty($anoCorteGasto) || empty($sedeGasto)) {
	echo "no se pudo cargar";
	
}else{
$insert = "INSERT INTO `gastos`(`diaGasto`, `mesGasto`, `anoGasto`, `centroDeCostoGasto`, `codigoGasto`, `proveedorFacturaGasto`, `descripcionGasto`, `cantidadGasto`, `valorUnitarioGasto`, `valorTotalGasto`, `responsableGasto`, `diaCorteGasto`, `mesCorteGasto`, `anoCorteGasto`, `sedeGasto`) VALUES ('{$diaGasto}','{$mesGasto}','{$anoGasto}','{$centroDeCostoGasto}','{$codigoGasto}','{$proveedorFacturaGasto}','{$descripcionGasto}','{$cantidadGasto}','{$valorUnitarioGasto}','{$valorTotalGasto}','{$responsableGasto}','{$diaCorteGasto}','{$mesCorteGasto}','{$anoCorteGasto}','{$sedeGasto}') ";
}
if ($resultado_insertar = mysqli_query($mysqli, $insert)) {
echo "dia: ".$diaGasto ;
echo "mes: ".$mesGasto;
echo "año: ".$anoGasto;
echo "centro de costo: ".$centroDeCostoGasto;
echo "codigo".$codigoGasto;
echo "proveedor / factura: ".$proveedorFacturaGasto;
echo "total gasto: ".$valorTotalGasto;

	}else{
		echo "error";
	}

?>
