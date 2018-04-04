<?php
 session_start(); 

if (!isset($_SESSION['usuario'])) 
{
	header("Location: ../index.php");
	$_SESSION['mensaje'] = "ACCESO DENEGADO: INGRESE SUS DATOS PARA PODER ACCESAR A LA PÁGINA";
}
else
{
	include('../conectar.php');
	$conexion 	= new connex($_SESSION['empresa']);
	$flag = 0;
	$accion			= $_GET["accion"];
	$rut 			= $_GET["rut"];
	$clasificacion 	 = $_GET["clasificacion"];
	$nombre 				= $_GET["nombre"];
	$giro 				= $_GET["giro"];
	$direccion 			= $_GET["direccion"];
	$region 				= $_GET["region"];
	$provincia 			= $_GET["provincia"];
	$codigo_telefono 	= $_GET["codigo_telefono"];
	$telefono 			= $_GET["telefono"];
	$celular 			= $_GET["celular"];
	$web 					= $_GET["web"];
	$sucursal			= $_GET["sucursal"];
	
	
	//-------------- actualiza el inicio --------------
	$consu1 = "UPDATE inicio SET listado_proveedores='t'";
	$consulta1 = $conexion->consulta($consu1);
	//-------------------fin---------------------------
	
	
	if ($accion == 1){
		$consu = "SELECT proveedor.rut FROM public.proveedor;";
		$consulta 	= $conexion->consulta($consu);
		while ($rec = $conexion->row($consulta))
		{
			if ($rec['rut'] == $rut)
			{
				$flag=1;
			}
		}
		if ($flag==1)
		{
			echo 1;
		}
		else
		{
			if($clasificacion=="Nuevo")
			{			
				$consu2="INSERT INTO proveedor(rut, tipo, calificacion, nombre, giro, web) VALUES ('".$rut."','Principal','".$clasificacion."','".$nombre."','".$giro."','".$web."');";			
			}
			else
			{
				$consu2="INSERT INTO proveedor(rut, tipo, calificacion, nombre, giro, web) VALUES ('".$rut."','Secundario','".$clasificacion."','".$nombre."','".$giro."','".$web."');";	
			}
			$consulta2 	= $conexion->consulta($consu2);
			$consu3 =  "INSERT INTO sucursal(rut,nombre,direccion,region,ciudad,cod_telefono,telefono,celular) VALUES ('".$rut."','".$sucursal."','".$direccion."','".$region."','".$provincia."','".$codigo_telefono."','".$telefono."','".$celular."');";
			$consulta3 	= $conexion->consulta($consu3);	
			echo 2;
		}
	}
	else
	{
		$nombreA = $_GET["nombreS"];
		if($clasificacion=="Nuevo")
			{			
				$consu2="UPDATE proveedor SET tipo='Principal', calificacion='".$clasificacion."', nombre='".$nombre."', giro='".$giro."', web='".$web."' WHERE proveedor.rut='".$rut."';";	
			}
			else
			{
				$consu2="UPDATE proveedor SET tipo='Secundario', calificacion='".$clasificacion."', nombre='".$nombre."', giro='".$giro."', web='".$web."' WHERE proveedor.rut='".$rut."';";	
			}
			$consulta2 	= $conexion->consulta($consu2);
			$consu3 =  "UPDATE sucursal SET nombre='".$sucursal."',direccion='".$direccion."',region='".$region."',ciudad='".$provincia."',cod_telefono='".$codigo_telefono."',telefono='".$telefono."',celular='".$celular."' WHERE
			sucursal.rut = '".$rut."' AND sucursal.nombre = '".$nombreA."';";
			$consulta3 	= $conexion->consulta($consu3);
			echo 2;
	}	
}
?>	
