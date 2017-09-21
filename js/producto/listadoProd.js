function modificarP(id){
	$("#main").load("php/productos/edit_prod.php?id="+id);
}
function volver(){
	$("#main").html();
}
function abrir()
{ 	
	var ventana = open("php/productos/listadoPdf.php","PDF",'width=800,height=600,toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=no,titlebar=no');
}