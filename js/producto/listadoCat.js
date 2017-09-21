function modificarC(id){
	$("#main").load("php/productos/edit_cat.php?id="+id);
}
function volver(){
	$("#main").html();
}