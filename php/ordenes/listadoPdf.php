<?PHP

/* Incluimos el archivo de configuracion */
require_once("../dompdf/dompdf_config.inc.php");
include('../conectar.php');
$fecha_ac 	= date("d-m-Y");
$conexion	= new connex();	
	
$seleccion_empresa 	= "SELECT rut_empresa,nombre_fantasia,razon_social,giro,direccion,comuna,region,fono,web FROM empresa;";
$consulta_empresa  	= $conexion->query($seleccion_empresa);
$row_empresa = $conexion->row($consulta_empresa);
$rut_empresa = $row_empresa['rut_empresa'];
$nombre_empresa = $row_empresa['nombre_fantasia'];
$html_empresa	= '
	<table align="center" width="100%" border="1">
		<tr>
			<th rowspan="2" width="20%">
			</th>
			<th align="center" colspan="2" heigth="70%">
				<font size="5"><strong>LISTADO MAESTRO DE PROVEEDORES</strong></font>
			</th>
		</tr>
		<tr>
			<th heigth="30%">
				<font size="2">Fecha : '.$fecha_ac.'</font>
			</th>
			<th heigth="30%">
				<font size="2">C&oacute;digo: RG-PROV</font>
			</th>
		</tr>
	</table><br><br><BR>';
		
$seleccion 	= "SELECT nombre,giro, direccion, telefono FROM proveedor order by nombre;";
$consulta 	= $conexion->query($seleccion);
		// aca genero la consulta
		$consulta = $conexion->query($seleccion); 
		
		$html1='<div align="center" class="table">
				<table id="mytable" align="left" width="100%" border="1">
				<thead>
				<tr>
				<th scope="col" width="20%" bgcolor="#DFEAEE"><div align="center"><font size="2"><span>NOMBRE</span></font></div></th>
				<th scope="col" width="20%"  bgcolor="#DFEAEE"><div align="center"><font size="2"><span>GIRO</span></div></font></th>
				<th scope="col" width="20%"  bgcolor="#DFEAEE"><div align="center"><font size="2"><span>DIRECCION</span></font></div></th>
				<th scope="col" width="20%"  bgcolor="#DFEAEE"><div align="center"><font size="2"><span>TELEFONO</span></font></div></th>
				</tr>
				</thead>';
		
		$html2="";
		
		while($row = $conexion->row($consulta)) 
		{ 
						
			$html2=$html2.'<tr> 
						<td><font size="2" ><div align="left">'.utf8_decode($row['nombre']).'</font></div></td>
						<td><font size="2"><div align="left">'.utf8_decode($row['giro']).'</font></div></td>
						<td><font size="2"><div align="left">'.utf8_decode($row['direccion']).'</font></div></td>
						<td><font size="2"><div align="left">'.utf8_decode($row['telefono']).'</span></font></td>
					</tr>';
				}
			$html3='</table></body>';
		
/*creamos un nuevo objeto */
$dompdf = new DOMPDF();
$dompdf->set_paper("letter","landscape");
         
/*Con el método "load_html" cargamos nuestro código HTML */

$html = $html_empresa.$html1.$html2.$html3;

//echo $html;

$dompdf->load_html($html);
$dompdf->render();
$dompdf->stream("listadoProv.pdf",array("Attachment"=>0) );
//$dompdf->stream("listadoProv.pdf");
		
		
		
		
