<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Formulario modificar cliente</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
<form method="post" action="update_clientes.php">
<?php
$conexion = mysql_connect("localhost","root","") or die ("Problemas en la conexion");
mysql_select_db("sistppv",$conexion) or die ("Problemas en la seleccion de la base de datos");
$registro = mysql_query($conexion, "select * from clientes where id_personas = $_REQUEST[id_personas]")or die("Error en la consulta SQL");
if($reg = mysql_fetch_array($registro))
{
?>
    <table>
	    <tr>
	        <td>Apellido y Nombre</td>
		    <td><input type="text" name="personas_ayn" size="50" value="<?php echo
		    $reg['personas_nya'];?>"></td>
		</tr>
		<tr>
		    <td>Numero de documento</td>
            <td><input type="text" name="personas_nrdoc" size"50" value="<?php echo
		    $reg['personas_dni'];?>"></td>
        </tr>
        <tr>
            <td>Sexo</td>
            <td><input type="text" name="personas_sexo" size"50" value="<?php echo
		    $reg['personas_sexo'];?>"></td>
		</tr>
        <tr>
            <td>Fecha de Nacimiento</td>
            <td><input type="date" name="personas_fecnac" size"50" value="<?php echo
		    $reg['personas_fecha_nacimiento'];?>"></td>
        </tr>
        <tr>
             <td><input type="submit" value="Confirmar" ></td>
        </tr>
        <tr>
             <td><input type="hidden" name="id_personas" value="<?php echo $reg['id_personas'];?>"></td>
        </tr>
    </table>
	</form>
<?php 
}
else {
echo 'No existe el Producto';
}
mysql_close($conexion);	  
?>
</body>
</html>
