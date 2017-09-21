<?php 
	include '../funciones/consultas.php';
	$id = $_REQUEST['id'];
?>

<div class="modal-content">
	<div class="modal-header">
  		<button type="button" class="close" data-dismiss="modal">&times;</button>
  		<h4 class="modal-title">SOLICITUDO DE MATERIALES</h4>
	</div>
	<div class="modal-body" align="left">
  		<?php detalle_solicitud($id); ?>
  		<div class="form-group">
  			<?php detalle_pedido($id); ?>
  		</div>
	</div>
	<div class="modal-footer">
		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	</div>
	</form>
	</div>