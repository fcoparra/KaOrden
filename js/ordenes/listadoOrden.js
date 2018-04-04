
function volver(){
	$("#main").html();
}
function ver(id)
{ 	
	var ventana = open("php/ordenes/detalle.php?id="+id,"PDF",'width=800,height=600,toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=no,titlebar=no');
}