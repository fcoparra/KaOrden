<?php 
	session_start();
	include '../funciones/consultas.php'; 
?>
<script type="text/javascript" src="js/ingresos/nuevo_ing.js"></script>
<div align="center" class="row">
	<h4>INGRESO DE PRODUCTOS</h4>
	<hr>
</div>
<div class="row col-sm-8 col-sm-offset-2" align="left">
	<form action="#" id="nuevoI" class="form-horizontal" name="nuevoI" autocomplete="on">
		<div class="form-group">
			<label class="control-label" for="tipo">Tipo de Ingreso</label>
			<select name="tipo" id="tipo" class="form-control">
				<option value="manual">Manual</option>
				<option value="oc">Por OC</option>
			</select>
		</div>
		<div class="form-group" id="oc" style="display: none;">
			Orden de compra
		</div>
		<div class="form-group" id="manual">
			<label class="control-label" for="tipo">Productos</label>
			<div class="col-sm-6">
				<input type="text" placeholder="Ingrese / Escanee Código" name="serial" id="serial" class="form-control">
				<div id="datos"></div>
			</div>
			<div class="col-sm-2">
				<input type="number" class="form-control" placeholder="Cantidad" id="cant" disabled>
			</div>
			<div class="col-sm-2">
				<button class="btn btn-primary" type="button" onclick="agregar();" disabled>Añadir</button>
			</div>
		</div>
		<div class="form-group">
			<hr>
			<table class="table table-striped" id="detalle">
				<thead>
				<tr class="info">
					<th>Código - Nombre</th>
					<th>Cantidad</th>
					<th>Eliminar</th>
				</tr>
				</thead>
				<tbody>
					
				</tbody>
			</table>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="comentarios">Comentarios</label>
			<div class="col-sm-10 col-sm-offset-2">
				<textarea class="form-control" name="comentarios"></textarea>
			</div>
		</div>
		<div class="form-group" align="center">
			<input type="hidden" name="usuario" value="<?php echo $_SESSION['usuario'];?>">
			<input type="hidden" name="valor" value="9">
			<button class="btn btn-success" type="submit" id="guardar">Guardar</button>
			<button class="btn btn-basic">Volver</button>
		</div>
	</form>
</div>
