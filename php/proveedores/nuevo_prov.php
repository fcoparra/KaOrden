<script type="text/javascript" src="js/proveedor/nuevo_prov.js"></script>
<script type="text/javascript" src="js/proveedor/validarut.js"></script>
<div align="center" class="row">
	<h4>INGRESO DE PROVEEDORES</h4>
	<hr>
</div>
<div class="row" align="center">
	<form action="#" id="nuevoP" class="form-horizontal" name="nuevoP" autocomplete="on">
		<div class="form-group">
			<label class="control-label col-sm-2" for="rut">Rut Proveedor</label>
			<div class="col-sm-10 col-offset-2">
				<input class="form-control" type="text" name="rut" id="rut" maxlength="20" required>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="nombre" >Nombre</label>
			<div class="col-sm-10 col-offset-2">
				<input class="form-control" type="text" name="nombre" id="nombre" style="text-transform:uppercase" onfocus="javascript:return Rut(document.nuevoP.rut.value)" required>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="direccion">Dirección</label>
			<div class="col-sm-10 col-offset-2">
				<input class="form-control" type="text" name="direccion" id="direccion" style="text-transform:uppercase" required>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="ciudad">Ciudad</label>
			<div class="col-sm-10 col-offset-2">
				<input class="form-control" type="text" id="ciudad" style="text-transform:uppercase" name="ciudad">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="telefono">Teléfono</label>
			<div class="col-sm-10 col-offset-2">
				<input class="form-control" type="tel" id="telefono" style="text-transform:uppercase" name="telefono">
			</div>
			<input type="hidden" name="valor" value="1">
		</div>
		<div class="form-group">
			<button class="btn btn-success" type="submit" id="guardar">Guardar</button>
			<button class="btn btn-basic">Volver</button>
		</div>
	</form>
</div>
