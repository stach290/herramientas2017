<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Documento sin t&iacute;tulo</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
<?php
$conexion = mysql_connect ("localhost","root","") or die ("Error de Sql");
mysql_select_db ("sistppv",$conexion) or die ("Problemas en la seleccion de la base de datos");
$buscar = mysql_query("select * from clientes",$conexion)or die("Error en la consulta SQL");
while($row = mysql_fetch_array($buscar))
{
echo '<option value ="'.$row['id_personas'].'">'.$row['personas_nya'].','.$row['personas_dni'].',
'.$row['personas_sexo'].'</option>';
}
?>
</body>
</html>
