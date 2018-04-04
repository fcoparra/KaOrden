<?php
	session_start();
	include '../funciones/consultas.php';
?>
<link href="css/jquery-ui.css" rel="stylesheet">
<script type="text/javascript" src="js/jquery-ui.js"></script>
<script type="text/javascript" src="js/ordenes/nueva_orden.js"></script>
<div align="center" class="row">
	<h4>INGRESO DE ORDEN DE COMPRA</h4>
	<hr>
</div>
<div class="row col-sm-8 col-sm-offset-2" align="left">
	<form action="#" id="orden" class="form-horizontal" name="orden" autocomplete="on">
		<div class="form-group">
			<label class="control-label" for="fecha">Fecha</label>
			<?php echo date('d-m-Y');?>
		</div>
		<div class="form-group">
			<label class="control-label" for="proveedor">Proveedor</label>
			<input type="text" class="form-control" placeholder="" name="proveedor" id="proveedor" required>
		</div>
		<div class="form-group" id="datosP">

		</div>
		<div class="form-group" id="manual">
			<label class="control-label" for="tipo">Materiales y Equipos</label><br>
			<div class="col-sm-6">
				<input type="text" name="producto" id="producto" class="form-control">
			</div>
			<div class="col-sm-2">
				<input type="number" class="form-control" placeholder="Cantidad" id="cant">
			</div>
			<div class="col-sm-2">
				<input type="number" class="form-control" placeholder="Precio" id="precio">
			</div>
			<div class="col-sm-2">
				<button class="btn btn-primary" type="button" id="agregarp">Añadir</button>
			</div>
		</div>
		<div class="form-group" id="datosProd"></div>
		<div class="form-group">
			<hr>
			<table class="table table-striped" id="detalle">
				<thead>
				<tr class="info">
					<th>Código - Nombre</th>
					<th>Cantidad</th>
					<th>Precio U</th>
					<th>Total</th>
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
			<div class="col-sm-8">
			</div>
			<div class="col-sm-4">
				<table class="table">
					<tr>
						<th class="info">Sub Total</th>
						<td><input type="number" id="subtotal" name="subtotal" readonly></td>
					</tr>
					<tr>
						<th class="info">I.V.A.</th>
						<td><input type="number" id="iva" name="iva" readonly></td>
					</tr>
					<tr>
						<th class="info">Total</th>
						<td><input type="number" id="total_orden" name="total_orden" readonly></td>
					</tr>
				</table>
			</div>
		</div>
		<div class="form-group">
			<input type="hidden" name="usuario" value="<?php echo $_SESSION['usuario'];?>">
			<input type="hidden" name="valor" value="12">
			<button class="btn btn-success" type="submit" id="guardar">Guardar</button>
			<button class="btn btn-basic" type="button" id="volver">Volver</button>
		</div>
	</form>
</div>
