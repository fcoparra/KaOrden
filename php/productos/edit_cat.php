<?php
	include('../funciones/consultas.php');
	$id			= $_GET['id'];
	$datos 		= modifica_categoria($id);
?>	
<script type="text/javascript" src="js/producto/nueva_cat.js"></script>
<div align="center" class="row">
	<h4>MODIFICACION DE CATEGORIA</h4>
	<hr>
</div>
<div class="row" align="center">
	<form action="#" id="modifiC" class="form-horizontal" name="modifiC">
		<div class="form-group">
			<label class="control-label col-sm-2" for="nombre" >Nombre</label>
			<div class="col-sm-10 col-offset-2">
				<input class="form-control" type="text" name="nombre" id="nombre" value="<?php echo $datos['nombre'];?>" required>
			</div>
		</div>
		<div class="form-group">
			<input type="hidden" value="<?php echo $id;?>" name="id">
			<input type="hidden" value="6" name="valor">
			<button class="btn btn-success" type="submit">Guardar</button>
			<button class="btn btn-basic">Volver</button>
		</div>
	</form>
</div>