<div class="container">

	<div class="modal fade" id="addGasto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Formulario de relación de gastos</h4>
      </div>
      
      <div class="modal-body">

<form id="formRelacionarGasto" method="GET" action="recursos/contenido_divLegalizacion/consulta_relacionarGasto.php">

	<label>Responsable: </label>
  <input type="text" class="form-control"  name="responsableGasto" placeholder="responsable del gasto" > 
<br><br>
      <!--
SELECT `idGasto`, `diaGasto`, `mesGasto`, `anoGasto`, `centroDeCostoGasto`, `codigoGasto`, `proveedorFacturaGasto`, `descripcionGasto`, `cantidadGasto`, `valorUnitarioGasto`, `valorTotalGasto`, `responsableGasto`, `diaInicioPeriodoGasto`, `mesInicioPeriodoGasto`, `anoInicioPeriodoGasto`, `diaCorteGasto`, `mesCorteGasto`, `anoCorteGasto`, `sedeGasto` FROM `gastos` WHERE 1
      --> 
       	<div class="row">
       		<div class="col-md-4">
       			<label>Fecha de gasto</label>
            <input type="number" class="form-control"  name="diaGasto" placeholder =" DD" >
            <input type="number" class="form-control"  name="mesGasto" placeholder=" MM" >
            <input type="number" class="form-control"  name="anoGasto" placeholder =" AA" >
       		</div>
       		<div class="col-md-4">
       			<label>Fecha de Inicio Periodo</label>
            <input type="number" class="form-control"  name="diaInicioPeriodoGasto" placeholder =" DD" >
            <input type="number" class="form-control"  name="mesInicioPeriodoGasto" placeholder =" MM" >
            <input type="number" class="form-control"  name="anoInicioPeriodoGasto" placeholder =" AA" >
       		</div>
          <div class="col-md-4">
            <label>Fecha de corte Periodo</label>
            <input type="number" class="form-control"  name="diaCorteGasto" placeholder =" DD" >
            <input type="number" class="form-control"  name="mesCorteGasto" placeholder =" MM" >
            <input type="number" class="form-control"  name="anoCorteGasto" placeholder =" AA" >
          </div>
       	</div>
       	<br>
       	<div class="row">
       	    <div class="col-md-4">
       			<input type="text" class="form-control"  name="codigoGasto" placeholder="Código" >
       		</div>
			<div class="col-md-4">
       			<input type="text" class="form-control"  name="centroDeCostoGasto" placeholder="Centro de Costo" >
       		</div>
       		<div class="col-md-4">
       			<input type="text" class="form-control"  name="sedeGasto" placeholder="Sede" >
       		</div>
 		</div>
       <br>
       <input type="text" class="form-control"  name="proveedorFacturaGasto" placeholder="Proveedor / Factura" >      
       <br>
       <input type="text" class="form-control"  name="descripcionGasto" placeholder="descripción del gasto" >       
       <br>
       <div class="row">
       	<div class="col-md-6">
       		Unidades: <input type="number" class="form-control"  name="cantidadGasto" placeholder="cantidad" >
       	</div>
       	<div class="col-md-6">
       		$COP<input type="number" class="form-control"  name="valorUnitarioGasto" placeholder="Valor Unitario" >
       	</div>
       </div>
       
       
       <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Agregar</button>
                	    
      </div>
</form>
      </div>
      
      
    </div>
  </div>
</div>

</div>