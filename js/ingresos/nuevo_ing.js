
function respuesta(resp)
{
	if(resp == 1){
		alert("Ingreso exitoso");
		$("#nuevoi").reset();
	}else{
		alert("Error de ingreso "+resp);
	}
}

function agregar(){
	var nombre 		= $("#producto").text();
	var codigo		= $("#codigo").val();
	var cantidad 	= $("#cant").val();
	if(cantidad == 0){
		alert("Debe ingresar una cantidad");
	}else{
		var fila		= '<tr id="'+codigo+'">';
		fila			+= '<td>'+nombre+'<input type="hidden" name="cantidad[]" value="'+cantidad+'"></td>';
		fila			+= '<td>'+cantidad+'<input type="hidden" name="producto[]" value="'+codigo+'"></td>';
		fila			+= '<td><button class="btn btn-warning" type="button" onclick="elimina('+codigo+')">Eliminar</button></td>';
		fila			+= '</tr>';
		$("#detalle > tbody:last-child").append(fila);
		bloquear();
	}
}

$(document).ready(function()
{
	$("#nuevoI").submit(function(event)
	{
		event.preventDefault();
		$.get("php/funciones/inserciones.php",$(this).serialize(),respuesta);
		return false;
	});
	$("#volver").click(function(event){
		$("#main").html();
	});
	$("#tipo").change(function(){
		$("#manual").toggle();
		$("#oc").toggle();
	});
	$("#serial").blur(function(){
		$.get("php/funciones/consultas.php",{serial:$(this).val()},resp_datos);
		return false;
	})
	$("#serial").focus(function(){
		$(this).val('');
	})
});

function resp_datos(resp){
	$("#datos").html('');
	$("#datos").html(resp);
	if(resp != '<label id="producto"><font color="red">PRODUCTO NO ENCONTRADO</font></label>'){
		$("#cant").removeAttr('disabled');
		$(".btn-primary").removeAttr('disabled');
	}
}

function bloquear(){
	$("#cant").val('');
	$("#cant").prop('disabled');
	$(".btn-primary").prop('disabled');
}

function elimina(code){
	$("#"+code).remove();
}