<?php
	include('../funciones/consultas.php');
	$id			= $_GET['id'];
	$datos 		= modificar_bodega($id);
?>	
<script type="text/javascript" src="js/bodega/nueva_bod.js"></script>
<div align="center" class="row">
	<h4>MODIFICACION DE BODEGA</h4>
	<hr>
</div>
<div class="row" align="center">
	<form action="#" id="modifiB" class="form-horizontal" name="modifiB">
		<div class="form-group">
			<label class="control-label col-sm-2" for="nombre" >Nombre</label>
			<div class="col-sm-10 col-offset-2">
				<input class="form-control" type="text" name="nombre" id="nombre" value="<?php echo $datos['nombre'];?>" required>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="descrip" >Descripción</label>
			<div class="col-sm-10 col-offset-2">
				<textarea class="form-control" name="descrip" id="descrip"><?php echo $datos['descripcion'];?></textarea>
			</div>
		</div>
		<div class="form-group">
			<input type="hidden" value="<?php echo $id;?>" name="id">
			<input type="hidden" value="8" name="valor">
			<button class="btn btn-success" type="submit">Guardar</button>
			<button class="btn btn-basic">Volver</button>
		</div>
	</form>
</div>