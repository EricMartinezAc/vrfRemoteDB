<div class="container">

	<div class="modal fade" id="editActividad" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Editar Actividad</h4>
      </div>
      
      <div class="modal-body">

      <form id="formEditarActividad" method="GET" action="recursos/consultas/phpEditarActividad.php">

      <br>
      <input type="text" class="form-control"  name="idActividadAEditar" placeholder="Ingresa el ID de la actividad a modificar" >
      <br>
       
      
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