<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bienvenido!</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
	<div class="container">
    <div class="row">
        <div class="col-md-offset-5 col-md-3">
            <div class="form-login">
              <h4>Bienvenido</h4>
              <input type="text" id="userName" class="form-control input-sm chat-input" placeholder="usuario" />
              </br>
              <input type="password" id="userPassword" class="form-control input-sm chat-input" placeholder="contraseña" />
              </br>
              <div class="wrapper">
              <span class="group-btn">     
                <a href="#" class="btn btn-primary btn-md" id="ingresa">Ingresar <i class="fa fa-sign-in"></i></a>
              </span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="alert alert-warning alertas" style="display: none;">
            Usuario o Contraseña incorrecto
          </div>
          <div class="alert alert-warning alertas" style="display: none;" id="alert">
            Debe ingresar un usuario y una contraseña
          </div>
        </div>
    </div>
  </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/login/login.js"></script>
  </body>
</html>