function Rut(texto)
{	
	var tmpstr = "";	
	for ( i=0; i < texto.length ; i++ )	
		if ( texto.charAt(i) != ' ' && texto.charAt(i) != '.' && texto.charAt(i) != '-' )
			tmpstr = tmpstr + texto.charAt(i);	
	texto = tmpstr;	
	largo = texto.length;	

	if ( largo < 2 )	
	{	
		alert("Debe ingresar el rut completo")	
		document.getElementById("rut").focus();	
		document.getElementById("rut").select();	
		return false;	
	}	

	for (i=0; i < largo ; i++ )	
	{	
		if ( texto.charAt(i) !="0" && texto.charAt(i) != "1" && texto.charAt(i) !="2" && texto.charAt(i) != "3" && texto.charAt(i) != "4" && texto.charAt(i) !="5" && texto.charAt(i) != "6" && texto.charAt(i) != "7" && texto.charAt(i) !="8" && texto.charAt(i) != "9" && texto.charAt(i) !="k" && texto.charAt(i) != "K" )
		{	
			alert("El valor ingresado no corresponde a un R.U.T valido.Ingreselo nuevamente");	
			document.getElementById("rut").focus();	
			document.getElementById("rut").select();	
			return false;
			
		}	
	}	

	var invertido = "";	
	for ( i=(largo-1),j=0; i>=0; i--,j++ )	
		invertido = invertido + texto.charAt(i);	
	var dtexto = "";	
	dtexto = dtexto + invertido.charAt(0);	
	dtexto = dtexto + '-';	
	cnt = 0;	

	for ( i=1,j=2; i<largo; i++,j++ )	
	{	
		//alert("i=[" + i + "] j=[" + j +"]" );	
		if ( cnt == 3 )	
		{	
			dtexto = dtexto + '.';	
			j++;	
			dtexto = dtexto + invertido.charAt(i);	
			cnt = 1;	
		}	
		else	
		{	
			dtexto = dtexto + invertido.charAt(i);	
			cnt++;	
		}	
	}	

	invertido = "";	
	for ( i=(dtexto.length-1),j=0; i>=0; i--,j++ )	
		invertido = invertido + dtexto.charAt(i);	

	document.getElementById("rut").value = invertido.toUpperCase()	
	
	// si el rut es valido, enviara el true definitivo, que a su ve habilitara el resto del formulario
	if ( revisarDigito2(texto) )	
	{
			document.getElementById("nombre").focus();	
			return true;
	}	
	return false;
}
