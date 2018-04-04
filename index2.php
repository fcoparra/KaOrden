<?php session_start();
    if(isset($_SESSION['usuario'])){
?>
<?php include "php/menu/menu.php";?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Sistema de control de inventarios</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/menu/menu.js"></script>
    <!-- RECURSOS HUMANOS -->
    <!-- REVISION POR LA DIRECCION -->
    <!-- POLITICAS DE LA EMPRESA -->
  </head>
  <body>
  	<?php muestramenu() ?>
    <div class="col-md-1 col-sm-1"></div>
    <div class="col-md-10 col-sm-10" id="main"></div>
    <div class="col-md-1 col-sm-1"></div>
  </body>
</html>
<?php
    }else{
?>
    <script type="text/javascript">
        alert("Acceso denegado");
        window.location.href = "index.php";
    </script>
<?php
    }
?>