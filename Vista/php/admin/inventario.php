
<!DOCTYPE html>
<html lang="es-CO">
<head>
	<meta charset="UTF-8"  name="viewport" content="width=device-width, initial-scale=1.0">
	<title>..::Sistema VRFGestion ADMIN::..</title>
	<link rel="stylesheet" href="../../../Controlador/bootstrap.css">
	<link rel="stylesheet" href="../../../Controlador/estilos.css">
	

  <!--
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css">
  -->
  <link rel="stylesheet" type="text/css" href="../../../Controlador/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../../../Controlador/dataTables.bootstrap.min.css">

	
</head>

<?php 

include 'menu.php';

 ?>

<body>
<br><br><br>



	
<div class="container">


	
	<button class="btn btn-primary" data-toggle="modal" data-target="#inventario"> <span class="glyphicon glyphicon-star"></span>Crear Inventario</button>

  

	<div class="modal fade" id="inventario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Crear Inventario</h4>
      </div>
      
      <div class="modal-body">

      <form id="insertarinventario" onsubmit="return false;">


         
      
		
		      <div class="form-group">
          <label for="sel1"   >Tipo del item</label>
            <select class="form-control" id="selecttipoitem" name="tipoitem" >
                
            </select>
            </div>

            <div class="form-group">
            <label for="sel1"   >Seleccione el item</label>
            <select class="form-control" id="selectitem" name="item" >
                
            </select>
            </div>

            <div class="form-group">
         <label for="nombre">Cantidad</label>
         <input type="text" class="form-control"  name="cantidad" placeholder="Cantidad" >
         </div>

           <div class="form-group">
           <label for="sel1"   >Sucursal</label>
            <select class="form-control" id="selectsucursal" name="sucursal" >
              
            </select>
            </div>

           <div class="form-group">
           <label for="sel1"   >Trabajador a cargo</label>
           <select class="form-control" id="selecttrabajador" name="trabajador" >
              
            </select>
            </div>

        

      

        </form>
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary" name="opcion" value="guardar" onclick="InsertarInventario()">Guardar</button>
                	
      </div>
    </div>
  </div>
</div>

	
  

</div>

<div class="modal fade" id="modificar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Actualizar Inventario</h4>
      </div>
      <div class="modal-body">
        <form onsubmit="return false;" id="invent">
          
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" onclick="ActualizarInventario();">Guardar cambios</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->



<div class="container">
<br>

<div id="alerta"></div>
	   

    <br><br>

  <div class="table-responsive">
		<table class="table table-striped table-bordered" id="tablainventario">
      			
		</table>
  </div>
	</div>









</body>

<script src="../../../Controlador/jquery-2.2.4.min.js"></script>
<script src="../../../Controlador/bootstrap.js"></script>
<script src="../../../Controlador/swiper.min.js"></script>

<!--
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
-->

<script src="../../../Controlador/jquery.dataTables.min.js"></script>
<script src="../../../Controlador/dataTables.bootstrap.min.js"></script>


<script src="../../../Controladors/ajaxinventario.js"></script>



</html>