<?php 
  function  muestramenu(){
  ?>
<nav class="navbar">
	<div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span> 
    </button>
    <a  class="navbar-brand" href="#">KAINV</a>
  </div>
  <div class="collapse navbar-collapse" id="myNavbar">
		<ul class="nav navbar-nav">
    <?php if($_SESSION['perfil'] == 1){ ?>
  			<li class="dropdown">
    			<a  class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-users" aria-hidden="true"></i>Proveedores
    			<span class="caret"></span></a>
    			<ul class="dropdown-menu">
              <li><a class="ir_a" href="php/proveedores/nuevo_prov.php">Ingreso de proveedores</a></li>
      				<li><a class="ir_a" href="php/proveedores/listado_prov.php">Listado de proveedores</a></li>
    			</ul>
  			</li>
  			<li class="dropdown">
    			<a  class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-cubes" aria-hidden="true"></i>Productos
          <span class="caret"></span></a>
    			<ul class="dropdown-menu">
      				<li><a class="ir_a" href="php/productos/nuevo_producto.php">Ingresar producto</a></li>
      				<li><a class="ir_a" href="php/productos/listado_prod.php">Listado de productos</a></li>
              <li><a class="ir_a" href="php/productos/nueva_cat.php">Ingresar categoría</a></li>
              <li><a class="ir_a" href="php/productos/listado_cat.php">Listado de categorías</a></li>
    			</ul>
  			</li>
        <li class="dropdown">
          <a  class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-plus-square" aria-hidden="true"></i>Ingresos
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
              <li><a  href="#">Ingreso de órdenes de compra</a></li>
              <li><a  href="#">Listado de órdenes de compra</a></li>
              <li><a class="ir_a" href="php/ingresos/nuevo_ingreso.php">Ingreso de Productos</a></li>
          </ul>
        </li>
    <?php } ?>
        <li class="dropdown">
          <a  class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-minus-square" aria-hidden="true"></i>Salida de Productos
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
              <li><a class="ir_a" href="php/solicitudes/salidas.php">Registro de salida</a></li>
              <li><a class="ir_a" href="php/solicitudes/listado_salidas.php">Listado de salida de productos</a></li>
              <li><a class="ir_a" href="php/solicitudes/dev_manual.php">Ingresar Devolución</a></li>
          </ul>
        </li>
    <?php if($_SESSION['perfil'] == 1){ ?>
  			<li class="dropdown">
    			<a  class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-wrench" aria-hidden="true"></i>Bodegas
    			<span class="caret"></span></a>
    			<ul class="dropdown-menu">
      				<li><a class="ir_a" href="php/bodegas/nueva_bod.php">Ingreso de bodegas</a></li>
      				<li><a class="ir_a" href="php/bodegas/listado_bod.php">Listado de bodegas</a></li>
    			</ul>
  			</li>
    <?php } ?>
  <!--      <li class="dropdown">
          <a  class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-list-alt" aria-hidden="true"></i>Reportes
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
              <li><a  href="#">Reclamos clientes</a></li>
              <li><a  href="#">Otras no conformidades</a></li>
              <li><a  href="#">Productos no conformes</a></li>
          </ul>
        </li>-->
		  </ul>
		  <ul class="nav navbar-nav navbar-right">
      	<li><a  href="#">Bienvenido: <?php echo $_SESSION['usuario'];?></a></li>
      	<li><a  href="#" onclick="fuera();"><span class="fa fa-sign-out"></span> Cerrar Sesión</a></li>
      </ul>
		</div>
	</nav>
  <?php 
}
?>