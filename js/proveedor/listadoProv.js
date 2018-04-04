function modificar(id){
	$("#main").load("php/proveedores/edit_prov.php?id="+id);
}
function volver(){
	$("#main").html();
}
function abrir()
{ 	
	var ventana = open("php/proveedores/listadoPdf.php","PDF",'width=800,height=600,toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=no,titlebar=no');
}