<?php
	include('../funciones/consultas.php')
?>
<script type="text/javascript" src="js/solicitudes/listadoSal.js"></script>
<div align="center" class="row">
	<h4>INFORME DE DEVOLICIÓN DE MATERIALES</h4>
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
				<th>Fecha</th>
				<th>Responsable</th>
				<th>Usuario</th>
				<th>Estado</th>
				<th>Detalle</th>
			</tr>
		</thead>
		<tbody>
			<?php
				listado_salida();
			?>
		</tbody>
	</table>
	<!-- Modal -->
  	<div class="modal fade" id="detalle" role="dialog">
    	<div class="modal-dialog">
      		<!-- Modal content-->
    	</div>
  	</div>
</div>