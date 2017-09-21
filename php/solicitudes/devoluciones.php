<?php 
	session_start();
	include '../funciones/consultas.php';
	$datos = datos_solicitud($_GET['id']);
?>
<script type="text/javascript" src="js/solicitudes/entradas.js"></script>
<div align="center" class="row">
	<h4>DEVOLUCIÓN DE EQUIPOS Y MATERIALES</h4>
	<hr>
</div>
<div class="row col-sm-8 col-sm-offset-2" align="left">
	<form action="#" id="entrada" class="form-horizontal" name="entrada" autocomplete="on">
		<div class="form-group">
			<label class="control-label" for="fecha">Fecha</label>
			<?php echo date('d-m-Y H:m');?>
		</div>
		<div class="form-group">
			<label class="control-label" for="destino">Destino</label>
			<?php echo $datos['destino']; ?>
		</div>
		<div class="form-group">
			<label class="control-label" for="responsable">Responsable</label>
			<?php echo $datos['responsable']; ?>
		</div>
		<div class="form-group">
			<label class="control-label" for="guia">Guía Asociada</label>
			<?php echo $datos['guia']; ?>
		</div>
		<div class="form-group">
			<label class="control-label" for="devuelto">Devuelto por</label>
			<input type="text" class="form-control text-uppercase" placeholder="Quien devuelve" name="devuelto" required>
		</div>
		<div class="form-group">
			<hr>
			<table class="table table-striped" id="detalle">
				<thead>
				<tr class="info">
					<th>Código - Nombre</th>
					<th>Cantidad</th>
				</tr>
				</thead>
				<tbody>
					<?php detalle_dev($_GET['id']);?>
				</tbody>
			</table>
		</div>
		<div class="form-group">
			<label class="control-label" for="comentarios">Comentarios</label>
			<textarea class="form-control" name="comentarios"></textarea>
		</div>
		<div class="form-group">
			<input type="hidden" name="usuario" value="<?php echo $_SESSION['usuario'];?>">
			<input type="hidden" name="solicitud" value="<?php echo $_GET['id'];?>">
			<input type="hidden" name="valor" value="11">
			<button class="btn btn-success" type="submit" id="guardar">Guardar</button>
			<button class="btn btn-basic" type="button" id="volver">Volver</button>
		</div>
	</form>
</div>
