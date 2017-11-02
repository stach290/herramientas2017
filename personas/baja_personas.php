<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Eliminar personas</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
<h2>Baja Personas</h2>
<form action = "delete_personas.php" method = "post">
<table width="500">
<center>
<tr>
 <td width="231">Seleccionar para eliminar:</td>
 <td width="157">
<select name = "id_personas">
       <option value = "">Seleccione para dar de Baja a una Persona</option>
<?php
$conexion = mysql_connect ("localhost","root","") or die ("Error de Sql");
mysql_select_db ("sistppv",$conexion) or die ("Problemas en la seleccion de la base de datos");
$buscar = mysql_query("select * from personas",$conexion)or die("Error en la consulta SQL");
while($row = mysql_fetch_array($buscar))
{
echo '<option value ="'.$row['id_personas'].'">'.$row['personas_nya'].','.$row['personas_dni'].',
'.$row['personas_sexo'].'</option>';
}
?>
</select>
</td>
</tr>
<td><input type = "submit" name = "Eliminar" value = "Eliminar" ></td>
</center>
</table>
</form>
</body>
</html>