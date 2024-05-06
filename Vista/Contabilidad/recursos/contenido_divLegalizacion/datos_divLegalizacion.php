<div class="row" style="background-color: rgba(105,180,100,4);">
	<div class="col-md-12 celda">
		<label>DATOS DE LEGALIZACIÓN</label>
	</div>
</div>

<div class="row" style="background-color: white">
				<div class="col-md-2 celda ">
					<label >Responsable:</label>
				</div>
				<div class="col-md-5 celda " style="padding-top: 5px;">
					<lable style="width: 100%; text-align: center;" type="text" value="" id="responsableIngreso" name="responsableIngreso" placeholder="Ingrese el nombre del responsable de zona">
						<?php echo $arrayResult_datosLegalizacion['receptorIngreso'] ?>
					</lable>
				</div>
				
				<div class="col-md-2 celda">
					<label>Fecha inicial</label>
				</div>
				<div class="col-md-3 celda">
					<label style="width: 100%; text-align: center;" type="text" value="" id="fechaInicioIngreso" name="fechaInicioIngreso" placeholder="Fecha inicio periodo">
						<?php echo $arrayResult_datosLegalizacion['diaInicioPeriodoIngreso']." / ". $arrayResult_datosLegalizacion['mesInicioPeriodoIngreso']." / ". $arrayResult_datosLegalizacion['anoInicioPeriodoIngreso'] ?>
					</label>
				</div>
</div>
<div class="row" style="background-color: white">
				<div class="col-md-2 celda">
					<label>Ciudad/Zona:</label>
				</div>
				<div class="col-md-5 celda">
					<label style="width: 100%; text-align: center;" type="text" value="" id="ciudadZonaIngreso" name="ciudadZonaIngreso" placeholder="Barranquilla - Atlántico">
						<?php echo $arrayResult_datosLegalizacion['sedeIngreso'] ?>
					</label>
				</div>
				
				<div class="col-md-2 celda">
					<label>Fecha Final:</label>
				</div>
				<div class="col-md-3 celda">
					<label style="width: 100%; text-align: center;" type="text" value="" id="fechaCorteIngreso" name="fechaCorteIngreso" placeholder="Fecha de corte">
						<?php echo $arrayResult_datosLegalizacion['diaCorteIngreso']." / ". $arrayResult_datosLegalizacion['mesCorteIngreso']." / ". $arrayResult_datosLegalizacion['anoCorteIngreso'] ?>
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