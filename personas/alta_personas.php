<?PHP
$conexion = mysql_connect("localhost","root","") 
or die ("Error en la conexion en el servidor");
mysql_select_db("sistppv",$conexion) or die("Error en la conexion a la base de datos");
$personas_nya = $_REQUEST['personas_nya'];
mysql_query("insert into personas 
(personas_nya,personas_dni,personas_sexo,personas_fecha_nacimiento,personas_estado
)values('$_REQUEST[personas_nya]','$_REQUEST[personas_dni]',
'$_REQUEST[personas_sexo]','$_REQUEST[personas_fecha_nacimiento]','$_REQUEST[personas_estado]')",$conexion) 
or die("Error de SQL");
mysql_close($conexion);
echo "Carga realizada correctamente";
?>
<center>
<big><a href=formulario_alta_personas.php>Volver al menu...</a></big>
</center>