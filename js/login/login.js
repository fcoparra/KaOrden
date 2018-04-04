function validado(resp){
	switch(resp){
		case "1":
			window.location.href = "index2.php";
			break;
		case "2":
			$(".alert").css('display','block');
			break;
		case "3":
			$("#alert").css('display','block');
			break;
		default:
			alert(resp);
			break;
	}
}
$(document).ready(function(){
	$("#ingresa").click(function(){
    	var user = $("#userName").val();
    	var pass = $("#userPassword").val();
    	$.get("php/login/validar.php",{u:user,p:pass},validado);
    	return false;
    });
});