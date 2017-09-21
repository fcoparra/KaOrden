<?php 
	session_start();
	include '../funciones/consultas.php'; 
?>
<script type="text/javascript" src="js/solicitudes/salidas.js"></script>
<div align="center" class="row">
	<h4>SALIDA DE EQUIPOS Y MATERIALES</h4>
	<hr>
</div>
<div class="row col-sm-8 col-sm-offset-2" align="left">
	<form action="#" id="salida" class="form-horizontal" name="salida" autocomplete="on">
		<div class="form-group">
			<label class="control-label" for="fecha">Fecha</label>
			<?php echo date('d-m-Y H:m');?>
		</div>
		<div class="form-group">
			<label class="control-label" for="destino">Destino</label>
			<input type="text" class="form-control" placeholder="Ingrese destino" name="destino" required>
		</div>
		<div class="form-group">
			<label class="control-label" for="responsable">Responsable</label>
			<input type="text" class="form-control text-uppercase" placeholder="Quien retira" name="responsable" required>
		</div>
		<div class="form-group">
			<label class="control-label" for="guia">Guía Asociada</label>
			<input type="number" class="form-control" placeholder="Guía asociada" name="guia">
		</div>
		<div class="form-group" id="manual">
			<label class="control-label" for="tipo">Materiales y Equipos</label><br>
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
			<label class="control-label" for="comentarios">Comentarios</label>
			<textarea class="form-control" name="comentarios"></textarea>
		</div>
		<div class="form-group">
			<input type="hidden" name="usuario" value="<?php echo $_SESSION['usuario'];?>">
			<input type="hidden" name="valor" value="10">
			<button class="btn btn-success" type="submit" id="guardar">Guardar</button>
			<button class="btn btn-basic" type="button" id="volver">Volver</button>
		</div>
	</form>
</div>
