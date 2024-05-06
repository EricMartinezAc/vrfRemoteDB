<?php
$hostname = "localhost";
	$database = "vrfingenieria";
	$username = "root";
	$password = "";

$json = array();

	if (isset($_GET["id"]) ) {

		$id = $_GET['id'];
		

		$conexion = mysqli_connect($hostname, $username, $password, $database );

		$consulta = "DELETE FROM actividades WHERE actividades.id = '{$id}'";


		$resultado_delete= mysqli_query($conexion, $consulta);

		if ($resultado_delete) {
				
			$resulta["id"] = 0;
			$resulta["fecha"] = 'eliminado';
			$resulta["cliente"] = 'eliminado';
			$resulta["proyectoArea"] = 'eliminado';
			$resulta["tecnico"] = 'eliminado';
			$resulta["tecnicoAux"] = 'eliminado';
			$resulta["horaInic"] = 0;
			$resulta["minInic"] = 0;
			$resulta["horaFin"] = 0;
			$resulta["minFin"] = 0;
			$resulta["ordenServicio"] = 'eliminado';
			$resulta["vobo"] = 'eliminado';
			$json['actividades'][] = $resulta;
           
			}else{
			$resulta["id"] = 0;
			$resulta["fecha"] = 'no registra';
			$resulta["cliente"] = 'no registra';
			$resulta["proyectoArea"] = 'no registra';
			$resulta["tecnico"] = 'no registra';
			$resulta["tecnicoAux"] = 'no registra';
			$resulta["horaInic"] = 0;
			$resulta["minInic"] = 0;
			$resulta["horaFin"] = 0;
			$resulta["minFin"] = 0;
			$resulta["ordenServicio"] = 'no registra';
		    $resulta["vobo"] = 'no registra';
			$json['actividades'][] = $resulta;
			}

			echo json_encode($json);

	
	}else{
			$resulta["id"] = 0;
			$resulta["fecha"] = 'WS no retorna';
			$resulta["cliente"] = 'WS no retorna';
			$resulta["proyectoArea"] = 'WS no retorna';
			$resulta["tecnico"] = 'WS no retorna';
			$resulta["tecnicoAux"] = 'WS no retorna';
			$resulta["horaInic"] = 0;
			$resulta["minInic"] = 0;
			$resulta["horaFin"] = 0;
			$resulta["minFin"] = 0;
			$resulta["ordenServicio"] = 'WS no retorna';
			$resulta["vobo"] = 'WS no retorna';
			$json['actividades'] = $resulta;
			echo json_encode($json);
	}

?>