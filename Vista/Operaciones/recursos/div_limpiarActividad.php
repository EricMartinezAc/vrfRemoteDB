<div class="container">

	<div class="modal fade" id="LimpiarActividad" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Limpiar Actividad</h4>
      </div>
      
      <div class="modal-body">

      <form id="formLimpiarActividad" method="GET" action="recursos/consultas/phpLimpiarCronograma.php">

      	<br>
       <input type="text" class="form-control"  name="mes" placeholder="Ingresa el mes de la actividad a eliminar" >
      <br>       
      <input type="text" class="form-control"  name="ano" placeholder="Ingresa el año de la actividad a eliminar" >
      <br>

       <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Limpiar</button>
                	    
      </div>
        </form>
      </div>
      
      
    </div>
  </div>
</div>

</div>