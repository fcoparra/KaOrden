function vermas(id){
	$.get("php/solicitudes/detalle.php",{id:id},function(data){
		$(".modal-dialog").html(data)
		$('#detalle').modal('show'); 
	});
}
function devolver(id){
	$("#main").load('php/solicitudes/devoluciones.php?id='+id);
}
function volver(){
	$("#main").html();
}
function abrir()
{ 	
	var ventana = open("php/solicitudes/listadoPdf.php","PDF",'width=800,height=600,toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=no,titlebar=no');
}