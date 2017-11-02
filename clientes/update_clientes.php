<html>
<head>
<title>Modificar cliente</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
<?php
		  $conexion = mysql_connect("localhost","root","") or die ("Error en la conexion en el servidor");
          mysql_select_db("sistppv",$conexion) or die("Error en la conexion a la base de datos");
		  $buscar = mysql_query($conexion, "update clientes set
					rela_personas = '$_REQUEST[rela_personas]',
					cliente_fecha_alta = '$_REQUEST[cliente_fecha_alta]',
					cliente_estado = '$_REQUEST[cliente_estado]',
					cliente_mora = '$_REQUEST[cliente_mora]'
					WHERE id_cliente = $_REQUEST[id_cliente];")or
			die(mysql_error($conexion));
			     echo "El Producto fue modificado con exito!";
				 mysql_close($conexion);
				 
?>
</body>
</html>