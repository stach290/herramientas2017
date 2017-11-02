<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>formulario modificacion</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<center><h1>"Modificar clientes"</h1></center>
</head>
<body>
<center>
<form action = "modificacion_clientes.php" method = "post">
<table width="392">
<tr>
 <td width="438">Seleccionar para modificar:</td>
 <td width="143">
<select name = "id_cliente">
       <option value = "">Seleccione para modificar</option>
<?php
$conexion = mysql_connect ("localhost","root","") or die ("Problemas en la conexion");
mysql_select_db ("sistppv",$conexion) or die("Error en la conexion a la base de datos");
$buscar = mysql_query ("select *from personas right join clientes
on rela_personas = id_personas",$conexion)or die("Error en la consulta SQL");
while($row = mysql_fetch_array ($buscar))
{
echo '<option value ="'.$row['id_cliente'].'">'.$row['personas_nya'].','.$row['rela_personas'].','.$row['cliente_fecha_alta'].',
'.$row['cliente_estado'].','.$row['cliente_mora'].'</option>';
}
?>
</select>
</td>
</tr>
<td><input type = "submit" name = "Modificar" value = "Modificar" ></td>
</table>
</form>
</center>
</body>
</html>
