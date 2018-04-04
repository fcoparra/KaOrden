
function respuesta(resp)
{
	var resultado = resp;
	if(resultado == 2)
	{
		alert("Bodega ingresada");
		$("#main").load("php/bodegas/listado_bod.php");
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
		alert("Bodega modificada");
		$("#main").load("php/bodegas/listado_bod.php");
	}
	else{
		alert(resp);
	}
}

$(document).ready(function()
{
	$("#nuevaB").submit(function(event)
	{
		event.preventDefault();
		$.get("php/funciones/inserciones.php",$(this).serialize(),respuesta);
		return false;
	});
	$("#modifiB").submit(function(event)
	{
		event.preventDefault();
		$.get("php/funciones/inserciones.php",$(this).serialize(),respuesta_m);
		return false;
	});
	$("#volver").click(function(event){
		$("#main").html();
	});
	$(".btn-basic").click(function(){
		$("#main").load("php/bodegas/listado_bod.php");	
	})
});
