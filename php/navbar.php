<style type="text/css">
.navbar {
  background-color: #05335b;
}
.navbar .navbar-brand {
  color: #a5b0f3;
}
.navbar .navbar-brand:hover,
.navbar .navbar-brand:focus {
  color: #dbe0ed;
}
.navbar .navbar-text {
  color: #a5b0f3;
}
.navbar .navbar-text a {
  color: #dbe0ed;
}
.navbar .navbar-text a:hover,
.navbar .navbar-text a:focus {
  color: #dbe0ed; 
}
.navbar .navbar-nav .nav-link {
  color: #a5b0f3;
  border-radius: .25rem;
  margin: 0 0.25em;
}
.navbar .navbar-nav .nav-link:not(.disabled):hover,
.navbar .navbar-nav .nav-link:not(.disabled):focus {
  color: #dbe0ed;
}
.navbar .navbar-nav .nav-item.active .nav-link,
.navbar .navbar-nav .nav-item.active .nav-link:hover,
.navbar .navbar-nav .nav-item.active .nav-link:focus,
.navbar .navbar-nav .nav-item.show .nav-link,
.navbar .navbar-nav .nav-item.show .nav-link:hover,
.navbar .navbar-nav .nav-item.show .nav-link:focus {
  color: #dbe0ed;
  background-color: #0d5a91;
}
.navbar .navbar-toggle {
  border-color: #0d5a91;
}
.navbar .navbar-toggle:hover,
.navbar .navbar-toggle:focus {
  background-color: #0d5a91;
}
.navbar .navbar-toggle .navbar-toggler-icon {
  color: #a5b0f3;
}
.navbar .navbar-collapse,
.navbar .navbar-form {
  border-color: #a5b0f3;
}
.navbar .navbar-link {
  color: #a5b0f3;
}
.navbar .navbar-link:hover {
  color: #dbe0ed;
}

@media (max-width: 575px) {
  .navbar-expand-sm .navbar-nav .show .dropdown-menu .dropdown-item {
    color: #a5b0f3;
  }
  .navbar-expand-sm .navbar-nav .show .dropdown-menu .dropdown-item:hover,
  .navbar-expand-sm .navbar-nav .show .dropdown-menu .dropdown-item:focus {
    color: #dbe0ed;
  }
  .navbar-expand-sm .navbar-nav .show .dropdown-menu .dropdown-item.active {
    color: #dbe0ed;
    background-color: #0d5a91;
  }
}

@media (max-width: 767px) {
  .navbar-expand-md .navbar-nav .show .dropdown-menu .dropdown-item {
    color: #a5b0f3;
  }
  .navbar-expand-md .navbar-nav .show .dropdown-menu .dropdown-item:hover,
  .navbar-expand-md .navbar-nav .show .dropdown-menu .dropdown-item:focus {
    color: #dbe0ed;
  }
  .navbar-expand-md .navbar-nav .show .dropdown-menu .dropdown-item.active {
    color: #dbe0ed;
    background-color: #0d5a91;
  }
}

@media (max-width: 991px) {
  .navbar-expand-lg .navbar-nav .show .dropdown-menu .dropdown-item {
    color: #a5b0f3;
  }
  .navbar-expand-lg .navbar-nav .show .dropdown-menu .dropdown-item:hover,
  .navbar-expand-lg .navbar-nav .show .dropdown-menu .dropdown-item:focus {
    color: #dbe0ed;
  }
  .navbar-expand-lg .navbar-nav .show .dropdown-menu .dropdown-item.active {
    color: #dbe0ed;
    background-color: #0d5a91;
  }
}

@media (max-width: 1199px) {
  .navbar-expand-xl .navbar-nav .show .dropdown-menu .dropdown-item {
    color: #a5b0f3;
  }
  .navbar-expand-xl .navbar-nav .show .dropdown-menu .dropdown-item:hover,
  .navbar-expand-xl .navbar-nav .show .dropdown-menu .dropdown-item:focus {
    color: #dbe0ed;
  }
  .navbar-expand-xl .navbar-nav .show .dropdown-menu .dropdown-item.active {
    color: #dbe0ed;
    background-color: #0d5a91;
  }
}

.navbar-expand .navbar-nav .show .dropdown-menu .dropdown-item {
  color: #a5b0f3;
}
.navbar-expand .navbar-nav .show .dropdown-menu .dropdown-item:hover,
.navbar-expand .navbar-nav .show .dropdown-menu .dropdown-item:focus {
  color: #dbe0ed;
}
.navbar-expand .navbar-nav .show .dropdown-menu .dropdown-item.active {
  color: #dbe0ed;
  background-color: #0d5a91;
}
</style>

<nav class="navbar navbar-default" role="navigation">
<div class="container">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="./"><b>Sistema Delegacional</b></a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="inicio.php">Inicio</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Habitantes <span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="#">Registro de Habitantes</a></li>
					<li><a href="ver.php">Consulta de Habitantes</a></li>
					<li role="separator" class="divider"></li>
					<li class="dropdown-header">Más Opciones</li>
					<li><a href="ver_cargos.php">Cargos</a></li>
					<li><a href="ver_cooperaciones.php">Cooperaciones</a></li>
					<li><a href="ver_reuniones.php">Reuniones</a></li>
					<li><a href="ver_faenas.php">Faenas</a></li>
					<li><a href="lista_servicios.php">Servicios</a></li>
					<li><a href="">Solicitudes</a></li>
					<li><a href="lista_multas.php">Multas</a></li>
					<li><a href=""></a></li>
					<li><a href="registro_ordendia.php">Orden del Dia</a></li>
				</ul>
				
			<li><a href="#about">Tesoreria</a></li>
			<li><a href="inventario.php">Inventario</a></li>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="ver_normateca.php">Normateca</a></li>
            <li><a href="ver_reglamentos.php">Reglamento</a></li>
			<li><a href="lista_usuarios.php">Configuracion</a></li>
            <li class="active"><a href="">Salir <span class="sr-only"></span></a></li>
          </ul>
        </div>
  
<form class="navbar-form navbar-right" role="search" action="./buscar.php">
      <div class="form-group">
        <input type="text" name="s" class="form-control" placeholder="Buscar">
      </div>
      <button type="submit" class="btn btn-default">&nbsp;<i class="glyphicon glyphicon-search"></i>&nbsp;</button>
    </form>
  </div><!-- /.navbar-collapse -->
</div>
</nav>