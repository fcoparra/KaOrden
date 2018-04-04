<?php
  include('../conectar.php');
  //Recibe valores para la carga de datos
  if(isset($_GET['valor'])){
    carga_proveedor($_GET['valor']);
  }
  if(isset($_GET['serial'])){
    carga_producto($_GET['serial']);
  }
  if(isset($_GET['texto'])){
    buscar_prov($_GET['texto']);
  }
  if(isset($_GET['datosP'])){
      datos_proveedor($_GET['datosP']);
  }
  if(isset($_GET['texto_prod'])){
    buscar_prod($_GET['texto_prod']);
  }
  if(isset($_GET['datoProd'])){
      datos_producto($_GET['datoProd']);
  }
  //LISTADO DE TODOS LOS PROVEEDORES
  function listado_prov(){
    $conexion   = new connex();
    $seleccion  = "SELECT id, rut, nombre, direccion, telefono FROM proveedor order by nombre;";
    $consulta   = $conexion->query($seleccion);
    $lista = "";
    while($fila = $conexion->row($consulta))
    {
      $lista .= "<tr>";
      $lista .= "<td width='20%'>".$fila['nombre']."</td>";
      $lista .= "<td width='15%'>".$fila['rut']."</td>";
      $lista .= "<td width='25%'>".$fila['direccion']."</div></td>";
      $lista .= "<td width='20%'>".$fila['telefono']."</td>";
      $lista .= "<td width='20%'><button class= 'btn btn-primary' onclick='modificar(".$fila['id'].");'>Editar</button></td>";
    }
    $conexion->cerrar();
    echo $lista;
  }
  //CARGA DE DATOS PARA MODIFICAR UN PROVEEDOR
  function modifica_proveedor($id){
    $conexion   = new connex();
    $consulta = "SELECT * FROM proveedor WHERE id = '".$id."';";
    $respuesta  = $conexion->query($consulta);
    $conexion->cerrar();
    $fila   = $conexion->row($respuesta);
    return $fila;
  }

  //ACCIONES DE CATEGORÍAS
  function categorias(){
    $conexion   = new connex();
    $seleccion  = "SELECT * FROM categoria ORDER BY nombre;";
    $consulta   = $conexion->query($seleccion);
    $lista = "";
    while($fila = $conexion->row($consulta))
    {
      $lista .= "<option value=".$fila['idcategoria'].">".$fila['nombre']."</option>";
    }
    $conexion->cerrar();
    echo $lista;
  }
  //CARGA DE CATEGORÍAS PARA MODIFICAR EN UN PRODUCTO
  function categoriasM($id){
    $conexion   = new connex();
    $seleccion  = "SELECT * FROM categoria ORDER BY nombre;";
    $consulta   = $conexion->query($seleccion);
    $lista = "";
    while($fila = $conexion->row($consulta))
    {
      if($fila['idcategoria'] == $id){
        $lista .= "<option value=".$fila['idcategoria']." selected>".$fila['nombre']."</option>";
      }else{
        $lista .= "<option value=".$fila['idcategoria'].">".$fila['nombre']."</option>";
      }

    }
    $conexion->cerrar();
    echo $lista;
  }
  //CARGA DEL LISTADO DE CATEGORIAS
  function listado_cat(){
    $conexion   = new connex();
    $seleccion  = "SELECT * FROM categoria;";
    $consulta   = $conexion->query($seleccion);
    $lista = "";
    while($fila = $conexion->row($consulta))
    {
      $lista .= "<tr>";
      $lista .= "<td width='20%'>".$fila['idcategoria']."</td>";
      $lista .= "<td width='15%'>".$fila['nombre']."</td>";
      $lista .= "<td width='20%'><button class= 'btn btn-primary' onclick='modificarC(".$fila['idcategoria'].");'>Editar</button></td>";
    }
    $conexion->cerrar();
    echo $lista;
  }
  //CARGA DE DATOS PARA MODIFICAR CATEGORÍAS
  function modifica_categoria($id){
    $conexion   = new connex();
    $consulta = "SELECT * FROM categoria WHERE idcategoria = '".$id."';";
    $respuesta  = $conexion->query($consulta);
    $fila   = $conexion->row($respuesta);
    $conexion->cerrar();
    return $fila;
  }


  //ACCIONES DE PRODUCTOS
  function listado_prod(){
    $conexion   = new connex();
    $seleccion  = "SELECT * FROM lproducto;";
    $consulta   = $conexion->query($seleccion);
    $lista = "";
    while($fila = $conexion->row($consulta))
    {
      $lista .= "<tr>";
      $lista .= "<td width='20%'>".$fila['codigo']."</td>";
      $lista .= "<td width='15%'>".$fila['nombre']."</td>";
      $lista .= "<td width='20%'>".$fila['descripcion']."</td>";
      $lista .= "<td width='25%'>".$fila['categoria']."</div></td>";
      $lista .= "<td width='20%'><button class= 'btn btn-primary' onclick='modificarP(".$fila['id'].");'>Editar</button></td>";
    }
    $conexion->cerrar();
    echo $lista;
  }
  //CARGA DE DATOS PARA MODIFICAR PRODUCTOS
  function modificar_producto($id){
    $conexion   = new connex();
    $consulta = "SELECT * FROM producto WHERE idproducto = '".$id."';";
    $respuesta  = $conexion->query($consulta);
    $fila   = $conexion->row($respuesta);
    $conexion->cerrar();
    return $fila;
  }
  //ACCIONES DE BODEGA
  function listado_bod(){
    $conexion   = new connex();
    $seleccion  = "SELECT * FROM bodega;";
    $consulta   = $conexion->query($seleccion);
    $lista = "";
    while($fila = $conexion->row($consulta))
    {
      $lista .= "<tr>";
      $lista .= "<td width='20%'>".$fila['idbodega']."</td>";
      $lista .= "<td width='15%'>".$fila['nombre']."</td>";
      $lista .= "<td width='20%'>".$fila['descripcion']."</td>";
      $lista .= "<td width='20%'><button class= 'btn btn-primary' onclick='modificarB(".$fila['idbodega'].");'>Editar</button></td>";
    }
    $conexion->cerrar();
    echo $lista;
  }
  //CARGA DE DATOS PARA MODIFICAR UNA BODEGA
  function modificar_bodega($id){
    $conexion   = new connex();
    $consulta = "SELECT * FROM bodega WHERE idbodega = '".$id."';";
    $respuesta  = $conexion->query($consulta);
    $fila   = $conexion->row($respuesta);
    $conexion->cerrar();
    return $fila;
  }
  //LISTADO DE BODEGAS
  function listar_bod($id){
    $conexion   = new connex();
    $seleccion  = "SELECT * FROM bodega";
    $consulta   = $conexion->query($seleccion);
    $lista = "";
    while($fila = $conexion->row($consulta))
    {
      if($fila['idbodega'] == $id){
        $lista .= "<option value=".$fila['idbodega']." selected>".$fila['nombre']."</option>";
      }else{
        $lista .= "<option value=".$fila['idbodega'].">".$fila['nombre']."</option>";
      }
    }
    $conexion->cerrar();
    echo $lista;
  }
  //CARGA DE UN PROVEEDOR AL MOMENTO DE CREAR UNA ORDEN DE COMPRA
  function carga_proveedor($id){
    $conexion = new connex();
    $seleccion= "select * from proveedor Where id =".$id;
    $consulta = $conexion->query($seleccion);
    $fila     = $conexion->row($consulta);
    $dato     = "<div class='form-group'><label>Nombre Prov: <span>".$fila['nombre']."</span></label>";
    $dato     .= "<label>Dirección: <span>".$fila['direccion']."</span></label><br>";
    $dato     .= "<label>Teléfono: <span>".$fila['telefono']."</span></label><br>";
    $conexion->cerrar();
    echo $dato;
  }
  //CARGA DE PRODUCTOS AL MOMENTO DE SER ESCANEADO DE MANERA MANUAL
  function carga_producto($serial){
    $conexion = new connex();
    $seleccion= "select * from producto Where codigo ='".$serial."'";
    $consulta = $conexion->query($seleccion);
    if($fila     = $conexion->row($consulta)){
      $dato     = '<label id="producto">'.$fila['nombre'].'</label><input type="hidden" id="codigo" value="'.$fila['idproducto'].'">';
    }else{
      $dato     = '<label id="producto"><font color="red">PRODUCTO NO ENCONTRADO</font></label>';
    }
    $conexion->cerrar();
    echo $dato;
  }
  //LISTADO DE SALIDAS DE UN PRODUCTO
  function listado_salida(){
    $conexion   = new connex();
    $seleccion  = "SELECT * FROM solicitud order by fecha;";
    $consulta   = $conexion->query($seleccion);
    $lista = "";
    while($fila = $conexion->row($consulta))
    {
      $fecha  = explode(" ", $fila['fecha']);
      $fecha2     = explode("-",$fecha[0]);
      $fechaF     = $fecha2[2]."-".$fecha2[1]."-".$fecha2[0];
      $lista .= "<tr>";
      $lista .= "<td>".$fechaF." ".$fecha[0]."</td>";
      $lista .= "<td>".$fila['destino']."</td>";
      $lista .= "<td>".$fila['responsable']."</td>";
      $lista .= "<td>".$fila['usuario']."</div></td>";
      $lista .= "<td><button class= 'btn btn-info' onclick='vermas(".$fila['idsolicitud'].");'>Ver Más</button> <button class='btn btn-primary' onclick='devolver(".$fila['idsolicitud'].");''>Devolver</button></td>";
    }
    $conexion->cerrar();
    echo $lista;
  }
  //CARGA DATOS GENERALES DE UNA SOLICITUD
  function detalle_solicitud($id){
    $conexion   = new connex();
    $seleccion  = "select * from solicitud where idsolicitud=$id";
    $consulta   = $conexion->query($seleccion);
    $fila       = $conexion->row($consulta);
    $conexion->cerrar();
    $fecha      = explode(" ", $fila['fecha']);
    $fecha2     = explode("-",$fecha[0]);
    $fechaF     = $fecha2[2]."-".$fecha2[1]."-".$fecha2[0];
    $dato       = '<div class="form-group"><label class="control-label">Fecha: '.$fechaF.' '.$fecha[1].'</label></div>';
    $dato       .= '<div class="form-group"><label class="control-label">Destino: '.$fila['destino'].'</label></div>';
    $dato       .= '<div class="form-group"><label class="control-label">Responsable: '.$fila['responsable'].'</label></div>';
    $dato       .= '<div class="form-group"><label class="control-label">Despachado por: '.$fila['usuario'].'</label></div>';
    $dato       .= '<div class="form-group"><label class="control-label">Comentario: '.$fila['comentario'].'</label></div>';
    echo $dato;
  }
  //CARGA DE DETALLE DE UNA SOLICITUD DE MATERIALES
  function detalle_pedido($id){
    $conexion   = new connex();
    $seleccion  = "select * from vista_solicitud where solicitud_idsolicitud=$id";
    $consulta   = $conexion->query($seleccion);
    $detalle    = "<table class='table table-striped'><thead class='thead-default'><tr><th>Material</th><th>Cantidad</th></tr></thead>";
    while($fila = $conexion->row($consulta))
    {
      $detalle .= "<tr>";
      $detalle .= "<td>".$fila['producto']."</td>";
      $detalle .= "<td>".$fila['cantidad']."</td></tr>";
    }
    $detalle .= '</table>';
    echo $detalle;
  }
  //CARGA DE DATOS DE UNA SOLICITUD PARA SER DEVUELTA
  function datos_solicitud($id){
    $conexion   = new connex();
    $seleccion  = "select * from solicitud where idsolicitud=$id";
    $consulta   = $conexion->query($seleccion);
    $fila       = $conexion->row($consulta);
    $conexion->cerrar();
    return $fila;
  }
  //CARCA DETALLE DE PRODUCTOS PARA REALIZAR LA DEVOLUCIÓN
  function detalle_dev($id){
    $conexion   = new connex();
    $seleccion  = "select * from vista_solicitud where solicitud_idsolicitud=$id";
    $consulta   = $conexion->query($seleccion);
    $detalle    = "";
    while($fila = $conexion->row($consulta))
    {
      $detalle .= "<tr>";
      $detalle .= "<td>".$fila['codigo']." ".$fila['producto']."<input type='hidden' value='".$fila['idproducto']."' name='producto[]'></td>";
      $detalle .= "<td><input type='number' value='".$fila['cantidad']."' name='cantidad[]'></td></tr>";
    }
    $conexion->cerrar();
    echo $detalle;
  }
  function consulta_estado_dev($id_dev){
  	$conexion = new connex();
  	//Consulto por los materiales solicitados en la solicitud

  }
  //para busqueda de proveedor y carga de datos en el ingreso de una orden de compra
  function buscar_prov($texto){
    $conexion   = new connex();
    $seleccion  = "select * from proveedor Where nombre LIKE '%".$texto."%'";
    $consulta   = $conexion->query($seleccion);
    while($fila = $conexion->row($consulta))
    {
      $detalle[] = $fila['nombre'];
    }
    $conexion->cerrar();
    echo json_encode($detalle);
  }
  function datos_proveedor($dato){
    $conexion   = new connex();
    $seleccion  = "select * from proveedor Where nombre = '".$dato."'";
    $consulta   = $conexion->query($seleccion);
    $detalle    = "<table class='table'>";
    while($fila = $conexion->row($consulta))
    {
      $detalle .= '<tr><td><label class="control-label" for="rut">Rut</label></td><td>'.$fila['rut'].'</td></tr>';
      $detalle .= '<tr><td><label class="control-label" for="dir">Direccion</label></td><td>'.$fila['direccion'].'</td></tr>';
      $detalle .= '<tr><td><label class="control-label" for="fono">Telefono</label></td><td>'.$fila['telefono'].'</td></tr>';
      $detalle .= '<input type="hidden" name="id_prov" id="id_prov" value="'.$fila['id'].'">';
    }
    $detalle .= "</table>";
    $conexion->cerrar();
    echo $detalle;
  }

  //Funciones para la búsqueda de productos en ordenes de COMPRA

  function buscar_prod($texto){
    $conexion   = new connex();
    $seleccion  = "select nombre from producto where nombre LIKE '%".$texto."%'";
    $consulta   = $conexion->query($seleccion);
    while($fila = $conexion->row($consulta))
    {
      $detalle[] = $fila['nombre'];
    }
    $conexion->cerrar();
    echo json_encode($detalle);
  }
  //carga el id del producto
  function datos_producto($dato){
    $conexion   = new connex();
    $seleccion  = "select idproducto from producto Where nombre = '".$dato."'";
//    echo $seleccion;
    $consulta   = $conexion->query($seleccion);
    while($fila = $conexion->row($consulta))
    {
      $detalle = '<input type="hidden" name="id_prod" id="id_prod" value="'.$fila['idproducto'].'">';
    }
    $conexion->cerrar();
    echo $detalle;
  }

  //funcion para el listado de ordenes de compra

  function listado_orden(){
    $conexion   = new connex();
    $seleccion  = "SELECT * from ordenes order by fecha DESC;";
    $consulta   = $conexion->query($seleccion);
    $lista = "";
    while($fila = $conexion->row($consulta))
    {
      $fecha      = explode(" ", $fila['fecha']);
      $fecha2     = explode("-",$fecha[0]);
      $fechaF     = $fecha2[2]."-".$fecha2[1]."-".$fecha2[0];
      $lista .= "<tr>";
      $lista .= "<td width='20%'>".$fila['orden']."</td>";
      $lista .= "<td width='15%'>".$fechaF."</td>";
      $lista .= "<td width='25%'>".$fila['nombre']."</div></td>";
      $lista .= "<td width='20%'><button class= 'btn btn-primary' onclick='ver(".$fila['orden'].");'>Ver</button></td>";
    }
    $conexion->cerrar();
    echo $lista;
  }

  //funciones para la impresión de una orden de compra

  function header_orden($id){
    $conexion   = new connex();
    $consulta   = "SELECT orden.fecha, proveedor.nombre, proveedor.rut, proveedor.direccion, proveedor.ciudad from orden, proveedor WHERE idorden = ".$id." and proveedor.id = proveedor_id";
    //echo $consulta;
    $resultado  = $conexion->query($consulta);
    while($fila = $conexion->row($resultado))
    {
      $fecha      = explode(" ", $fila['fecha']);
      $fecha2     = explode("-",$fecha[0]);
      $fechaF     = $fecha2[2]."-".$fecha2[1]."-".$fecha2[0];
      $tabla    = '<table class="table"><thead><tr><th>Datos Proveedor</th></tr></thead><tbody><tr><td>Señores:</td><td>'.$fila['nombre'].'</td></tr><tr><td>Rut:</td><td>'.$fila['rut'].'</td></tr><tr><td>Dirección:</td><td>'.$fila['direccion'].' - '.$fila['ciudad'].'</td></tr><tr><td>Fecha:</td><td>'.$fechaF.'</td></tr></tbody></table>';
    }
    $conexion->cerrar();
    echo $tabla;
  }
  function body_orden($id){
    $conexion   = new connex();
    $seleccion  = "SELECT producto.nombre, producto.unidad, detalle_orden.cantidad, detalle_orden.valor_unitario, detalle_orden.valor_total from detalle_orden, producto WHERE detalle_orden.orden_idorden = ".$id." and producto_idproducto = idproducto";
//    echo $seleccion;
    $resultado  = $conexion->query($seleccion);
    $tabla = "";
    while($fila = $conexion->row($resultado)){
      $tabla  .= "<tr><td>".$fila['cantidad']."</td><td>".$fila['unidad']."</td><td>".$fila['nombre']."</td><td>".$fila['valor_unitario']."</td><td>".$fila['valor_total']."</td></tr>";
    }
    $conexion->cerrar();
    echo $tabla;
  }
  function footer_orden($id){
    $conexion   = new connex();
    $seleccion  = "SELECT comentarios,subtotal,iva,total FROM orden WHERE idorden = ".$id;
    $consulta   = $conexion->query($seleccion);
    $fila       = $conexion->row($consulta);
    $footer     = '<table width="100%"><tr><td width="50%"><b>Comentarios:</b><br>'.$fila['comentarios'].'</td><td  width="50%"><table class="table"><tr><td>Total Neto</td><td>'.$fila['subtotal'].'</td></tr><tr><td>I.V.A.</td><td>'.$fila['iva'].'</td></tr><tr><td>Total</td><td>'.$fila['total'].'</td></tr></table></td></table>';
    $conexion->cerrar();
    echo $footer;
  }
?>
