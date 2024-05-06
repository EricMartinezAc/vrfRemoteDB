<?php
 
  require ("../../../../php/conexion.php");
  session_start();

  if($_SESSION["logueado"] == TRUE) {
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>..::Operaciones</title>
  <link rel="stylesheet" type="text/css" href="../../../../Controlador/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../../../../Controlador/dataTables.bootstrap.min.css">
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="../../../../Controlador/styles.css">
  <script type="text/javascript">
  function exit() {
  window.location = "../php/salirSesion.php";
  };</script>
  <script type="text/javascript">
  </script> 

</head>
<body style="background-image: url('../img/fondos/fondo2.jpg'); background-position: center;">

<div style="padding-top: 1% ">


<?php
$idActividad = $_GET['idActividadAEditar'];
if (empty($idActividad)) {
  echo "debe llenar los campos";
}else{

require '../../../../php/conexion.php';

$consultarDatosAEdiar = "SELECT * FROM cronograma WHERE idCronograma = '{$idActividad}'";
$resultadoConsultaDatosAEditar = mysqli_query($mysqli, $consultarDatosAEdiar);
while ($arrayResultadoAEditar = mysqli_fetch_array($resultadoConsultaDatosAEditar)) {


?>

<table >
  <tr >
    <th style="text-align: center;">
      ID
    </th>
    <th style="text-align: center;">
      SEMANA CRONOGRAMA
    </th>
    <th style="text-align: center;">
      DIA SEMANA
    </th>
    <th style="text-align: center;">
      DIA
    </th>
    <th style="text-align: center;">
      MES
    </th>
    <th style="text-align: center;">
      AÑO
    </th>
    <th style="text-align: center;">
      CLIENTE
    </th>
    <th style="text-align: center;">
      OFINIA
    </th>
    <th style="text-align: center;">
      AREA
    </th>
    <th style="text-align: center;">
      ACTIVIDAD
    </th>
    <th style="text-align: center;">
      TIPO EQUIPOS
    </th>
    <th style="text-align: center;">
      HORA ENTRADA
    </th>
    <th style="text-align: center;">
      MIN ENTRADA
    </th>
    <th style="text-align: center;">
      HORA SALIDA
    </th>
    <th style="text-align: center;">
      MINUTO SALIDA
    </th>
    <th style="text-align: center;">
      TECNICO
    </th>
    <th style="text-align: center;">
      AUXILIAR
    </th>
  </tr>

<form id="formEditarActividad" method="GET" action="phpProcesarEditarActividad.php">


<tr>
    <th style="text-align: center;">
      <label style="text-align: center;" type="text" name="idActividadEdit" > <?php echo $arrayResultadoAEditar['idCronograma'];  ?></label>
    </th>
    <th style="text-align: center;">
      <textarea style="text-align: center;" type="text" name="semanaCronogramaEdit" ><?php echo $arrayResultadoAEditar['semanaCronograma'];  ?></textarea>
    </th>
    <th style="text-align: center;">
      <textarea style="text-align: center;" type="text" name="diaSemanaCronogramaEdit" ><?php echo $arrayResultadoAEditar['diaSemanaCronograma'];  ?></textarea>
    </th>
    <th style="text-align: center;">
      <textarea style="text-align: center;" type="text" name="diaCronogramaEdit" ><?php echo $arrayResultadoAEditar['diaCronograma'];  ?></textarea>
    </th>
    <th style="text-align: center;">
      <textarea style="text-align: center;" type="text" name="mesCronogramaEdit" ><?php echo $arrayResultadoAEditar['mesCronograma'];  ?></textarea>
    </th>
    <th style="text-align: center;">
      <textarea style="text-align: center;" type="text" name="anoCronogramaEdit" ><?php echo $arrayResultadoAEditar['anoCronograma'];  ?></textarea>
    </th>
    <th style="text-align: center;">
      <textarea style="text-align: center;" type="text" name="clienteCronogramaEdit" ><?php echo $arrayResultadoAEditar['clienteCronograma'];  ?></textarea>
    </th>
    <th style="text-align: center;">
      <textarea style="text-align: center;" type="text" name="oficinaCronogramaEdit" ><?php echo $arrayResultadoAEditar['oficinaCronograma'];  ?></textarea>
    </th>
    <th style="text-align: center;">
      <textarea style="text-align: center;" type="text" name="areaCronogramaEdit" ><?php echo $arrayResultadoAEditar['areaCronograma'];  ?></textarea>
    </th>
    <th style="text-align: center;">
      <textarea style="text-align: center;" type="text" name="tipoActividadCronogramaEdit" ><?php echo $arrayResultadoAEditar['tipoActividadCronograma'];  ?></textarea>
    </th>
    <th style="text-align: center;">
      <textarea style="text-align: center;" style="text-align: center;" type="text" name="tipoEquiposCronogramaEdit" ><?php echo $arrayResultadoAEditar['tipoEquiposCronograma'];  ?></textarea>
    </th>
    <th style="text-align: center;">
       <textarea style="text-align: center;" style="text-align: center;" type="text" name="horaEntradaCronogramaEdit" ><?php echo $arrayResultadoAEditar['horaEntradaCronograma'];  ?></textarea>
    </th>
    <th style="text-align: center;">
       <textarea style="text-align: center;" style="text-align: center;" type="text" name="minEntradaCronogramaEdit" ><?php echo $arrayResultadoAEditar['minEntradaCronograma'];  ?></textarea>
    </th>
    <th style="text-align: center;">
      <textarea style="text-align: center;" style="text-align: center;" type="text" name="horaSalidaCronogramaEdit" ><?php echo $arrayResultadoAEditar['horaSalidaCronograma'];  ?></textarea>
    </th>
    <th style="text-align: center;">
      <textarea style="text-align: center;" type="text" name="minSalidaCronogramaEdit" ><?php echo $arrayResultadoAEditar['minSalidaCronograma'];  ?></textarea>
    </th>
    <th style="text-align: center;">
      <textarea style="text-align: center;"  type="text" name="tecnicosAsignadosCronogramaEdit" ><?php echo $arrayResultadoAEditar['tecnicosAsignadosCronograma'];  ?></textarea>
    </th>
    <th >
      <textArea style="text-align: center;" type="text" name="tecnicosAuxiliaresCronogramaEdit" ><?php echo $arrayResultadoAEditar['tecnicosAuxiliaresCronograma'];  ?></textarea>
    </th>
  </tr>

  
</table>

      
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Editar</button>
      </div>
</form>
      
<?php
}
}
?>
  

</div>
<br><br><    <th style="text-align: center;">
<br><br><br><br><br><br><br><br><br>
<script src="recursos/js/config.js"></script>
<script src="../../Controlador/jquery-2.2.4.min.js"></script>
<script src="../../Controlador/bootstrap.js"></script>
<script src="../../Controlador/swiper.min.js"></script>

<!--
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>



        
-->

<script src="../../Controlador/jquery.dataTables.min.js"></script>
<script src="../../Controlador/dataTables.bootstrap.min.js"></script>
<script src="recursos/config.js"></script>
</body>


</html>


<?php
  } else {
    header("Location: ../../../index.html");
  }
 
 ?>