<?php
  include('../conectar.php');
  if(isset($_POST['valor'])){
    switch ($_POST['valor']) {
      case '1':
        # code...
        insert_prov();
        break;
      case '2':
        # code...
        modif_prov();
        break;
      case '3':
        # code...
        insert_prod();
        break;
      case '4':
        # code...
        modif_prod();
        break;
      case '5':
        # code...
        insert_cat();
        break;
      case '6':
        # code...
        modif_cat();
        break;
      case '7':
        # code...
        insert_bod();
        break;
      case '8':
        # code...
        modif_bod();
        break;
      case '9':
        # code...
        insert_ingreso();
        break;
      case '10':
        # code...
        insert_salida();
        break;
      case '10':
        # code...
        insert_devolucion();
        break;
      default:
        # code...
        break;
    }
  }

  //INSERTA UN NUEVO PROVEEDOR
  function insert_prov(){
    $rut        = $_POST["rut"];
    $nombre     = $_POST["nombre"];
    $direccion  = $_POST["direccion"];
    $provincia  = $_POST["ciudad"];
    $telefono   = $_POST["telefono"];
    $conexion   = new connex();
    //verifico que no exista otro rut
    $flag = 0;
    $consu = "SELECT proveedor.rut FROM proveedor;";
    $consulta   = $conexion->query($consu);
    $rec = $conexion->row($consulta);
    if ($rec['rut'] == $rut){
      $flag=1;
    }
    if ($flag==1)
    {
      echo 1;
    }
    else
    {
      $consu2="INSERT INTO proveedor (rut,nombre,direccion,ciudad,telefono)VALUES ('".$rut."','".$nombre."','".$direccion."','".$provincia."','".$telefono."');";
      $consulta3  = $conexion->query($consu2);
      echo $consu2;
      echo 2;
    }
    $conexion->cerrar();
  }
  //MODIFICACION DE UN PROVEEDOR
  function modif_prov(){
    $rut        = $_POST["rut"];
    $nombre     = $_POST["nombre"];
    $direccion  = $_POST["direccion"];
    $provincia  = $_POST["ciudad"];
    $telefono   = $_POST["telefono"];
    $conexion   = new connex();

    $consu2="UPDATE proveedor SET nombre = '".$nombre."', direccion = '".$direccion."', ciudad = '".$provincia."', telefono = '".$telefono."' WHERE rut = '".$rut."'";
      $consulta3  = $conexion->query($consu2);
      $conexion->cerrar();
      //echo $consu2;
      echo 2;
  }

  //INSERTA UN NUEVO PRODUCTO
  function insert_prod(){
    $serial   = $_POST["serial"];
    $nombre   = $_POST["nombre"];
    $descrip  = $_POST["descrip"];
    $marca    = $_POST["marca"];
    $cat      = $_POST["cat"];
    $unid     = $_POST["unid"];
    $critico  = $_POST['critico'];
    $bodega   = $_POST['bod'];
    $conexion = new connex();
    $consu2="INSERT INTO producto(codigo,nombre,descripcion,categoria_idcategoria,unidad,critico,bodega_idbodega,marca) VALUES ('".$serial."','".$nombre."','".$descrip."','".$cat."','".$unid."',".$critico.",".$bodega.",'".$marca."');";
    $consulta3  = $conexion->query($consu2);
    $conexion->cerrar();
    //echo $consu2;
    echo 2;
  }
  //MODIFICACION DE UN PRODUCTO
  function modif_prod(){
    $id       = $_POST['id'];
    $serial   = $_POST["serial"];
    $nombre   = $_POST["nombre"];
    $descrip  = $_POST["descrip"];
    $marca    = $_POST["marca"];
    $cat      = $_POST["cat"];
    $unid     = $_POST["unid"];
    $critico  = $_POST['critico'];
    $bodega   = $_POST['bod'];
    $conexion   = new connex();

    $consu2="UPDATE producto SET codigo = '".$serial."', nombre = '".$nombre."', descripcion = '".$descrip."', categoria_idcategoria = '".$cat."', unidad = '".$unid."', critico = ".$critico.", bodega_idbodega = ".$bodega.", marca = '".$marca."' WHERE idproducto = ".$id.";";
      $consulta3  = $conexion->query($consu2);
      $conexion->cerrar();
      //echo $consu2;
      echo 2;
  }
   //INSERTA UNA NUEVA CATEGORIA
  function insert_cat(){
    $nombre   = $_POST["nombre"];
    $conexion = new connex();
    $consu2="INSERT INTO categoria(nombre) VALUES ('".$nombre."');";
    $consulta3  = $conexion->query($consu2);
    $conexion->cerrar();
    //echo $consu2;
    echo 2;
  }
  //MODIFICACION DE UNA CATEGORIA
  function modif_cat(){
    $id         = $_POST['id'];
    $nombre     = $_POST["nombre"];
    $conexion   = new connex();

    $consu2="UPDATE categoria SET nombre = '".$nombre."' WHERE idcategoria = '".$id."'";
      $consulta3  = $conexion->query($consu2);
      $conexion->cerrar();
      //echo $consu2;
      echo 2;
  }

   //INSERTA UNA NUEVA BODEGA
  function insert_bod(){
    $nombre   = $_POST["nombre"];
    $descrip  = $_POST["descrip"];
    $conexion = new connex();
    $consu2="INSERT INTO bodega(nombre,descripcion) VALUES ('".$nombre."','".$descrip."');";
    $consulta3  = $conexion->query($consu2);
    $conexion->cerrar();
    //echo $consu2;
    echo 2;
  }
  //MODIFICACION DE UNA BODEGA
  function modif_bod(){
    $id         = $_POST['id'];
    $nombre     = $_POST["nombre"];
    $descrip     = $_POST["descrip"];
    $conexion   = new connex();

    $consu2="UPDATE bodega SET nombre = '".$nombre."', descripcion = '".$descrip."' WHERE idbodega = '".$id."'";
      $consulta3  = $conexion->query($consu2);
      $conexion->cerrar();
      //echo $consu2;
      echo 2;
  }
  function insert_ingreso(){
    $fecha      = date('Y-m-d');
    $usuario    = $_POST['usuario'];
    $tipo       = $_POST['tipo'];
    $comentario = $_POST['comentarios'];
    $consulta   = "INSERT INTO ingreso (fecha_ingreso, tipo, comentario, usuario) VALUES ('".$fecha."','$tipo','$comentario','$usuario')";
    $conexion   = new connex();
    $resultado  = $conexion->query($consulta);
    $id_ingreso = $conexion->insercion();
    $cantidad   = $_POST['cantidad'];
    $producto   = $_POST['producto'];
    for($i=0; $i< count($cantidad); $i++){
      $consulta2  = "INSERT INTO detalle_ingreso (cantidad, ingreso_idingreso, producto_idproducto) VALUES (".$cantidad[$i].",".$id_ingreso.",".$producto[$i].")";
      $respuesta = $conexion->query($consulta2);
    }
    $conexion->cerrar();
    echo 1;
  }

  function insert_salida(){
    $fecha      = date('Y-m-d H:m:s');
    $usuario    = $_POST['usuario'];
    $responsable= $_POST['responsable'];
    $destino    = $_POST['destino'];
    $guia       = $_POST['guia'];
    $comentario = $_POST['comentarios'];
    $consulta   = "INSERT INTO solicitud (destino, responsable, guia, fecha, comentario, usuario) VALUES ('$destino','$responsable','$guia','$fecha','$comentario','$usuario')";
    $conexion   = new connex();
    $resultado  = $conexion->query($consulta);
    $id_solicitud = $conexion->insercion();
    $cantidad   = $_POST['cantidad'];
    $producto   = $_POST['producto'];
    for($i=0; $i< count($cantidad); $i++){
      $consulta2  = "INSERT INTO detalle_solicitud (cantidad, solicitud_idsolicitud, producto_idproducto) VALUES (".$cantidad[$i].",".$id_solicitud.",".$producto[$i].")";
      $respuesta = $conexion->query($consulta2);
    }
    $conexion->cerrar();
    echo $id_solicitud;
  }
?>
