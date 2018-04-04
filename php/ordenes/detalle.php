<?php 
  include '../funciones/consultas.php';
  $id     = $_GET['id'];
?>
  <link href="../../css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../../css/font-awesome.min.css">
  <script type="text/javascript" src="../../js/jquery.min.js"></script>
  <script type="text/javascript" src="../../js/jquery-barcode.js"></script>
  <div class="container">
    <table width="100%">
      <tr>
        <th width="60%">
          <table class="">
            <thead>
              <tr>
                <th>Kafra Construcciones S.A.</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Giro: Ejecución de Obras de Ingeniería y Construcción de Obras Civiles</td>
              </tr>
              <tr>
                <td>El Parrón Lote 9-B, Maule</td>
              </tr>
              <tr>
                <td>Fono: 071-2616562 / 071- 2616563 &nbsp;Celular: +56 9 93492519</td>
              </tr>
            </tbody>
          </table>
        </th>
        <th width="40%">
          <div class="row text-center">
            <img class="img-fluid d-block mx-auto" src="../../imagenes/Kafra.png" width="100"><br>
            <p class="text-center">RUT: 99.558860-9
            <br>ORDEN DE COMPRA Nº: <?php echo $id; ?></p>
          </div>
        </th>
      </tr>
    </table>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <?php header_orden($id); ?>
      </div>
    </div>
  </div>
  <hr>
  <div class="container">
    <div class="row">
      <table class="table table table-bordered">
        <thead>
          <tr>
            <th>Cantidad</th>
            <th class="">Unidad</th>
            <th class="w-25">Descripción</th>
            <th>V. Unitario</th>
            <th>V. Total</th>
          </tr>
        </thead>
        <tbody>
          <?php echo body_orden($id);?>
        </tbody>
      </table>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <?php echo footer_orden($id);?>
    </div>
  </div>
  <div class="container" align="center">
    <div class="row">
      <div align="center" id="barcode">
    </div>
    </div>
  </div>
  <div class="container" align="center">
    <div class="row">
      <div class="col-md-12">
        <a href="#" class="btn btn-outline-primary px-5 mx-3" onclick="printpage();">Imprimir</a>
        <a href="#" class="btn btn-primary px-5 mx-3">Cerrar</a>
      </div>
    </div>
  </div>
<script type="text/javascript">
  $(document).ready(function(){
    $('#barcode').barcode("<?php echo $id;?>", "code128",{barWidth:3, barHeight:80});
  })
  function printpage() {
        $('.btn').css('visibility','hidden')
        window.print()
        $('.btn').css('visibility','visible')
    }

</script>