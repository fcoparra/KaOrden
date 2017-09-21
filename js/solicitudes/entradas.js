
function respuesta(resp)
{
	alert("Ingreso exitoso");
	$("#main").load('php/solicitudes/listado_salidas.php');
}

$(document).ready(function()
{
	$("#entrada").submit(function(event)
	{
		event.preventDefault();
		$.get("php/funciones/inserciones.php",$(this).serialize(),respuesta);
		return false;
	});
	$("#volver").click(function(event){
		$("#main").load('php/solicitudes/listado_salidas.php');
	});
	$("#cargar").click(function(){
		var id = $("#orden_dev").val();
		$("#main").load('php/solicitudes/devoluciones.php?id='+id);
	});
});