<div class="container">

	<div class="modal fade" id="editarActividad" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Editar Actividad</h4>
      </div>
      
      <div class="modal-body">

      <form id="formEditarActividad" method="GET" action="php/editarActividad.php">

      	<br>
       <input type="text" class="form-control"  name="idActividad" placeholder="Ingresa el ID de la actividad a modificar" >
      <br>
       
       	<div class="row">
       		<div class="col-md-6">
       			<label>hora de entrada</label><input type="text" class="form-control"  name="horaEntrada" value=" HH:MM:SS" >
       		</div>
       		<div class="col-md-6">
       			<label>hora de salida</label><input type="text" class="form-control"  name="horaSalida" value=" HH:MM:SS" >
       		</div>
       	</div>
       	<br>
       	<div class="row">
       	    <div class="col-md-4">
       			<input type="number" class="form-control"  name="ano" placeholder="AA" >
       		</div>
			<div class="col-md-4">
       			<input type="number" class="form-control"  name="mes" placeholder="MM" >
       		</div>
       		<div class="col-md-4">
       			<input type="number" class="form-control"  name="dia" placeholder="DD" >
       		</div>
 		</div>
       <br>
       <input type="text" class="form-control"  name="noSemana" placeholder="No Semana" >       
       <br>
       <input type="text" class="form-control"  name="cliente" placeholder="cliente" >
       <br>
       <input type="text" class="form-control"  name="oficina" placeholder="Oficina" >
       <br>
       <input type="text" class="form-control"  name="area" placeholder="Área" >
       <br>
       <input type="text" class="form-control"  name="tipoActividad" placeholder="Tipo de Actividad" >
       <br>
       <input type="text" class="form-control"  name="tipoEquipos" placeholder="Tipo de equipos" >
       <br>
       <input type="text" class="form-control"  name="tecnicoAsignado" placeholder="tecnicoAsignado" >
       <br>
       <input type="text" class="form-control"  name="auxiliarTecnico" placeholder="auxiliarTecnico" >

       <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Editar</button>
                	    
      </div>
        </form>
      </div>
      
      
    </div>
  </div>
</div>

</div>