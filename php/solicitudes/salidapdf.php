<?php 
	include '../funciones/consultas.php';
	$id 		= $_GET['id'];
?>
		<link href="../../css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="../../css/font-awesome.min.css">
    <script type="text/javascript" src="../../js/jquery.min.js"></script>
    <script type="text/javascript" src="../../js/jquery-barcode.js"></script>
		<div align="center" class="container col-sm-6 col-sm-offset-3">
  			<h4>SOLICITUDO DE MATERIALES Nº <?php echo $id; ?></h4>
		</div>
		<div align="left" class="col-sm-6 col-sm-offset-3"><?php detalle_solicitud($id); ?></div>
  		<div align="left" class="col-sm-6 col-sm-offset-3"><?php detalle_pedido($id); ?></div>
  		<div align="Right" class="col-sm-6 col-sm-offset-3">
  			<br><br><br>
  			<p> Firma y nombre de quien retira</p>
  		</div>
  		<div align="right" class="col-sm-offset-3 col-sm-6">
  			<button class="btn btn-success" onclick="window.print();"><i class="fa fa-print fa-2x" aria-hidden="true"></i> Imprimir</button>
  		</div>
      <div align="center" id="barcode" class="col-sm-offset-3 col-sm-6">
      </div>
<script type="text/javascript">
  $(document).ready(function(){
    $('#barcode').barcode("<?php echo $id;?>", "code128",{barWidth:2, barHeight:30});
  })
</script>