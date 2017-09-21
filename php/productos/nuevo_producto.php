<?php
	include('../funciones/consultas.php')
?>
<script type="text/javascript" src="js/producto/nuevo_prod.js"></script>
<div align="center" class="row">
	<h4>INGRESO DE PRODUCTO</h4>
	<hr>
</div>
<div class="row" align="center">
	<form action="#" id="nuevoP" class="form-horizontal" name="nuevoP">
		<div class="form-group">
			<label class="control-label col-sm-2" for="serial">Número/serial</label>
			<div class="col-sm-10 col-offset-2">
				<input class="form-control" type="text" name="serial" id="serial" maxlength="20" required>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="nombre" >Nombre</label>
			<div class="col-sm-10 col-offset-2">
				<input class="form-control" type="text" name="nombre" id="nombre" style="text-transform:uppercase" required>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="descrip">Descripción</label>
			<div class="col-sm-10 col-offset-2">
				<input class="form-control" type="text" name="descrip" id="descrip" style="text-transform:uppercase" required>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="marca">Marca</label>
			<div class="col-sm-10 col-offset-2">
				<input class="form-control" type="text" name="marca" id="critico" style="text-transform:uppercase">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="cat">Categoría</label>
			<div class="col-sm-10 col-offset-2">
				<select id="cat" class="form-control" name="cat">
		  			<option value="" selected>- Seleccione Categoría -</option>
		  			<?php categorias();?>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="unid">Unidad</label>
			<div class="col-sm-10 col-offset-2">
				<input class="form-control" type="text" name="unid" id="unid" style="text-transform:uppercase" required>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="critico">Stock Crítico</label>
			<div class="col-sm-10 col-offset-2">
				<input class="form-control" type="number" name="critico" id="marca" style="text-transform:uppercase" required>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="critico">Bodega destino</label>
			<div class="col-sm-10 col-offset-2">
				<select id="bod" class="form-control" name="bod">
					<option value="" selected>- Seleccione Bodega -</option>
					<?php echo listar_bod(0); ?>
				</select>
			</div>
		</div>
		<input type="hidden" name="valor" value="3">
		<div class="form-group">
			<button class="btn btn-success" type="submit" id="guardar">Guardar</button>
			<button class="btn btn-basic">Volver</button>
		</div>
	</form>
</div>
