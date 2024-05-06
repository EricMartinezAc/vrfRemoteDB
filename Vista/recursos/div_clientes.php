 <!--div madre-->
<div style="border-radius: 10px; background-color: transparent;" >
 <!--pirmera linea-->
 <div style="padding: 2%;" class="row">
 	 <!--derecha en blanco-->
 	<div style="" class="col-md-1">
 		
 <!--empty-->

 	</div>
  <!-- aquí el contenido de los clientes VRF ingeniería-->
 	<div class="col-md-10">
 		 <!--inicio de consulta     -->
 		<?php 
				    	$sqlCargarC = "SELECT * FROM clientes";
  						$resultCargarC = mysqli_query($mysqli,$sqlCargarC);

					while ($mostrarCliente = $resultCargarC->fetch_array()) {

		?>
		 <!-- mientras tenga una cantidad de datos me creará lo siguiente   -->
		   <!--este será la estructura de recyclerView que mostrará los datos datos de los clientes-->



		<div class="row btn-success" style="border-radius: 10px; border-style: ridge;">
			 
		  <!-- div layout vertical me muestra la imagen y el id de cada cliente-->
			<div class="col-md-3" style="padding: 3%;border-radius: 5px;">
				<div style="background-color: black; padding: 1%;border-radius: 5px;">
					<img style="width: 100%; border-radius: 5px; border-style: ridge;" src="img/fondos/fondo_bb.jpeg">
				<label style="padding: 2%">
					<font style="color: #0e8000;">
						<?php echo "ID: ".$mostrarCliente['idCliente'] ?>
					</font>
				</label>
				</div>
				
			</div>

		  <!-- div layout vertical crea -->
			<div class="col-md-6" style=" text-align: left; padding-top: 3%;border-radius: 5px;">
					<div style="border-top-style: ridge;padding-bottom: 2%;padding-top: 1%">
						<label >
					<font style="color: white; font-size: 20px ">
						<?php echo $mostrarCliente['nombreCliente'] ?>
					</font>
						</label><br>
						<label>
					<font style="color: white">
						<?php echo "Contacto:"." ".$mostrarCliente['nombreContactoCliente'] ?>
					</font>
						</label><br>
						<label>
					<font style="color: white">
						<?php echo "Dirección:"." ".$mostrarCliente['direccionCliente'] ?>
					</font>
						</label><br>
						<label>
					<font style="color: white">
						<?php echo "Tels.:"." ".$mostrarCliente['telefonoCliente']." - ".$mostrarCliente['celularCliente'] ?>
					</font>
						</label><br>
						<label>
					<font style="color: white">
						<?php echo "Email.:"." ".$mostrarCliente['emailCliente'] ?>
					</font>
						</label><br>
						<label>
					<font style="color: white">
						<?php echo "Fecha de contrato:"." ".$mostrarCliente['fechaContratoCliente'] ?>
					</font>
						</label><br>
					</div>
			</div>
			<div class="col-md-3">
				<div style="padding-top: 13%; ">
					<img style="width: 80%;border-style: ridge; position: center" src="img/ico/QRCode.png">
					<br><br>
				</div>
			</div>						
		</div><br><br>
		<?php
			}			
		?>


 	</div>
 	<div style="" class="col-md-1">
 		



 	</div>
 </div>
</div>