<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Modulo de Carga de clientes</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
<h1 align="center">Modulo de Carga de clientes</h1>
<form action="alta_clientes.php" method="post">
<table>
<tr>
<td>Seleccionar Estado del Cliente:</td>
<td>
<select name="cliente_estado">
<option value="">SELECCIONAR......</option>
<option value="Alta">Alta</option>
<option value="Pendiente">Pendiente</option>
</select>
</td>
</tr>
<tr>
<td>Importe por Mora:</td>
<td><input type="text" name="cliente_mora"></td>
</tr>
<tr>
<td>Seleccionar el Cliente:</td>
<td>
<select name="rela_personas">
<option value="">SELECCIONAR......</option>
<?php 
 $con = mysql_connect("localhost","root","") 
or die ("Error en la conexion en el servidor");
 mysql_select_db("sistppv",$con) or
 die("Problemas en la selecci&oacute;n de la base de datos");  
 $buscar = mysql_query("select * FROM personas where personas_estado not like '%fallecido%'",$con) 
 or die(mysql_error($con));
 while($row = mysql_fetch_array($buscar))
 {
 echo '<option value = "'.$row['id_personas'].'">'.$row['personas_nya'].'.'.$row['personas_dni'].'.'.$row['personas_estado'].'</option>';
 }
?>
</select>
</td>
</tr>
<tr>
<td><input type="submit" value="GRABAR"></td>
</tr>
</table>
</form>
</body>
</html>
