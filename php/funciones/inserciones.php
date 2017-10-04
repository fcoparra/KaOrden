<?php 
  include('../conectar.php');
  if(isset($_GET['valor'])){
    switch ($_GET['valor']) {
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
    $rut        = $_GET["rut"];
    $nombre     = $_GET["nombre"];
    $giro       = $_GET["giro"];
    $direccion  = $_GET["direccion"];
    $region     = $_GET["region"];
    $provincia  = $_GET["ciudad"];
    $telefono   = $_GET["telefono"];
    $conexion   = new connex();
    //verifico que no exista otro rut
    $flag = 0;
    $consu = "SELECT proveedor.rut FROM proveedor;";
    $consulta   = $conexion->query($consu);
    $rec = $conexion->row($consulta);
    $conexion->cerrar();
    if ($rec['rut'] == $rut){
      $flag=1;
    }
    if ($flag==1)
    {
      echo 1;
    }
    else
    {
      $consu2="INSERT INTO proveedor (rut,nombre,giro,direccion,region,ciudad,telefono)VALUES ('".$rut."','".$nombre."','".$giro."','".$direccion."','".$region."','".$provincia."','".$telefono."');";
      $consulta3  = $conexion->query($consu2); 
      $conexion->cerrar();
      //echo $consu2;
      echo 2;
    }
  }
  //MODIFICACION DE UN PROVEEDOR
  function modif_prov(){
    $rut        = $_GET["rut"];
    $nombre     = $_GET["nombre"];
    $giro       = $_GET["giro"];
    $direccion  = $_GET["direccion"];
    $region     = $_GET["region"];
    $provincia  = $_GET["ciudad"];
    $telefono   = $_GET["telefono"];
    $conexion   = new connex();
      
    $consu2="UPDATE proveedor SET nombre = '".$nombre."', giro = '".$giro."', direccion = '".$direccion."', region = '".$region."', ciudad = '".$provincia."', telefono = '".$telefono."' WHERE rut = '".$rut."'";
      $consulta3  = $conexion->query($consu2); 
      $conexion->cerrar();
      //echo $consu2;
      echo 2;
  }

  //INSERTA UN NUEVO PRODUCTO
  function insert_prod(){
    $serial   = $_GET["serial"];
    $nombre   = $_GET["nombre"];
    $descrip  = $_GET["descrip"];
    $marca    = $_GET["marca"];
    $cat      = $_GET["cat"];
    $unid     = $_GET["unid"];
    $critico  = $_GET['critico'];
    $bodega   = $_GET['bod'];
    $conexion = new connex();
    $consu2="INSERT INTO producto(codigo,nombre,descripcion,categoria_idcategoria,unidad,critico,bodega_idbodega,marca) VALUES ('".$serial."','".$nombre."','".$descrip."','".$cat."','".$unid."',".$critico.",".$bodega.",'".$marca."');";
    $consulta3  = $conexion->query($consu2); 
    $conexion->cerrar();
    //echo $consu2;
    echo 2;
  }
  //MODIFICACION DE UN PRODUCTO
  function modif_prod(){
    $id       = $_GET['id'];
    $serial   = $_GET["serial"];
    $nombre   = $_GET["nombre"];
    $descrip  = $_GET["descrip"];
    $marca    = $_GET["marca"];
    $cat      = $_GET["cat"];
    $unid     = $_GET["unid"];
    $critico  = $_GET['critico'];
    $bodega   = $_GET['bod'];
    $conexion   = new connex();
      
    $consu2="UPDATE producto SET codigo = '".$serial."', nombre = '".$nombre."', descripcion = '".$descrip."', categoria_idcategoria = '".$cat."', unidad = '".$unid."', critico = ".$critico.", bodega_idbodega = ".$bodega.", marca = '".$marca."' WHERE idproducto = ".$id.";";
      $consulta3  = $conexion->query($consu2); 
      $conexion->cerrar();
      //echo $consu2;
      echo 2;
  }
   //INSERTA UNA NUEVA CATEGORIA
  function insert_cat(){
    $nombre   = $_GET["nombre"];
    $conexion = new connex();
    $consu2="INSERT INTO categoria(nombre) VALUES ('".$nombre."');";
    $consulta3  = $conexion->query($consu2); 
    $conexion->cerrar();
    //echo $consu2;
    echo 2;
  }
  //MODIFICACION DE UNA CATEGORIA
  function modif_cat(){
    $id         = $_GET['id'];
    $nombre     = $_GET["nombre"];
    $conexion   = new connex();
      
    $consu2="UPDATE categoria SET nombre = '".$nombre."' WHERE idcategoria = '".$id."'";
      $consulta3  = $conexion->query($consu2);
      $conexion->cerrar(); 
      //echo $consu2;
      echo 2;
  }

   //INSERTA UNA NUEVA BODEGA
  function insert_bod(){
    $nombre   = $_GET["nombre"];
    $descrip  = $_GET["descrip"];
    $conexion = new connex();
    $consu2="INSERT INTO bodega(nombre,descripcion) VALUES ('".$nombre."','".$descrip."');";
    $consulta3  = $conexion->query($consu2); 
    $conexion->cerrar();
    //echo $consu2;
    echo 2;
  }
  //MODIFICACION DE UNA BODEGA
  function modif_bod(){
    $id         = $_GET['id'];
    $nombre     = $_GET["nombre"];
    $descrip     = $_GET["descrip"];
    $conexion   = new connex();
      
    $consu2="UPDATE bodega SET nombre = '".$nombre."', descripcion = '".$descrip."' WHERE idbodega = '".$id."'";
      $consulta3  = $conexion->query($consu2); 
      $conexion->cerrar();
      //echo $consu2;
      echo 2;
  }
  function insert_ingreso(){
    $fecha      = date('Y-m-d');
    $usuario    = $_GET['usuario'];
    $tipo       = $_GET['tipo'];
    $comentario = $_GET['comentarios'];
    $consulta   = "INSERT INTO ingreso (fecha_ingreso, tipo, comentario, usuario) VALUES ('".$fecha."','$tipo','$comentario','$usuario')";
    $conexion   = new connex();
    $resultado  = $conexion->query($consulta);
    $id_ingreso = $conexion->insercion();
    $cantidad   = $_GET['cantidad'];
    $producto   = $_GET['producto'];
    for($i=0; $i< count($cantidad); $i++){
      $consulta2  = "INSERT INTO detalle_ingreso (cantidad, ingreso_idingreso, producto_idproducto) VALUES (".$cantidad[$i].",".$id_ingreso.",".$producto[$i].")";
      $respuesta = $conexion->query($consulta2);
    }
    $conexion->cerrar();
    echo 1;
  }

  function insert_salida(){
    $fecha      = date('Y-m-d H:m:s');
    $usuario    = $_GET['usuario'];
    $responsable= $_GET['responsable'];
    $destino    = $_GET['destino'];
    $guia       = $_GET['guia'];
    $comentario = $_GET['comentarios'];
    $consulta   = "INSERT INTO solicitud (destino, responsable, guia, fecha, comentario, usuario) VALUES ('$destino','$responsable','$guia','$fecha','$comentario','$usuario')";
    $conexion   = new connex();
    $resultado  = $conexion->query($consulta);
    $id_solicitud = $conexion->insercion();
    $cantidad   = $_GET['cantidad'];
    $producto   = $_GET['producto'];
    for($i=0; $i< count($cantidad); $i++){
      $consulta2  = "INSERT INTO detalle_solicitud (cantidad, solicitud_idsolicitud, producto_idproducto) VALUES (".$cantidad[$i].",".$id_solicitud.",".$producto[$i].")";
      $respuesta = $conexion->query($consulta2);
    }
    $conexion->cerrar();
    echo $id_solicitud;
  }

  function insert_salida(){
    $fecha      = date('Y-m-d H:m:s');
    $usuario    = $_GET['usuario'];
    $responsable= $_GET['devuelto'];
    $solicitud  = $_GET['solicitud'];
    $comentario = $_GET['comentarios'];
    $consulta   = "INSERT INTO devolucion (responsable, fecha, comentario, usuario, solicitud_idsolicitud) VALUES ('$responsable','$fecha','$comentario','$usuario','$solicitud')";
    $conexion   = new connex();
    $resultado  = $conexion->query($consulta);
    $id_solicitud = $conexion->insercion();
    $cantidad   = $_GET['cantidad'];
    $producto   = $_GET['producto'];
    for($i=0; $i< count($cantidad); $i++){
      if($cantidad[$i] != ''){
        $consulta2  = "INSERT INTO detalle_devolución (cantidad, devolucion_iddevolucion, producto_idproducto) VALUES (".$cantidad[$i].",".$id_solicitud.",".$producto[$i].")";
        $respuesta = $conexion->query($consulta2);
      }
    }
    $conexion->cerrar();
    echo $id_solicitud;
  }
?>