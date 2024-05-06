<?php
include ('conexion.php');
#recoger datos de form html
$nombreEle = $_POST['nombreTXT'];
$tipoEle = $_POST['tipoElement'];
$marcaEle = $_POST['marcaElement'];
$refEle = $_POST['refElement'];
$cantEle = $_POST['cantElement'];
$serialEle = $_POST['serialElement'];
$sedeEle = $_POST['sedeElement'];
$estadoEle = $_POST['estadoElement'];

#insertar en base de datos

$query = mysql_query("INSERT INTO inventario (nombre, tipo, marca, referencia,serial, cantidad,estado,sede) VALUES ('$nombreEle','$tipoEle','$marcaEle','$refEle','$serialEle','$cantEle','$estadoEle','$sedeEle')")or die("elemento no agregado");


?>
