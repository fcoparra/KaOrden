$(document).ready(function(){

	$(".ir_a").click(function(event){
		event.preventDefault();
		$("#main").load($(this).attr('href'));
	});
	$("#volver").click(function(){
		$("#main").empty();
	});   
});
function fuera(){
	$.get("php/login/logout.php",respFuera);
		return false;
}
function respFuera(resp){
	alert("Sesión finalizada");
	window.location.href = "index.php";
}