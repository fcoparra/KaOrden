
function respuesta(resp)
{
	var resultado = resp;
	if(resultado == 2)
	{
		alert("Categoria ingresada");
		$("#main").load("php/productos/listado_cat.php");
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
		alert("Categoria modificada");
		$("#main").load("php/productos/listado_cat.php");
	}
	else{
		alert(resp);
	}
}

$(document).ready(function()
{
	$("#nuevaC").submit(function(event)
	{
		event.preventDefault();
		$.get("php/funciones/inserciones.php",$(this).serialize(),respuesta);
		return false;
	});
	$("#modifiC").submit(function(event)
	{
		event.preventDefault();
		$.get("php/funciones/inserciones.php",$(this).serialize(),respuesta_m);
		return false;
	});
	$("#volver").click(function(event){
		$("#main").html();
	});
	$(".btn-basic").click(function(){
		$("#main").load("php/productos/listado_cat.php");	
	})
});
