<?php
	$hostname = "localhost";
	$database = "vrfingenieria";
	$username = "root";
	$password = "";

	$json = array();

	if (isset($_GET["id"]) && isset($_GET["fecha"]) && isset($_GET["cliente"]) &&isset($_GET["proyectoArea"]) && isset($_GET["tecnico"]) && isset($_GET["tecnicoAux"]) && isset($_GET["horaInic"]) && isset($_GET["minInic"]) && isset($_GET["horaFin"]) &&isset($_GET["minFin"]) && isset($_GET["ordenServicio"]) && isset($_GET["vobo"])  ) {

		$id = $_GET['id'];
		$fecha = $_GET['fecha'];
		$cliente = $_GET['cliente'];
		$proyectoArea = $_GET['proyectoArea'];
		$tecnico = $_GET['tecnico'];
		$tecnicoAux = $_GET['tecnicoAux'];
		$horaInic = $_GET['horaInic'];
		$minInic = $_GET['minInic'];
		$horaFin = $_GET['horaFin'];
		$minFin = $_GET['minFin'];
		$ordenServicio = $_GET['ordenServicio'];
		$vobo = $_GET['vobo'];

		$conexion = mysqli_connect($hostname, $username, $password, $database );

		$insert = "INSERT INTO actividades(id, fecha, cliente, proyectoArea, tecnico, tecnicoAux, horaInic, minInic, horaFin, minFin, ordenServicio, vobo) VALUES ('{$id}','{$fecha}','{$cliente}','{$proyectoArea}','{$tecnico}','{$tecnicoAux}','{$horaInic}','{$minInic}','{$horaInic}','{$minFin}','{$ordenServicio}','{$vobo}')";
		$resultado_insert = mysqli_query($conexion, $insert);

		if ($resultado_insert) {
			
			$consulta = "SELECT * FROM actividades WHERE id = '{$id}'";
			$resultado = mysqli_query($conexion, $consulta);

			
		if ($registro = mysqli_fetch_array($resultado)) {
				
				$json['actividades'][] = $registro;

			}
			
			mysqli_close($conexion);
			echo json_encode($json);

		}
		else{
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
			echo json_encode($json);

		}
	
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