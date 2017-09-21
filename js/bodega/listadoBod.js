function modificarB(id){
	$("#main").load("php/bodegas/edit_bod.php?id="+id);
}
function volver(){
	$("#main").html();
}