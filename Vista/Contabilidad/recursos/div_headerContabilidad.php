<nav class="navbar btn-default" role="navigation">
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
        <a class="dropdown-toggle" data-toggle="dropdown">Balance <b class="caret"></b>
        </a>
        <ul class="dropdown-menu">
          <li>
            <a onclick="mostrar_divBalanceSemana()">
              Semanal 
              <b>
                <!--<img style="width: 20px" src="../img/fondos/ico_add_1.png">-->
              </b>
            </a>
          </li>
          <li>
            <a onclick="mostrar_divBalanceMes()">
              Mensual 
              <b>
                <!--<img style="width: 20px" src="../img/fondos/ico_borrar.png">-->
              </b>
            </a>
          </li>
          <li>
            <a onclick="mostrar_divBalanceFinal()">
              Final 
              <b>
                <!--<img style="width: 20px" src="../img/fondos/ico_add_1.png">-->
              </b>
            </a>
          </li>
          <li>
            <a onclick="mostrar_divHistorialBalance()">
              Historial 
              <b>
                <!--<img style="width: 20px" src="../img/fondos/ico_borrar.png">-->
              </b>
            </a>
          </li>
        </ul>
      </li>

      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          Libro Contable <b class="caret"></b>
        </a>
        <ul class="dropdown-menu">
          <li>
            <a onclick="mostrar_divLibroMayor()">
              Mayor 
              <b>
                <!--<img style="width: 20px" src="../img/fondos/ico_borrar.png">-->
              </b>
            </a>
          </li>
          <li>
            <a onclick="mostrar_divLibroMenor()">
              Menor 
              <b>
                <!--<img style="width: 20px" src="../img/fondos/ico_borrar.png">-->
              </b>
            </a>
          </li>
        </ul>
      </li> 

      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Gastos 
            <b class="caret"></b>
        </a>
        <ul class="dropdown-menu">
          <li>
            <a type="button" style="width: 100%" class=" btn btn-default" data-toggle="modal" data-target="#addGasto">
              <b>
                <img style="width: 20px" src="../img/fondos/ico_add_1.png">
              </b>
              Agregar Gasto
            </a>
          </li>
          <li>
            <a type="button" style="width: 100%" class=" btn btn-default" data-toggle="modal" data-target="#formLeg">
              <b>
                <img style="width: 20px" src="../img/ico/folder.png">
              </b>
              Legalización de Gastos
            </a>
          </li>
        </ul>
      </li>     
    </ul>
     
    
  </div>
</nav>




