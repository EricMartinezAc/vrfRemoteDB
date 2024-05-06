<nav class="navbar btn-default" role="navigation"  style="width: 110%">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse"
            data-target=".navbar-ex1-collapse">
      <span class="sr-only">Desplegar navegación</span>
      <span class="icon-bar"><img style="width: 40px; padding-bottom: 10px; padding-right: 10px" src="../img/ico/ico_menu.png"></span>
    </button>
    <img style="width: 250px; padding-top: 10px; padding-left: 7px; padding-bottom: 7px" src="../img/ico/logoVRF.png">
  </div>
  <div  class="collapse navbar-collapse navbar-ex1-collapse">
    <ul style="padding-left:  30px" class="nav navbar-nav">
      <li>
        <a class="dropdown-toggle" data-toggle="dropdown">Cronograma <b class="caret"></b>
        </a>
        <ul class="dropdown-menu">
          <li>
            <a type="button" style="width: 100%" class=" btn btn-default" data-toggle="modal" data-target="#addActividad">
              <b>
                <img style="width: 20px" src="../img/fondos/ico_add_1.png">
              </b>
              Agregar Actividad
            </a>
          </li>
          <li>
            <!--<a  type="button" style="width: 100%" class=" btn btn-default" data-toggle="modal" data-target="#editActividad" -->
              <a type="button" style="width: 100%" class=" btn btn-default" data-toggle="modal" data-target="#editActividad">
              <b>
                <img style=" width: 20px" src="../img/ico/ico_edit.png">
              </b>
               Editar Actividad
            </a>
          </li>
          <li>
            <a type="button" style="width: 100%" class=" btn btn-default" data-toggle="modal" data-target="#eliminarActividad">
              <b>
                <img style="width: 20px" src="../img/fondos/ico_borrar.png">
              </b>
              Eliminar Actividad 
            </a>
          </li>
          <li>
            <a onclick="mostrar_divListarCronograma()">
              <b>
                <img style="width: 20px" src="../img/ico/ico_cronograma.png">
              </b>
              Listar Coronograma  
            </a>
          </li>
          <li>
            <a onclick="mostrar_divGantt()">
              <b>
                <img style="width: 20px" src="../img/ico/gantt.png">
              </b>
              Listar Gannt
            </a>
          </li>
          <li>
            <a type="button" style="width: 100%" class=" btn btn-default" data-toggle="modal" data-target="#LimpiarActividad">
              <b>
                <img style="width: 20px" src="../img/ico/eliminar_db.png">
              </b>
              limpiar Cronograma 
            </a>
          </li>
        </ul>
      </li>


      <li class="dropdown">
        <a onclick="mostrar_divPreventivo()" class="dropdown-toggle" data-toggle="dropdown">
          Preventivo
        </a>
      </li>

      <li class="dropdown">
        <a onclick="mostrar_divCorrectivo()" class="dropdown-toggle" data-toggle="dropdown">
          Correctivo
        </a>
      </li> 

      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Proyectos 
            <b class="caret"></b>
        </a>
        <ul class="dropdown-menu">
          <li>
            <a onclick="mostrar_divInstalacion()" >
              Instalaciones
            </a>
          </li>
          <li>
            <a onclick="mostrar_divObraRemodelacion()">
              Obra / Remodelación 
              <b>
                <!--<img style="width: 20px" src="../img/fondos/ico_borrar.png">-->
              </b>
            </a>
          </li>
        </ul>
      </li>

      <li class="dropdown">
        <a onclick="mostrar_divLevantamiento()" class="dropdown-toggle" data-toggle="dropdown">
          Pendientes
        </a>
      </li> 


    </ul>
     
    
  </div>
</nav>




