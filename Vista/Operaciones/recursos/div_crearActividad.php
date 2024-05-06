<div class="container">

	<div class="modal fade" id="addActividad" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Agregar Actividad</h4>
      </div>
      
      <div class="modal-body">

      <form id="formCrearActividad" method="GET" action="recursos/consultas/phpCrearActividad.php">
       
       	
        <center><label>FECHA DE EJECUCIÓN</label><br><br>
          <div class="row" style="padding-left: 10px; padding-right: 10px">
            <div class="col-md-4">
            <input type="number" class="form-control"  name="ano" placeholder="AA" >
            </div>
            <div class="col-md-4">
            <input type="number" class="form-control"  name="mes" placeholder="MM" >
            </div>
            <div class="col-md-4">
            <input type="number" class="form-control"  name="dia" placeholder="DD" >
            </div>
        </div>
        </center>

    
       <br>
       <div class="row" style="padding-left: 10px; padding-right: 10px">
         <div class="col-md-4">
           <input type="text" class="form-control"  name="noSemana" placeholder="No Semana" >     
         </div>
         <div class="col-md-8">
           <input type="text" class="form-control"  name="diaSemana" placeholder="día de semana" > 
         </div>
       </div>  
       <br>
       <center>
         <label>LISTADO DE ACTIVIDADES</label>
       <br><br>
       
       <div style="padding-left: 10px; padding-right: 10px">
         <div>
        <label>Actividad #1</label>
        <div class="row">
          <div class="col-md-6" style=" padding-left: 10px; padding-right: 10px">
            <center>
              <label>HORA DE ENTRADA</label><br><br>
            <div class="row" style=" padding-left: 20px; padding-right: 20px">
              <div class="col-md-5">
                <input type="number" class="form-control"  name="horaEntrada" placeholder="Hora" >
              </div>
              <div class="col-md-2">
                <label>:</label>
              </div>
              <div class="col-md-5">
                <input type="number" class="form-control"  name="minEntrada" placeholder="Min" >
              </div>
            </div>
            </center>
            
            
          </div>
          <div class="col-md-6" >
            <center>
              <label>HORA DE SALIDA</label><br><br>
            <div class="row" style=" padding-left: 20px; padding-right: 20px">
              <div class="col-md-5">
                <input type="number" class="form-control"  name="horaSalida" placeholder="Hora" >
              </div>
              <div class="col-md-2">
                <label>:</label>
              </div>
              <div class="col-md-5">
                <input type="number" class="form-control"  name="minSalida" placeholder="Min" >
              </div>
            </div>
            </center>

            
          </div>
        </div>
        <br><br>
        <input type="text" class="form-control"  name="tipoActividad" placeholder="Actividad a ejecutar" >
       <br>
       <input type="datetime" class="form-control"  name="cliente" placeholder="cliente" >
       <br>
       <input type="text" class="form-control"  name="oficina" placeholder="Oficina" >
       <br>
       <input type="text" class="form-control"  name="area" placeholder="Área" >
       <br>
       <input type="text" class="form-control"  name="tipoEquipos" placeholder="Tipo de Equipos a intervenir" >
       <br>
       <input type="text" class="form-control"  name="tecnicoAsignado" placeholder="tecnicoAsignado" >
       <br>
       <input type="text" class="form-control"  name="auxiliarTecnico" placeholder="auxiliarTecnico" >


       <label>Actividad #2</label>
       <div class="row">
          <div class="col-md-6" style=" padding-left: 10px; padding-right: 10px">
            <center>
              <label>HORA DE ENTRADA</label><br><br>
            <div class="row" style=" padding-left: 20px; padding-right: 20px">
              <div class="col-md-5">
                <input type="number" class="form-control"  name="horaEntrada2" placeholder="Hora" >
              </div>
              <div class="col-md-2">
                <label>:</label>
              </div>
              <div class="col-md-5">
                <input type="number" class="form-control"  name="minEntrada2" placeholder="Min" >
              </div>
            </div>
            </center>
            
            
          </div>
          <div class="col-md-6" >
            <center>
              <label>HORA DE SALIDA</label><br><br>
            <div class="row" style=" padding-left: 20px; padding-right: 20px">
              <div class="col-md-5">
                <input type="number" class="form-control"  name="horaSalida2" placeholder="Hora" >
              </div>
              <div class="col-md-2">
                <label>:</label>
              </div>
              <div class="col-md-5">
                <input type="number" class="form-control"  name="minSalida2" placeholder="Min" >
              </div>
            </div>
            </center>

            
          </div>
        </div>
        <br><br>
        <input type="text" class="form-control"  name="tipoActividad2" placeholder="Actividad a ejecutar" >
       <br>
       <input type="datetime" class="form-control"  name="cliente2" placeholder="cliente" >
       <br>
       <input type="text" class="form-control"  name="oficina2" placeholder="Oficina" >
       <br>
       <input type="text" class="form-control"  name="area2" placeholder="Área" >
       <br>
       <input type="text" class="form-control"  name="tipoEquipos2" placeholder="Tipo de Equipos a intervenir" >
       <br>
       <input type="text" class="form-control"  name="tecnicoAsignado2" placeholder="tecnicoAsignado" >
       <br>
       <input type="text" class="form-control"  name="auxiliarTecnico2" placeholder="auxiliarTecnico" >


        <label>Actividad #3</label>
        <div class="row">
          <div class="col-md-6" style=" padding-left: 10px; padding-right: 10px">
            <center>
              <label>HORA DE ENTRADA</label><br><br>
            <div class="row" style=" padding-left: 20px; padding-right: 20px">
              <div class="col-md-5">
                <input type="number" class="form-control"  name="horaEntrada3" placeholder="Hora" >
              </div>
              <div class="col-md-2">
                <label>:</label>
              </div>
              <div class="col-md-5">
                <input type="number" class="form-control"  name="minEntrada3" placeholder="Min" >
              </div>
            </div>
            </center>
            
            
          </div>
          <div class="col-md-6" >
            <center>
              <label>HORA DE SALIDA</label><br><br>
            <div class="row" style=" padding-left: 20px; padding-right: 20px">
              <div class="col-md-5">
                <input type="number" class="form-control"  name="horaSalida3" placeholder="Hora" >
              </div>
              <div class="col-md-2">
                <label>:</label>
              </div>
              <div class="col-md-5">
                <input type="number" class="form-control"  name="minSalida3" placeholder="Min" >
              </div>
            </div>
            </center>

            
          </div>
        </div>
        <br><br>
        <input type="text" class="form-control"  name="tipoActividad3" placeholder="Actividad a ejecutar" >
       <br>
       <input type="datetime" class="form-control"  name="cliente3" placeholder="cliente" >
       <br>
       <input type="text" class="form-control"  name="oficina3" placeholder="Oficina" >
       <br>
       <input type="text" class="form-control"  name="area3" placeholder="Área" >
       <br>
       <input type="text" class="form-control"  name="tipoEquipos3" placeholder="Tipo de Equipos a intervenir" >
       <br>
       <input type="text" class="form-control"  name="tecnicoAsignado3" placeholder="tecnicoAsignado" >
       <br>
       <input type="text" class="form-control"  name="auxiliarTecnico3" placeholder="auxiliarTecnico" >



         </div>
       </div>


       </center>
       
       
       <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Agregar</button>
                	    
      </div>
        </form>
      </div>
      
      
    </div>
  </div>
</div>

</div>