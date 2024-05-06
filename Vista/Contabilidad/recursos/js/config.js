function mostrar_divBalanceSemana() {
	document.getElementById('divBalanceSemana').style.opacity = 0.9;
	document.getElementById('divBalanceMes').style.opacity = 0;
	document.getElementById('divBalanceFinal').style.opacity = 0;
	document.getElementById('divHistorialBalance').style.opacity = 0;
	document.getElementById('divLegalizacionGastos').style.opacity = 0;
	document.getElementById('divLibroMayor').style.opacity = 0;
	document.getElementById('divLibroMenor').style.opacity = 0;		
};
function mostrar_divBalanceMes() {
	document.getElementById('divBalanceSemana').style.opacity = 0;
	document.getElementById('divBalanceMes').style.opacity = 0.9;
	document.getElementById('divBalanceFinal').style.opacity = 0;
	document.getElementById('divHistorialBalance').style.opacity = 0;	
	document.getElementById('divLegalizacionGastos').style.opacity = 0;
	document.getElementById('divLibroMayor').style.opacity = 0;
	document.getElementById('divLibroMenor').style.opacity = 0;	
};
function mostrar_divBalanceFinal() {
	document.getElementById('divBalanceSemana').style.opacity = 0;
	document.getElementById('divBalanceMes').style.opacity = 0;
	document.getElementById('divBalanceFinal').style.opacity = 0.9;
	document.getElementById('divHistorialBalance').style.opacity = 0;	
	document.getElementById('divLegalizacionGastos').style.opacity = 0;
	document.getElementById('divLibroMayor').style.opacity = 0;
	document.getElementById('divLibroMenor').style.opacity = 0;	
};
function mostrar_divHistorialBalance() {
	document.getElementById('divBalanceSemana').style.opacity = 0;
	document.getElementById('divBalanceMes').style.opacity = 0;
	document.getElementById('divBalanceFinal').style.opacity = 0;
	document.getElementById('divHistorialBalance').style.opacity = 0.9;	
	document.getElementById('divLegalizacionGastos').style.opacity = 0;
	document.getElementById('divLibroMayor').style.opacity = 0;
	document.getElementById('divLibroMenor').style.opacity = 0;	
};
function mostrar_divLegalizarGastos(){
	document.getElementById('divBalanceSemana').style.opacity = 0;
	document.getElementById('divBalanceMes').style.opacity = 0;
	document.getElementById('divBalanceFinal').style.opacity = 0;
	document.getElementById('divHistorialBalance').style.opacity = 0;	
	document.getElementById('divLegalizacionGastos').style.opacity = 0.9;
	document.getElementById('divLibroMayor').style.opacity = 0;
	document.getElementById('divLibroMenor').style.opacity = 0;	
};
function mostrar_divLibroMayor(){
	document.getElementById('divBalanceSemana').style.opacity = 0;
	document.getElementById('divBalanceMes').style.opacity = 0;
	document.getElementById('divBalanceFinal').style.opacity = 0;
	document.getElementById('divHistorialBalance').style.opacity = 0;	
	document.getElementById('divLegalizacionGastos').style.opacity = 0;
	document.getElementById('divLibroMayor').style.opacity = 0.9;
	document.getElementById('divLibroMenor').style.opacity = 0;	
};
function mostrar_divLibroMenor(){
	document.getElementById('divBalanceSemana').style.opacity = 0;
	document.getElementById('divBalanceMes').style.opacity = 0;
	document.getElementById('divBalanceFinal').style.opacity = 0;
	document.getElementById('divHistorialBalance').style.opacity = 0;	
	document.getElementById('divLegalizacionGastos').style.opacity = 0;
	document.getElementById('divLibroMayor').style.opacity = 0;
	document.getElementById('divLibroMenor').style.opacity = 0.9;	
};
