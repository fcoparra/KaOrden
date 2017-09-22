<?php
	include('../funciones/consultas.php');
	$id			= $_GET['id'];
	$datos 		= modifica_proveedor($id);
?>
<script type="text/javascript" src="js/proveedor/nuevo_prov.js"></script>
<div align="center" class="row">
	<h4>MODIFICACION DE PROVEEDOR</h4>
	<hr>
</div>
<div class="row" align="center">
	<form action="#" id="modifiP" class="form-horizontal" name="modifiP">
		<div class="form-group">
			<label class="control-label col-sm-2" for="rut">Rut Proveedor</label>
			<div class="col-sm-10 col-offset-2">
				<input class="form-control" type="text" name="rut" id="rut" maxlength="20" value="<?php echo $datos['rut'];?>" required>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="nombre" >Nombre</label>
			<div class="col-sm-10 col-offset-2">
				<input class="form-control" type="text" name="nombre" id="nombre" style="text-transform:uppercase" onfocus="javascript:return Rut(document.nuevoP.rut.value)" value="<?php echo $datos['nombre'];?>" required>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="direccion">Dirección</label>
			<div class="col-sm-10 col-offset-2">
				<input class="form-control" type="text" name="direccion" id="direccion" style="text-transform:uppercase" value="<?php echo $datos['direccion'];?>" required>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="ciudad">Ciudad</label>
			<div class="col-sm-10 col-offset-2">
				<input class="form-control" type="text" id="ciudad" style="text-transform:uppercase" name="ciudad" value="<?php echo $datos['ciudad'];?>" >
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="telefono">Teléfono</label>
			<div class="col-sm-10 col-offset-2">
				<input class="form-control" type="tel" id="telefono" style="text-transform:uppercase" name="telefono" value="<?php echo $datos['telefono'];?>" >
			</div>
			<input type="hidden" name="valor" value="2">
		</div>
		<div class="form-group">
			<button class="btn btn-success" type="submit">Guardar</button>
			<button class="btn btn-basic">Volver</button>
		</div>
	</form>
</div>
