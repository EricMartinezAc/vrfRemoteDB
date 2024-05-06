<div id="divBalanceSemana" style="opacity: 0.9; position: absolute;">
<div id="canvas-holder">
	<?php
require '../../php/conexion.php';

$anoHoy = date('y');
$mesHoy = date('m');
$diaHoy = date('d') - 1;

$ConsultaGastosMes = "SELECT SUM(valorTotalGasto) FROM gastos WHERE mesGasto = '{$mesHoy}'";
$ConsultaIngresosMes = "SELECT SUM(valorIngreso) FROM ingresosContabilidad WHERE mesIngreso ='{$mesHoy}'";

$procesar_ConsultaGastosMes = mysqli_query($mysqli,$ConsultaGastosMes);
$procesar_ConsultaIngresosMes = mysqli_query($mysqli,$ConsultaIngresosMes);
	
if ($array_consultaGastosMes = mysqli_fetch_array($procesar_ConsultaGastosMes)) {
	if ($array_consultaIngresosMes = mysqli_fetch_array($procesar_ConsultaIngresosMes)) {




$ConsultaPeriodoGastos = "SELECT * FROM gastos WHERE mesInicioPeriodoGasto = '{$mesHoy}'";
$procesar_ConsultaPeriodoGastos = mysqli_query($mysqli,$ConsultaPeriodoGastos);
$array_consultaPeriodoGastos = mysqli_fetch_array($procesar_ConsultaPeriodoGastos);

$ConsultaPeriodoIngresos = "SELECT * FROM ingresosContabilidad WHERE mesInicioPeriodoIngreso = '{$mesHoy}'";
$procesar_ConsultaPeriodoIngresos = mysqli_query($mysqli,$ConsultaPeriodoIngresos);
$array_consultaPeriodoIngresos = mysqli_fetch_array($procesar_ConsultaPeriodoIngresos);
	
	


?>


<div style="opacity: 0; position: relative;">
	Total de Dinero ingresado: $
	<label id="valorIngreso">
		<?php echo $array_consultaIngresosMes[0] ?>
	</label>
	<label id="valorTotalGasto">
		<?php echo $array_consultaGastosMes[0] ?>
	</label>
</div>
<?php
}
}
?>



<div class="container">
	<div style="position: absolute;width: 100%; background-color: rgba(150,150,159,1); border-radius: 20px; border-style: ridge; padding-left: 5px;padding-top: 10px">
		
		


		<div style="width: 400px;">

			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div style="position: relative; background-color: rgba(100,100,99,1); border-radius: 20px; border-right-style: ridge; border-bottom-style: ridge;padding-left: 15%; padding: 10%;">
			
			<center>
			<font class="btn" style="padding: 2%; background-color: #0b82e7; width: 100%; height: 30px">
			Total ingresos: $<label id="valorIngreso" style="color: black"><?php echo $array_consultaIngresosMes[0] ?></label>
			</font>
			<font class="btn" style="padding: 2%; background-color: #e3e860; width: 100%; height: 30px">
			Total gastos:  $<label id="valorGasto" style="color: black"><?php echo $array_consultaGastosMes[0] ?></label>
			</font>
			</center><br><br>
<center>
	<label style="color: white">
		<?php echo "Mes Actual: ".$array_consultaPeriodoGastos['mesInicioPeriodoGasto']." / ".$array_consultaPeriodoGastos['anoInicioPeriodoGasto']; ?>
	</label><br>
</center>

<br>
			<center>
				<canvas id="chart-area2" width="300" height="300" ></canvas>
			</center>
		</div>
					</div>
					<div class="col-md-8">
						<div style="padding: 2%;opacity: 0.9; border-style: ridge; border-radius: 20px; height: 460px">

							<label>Balance Anual: </label>
<?php
include 'recursos/contenido_divBalance/abstractValoresMesAnoIngresoGastos.php';
echo $resultado_consultaDatosIngresos1[0];
echo $resultado_consultaDatosGastos1[0]; 
?>
<div id="canvas-holder" style="position: absolute;">
<canvas id="chart-area3" width="600" height="300"></canvas>
</div>
	
							
						</div>
					</div>
				</div>
			</div>


		
		</div>
	</div>
</div>













<!-- <div style="background-color: rgba(100,100,99,1); padding-top: 8px; border-radius: 20px; border-right-style: ridge; border-bottom-style: ridge;padding-left: 15%; padding-right: 10%; padding-bottom: 10%">
			<h4>Diagrama de Gastos Semanales</h4>
			<br><br>
			<div style="background-color: #0b82e7; width: 20px; height: 20px">
			</div>Total ingresos
			<div style="background-color: #e3e860; width: 20px; height: 20px">
			</div>Total gastos
	
</div>-->

</div>
</div>

<script src="../Chart.js"></script>
<script type="text/javascript">
	




var valorTotalEneroIngresado = document.getElementById("ingresoEnero").innerHTML;
var ingresadoEnero = parseInt(valorTotalEneroIngresado);


var valorTotalEneroGasto = document.getElementById("gastoEnero").innerHTML;
var gastosEnero = parseInt(valorTotalEneroGasto);


var valorTotalFebreroIngresado = document.getElementById("ingresadoFebrero").innerHTML;
var ingresadoFebrero = parseInt(valorTotalFebreroIngresado);


var valorTotalFebreroGasto = document.getElementById("gastoFebrero").innerHTML;
var gastosFebrero = parseInt(valorTotalFebreroGasto);

var valorTotalMarzoGasto = document.getElementById("gastoMarzo").innerHTML;
var gastosMarzo = parseInt(valorTotalMarzoGasto);

var valorTotalMarzoIngresado = document.getElementById("ingresoMarzo").innerHTML;
var ingresadoMarzo = parseInt(valorTotalMarzoIngresado);

var valorTotalAbrilGasto = document.getElementById("gastoAbril").innerHTML;
var gastosAbril = parseInt(valorTotalAbrilGasto);

var valorTotalAbrilIngresado = document.getElementById("ingresoAbril").innerHTML;
var ingresadoAbril = parseInt(valorTotalAbrilIngresado);


var valorTotalMayoGasto = document.getElementById("gastoMayo").innerHTML;
var gastosMayo = parseInt(valorTotalMayoGasto);

var valorTotalMayoIngresado = document.getElementById("ingresoMayo").innerHTML;
var ingresadoMayo = parseInt(valorTotalMayoIngresado);

var valorTotalJunioGasto = document.getElementById("gastoJunio").innerHTML;
var gastosJunio = parseInt(valorTotalJunioGasto);

var valorTotalJunioIngresado = document.getElementById("ingresoJunio").innerHTML;
var ingresadoJunio = parseInt(valorTotalJunioIngresado);

var valorTotalJulioGasto = document.getElementById("gastoJulio").innerHTML;
var gastosJulio = parseInt(valorTotalJulioGasto);

var valorTotalJulioIngresado = document.getElementById("ingresoJulio").innerHTML;
var ingresadoJulio = parseInt(valorTotalJulioIngresado);




var valorTotalGasto = document.getElementById("valorTotalGasto").innerHTML;
var gastos = parseInt(valorTotalGasto);

var valorTotalIngresado = document.getElementById("valorIngreso").innerHTML;
var ingresado = parseInt(valorTotalIngresado);


var valorTotalDiciembreGasto = document.getElementById("gastoDiciembre").innerHTML;
var gastosDiciembre = parseInt(valorTotalDiciembreGasto);

var valorTotalDiciembreIngresado = document.getElementById("ingresoDiciembre").innerHTML;
var ingresadoDiciembre = parseInt(valorTotalDiciembreIngresado);

var valorTotalNoviembreGasto = document.getElementById("gastoNoviembre").innerHTML;
var gastosNoviembre = parseInt(valorTotalNoviembreGasto);

var valorTotalNoviembreIngresado = document.getElementById("ingresoNoviembre").innerHTML;
var ingresadoNoviembre = parseInt(valorTotalNoviembreIngresado);

var valorTotalOctubreGasto = document.getElementById("gastoOctubre").innerHTML;
var gastosOctubre = parseInt(valorTotalOctubreGasto);

var valorTotalOctubreIngresado = document.getElementById("ingresoOctubre").innerHTML;
var ingresadoOctubre = parseInt(valorTotalOctubreIngresado);

var valorTotalSeptiembreGasto = document.getElementById("gastoSeptiembre").innerHTML;
var gastosSeptiembre = parseInt(valorTotalSeptiembreGasto);

var valorTotalSeptiembreIngresado = document.getElementById("ingresoSeptiembre").innerHTML;
var ingresadoSeptiembre = parseInt(valorTotalSeptiembreIngresado);

var valorTotalAgostoGasto = document.getElementById("gastoAgosto").innerHTML;
var gastosAgosto = parseInt(valorTotalAgostoGasto);

var valorTotalAgostoIngresado = document.getElementById("ingresoAgosto").innerHTML;
var ingresadoAgosto = parseInt(valorTotalAgostoIngresado);











	var barChartData = {
		labels : ["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre", "Nobiembre", "Diciembre"],
		datasets : [
			{
				fillColor : "#6b9dfa",
				strokeColor : "#ffffff",
				highlightFill: "#1864f2",
				highlightStroke: "#ffffff",
				data : [ingresadoEnero,ingresadoFebrero,ingresadoMarzo,ingresadoAbril,ingresadoMayo,ingresadoJunio,ingresadoJulio,ingresadoAgosto,ingresadoSeptiembre,ingresadoOctubre,ingresadoNoviembre,ingresadoDiciembre]
			},
			{
				fillColor : "#e9e225",
				strokeColor : "#ffffff",
				highlightFill : "#ee7f49",
				highlightStroke : "#ffffff",
				data : [gastosEnero,gastosFebrero,gastosMarzo,gastosAbril,gastosMayo,gastosAbril,gastosMayo,gastosJunio,gastosJulio,gastosAgosto,gastosSeptiembre,gastosOctubre,gastosNoviembre,gastosDiciembre]
			}
		]

	}	













	var pieData = [{value: ingresado ,color:"#0b82e7",highlight: "#0c62ab",label: "Google Chrome"},
				{
					value: gastos,
					color: "#e3e860",
					highlight: "#a9ad47",
					label: "gastos"
				},
				
			];

	
		
var ctx2 = document.getElementById("chart-area2").getContext("2d");
var ctx3 = document.getElementById("chart-area3").getContext("2d");
window.myPie = new Chart(ctx3).Bar(barChartData, {responsive:true});
window.myPie = new Chart(ctx2).Doughnut(pieData);				
</script>
