<?php
  
	session_start(); 
  	
	if ((strlen($_REQUEST['u'])==0) || (strlen($_REQUEST['p'])==0)) 
	{
		echo 3;
	}
	else
	{
		$user = $_REQUEST['u'];
		$pass = md5($_REQUEST['p']);
		$logueo=0;	
		include('../conectar.php');
		$conexion = new connex();
		$conexion->conectar();
		$query = "SELECT count(*) AS cantidad FROM usuario WHERE usuario = '".$user."' AND password = '".$pass."';";
//		echo $query;
		$consulta = $conexion->query($query);
		$rec = $conexion->row($consulta);
		
	
		if($rec['cantidad'] != 0)
		{
			$query = "SELECT perfil_idperfil FROM usuario WHERE usuario = '".$user."' AND password = '".$pass."';";
			$consulta = $conexion->query($query);
			$rec = $conexion->row($consulta);
			$_SESSION['usuario'] = $user;
			$_SESSION['ingreso'] = date("Y-n-j H:i:s");
			$_SESSION['perfil'] = $rec['perfil_idperfil'];
			echo 1;
				
		}
		else
		{
			echo 2;
		}			
		$conexion->cerrar();
	}
?>
