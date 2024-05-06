
<?php 

$anoHoy = date('y');
$mesHoy = date('m');
$diaHoy = date('d') - 1;

$consultarDatosIngresos1 = "SELECT SUM(valorIngreso) FROM ingresoscontabilidad WHERE mesIngreso = 01 ";
$consultarDatosGastos1 = "SELECT SUM(valorTotalGasto) FROM gastos WHERE mesGasto = 01 ";

$consultarDatosIngresos2 = "SELECT SUM(valorIngreso) FROM ingresoscontabilidad WHERE mesIngreso = 02 ";
$consultarDatosGastos2 = "SELECT SUM(valorTotalGasto) FROM gastos WHERE mesGasto = 02 ";

$consultarDatosIngresos3 = "SELECT SUM(valorIngreso) FROM ingresoscontabilidad WHERE mesIngreso = 03 ";
$consultarDatosGastos3 = "SELECT SUM(valorTotalGasto) FROM gastos WHERE mesGasto = 03 ";

$consultarDatosIngresos4 = "SELECT SUM(valorIngreso) FROM ingresoscontabilidad WHERE mesIngreso = 04 ";
$consultarDatosGastos4 = "SELECT SUM(valorTotalGasto) FROM gastos WHERE mesGasto = 04 ";

$consultarDatosIngresos5 = "SELECT SUM(valorIngreso) FROM ingresoscontabilidad WHERE mesIngreso = 05 ";
$consultarDatosGastos5 = "SELECT SUM(valorTotalGasto) FROM gastos WHERE mesGasto = 05 ";

$consultarDatosIngresos6 = "SELECT SUM(valorIngreso) FROM ingresoscontabilidad WHERE mesIngreso = 06 ";
$consultarDatosGastos6 = "SELECT SUM(valorTotalGasto) FROM gastos WHERE mesGasto = 06 ";

$consultarDatosIngresos7 = "SELECT SUM(valorIngreso) FROM ingresoscontabilidad WHERE mesIngreso = 07 ";
$consultarDatosGastos7 = "SELECT SUM(valorTotalGasto) FROM gastos WHERE mesGasto = 07 ";

$consultarDatosIngresos8 = "SELECT SUM(valorIngreso) FROM ingresoscontabilidad WHERE mesIngreso = 08 ";
$consultarDatosGastos8 = "SELECT SUM(valorTotalGasto) FROM gastos WHERE mesGasto = 08 ";

$consultarDatosIngresos9 = "SELECT SUM(valorIngreso) FROM ingresoscontabilidad WHERE mesIngreso = 09 ";
$consultarDatosGastos9 = "SELECT SUM(valorTotalGasto) FROM gastos WHERE mesGasto = 09 ";

$consultarDatosIngresos10 = "SELECT SUM(valorIngreso) FROM ingresoscontabilidad WHERE mesIngreso = 10 ";
$consultarDatosGastos10 = "SELECT SUM(valorTotalGasto) FROM gastos WHERE mesGasto = 10 ";

$consultarDatosIngresos11 = "SELECT SUM(valorIngreso) FROM ingresoscontabilidad WHERE mesIngreso = 11 ";
$consultarDatosGastos11 = "SELECT SUM(valorTotalGasto) FROM gastos WHERE mesGasto = 11 ";


$consultarDatosIngresos12 = "SELECT SUM(valorIngreso) FROM ingresoscontabilidad WHERE mesIngreso = 12 ";
$consultarDatosGastos12 = "SELECT SUM(valorTotalGasto) FROM gastos WHERE mesGasto = 12 ";

echo "<br>";


//ENERO -------------------------------------------------------
if ($procesar_consultarDatosIngresos1 = mysqli_query($mysqli,$consultarDatosIngresos1)) {
	if($resultado_consultaDatosIngresos1 = mysqli_fetch_array($procesar_consultarDatosIngresos1)){
?>

<label id="ingresoEnero" style="opacity: 0; position: absolute;">
<?php
echo $resultado_consultaDatosIngresos1[0];

}else{
		echo 0;
	}
};
?>
</label>

<?php
		
	
if ($procesar_consultarDatosGastos1 = mysqli_query($mysqli,$consultarDatosGastos1)) {
	if ($resultado_consultaDatosGastos1 = mysqli_fetch_array($procesar_consultarDatosGastos1)) {

?>
<label id="gastoEnero" style="opacity: 0; position: absolute;">
	<?php  echo $resultado_consultaDatosGastos1[0]; 
	}else{
		echo 0;
	}
};
 ?>
</label>
<?php
		
	

//FEBRERO -----------------------------------------------------


if ($procesar_consultarDatosIngresos2 = mysqli_query($mysqli,$consultarDatosIngresos2)){
if ($resultado_consultaDatosIngresos2 = mysqli_fetch_array($procesar_consultarDatosIngresos2)) echo $resultado_consultaDatosIngresos2[0];
	{

?>
<label id="ingresadoFebrero" style="opacity: 0; position: absolute;">
	<?php echo $resultado_consultaDatosIngresos2[0];
	}
	} ?>
</label>

<?php
		
	
if ($procesar_consultarDatosGastos2 = mysqli_query($mysqli,$consultarDatosGastos2)) {
	if ($resultado_consultaDatosGastos2 = mysqli_fetch_array($procesar_consultarDatosGastos2)) {

?>

<label id="gastoFebrero" style="opacity: 0; position: absolute;">
	<?php echo $resultado_consultaDatosGastos2[0];
	}else{
		echo 0;
	}
}; ?>
</label>

<?php
		


//MARZO -------------------------------------------------------

if ($procesar_consultarDatosIngresos3 = mysqli_query($mysqli,$consultarDatosIngresos3)) {
	if ($resultado_consultaDatosIngresos3 = mysqli_fetch_array($procesar_consultarDatosIngresos3)) {

?>

<label id="ingresoMarzo" style="opacity: 0; position: absolute;">
	<?php echo $resultado_consultaDatosIngresos3[0];
	}else{
		echo 0;
	}
}; ?>
</label>

<?php
		
if ($procesar_consultarDatosGastos3 = mysqli_query($mysqli,$consultarDatosGastos3)) {
	if ($resultado_consultaDatosGastos3 = mysqli_fetch_array($procesar_consultarDatosGastos3)) {

?>


<label id="gastoMarzo" style="opacity: 0; position: absolute;">
	<?php echo $resultado_consultaDatosGastos3[0];
	}else{
		echo 0;
	}
}; ?>
</label>
<?php
		


//ABRIL

if ($procesar_consultarDatosIngresos4 = mysqli_query($mysqli,$consultarDatosIngresos4)) {
	if ($resultado_consultaDatosIngresos4 = mysqli_fetch_array($procesar_consultarDatosIngresos4)) {
?>


<label id="ingresoAbril" style="opacity: 0; position: absolute;">
	<?php echo $resultado_consultaDatosIngresos4[0];
	}else{
		echo 0;
	}
}; 

?>
</label>

<?php
		
if ($procesar_consultarDatosGastos4 = mysqli_query($mysqli,$consultarDatosGastos4)) {
	if ($resultado_consultaDatosGastos4 = mysqli_fetch_array($procesar_consultarDatosGastos4)) {

?>


<label id="gastoAbril" style="opacity: 0; position: absolute;">
	<?php echo $resultado_consultaDatosGastos4[0];
	}else{
		echo 0;
	}
};
?>
</label>
		
<?php

//MAYO

if ($procesar_consultarDatosIngresos5 = mysqli_query($mysqli,$consultarDatosIngresos5)) {
	if ($resultado_consultaDatosIngresos5 = mysqli_fetch_array($procesar_consultarDatosIngresos5)) {
?>


<label id="ingresoMayo" style="opacity: 0; position: absolute;">
	<?php echo $resultado_consultaDatosIngresos5[0];
	}else{
		echo 0;
	}
}; ?>
</label>

<?php
		
if ($procesar_consultarDatosGastos5 = mysqli_query($mysqli,$consultarDatosGastos5)) {
	if ($resultado_consultaDatosGastos5 = mysqli_fetch_array($procesar_consultarDatosGastos5)) {

?>


<label id="gastoMayo" style="opacity: 0; position: absolute;">
	<?php
		echo $resultado_consultaDatosGastos5[0];
	}else{
		echo 0;
	}
};
?>
</label>
<?php

//JUNIO

if ($procesar_consultarDatosIngresos6 = mysqli_query($mysqli,$consultarDatosIngresos6)) {
	if ($resultado_consultaDatosIngresos6 = mysqli_fetch_array($procesar_consultarDatosIngresos6)) {

?>


<label id="ingresoJunio" style="opacity: 0; position: absolute;">
	<?php
		echo $resultado_consultaDatosIngresos6[0];
	} else{
		echo 0;
	}
};
?>
</label>


<?php


if ($procesar_consultarDatosGastos6 = mysqli_query($mysqli,$consultarDatosGastos6)) {
	if ($resultado_consultaDatosGastos6 = mysqli_fetch_array($procesar_consultarDatosGastos6)) {

?>


<label id="gastoJunio" style="opacity: 0; position: absolute;">
	<?php
		echo $resultado_consultaDatosGastos6[0];
	}else{
		echo 0;
	}
};
?>
</label>
<?php

//JULIO

if ($procesar_consultarDatosIngresos7 = mysqli_query($mysqli,$consultarDatosIngresos7)) {
	if ($resultado_consultaDatosIngresos7 = mysqli_fetch_array($procesar_consultarDatosIngresos7)) {

?>


<label id="ingresoJulio" style="opacity: 0; position: absolute;">
	<?php
		echo $resultado_consultaDatosIngresos7[0];
	}else{
		echo 0;
	}
};
?>
</label>

<?php
if ($procesar_consultarDatosGastos7 = mysqli_query($mysqli,$consultarDatosGastos7)) {
	if ($resultado_consultaDatosGastos7 = mysqli_fetch_array($procesar_consultarDatosGastos7)) {

?>


<label id="gastoJulio" style="opacity: 0; position: absolute;">
	<?php
		echo $resultado_consultaDatosGastos7[0];
	}else{
		echo 0;
	}
};
?>
</label>

<?php


//AGOSTO

if ($procesar_consultarDatosIngresos8 = mysqli_query($mysqli,$consultarDatosIngresos8)) {
	if ($resultado_consultaDatosIngresos8 = mysqli_fetch_array($procesar_consultarDatosIngresos8)) {

?>


<label id="ingresoAgosto" style="opacity: 0; position: absolute;">
	<?php
		echo $resultado_consultaDatosIngresos8[0];
	}else{
		echo 0;
	}
}; ?>
</label>

<?php
if ($procesar_consultarDatosGastos8 = mysqli_query($mysqli,$consultarDatosGastos8)) {
	if ($resultado_consultaDatosGastos8 = mysqli_fetch_array($procesar_consultarDatosGastos8)) {

?>


<label id="gastoAgosto" style="opacity: 0; position: absolute;">
	<?php
		echo $resultado_consultaDatosGastos8[0];
	}else{
		echo 0;
	}
};

?>
</label>

<?php

//SEPTIEMBRE

if ($procesar_consultarDatosIngresos9 = mysqli_query($mysqli,$consultarDatosIngresos9)) {
	if ($resultado_consultaDatosIngresos9 = mysqli_fetch_array($procesar_consultarDatosIngresos9)) {

?>


<label id="ingresoSeptiembre" style="opacity: 0; position: absolute;">
	<?php
		echo $resultado_consultaDatosIngresos9[0];
	}else{
		echo 0;
	}
};
?>
</label>

<?php


if ($procesar_consultarDatosGastos9 = mysqli_query($mysqli,$consultarDatosGastos9)) {
	if ($resultado_consultaDatosGastos9 = mysqli_fetch_array($procesar_consultarDatosGastos9)) {

?>


<label id="gastoSeptiembre" style="opacity: 0; position: absolute;">
	<?php
		echo $resultado_consultaDatosGastos9[0];
	}else{
		echo 0;
	}
};
?>
</label>
<?php

//OCTUBRE

if ($procesar_consultarDatosIngresos10 = mysqli_query($mysqli,$consultarDatosIngresos10)) {
	if ($resultado_consultaDatosIngresos10 = mysqli_fetch_array($procesar_consultarDatosIngresos10)) {

?>


<label id="ingresoOctubre" style="opacity: 0; position: absolute;">
	<?php
		echo $resultado_consultaDatosIngresos10[0];
	}else{
		echo 0;
	}
};?>

</label>

<?php
if ($procesar_consultarDatosGastos10 = mysqli_query($mysqli,$consultarDatosGastos10)) {
	if ($resultado_consultaDatosGastos10 = mysqli_fetch_array($procesar_consultarDatosGastos10)) {

?>


<label id="gastoOctubre" style="opacity: 0; position: absolute;">
	<?php
		echo $resultado_consultaDatosGastos10[0];
	}else{
		echo 0;
	}
};?>

</label>

<?php
//NOVIEMBRE

if ($procesar_consultarDatosIngresos11 = mysqli_query($mysqli,$consultarDatosIngresos11)) {
	if ($resultado_consultaDatosIngresos11 = mysqli_fetch_array($procesar_consultarDatosIngresos11)) {

?>


<label id="ingresoNoviembre" style="opacity: 0; position: absolute;">
	<?php
		echo $resultado_consultaDatosIngresos11[0];
	}else{
		echo 0;
	}
};?>
</label>
<?php
if ($procesar_consultarDatosGastos11 = mysqli_query($mysqli,$consultarDatosGastos11)) {
	if ($resultado_consultaDatosGastos11 = mysqli_fetch_array($procesar_consultarDatosGastos11)) {

?>


<label id="gastoNoviembre" style="opacity: 0; position: absolute;">
	<?php
		echo $resultado_consultaDatosGastos11[0];
	}else{
		echo 0;
	}
};
?>
</label>

<?php

//DICIEMBRE

if ($procesar_consultarDatosIngresos12 = mysqli_query($mysqli,$consultarDatosIngresos12)) {
	if ($resultado_consultaDatosIngresos12 = mysqli_fetch_array($procesar_consultarDatosIngresos12)) {

?>


<label id="ingresoDiciembre" style="opacity: 0; position: absolute;">
	<?php
		echo $resultado_consultaDatosIngresos12[0];
	}else{
		echo 0;
	}
};

?>
</label>

<?php

if ($procesar_consultarDatosGastos12 = mysqli_query($mysqli,$consultarDatosGastos12)) {
	if ($resultado_consultaDatosGastos12 = mysqli_fetch_array($procesar_consultarDatosGastos12)) {

?>


<label id="gastoDiciembre" style="opacity: 0; position: absolute;">
	<?php
		echo $resultado_consultaDatosGastos12[0];
	}else{
		echo "0";
	}
};

?>
</label>

