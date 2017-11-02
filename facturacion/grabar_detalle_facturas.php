<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Grabar Factura Cabecera Detalle</title>
</head>

<body>

<?
$conexion = mysql_connect () or die ();
mysql_select_db () or die ();
//$factura_fecha = $_POST[factura_fecha];
$rela_cliente = $_POST['rela_cliente'];
var_dump($rela_cliente);

$query1 = mysql_query ("select producto_precio from producto where id_producto = $_POST[rela_producto1]",$conexion) or die (mysql_error());
$query2 = mysql_query ("select producto_precio from producto where id_producto = $_POST[rela_producto2]",$conexion) or die (mysql_error());
$query3 = mysql_query ("select producto_precio from producto where id_producto = $_POST[rela_producto3]",$conexion) or die (mysql_error());
var_dump($query1);
var_dump($query2);
var_dump($query3);


while ($resultados1 = msql_fetch_array($query1))
{
	$precio1 = $resultados['producto_precio'];
	//$descripcion = $resultados[producto_nombre];
}
while ($resultados2 = mysql_fetch_array($query2))
{
	$precio2 = $resultados['producto_precio'];
	//$descripcion = $resultados[producto_nombre];
}

while ($resultados3 = mysql_fetch_array($query3))
{
	$precio3 = $resultados['producto_precio'];
	//$descripcion = $resultados[producto_nombre];
}
$querymax = mysql_query("SELECT MAX(id_factura) AS 'id' FROM factura",$conexion) or die ();
while ($row = mysql_fetch_array($querymax))
{
	$rela_factura = $row['id'];
}

$id = $rela_factura + 1 ;

$arreglo1 = array($_POST[rela_producto1],$_POST[detalle_cantidad1],$_POST[detalle_cantidad1] * $precio1);
$arreglo2 = array($_POST[rela_producto2],$_POST[detalle_cantidad2],$_POST[detalle_cantidad2] * $precio2);
$arreglo3 = array($_POST[rela_producto3],$_POST[detalle_cantidad3],$_POST[detalle_cantidad3] * $precio3);

$subtotal1 = $_POST[detalle_cantidad1] * $precio1;
$subtotal2 = $_POST[detalle_cantidad2] * $precio2;
$subtotal3 = $_POST[detalle_cantidad3] * $precio3;
$total = $subtotal1 + $subtotal2 + $subtotal3;
$total2 = $total + 21;

var_dump($total2);


$sql ="INSERT INTO detalle (
rela_producto,
detalle_cantidad,
detalle_importe,
detalle_subtotal,
rela_factura
)VALUES(".implode(",",$arreglo1).",$subtotal1,$id),(".implode(",",$arreglo2).",$subtotal2,$id),(".implode(",",$arreglo3).",subtotal3,$id);";


mysql_query ("$sql",$conexion) or die (mysql_error());

$sql2 = "INSERT INTO factura VALUES ($id,$rela_cliente,curdate(),'$_POST[factura_tipo]',$total2)";

mysql_query ($sql2,$conexion) or die (mysql_error());


mysql_close($conexion);


?>

</body>
</html>
