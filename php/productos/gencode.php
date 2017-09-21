<?php
	include('../funciones/consultas.php');
?>
<script type="text/javascript" src="js/producto/gen_code.js"></script>
<div align="center" class="row">
	<h4>GENERADOR DE CÓDIGOS</h4>
	<hr>
</div>
<div class="row" align="center">
	<form action="#" id="nuevoCod" class="form-horizontal" name="nuevoP">
		<div class="form-group">
			<select id="prod" name="prod" class="form-control">
				<option value="" selected>- Seleccione Producto -</option>
				<?php consulta_codigos();?>
			</select>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="serial">Número/serial</label>
			<div class="col-sm-10 col-offset-2">
				<input class="form-control" type="text" name="serial" id="serial" maxlength="20" required>
			</div>
		</div>
		<div class="row" id="datos">
		<input type="hidden" name="valor" value="11">
		<div class="form-group">
			<button class="btn btn-success" type="submit" id="guardar">Guardar</button>
			<button class="btn btn-basic">Volver</button>
		</div>
	</form>
</div>
