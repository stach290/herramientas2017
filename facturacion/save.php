<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Documento sin t&iacute;tulo</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php
$conexion = mysql_connect("localhost","root","") 
or die ("Error en la conexion al servidor");
 mysql_select_db("sist_facturacion",$conexion) or
 die("Problemas en la selecci&oacute;n de la base de datos");  

$x1=$_POST["text"][0];
if($x1==""){
   $x1 = 0;
}
$x2=$_POST["text"][1];
if($x2==""){
   $x2 = 0;
}
$x3=$_POST["text"][2];
if($x3==""){
   $x3 = 0;
}
$x4=$_POST["text"][0];
if($x4==""){
   $x4 = 0;
}
$y1=$_POST["producto"][0];
$y2=$_POST["producto"][1];
$y3=$_POST["producto"][2];
$y4=$_POST["producto"][3];

$precio1 = $x1 * $y1;
$precio2 = $x2 * $y2;
$precio3 = $x3 * $y3;
$precio4 = $x4 * $y4;
/*-------------------el ultimo id de la factura----------------------------*/
$MAX_ID = "select max(ID_FACTURAS) as ultima_factura from factura";
$query = mysql_query($MAX_ID,$conexion) or die ('ERROR DE SELECT MAX');
while ($row = mysql_fetch_array($query))
{
  $id_factura = $row['ultima_factura'] + 1;
}
var_dump($id_factura);
/*-------------------detalle----------------------------*/
$sql = "insert into detalles 
(RELA_FACTURA,RELA_PRODUCTOS,DETALLE_CANTIDAD,DETALLE_IMPORTE)
values ($id_factura,1,$x1,$precio1),($id_factura,2,$x2,$precio2),($id_factura,2,$x3,$precio3),($id_factura,2,$x4,$precio4)";
var_dump($sql);
mysql_query ($sql,$conexion) or die (mysql_error());
/*-------------------cabecera----------------------------*/

$sql_factura = "insert into factura values ($id_factura,1,curdate(),'A',200)";
/*var_dump($sql_factura);*/
mysql_query($sql_factura,$conexion) or die ("ERROR DE SQL");

mysql_close($conexion);

?>
</body>
</html>
