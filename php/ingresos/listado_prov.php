<?php
	include('../funciones/consultas.php')
?>	
<script type="text/javascript" src="js/jquery.quicksearch.js"></script>
<script type="text/javascript" src="js/proveedor/listadoProv.js"></script>
<div align="center" class="row">
	<h4>LISTADO DE PROVEEDORES</h4>
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
				<th width="20%">Nombre</th>
				<th width="15%">Rut</th>
				<th width="20%">Giro</th>
				<th width="25%">Dirección</th>
				<th width="20%">Editar</th>
			</tr>
		</thead>
		<tbody id="provSearch">
			<?php
				listado_prov();
			?>
		</tbody>
	</table>
</div>