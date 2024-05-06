<div style="opacity: 0; position: relative;">
	Total de Dinero ingresado: $
	<label id="valorIngreso">
		<?php echo $resultado_consultaIngresos['SUM(valorIngreso)'] ?>
	</label>
</div>
<div style="opacity: 0; position: relative;">
	Total de Dinero gastado: $
	<label id="valorTotalGasto">
		<?php echo $resultado_consultaGastos['SUM(valorTotalGasto)'] ?>
	</label>
</div>