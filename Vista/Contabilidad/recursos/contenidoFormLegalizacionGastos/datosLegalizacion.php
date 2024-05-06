<?php

include 'consulta.php';

if ($array_consulta_datosIngresos = mysqli_fetch_array($procesar_consulta_datosIngresos)) {
	


?>

<div class="row" style="background-color: white">
				<div class="col-md-2 celda ">
					<label >Responsable:</label>
				</div>
				<div class="col-md-5 celda " style="padding-top: 5px;">
					<lable style="width: 100%; text-align: center;" type="text" value="" id="responsableIngreso" name="responsableIngreso" placeholder="Ingrese el nombre del responsable de zona">
						<?php echo $array_consulta_datosIngresos['receptorIngreso'] ?>
					</lable>
				</div>
				
				<div class="col-md-2 celda">
					<label>Fecha inicial</label>
				</div>
				<div class="col-md-3 celda">
					<label style="width: 100%; text-align: center;" type="text" value="" id="fechaInicioIngreso" name="fechaInicioIngreso" placeholder="Fecha inicio periodo">
						<?php echo $array_consulta_datosIngresos['diaInicioPeriodoIngreso']." / ". $array_consulta_datosIngresos['mesInicioPeriodoIngreso']." / ". $array_consulta_datosIngresos['anoInicioPeriodoIngreso'] ?>
					</label>
				</div>
</div>
<div class="row" style="background-color: white">
				<div class="col-md-2 celda">
					<label>Ciudad/Zona:</label>
				</div>
				<div class="col-md-5 celda">
					<label style="width: 100%; text-align: center;" type="text" value="" id="ciudadZonaIngreso" name="ciudadZonaIngreso" placeholder="Barranquilla - Atlántico">
						<?php echo $array_consulta_datosIngresos['sedeIngreso'] ?>
					</label>
				</div>
				
				<div class="col-md-2 celda">
					<label>Fecha Final:</label>
				</div>
				<div class="col-md-3 celda">
					<label style="width: 100%; text-align: center;" type="text" value="" id="fechaCorteIngreso" name="fechaCorteIngreso" placeholder="Fecha de corte">
						<?php echo $array_consulta_datosIngresos['diaCorteIngreso']." / ". $array_consulta_datosIngresos['mesCorteIngreso']." / ". $array_consulta_datosIngresos['anoCorteIngreso'] ?>
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
<?php
}
?>