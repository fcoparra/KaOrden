<?php 
	session_start();
	include '../funciones/consultas.php';
?>
<script type="text/javascript" src="js/solicitudes/entradas.js"></script>
<div align="center" class="row">
	<h4>DEVOLUCIÓN DE EQUIPOS Y MATERIALES</h4>
	<hr>
</div>
<div class="row col-sm-8 col-sm-offset-2" align="left">
	<form action="#" id="entrada" class="form-horizontal" name="entrada" autocomplete="on">
		<div class="form-group">
			<input class="form-control" type="text" name="solicitud" placeholder="Ingrese o Escanee Orden" id="orden_dev">
		</div>
		<div class="form-group">
			<button class="btn btn-success" type="button" id="cargar">Cargar</button>
			<button class="btn btn-basic" type="button" id="volver">Volver</button>
		</div>
	</form>
</div>
