<script type="text/javascript" src="js/proveedor/nuevo_prov.js"></script>
<script type="text/javascript" src="js/proveedor/validarut.js"></script>
<div align="center" class="row">
	<h4>Orden de compra</h4>
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
			<label class="control-label col-sm-2" for="giro">Giro</label>
			<div class="col-sm-10 col-offset-2">
				<input class="form-control" type="text" name="giro" id="giro" style="text-transform:uppercase" required>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="direccion">Dirección</label>
			<div class="col-sm-10 col-offset-2">
				<input class="form-control" type="text" name="direccion" id="direccion" style="text-transform:uppercase" required>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="region">Región</label>
			<div class="col-sm-10 col-offset-2">
				<select id="region" class="form-control" name="region">
		  			<option value="" selected>- Seleccione Región -</option>
		  			<option value="Arica y Parinacota">Arica y Parinacota</option>
			  		<option value="Tarapaca">Tarapacá</option>
			  		<option value="Antofagasta">Antofagasta</option>
			  		<option value="Atacama">Atacama</option>
			  		<option value="Coquimbo">Coquimbo</option>
		  			<option value="Valparaiso">Valparaiso</option>
		  			<option value="Metropolitana">Metropolitana</option>
			  		<option value="Ohiggins">O'Higgins</option>
			  		<option value="Maule">Maule</option>
			  		<option value="Biobio">Biobío</option>
			  		<option value="Araucania">Araucanía</option>
				  	<option value="Los Rios">Los Ríos</option>
			  		<option value="Los Lagos">Los Lagos</option>
				  	<option value="Aysen">Aysen</option>
				  	<option value="Magallanes">Magallanes</option>
				</select>
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
