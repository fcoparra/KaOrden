
//DECLARACIÓN DE VARIABLES GLOBALES
var subtotal= 0;
var totalO  = 0;
var iva     = 0;
//DECLARACIÓN DE funciones
//respuesta a la carga de datos del proveedor
function respuesta_prov(resp){
  $("#datosP").html(resp);
}

//respuesta a la carga de PRODUCTOS
function carga_producto(resp){
//  alert(resp);
  $("#datosProd").html("");
  $("#datosProd").html(resp);
}
//Respuesta del ingreso de una nueva orden de compra realizada
//acá debe cargar la orden de compra para ser impresa
function respuesta(resp){
  alert("Orden Ingresada");
  var ventana = open("php/ordenes/detalle.php?id="+alert,"PDF",'width=800,height=600,toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=no,titlebar=no');
}

//Eliminar una fila
function elimina(code){
  subtotal   = subtotal-$("#total"+code).val();
  iva       = Math.round(subtotal*0.19);
  totalO    = Math.round(subtotal+iva);
  $("#subtotal").attr('value',subtotal);
  $("#iva").attr('value',iva);
  $("#total_orden").attr('value',totalO);
	$("#"+code).remove();
}

//funcion para cálculo de totales

//comienzo de código jquery
$(document).ready(function(){
  //armado de funcion para la busqueda de proveedores en base de datos
  $("#proveedor").keyup(function() {
  	//autocomplete
    var texto = "php/funciones/consultas.php?texto="+$("#proveedor").val();
//    alert(texto);
  	$("#proveedor").autocomplete({
  		source: texto
  	});
  });
  //Carga de datos del proveedor una vez escrito
  $("#proveedor").change(function(){
    var dato = $(this).val();
    $.get("php/funciones/consultas.php",{datosP: dato},respuesta_prov)
    return false;
  });
  $("#producto").keyup(function() {
  	//autocomplete
    var texto = "php/funciones/consultas.php?texto_prod="+$("#producto").val();
  	$("#producto").autocomplete({
  		source: texto
  	});
  });
  $("#producto").change(function(){
    var dato = $(this).val();
    $.get("php/funciones/consultas.php",{datoProd:dato},carga_producto)
    return false;
  });
  //función para agregar un nuevo producto a la orden de compra
  $("#agregarp").click(function(){
    var id      = $("#id_prod").val();
    var nombre  = $("#producto").val();
    var cant    = $("#cant").val();
    var precio  = $("#precio").val();
    var total   = cant*precio;
    var fila		= '<tr id="'+id+'">';
		fila			+= '<td>'+nombre+'<input type="hidden" name="cantidad[]" value="'+cant+'"></td>';
		fila			+= '<td>'+cant+'<input type="hidden" name="producto[]" value="'+id+'"></td>';
    fila			+= '<td>'+precio+'<input type="hidden" name="vunitario[]" value="'+precio+'"></td>';
    fila			+= '<td>'+total+'<input type="hidden" name="vtotal[]" value="'+total+'" id="total'+id+'"></td>';
		fila			+= '<td><button class="btn btn-warning" type="button" onclick="elimina('+id+')">Eliminar</button></td>';
		fila			+= '</tr>';
		$("#detalle > tbody:last-child").append(fila);
    subtotal += total;
    iva       = Math.round(subtotal*0.19);
    totalO    = Math.round(subtotal+iva);
    $("#subtotal").attr('value',subtotal);
    $("#iva").attr('value',iva);
    $("#total_orden").attr('value',totalO);
    //alert(subtotal+' '+iva+' '+totalO);
  });

  $("#orden").submit(function(event)
	{
		event.preventDefault();
		$.get("php/funciones/inserciones.php",$(this).serialize(),respuesta);
		return false;
	});
});
