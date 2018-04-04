
function respuesta(resp)
{
	var resultado = resp;
	if(resultado == 2)
	{
		alert("Producto ingresado");
		$("#main").load("php/productos/listado_prod.php");
	}
	else{
		alert("Error "+resp);
	}
}

function respuesta_m(resp)
{
	var resultado = resp;
	if(resultado == 2)
	{
		alert("Producto modificado");
		$("#main").load("php/productos/listado_prod.php");
	}
	else{
		alert(resp);
	}
}

$(document).ready(function()
{
	$("#nuevoP").submit(function(event)
	{
		event.preventDefault();
		$.get("php/funciones/inserciones.php",$(this).serialize(),respuesta);
		return false;
	});
	$("#modifiP").submit(function(event)
	{
		event.preventDefault();
		$.get("php/funciones/inserciones.php",$(this).serialize(),respuesta_m);
		return false;
	});
	$("#volver").click(function(event){
		event.preventDefault();
		$("#main").empty();
	});
	$(".btn-basic").click(function(event){
		event.preventDefault();
		$("#main").load("php/productos/listado_prod.php");	
	})
});
