<html>
<head>
<title>Baja conexion</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
<?php
$conexion = mysql_connect("localhost","root","") 
or die ("Error en la conexion en el servidor");
mysql_select_db("sistppv",$conexion) or die("Error en la conexion a la base de datos");
$registros = mysql_query("Select id_personas from personas
where id_personas = '$_REQUEST[id_personas]'",$conexion)or
die("Problemas en el SQL".mysql_error());
if($reg = mysql_fetch_array($registros))
{
mysql_query("delete from personas where id_personas = $_REQUEST[id_personas]",$conexion);
echo("El Borrado ha sido exitoso");
}
else
{
echo"No existe el registro.";
}
mysql_close($conexion);
?>
</body>
</html>
