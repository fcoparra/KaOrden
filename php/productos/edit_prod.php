<?php
	include('../funciones/consultas.php');
	$id			= $_GET['id'];
	$datos 		= modificar_producto($id);
?>	
<script type="text/javascript" src="js/producto/nuevo_prod.js"></script>
<div align="center" class="row">
	<h4>MODIFICACION DE PRODUCTO</h4>
	<hr>
</div>
<div class="row" align="center">
	<form action="#" id="modifiP" class="form-horizontal" name="modifiP">
		<div class="form-group">
			<label class="control-label col-sm-2" for="serial">Número/serial</label>
			<div class="col-sm-10 col-offset-2">
				<input class="form-control" type="text" name="serial" id="serial" maxlength="20" value="<?echo $datos['codigo'];?>" required>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="nombre" >Nombre</label>
			<div class="col-sm-10 col-offset-2">
				<input class="form-control" type="text" name="nombre" id="nombre" style="text-transform:uppercase" value="<?echo $datos['nombre'];?>" required>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="descrip">Descripción</label>
			<div class="col-sm-10 col-offset-2">
				<input class="form-control" type="text" name="descrip" id="descrip" style="text-transform:uppercase" value="<?echo $datos['descripcion'];?>" required>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="marca">Marca</label>
			<div class="col-sm-10 col-offset-2">
				<input class="form-control" type="text" name="marca" id="marca" style="text-transform:uppercase" value="<?echo $datos['marca'];?>" required>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="cat">Categoría</label>
			<div class="col-sm-10 col-offset-2">
				<select id="cat" class="form-control" name="cat">
		  			<option value="" selected>- Seleccione Categoría -</option>
		  			<?php categoriasM($datos['categoria_idcategoria']);?>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="unid">Unidad</label>
			<div class="col-sm-10 col-offset-2">
				<input class="form-control" type="text" name="unid" id="unid" style="text-transform:uppercase" value="<?echo $datos['unidad'];?>" required>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="critico">Stock Crítico</label>
			<div class="col-sm-10 col-offset-2">
				<input class="form-control" type="number" name="critico" id="critico" style="text-transform:uppercase" value="<?echo $datos['critico'];?>" required>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="critico">Bodega destino</label>
			<div class="col-sm-10 col-offset-2">
				<select id="bod" class="form-control" name="bod">
					<?php echo listar_bod($datos['bodega_idbodega']); ?>
				</select>
			</div>
		</div>
		<input type="hidden" name="id" value="<?php echo $datos['idproducto'];?>">
		<input type="hidden" name="valor" value="4">
		<div class="form-group">
			<button class="btn btn-success" type="submit" id="guardar">Guardar</button>
			<button class="btn btn-basic">Volver</button>
		</div>
	</form>
</div>
