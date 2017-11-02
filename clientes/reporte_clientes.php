<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<LINK REL="stylesheet" TYPE="text/css" HREF="../estilos.css">
<title>Documento sin t&iacute;tulo</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
<h1 aligin="center">Reporte de Clientes</h1>
<?php
$conexion = mysql_connect("localhost","root","") 
or die ("Error en la conexion en el servidor");
mysql_select_db("sistppv",$conexion) or die("Error en la conexion a la base de datos");
$sql = "select * from clientes_personas";
$registros = mysql_query($sql,$conexion) or die ("error de sql");
echo '<table>';
echo '<tr><th>Nombre y Apellido</th><th>Documento</th><th>Estado</th>
<th>Cliente Estado</th><th>Fecha de Alta como Cliente</th></tr>';
while ($row = mysql_fetch_array ($registros))
{
echo '<tr>';
echo'<td>';
echo $row['personas_nya'];
echo'</td>';
echo'<td>';
echo $row['personas_dni'];
echo'</td>';
echo'<td>';
echo $row['personas_estado'];
echo'</td>';
echo'<td>';
echo $row['cliente_estado'];
echo'</td>';
echo'<td>';
echo $row['cliente_fecha_alta'];
echo'</td>';
echo'<td>';
echo '<a href = "modificacion_clientes.php?id_personas='.$row['id_personas'].'"><img src="../imagenes/actualizar.png" width="20" height="23" align="middle"></a>';
echo '<a href = "baja_cliente.php?id_personas='.$row['id_personas'].'"><img src="../imagenes/borrar-usuario.png" width="20" height="23" align="middle"></a>';
echo '<a href = "baja_logica.php?id_personas='.$row['id_personas'].'"><img src="../imagenes/borrar.png" width="20" height="23" align="middle"></a>';
echo'</td>';
echo '</tr>';
}
echo '</table>';
mysql_close($conexion);
?>
</body>
</html>
