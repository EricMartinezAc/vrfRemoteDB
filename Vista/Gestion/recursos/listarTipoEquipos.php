<div class="container">

	<div class="modal fade" id="verListEq" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Listado de Equipos</h4>
      </div>
      
      <div class="modal-body">
      	<?php
      		$anoHoy = date('y');
			$mesHoy = date('m');
			$diaHoy = date('d');

			$sqlCargarListaEq = "SELECT * FROM lista_tipo_equipos";
			$resultCargarListEq = mysqli_query($mysqli,$sqlCargarListaEq);
	while ($mostrarListaEq = mysqli_fetch_array($resultCargarListEq)) {

			 ?>
			 <center>
			 <div class="row" style="border-right-style: ridge;">
			 	<div class="col-md-1">
			 		
			 	</div>
			 	<div class="col-md-10" style="border-top-style: ridge;">
			 		<label>
			 			<?php echo $mostrarListaEq['aliasEquipo'].": ".$mostrarListaEq['nombreEquipo']?>
			 		</label><br>
			 		<label><?php echo "Tipo: ".$mostrarListaEq['tipoEquipo'] ?></label>
			 	</div>
			 	<div class="col-md-1">
			 		
			 	</div>
			 	
			 </div>
			</center>
				<?php
			}

				?>
			 

      </div>
      
      
    </div>
  </div>
</div>

</div>