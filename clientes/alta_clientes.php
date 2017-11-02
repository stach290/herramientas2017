<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Documento sin t&iacute;tulo</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
<?PHP
$conexion = mysql_connect("localhost","root","") 
or die ("Error en la conexion en el servidor");
mysql_select_db("sistppv",$conexion) or die("Error en la conexion a la base de datos");
mysql_query("insert into clientes
(rela_personas,cliente_fecha_alta,cliente_estado,cliente_mora)
value('$_REQUEST[rela_personas]','curdate()',
'$_REQUEST[cliente_estado]','$_REQUEST[cliente_mora]')",$conexion) 
or die("Error de SQL");
mysql_close($conexion);
echo "Carga realizada correctamente";
?>
</body>
</html>
