<?php 
session_start();

if (isset($_SESSION['usuario'])) {

$user='<b>BIENVENIDO: '.$_SESSION['usuario']. '</b>';

}else{

echo '<script>alert("El usuario no es valido")</script>';

header('Location: ../index.php');

}


?>