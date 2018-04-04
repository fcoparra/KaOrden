
function respuesta(resp)
{
	alert("Ingreso exitoso");
	window.open('php/solicitudes/salidapdf.php?id='+resp,'win2','status=no,toolbar=no,scrollbars=yes,titlebar=no,menubar=no,resizable=yes,width=100,height=50,directories=no,location=no');
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
	}
}

$(document).ready(function()
{
	$("#salida").submit(function(event)
	{
		event.preventDefault();
		$.get("php/funciones/inserciones.php",$(this).serialize(),respuesta);
		return false;
	});
	$("#volver").click(function(event){
		event.preventDefault();
		$("#main").html('');
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

function elimina(code){
	$("#"+code).remove();
}