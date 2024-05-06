<?php include 'seguridad.php'; ?>
<!DOCTYPE html>
<html lang="es-CO">
<head>
	<meta charset="UTF-8"  name="viewport" content="width=device-width, initial-scale=1.0">
	<title>..::Sistema VRFGestion ADMIN::..</title>
	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../css/estilos.css">
	

  <!--
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css">
  -->
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/dataTables.bootstrap.min.css">




	
</head>

<?php 

include 'menu.php';

 ?>

<body>
<br><br><br>



	
<div class="container">


	
	<button class="btn btn-primary" data-toggle="modal" data-target="#traba"> <span class="glyphicon glyphicon-star"></span> Añadir trabajador</button>

  

	<div class="modal fade" id="traba" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Añadir trabajador</h4>
      </div>
      
      <div class="modal-body">

      <form id="insertartrabajador" onsubmit="return false;">
      

		
		      <div class="form-group">
          <label for="sel1"   >Tipo identificacion</label>
            <select class="form-control" id="selecttipo" name="idtipo" >
                
            </select>
            </div>

           <div class="form-group">
           <label for="sel1"   >Sucursal</label>
            <select class="form-control" id="selectsucursal" name="sucursal" >
              
            </select>
            </div>

         <div class="form-group">
         <label for="nombre">Nombre del trabajador</label>
         <input type="text" class="form-control"  name="nombre" placeholder="Nombre" >
         </div>

         <div class="form-group">
         <label for="nombre">Apellido del trabajador</label>
         <input type="text" class="form-control"  name="apellido" placeholder="Apellido" >
         </div>

         <div class="form-group">
         <label for="nombre">Identificacion del trabajador</label>
         <input type="text" class="form-control"  name="identificacion" placeholder="Identificacion" >
         </div>

         <div class="form-group">
         <label for="nombre">Contacto del trabajador</label>
         <input type="text" class="form-control"  name="contacto" placeholder="Contacto" >
         </div>

      

        </form>
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary" name="opcion" value="guardar" onclick="InsertarTrabajador()">Guardar</button>
                	
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
        <h4 class="modal-title">Actualizar Trabajador</h4>
      </div>
      <div class="modal-body">
        <form onsubmit="return false;" id="trabajador">
          
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" onclick="ActualizarTrabajador();">Guardar cambios</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->



<div class="container">
<br>

<div id="alerta"></div>
	   

    <br><br>

  <div class="table-responsive">
		<table class="table table-striped table-bordered" id="tablatrabajador">
      			
		</table>
  </div>
	</div>









</body>

<script src="../../controlador/jquery-2.2.4.min.js"></script>
<script src="../../controlador/bootstrap.js"></script>
<script src="../../controlador/swiper.min.js"></script>

<!--
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
-->

<script src="../../controlador/jquery.dataTables.min.js"></script>
<script src="../../controlador/dataTables.bootstrap.min.js"></script>


<script src="../../controlador/ajaxtrabajador.js"></script>



</html>