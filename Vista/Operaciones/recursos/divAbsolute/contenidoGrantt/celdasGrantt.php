	<?php
require '../../php/conexion.php';

$diaHoy = date('d') ;
$mesHoy = date('m');
$anoHoy = date('a');
echo $diaHoy;

$consulta = "SELECT * FROM cronograma WHERE diaCronograma = '{$diaHoy}' ORDER BY horaEntradaCronograma";

$resultado_consulta = mysqli_query($mysqli, $consulta);
$numRowConsulta = mysqli_num_rows($resultado_consulta);
while($arrayResultadoConsulta = mysqli_fetch_array($resultado_consulta)){

$minEntrada = $arrayResultadoConsulta['minEntradaCronograma'];
$minSalida = $arrayResultadoConsulta['minSalidaCronograma'];
	if ($arrayResultadoConsulta['minEntradaCronograma'] == 30) {
		$minEntrada = 50;
	}
	if ($arrayResultadoConsulta['minSalidaCronograma'] == 30) {
		$minSalida = 50;
	}
$horaEntrada = $arrayResultadoConsulta['horaEntradaCronograma'].$minEntrada;
$horaSalida = $arrayResultadoConsulta['horaSalidaCronograma'].$minSalida;


if ($horaSalida > $horaEntrada) {
	$espacioHoras = $horaSalida - $horaEntrada;
	$horasGastadas = ($horaSalida - $horaEntrada)/100;

echo $diaHoy;
	?>



	<table style="position: relative;left: 1px" class=" table-condensed " id="tablaElement">
		<tr>
			<th class="btn-info" style="width: 200px; border-bottom: ridge; border-right:ridge;">
				<center>
					<font style="color: white">
						<?php echo "Cliente: ".$arrayResultadoConsulta['clienteCronograma']." Zona: ".$arrayResultadoConsulta['oficinaCronograma']." / ".$arrayResultadoConsulta['areaCronograma']; ?>
					</font>
				</center>
			</th>
			<th class="btn-info" style="width: 215px;background-color: rgba(25,48,84,3);  border-bottom: ridge; border-right:ridge; ">
				<center>
					<font style="color: white">
						<?php echo $arrayResultadoConsulta['tipoActividadCronograma']."<br>"."Tecnicos: ".$arrayResultadoConsulta['tecnicosAsignadosCronograma'].", ".$arrayResultadoConsulta['tecnicosAuxiliaresCronograma'] ?>
					</font>
				</center>
			</th>
			<th class="btn-success" style=" border-radius: 5px; position: absolute; left: <?php
if ($horaEntrada == "0750") {
	$echo = 430;
}
if ($horaEntrada == "0800") {
	$echo = 480;
}
if ($horaEntrada == "0850") {
	$echo = 530;
}
if ($horaEntrada == "0900") {
	$echo = 580;
}
if ($horaEntrada == "0950") {
	$echo = 630;
}
if ($horaEntrada == "1000") {
	$echo = 680;
}
if ($horaEntrada == "1050") {
	$echo = 730;
}
if ($horaEntrada == "1100") {
	$echo = 780;
}
if ($horaEntrada == "1150") {
	$echo = 830;
}
if ($horaEntrada == "1200") {
	$echo = 880;
}
if ($horaEntrada == "1250") {
	$echo = 930;
}
if ($horaEntrada == "1300") {
	$echo = 980;
}
if ($horaEntrada == "1350") {
	$echo = 1030;
}
if ($horaEntrada == "1400") {
	$echo = 1080;
}
if ($horaEntrada == "1450") {
	$echo = 1130;
}
if ($horaEntrada == "1500") {
	$echo = 1180;
}
if ($horaEntrada == "1550") {
	$echo = 1230;
}
if ($horaEntrada == "1600") {
	$echo = 1280;
}
if ($horaEntrada == "1650") {
	$echo = 1330;
}
if ($horaEntrada == "1700") {
	$echo = 1380;
}
if ($horaEntrada == "1750") {
	$echo = 1430;
}
if ($horaEntrada == "1800") {
	$echo = 1480;
}
if ($horaEntrada == "1850") {
	$echo = 1530;
}
echo $echo;?>px ; border-bottom-style: ridge;height: 100%; width: <?php
echo $espacioHoras;
	?>px;  border-bottom: ridge; border-right:ridge; ">
				<center>
					<font style="color: white">
						<?php
echo $horasGastadas." Hrs"."<br>".$arrayResultadoConsulta['horaEntradaCronograma'].":".$arrayResultadoConsulta['minEntradaCronograma']." hasta ".$arrayResultadoConsulta['horaSalidaCronograma'].":".$arrayResultadoConsulta['minSalidaCronograma'] ;
	?>
					</font>
				</center>
			</th>
		</tr>
	</table>

	



	<?php
echo $diaHoy;
}
}
	?>
<br>



	