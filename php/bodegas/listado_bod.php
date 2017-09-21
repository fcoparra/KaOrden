<?php
	include('../funciones/consultas.php')
?>	
<script type="text/javascript" src="js/bodega/listadoBod.js"></script>
<div align="center" class="row">
	<h4>LISTADO DE BODEGAS</h4>
	<hr>
</div>
<div align="right" class="row">
	<button class="btn btn-basic" onclick="volver();">Volver</button>
</div>
<hr>
<div align="center" class="row">
	<table align="center" class="table table-striped table-hover table-bordered">
		<thead>
			<tr class="info">
				<th width="20%">Código</th>
				<th width="15%">Nombre</th>
				<th width="25%">Descripción</th>
				<th width="20%">Editar</th>
			</tr>
		</thead>
		<tbody id="provSearch">
			<?php
				listado_bod();
			?>
		</tbody>
	</table>
</div>