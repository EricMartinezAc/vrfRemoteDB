<nav style="opacity: 0.8" class="navbar btn-default" role="navigation">
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
      <li><a href="#">CLIENTES</a></li>
      <li><a href="#">Correctivo</a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          RRHH <b class="caret"></b>
        </a>
        <ul class="dropdown-menu">
          <li><a onclick="mostrar_divControlEpp()">EPP</a></li>
          <li><a href="#">Calculos</a></li>
          
          <li><a href="#">predictivo</a></li>
        </ul>
      </li>
      <li><a href="#">Obras</a></li>
      <li><a href="#">Instalaciones</a></li>
      <li class="dropdown">
        <a onclick="mostrar_divControlAdmon()" class="dropdown-toggle" data-toggle="dropdown">
          Administración <b class="caret"></b>
        </a>
        <ul class="dropdown-menu">
          <li><a href="#">legalización</a></li>
          <li><a href="#">gastos</a></li>
          <li><a href="#">porveedores</a></li>
          <li><a href="#">contratistas</a></li>
          <li><a href="#">RRHH</a></li>
         <li class="divider"></li>
        </ul>
      </li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          Logística <b class="caret"></b>
        </a>
        <ul class="dropdown-menu">
          <li><a href="logistica/mainBodega.php">Bodega</a></li>
          <li><a href="#">Empty</a></li>
        </ul>
      </li>
    </ul>
 
    
 
    <form class="navbar-form navbar-right" role="search">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Comentarios">
      </div>
      <button type="submit" class="btn btn-default">Enviar</button>
    </form>
  </div>
</nav>