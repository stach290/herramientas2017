<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>editar entidad</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
<?php
$conexion = mysql_connect ("localhost","root","") or die ("Error de Sql");
mysql_select_db ("sistppv",$conexion) or die ("Problemas en la seleccion de la base de datos");
$buscar = mysql_query ("update personas set
			        personas_nya  = '$_REQUEST[personas_nya]',
					personas_dni = '$_REQUEST[personas_dni]',
					personas_sexo = '$_REQUEST[personas_sexo]',
					personas_fecha_nacimiento = '$_REQUEST[personas_fecha_nacimiento]',
					personas_estado = '$_REQUEST[personas_estado]'
					where id_personas = $_REQUEST[id_personas]",$conexion) or
die (mysql_error ($conexion));
echo "El Producto fue modificado con exito!";
mysql_close ($conexion);
				 
?>
</body>
</html>
