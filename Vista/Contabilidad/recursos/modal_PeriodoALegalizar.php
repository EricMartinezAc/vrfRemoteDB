<div class="container">

	<div class="modal fade" id="formLeg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">INGRESE EL PERIODO A LEGALIZAR</h4>
      </div>
      
      <div class="modal-body">

<form id="formLeg" method="GET" action="recursos/div_legalizacionGastos.php">
       
       	<div class="row">
       		<div class="col-md-6">
       			<label>Fecha de Inicio</label>
            <input type="number" class="form-control"  name="diaInicio" placeholder =" DD" >
            <input type="number" class="form-control"  name="mesInicio" placeholder=" MM" >
            <input type="number" class="form-control"  name="anoInicio" placeholder =" AA" >
       		</div>
       		<div class="col-md-6">
       			<label>Fecha de Corte</label>
            <input type="number" class="form-control"  name="diaCorte" placeholder =" DD" >
            <input type="number" class="form-control"  name="mesCorte" placeholder =" MM" >
            <input type="number" class="form-control"  name="anoCorte" placeholder =" AA" >
       		</div>
       	</div>
       	<br>
       	
       
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