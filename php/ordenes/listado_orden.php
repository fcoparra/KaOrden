<?php
	include('../funciones/consultas.php')
?>	
<script type="text/javascript" src="js/jquery.quicksearch.js"></script>
<script type="text/javascript" src="js/ordenes/listadoOrden.js"></script>
<div align="center" class="row">
	<h4>LISTADO DE ORDENES DE COMRPA</h4>
	<hr>
</div>
<div align="right" class="row">
	<button onclick="abrir();" class="btn btn-warning">Exportar</button>
	<button class="btn btn-basic" onclick="volver();">Volver</button>
</div>
<hr>
<div align="center" class="row">
	<table align="center" class="table table-striped table-hover table-bordered">
		<thead>
			<tr class="info">
				<th width="25%">Nº</th>
				<th width="25%">Fecha</th>
				<th width="25%">Proveedor</th>
				<th width="25%">Ver</th>
			</tr>
		</thead>
		<tbody id="provSearch">
			<?php
				listado_orden();
			?>
		</tbody>
	</table>
</div>