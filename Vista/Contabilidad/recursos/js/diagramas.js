var valorTotalGasto8 = document.getElementById("valorTotalGasto8").innerHTML;
var gastos8 = parseInt(valorTotalGasto8);

var valorTotalIngresado8 = document.getElementById("valorIngreso8").innerHTML;
var ingresado8 = parseInt(valorTotalIngresado8);
/*
var valorTotalEneroGasto = document.getElementById("valorTotalEneroGasto").innerHTML;
var gastosEnero = parseInt(valorTotalEneroGasto);

var valorTotalEneroIngresado = document.getElementById("valorTotalEneroIngreso").innerHTML;
var ingresadoEnero = parseInt(valorTotalEneroIngresado);

var valorTotalFebreroGasto = document.getElementById("valorTotalFebreroGasto").innerHTML;
var gastosFebrero = parseInt(valorTotalFebreroGasto);

var valorTotalFebreroIngresado = document.getElementById("valorTotalFebreroIngreso").innerHTML;
var ingresadoFebrero = parseInt(valorTotalFebreroIngresado);

var valorTotalMarzoGasto = document.getElementById("valorTotalMarzoGasto").innerHTML;
var gastosMarzo = parseInt(valorTotalMarzoGasto);

var valorTotalIngresado = document.getElementById("valorTotalMarzoIngreso").innerHTML;
var ingresadoMarzo = parseInt(valorTotalMarzoIngresado);

var valorTotalAbrilGasto = document.getElementById("valorTotalAbrilGasto").innerHTML;
var gastosAbril = parseInt(valorTotalAbrilGasto);

var valorTotalAbrilIngresado = document.getElementById("valorTotalAbrilIngreso").innerHTML;
var ingresadoAbril = parseInt(valorTotalAbrilIngresado);

var valorTotalMayoGasto = document.getElementById("valorTotalMayoGasto").innerHTML;
var gastosMayo = parseInt(valorTotalMayoGasto);

var valorTotalMayoIngresado = document.getElementById("valorTotalMayoIngreso").innerHTML;
var ingresadoMayo = parseInt(valorTotalMayoIngresado);

var valorTotalJunioGasto = document.getElementById("valorTotalJunioGasto").innerHTML;
var gastosJunio = parseInt(valorTotalJunioGasto);

var valorTotalIngresado = document.getElementById("valorTotalJunioIngreso").innerHTML;
var ingresadoJunio = parseInt(valorTotalJunioIngresado);

var valorTotalJulioGasto = document.getElementById("valorTotalJulioGasto").innerHTML;
var gastosJulio = parseInt(valorTotalJulioGasto);

var valorTotalIngresado = document.getElementById("valorTotalJulioIngreso").innerHTML;
var ingresadoJulio = parseInt(valorTotalJulioIngresado);

var valorTotalAgostoGasto = document.getElementById("valorTotalAgostoGasto").innerHTML;
var gastosAgosto = parseInt(valorTotalAgostoGasto);

var valorTotalAgostoIngresado = document.getElementById("valorTotalAgostoIngreso").innerHTML;
var ingresadoAgosto = parseInt(valorTotalAgostoIngresado);

var valorTotalSeptiembreGasto = document.getElementById("valorTotalSeptiembreGasto").innerHTML;
var gastosSeptiembre = parseInt(valorTotalSeptiembreGasto);

var valorTotalSeptiembreIngresado = document.getElementById("valorTotalSeptiembreIngreso").innerHTML;
var ingresadoSeptiembre = parseInt(valorTotalSeptiembreIngresado);

var valorTotalOctubreGasto = document.getElementById("valorTotalOctubreGasto").innerHTML;
var gastosOctubre = parseInt(valorTotalOctubreGasto);

var valorTotalOctubreIngresado = document.getElementById("valorTotalOctubreIngreso").innerHTML;
var ingresadoOctubre = parseInt(valorTotalOctubreIngresado);

var valorTotalNoviembreGasto = document.getElementById("valorTotalNoviembreGasto").innerHTML;
var gastosNoviembre = parseInt(valorTotalNoviembreGasto);

var valorTotalNoviembreIngresado = document.getElementById("valorTotalNoviembreIngreso").innerHTML;
var ingresadoNoviembre = parseInt(valorTotalNoviembreIngresado);

var valorTotalDiciembreGasto = document.getElementById("valorTotalDiciembreGasto").innerHTML;
var gastosDiciembre = parseInt(valorTotalDiciembreGasto);

var valorTotalDiciembreIngresado = document.getElementById("valorTotalDiciembreIngreso").innerHTML;
var ingresadoDiciembre = parseInt(valorTotalDiciembreIngresado);

*/


	var pieData = [{value: ingresado8 ,color:"#0b82e7",highlight: "#0c62ab",label: "Google Chrome"},
				{
					value: gastos8,
					color: "#e3e860",
					highlight: "#a9ad47",
					label: "gastos8"
				},
				
			];
	var barChartData = {
		labels : ["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"],
		datasets : [
			{
				fillColor : "#6b9dfa",
				strokeColor : "#ffffff",
				highlightFill: "#1864f2",
				highlightStroke: "#ffffff",
				data : [90,30,10,80,15,5,15]
			},
			{
				fillColor : "#e9e225",
				strokeColor : "#ffffff",
				highlightFill : "#ee7f49",
				highlightStroke : "#ffffff",
				data : [40,50,70,40,85,55,15]
			}
		]

	};
	
		
var ctx2 = document.getElementById("chart-area2").getContext("2d");
var ctx3 = document.getElementById("chart-area3").getContext("2d");
window.myPie = new Chart(ctx2).Doughnut(pieData);	
window.myPie = new Chart(ctx3).Bar(barChartData, {responsive:true});		