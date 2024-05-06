<?php
$host = 'localhost';
$userHost = 'root';
$pswHost = 'Rouse17*';
$dbHost = 'vrfdatabase';

#conexión
try {
	$mysqli = new mysqli($host,$userHost,$pswHost,$dbHost);
	return $mysqli;	
}catch (mysqli_sql_exception $e) {
	echo "error en conexión";	
}

?>
