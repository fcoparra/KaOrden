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
              <li><a class="ir_a" href="php/ordenes/nueva_orden.php">Ingreso de órdenes de compra</a></li>
              <li><a  class="ir_a" href="php/ordenes/listado_orden.php">Listado de órdenes de compra</a></li>
          </ul>
        </li>
  			<li class="dropdown">
    			<a  class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-wrench" aria-hidden="true"></i>Bodegas
    			<span class="caret"></span></a>
    			<ul class="dropdown-menu">
      				<li><a class="ir_a" href="php/bodegas/nueva_bod.php">Ingreso de bodegas</a></li>
      				<li><a class="ir_a" href="php/bodegas/listado_bod.php">Listado de bodegas</a></li>
    			</ul>
  			</li>
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
