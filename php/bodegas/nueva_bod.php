<script type="text/javascript" src="js/bodega/nueva_bod.js"></script>
<div align="center" class="row">
	<h4>INGRESO DE BODEGA</h4>
	<hr>
</div>
<div class="row" align="center">
	<form action="#" id="nuevaB" class="form-horizontal" name="nuevaB">
		<div class="form-group">
			<label class="control-label col-sm-2" for="nombre" >Nombre</label>
			<div class="col-sm-10 col-offset-2">
				<input class="form-control" type="text" name="nombre" id="nombre" required>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="descrip" >Descripción</label>
			<div class="col-sm-10 col-offset-2">
				<textarea class="form-control" type="text" name="descrip" id="descrip"></textarea> 
			</div>
		</div>
		<input type="hidden" name="valor" value="7">
		<div class="form-group">
			<button class="btn btn-success" type="submit" id="guardar">Guardar</button>
			<button class="btn btn-basic">Volver</button>
		</div>
	</form>
</div>
