<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>editar Formulario</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
<form method="post" action="update_personas.php">
<?php
$conexion = mysql_connect ("localhost","root","") or die ("Error de Sql");
mysql_select_db ("sistppv",$conexion) or die ("Problemas en la seleccion de la base de datos");
$registro = mysql_query ("select * from personas where id_personas = $_REQUEST[id_personas]",$conexion)
or die("Error en la consulta SQL");
if ($reg = mysql_fetch_array ($registro))
{
?>
<table>
<tr>
<td>Editar Nombre y Apellido</td>
<td><input type="text" name="personas_nya" value="<?php echo $reg['personas_nya'];?>"></td>
</tr>
<tr>
<td>Editar Numero de documento</td>
<td><input type="text" name="personas_dni" value="<?php echo $reg['personas_dni'];?>"></td>
</tr>
<tr>
<td>Editar Sexo</td>
<td><input type="text" name="personas_sexo" value="<?php echo $reg['personas_sexo'];?>"></td>
</tr>
<tr>
<td>Editar Fecha de Nacimiento</td>
<td><input type="date" name="personas_fecha_nacimiento" value="<?php echo $reg['personas_fecha_nacimiento'];?>"></td>
</tr>
<td>Editar Estado</td>
<td><input type="text" name="personas_estado" value="<?php echo $reg['personas_estado'];?>"></td>
</tr>
<tr>
<td><input type="submit" value="Confirmar" ></td>
</tr>
<tr>
<td><input type="hidden" name="id_personas" value="<?php echo $reg['id_personas']?>"></td>
</tr>
</table>
<?php 
}
else
{
echo 'No existe datos de esa Entidad';
}
mysql_close ($conexion);
?>
</form>
</body>
</html>
