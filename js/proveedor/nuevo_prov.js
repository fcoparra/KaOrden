
function respuesta(resp)
{
	var resultado = resp;
	if(resultado == 1)
	{
		alert("Proveedor existente");
	}
	else{
		alert("Proveeodr ingresado");
		$("#main").load("php/proveedores/listado_prov.php");
	}
}

function respuesta_m(resp)
{
	var resultado = resp;
	if(resultado == 2)
	{
		alert("Proveeodr modificado");
		$("#main").load("php/proveedores/listado_prov.php");
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
		$("#main").html();
	});
	$(".btn-basic").click(function(){
		$("#main").load("php/proveedores/listado_prov.php");
	});
});
