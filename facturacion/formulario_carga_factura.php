<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>modulo de facturacion</title>
</head>

<body>
<h1 align="center">MODULO DE FACTURACION</h1>
<form action="grabar_detalle_facturas.php" method="post">
  
  <table align="center">
    <tr>
      <td width="278">Seleccionar Cliente:</td>
      <td width="130">
        <select name="RELA_CLIENTES">
          <option value="">SELECCIONAR......</option>
          <?php 
 $con = mysql_connect("localhost","root","") 
or die ("Error en la conexion en el servidor");
 mysql_select_db("sist_facturacion",$con) or
 die("Problemas en la selecci&oacute;n de la base de datos");  
 $buscar = mysql_query("select * FROM vista_cliente_personas",$con) 
 or die(mysql_error($con));
 while($row = mysql_fetch_array($buscar))
 {
 echo '<option value = "'.$row['ID_PERSONAS'].'">'.$row['PERSONAS_AYN'].'.'.$row['PERSONAS_DNI'].'.'.$row['PERSONAS_ESTADOS'].'</option>';
 }
?>
        </select>
      </td>
    </tr>
    <tr>
      <td>Seleccionar Tipo de Factura:</td>
      <td>
        <select name="FACTURAS_TIPO">
          <option value="">Seleccionar...</option>
          <option value="A">A</option>
          <option value="B">B</option>
          <option value="C">C</option>
        </select>
      </td>
    </tr>
    <tr> </tr>
    <tr>
      <td align="center"><div align="center">Cargar el Detalle de la Factura</div></td>
    </tr>
    <tr>
      <td>        <div align="center">      </div></td>
    </tr>
    <tr>
      <td>
        <div align="center">
          <select name="RELA_PERSONAS">
            <option value="">SELECCIONAR......</option>
            <?php 
 $con = mysql_connect("localhost","root","") 
or die ("Error en la conexion en el servidor");
 mysql_select_db("sist_facturacion",$con) or
 die("Problemas en la selecci&oacute;n de la base de datos");  
 $buscar = mysql_query("select * FROM personas where personas_estado not like '%fallecido%'",$con) 
 or die(mysql_error($con));
 while($row = mysql_fetch_array($buscar))
 {
 echo '<option value = "'.$row['id_personas'].'">'.$row['personas_nya'].'.'.$row['personas_dni'].'.'.$row['personas_estado'].'</option>';
 }
?>
          </select>
          <label>
          <input name="detalle_cantidad12" type="text" id="detalle_cantidad125" value="Ingresar Cantidad" />
          </label>
        </div>
        <p align="center">
          <select name="RELA_PERSONAS">
            <option value="">SELECCIONAR......</option>
             <?php 
 $con = mysql_connect("localhost","root","") 
or die ("Error en la conexion en el servidor");
 mysql_select_db("sist_facturacion",$con) or
 die("Problemas en la selecci&oacute;n de la base de datos");  
 $buscar = mysql_query("select * FROM personas where PERSONAS_ESTADOS not like '%fallecido%'",$con) 
 or die(mysql_error($con));
 while($row = mysql_fetch_array($buscar))
 {
 echo '<option value = "'.$row['ID_PERSONAS'].'">'.$row['PERSONAS_AYN'].'.'.$row['PERSONAS_DNI'].'.'.$row['PERSONAS_ESTADOS'].'</option>';
 }
?>
          </select>
          <label>
          <input name="detalle_cantidad13" type="text" id="detalle_cantidad135" value="Ingresar Cantidad" />
          </label>
        </p>
        <p align="center">
          <select name="RELA_PERSONAS">
            <option value="">SELECCIONAR......</option>
             <?php 
 $con = mysql_connect("localhost","root","") 
or die ("Error en la conexion en el servidor");
 mysql_select_db("sist_facturacion",$con) or
 die("Problemas en la selecci&oacute;n de la base de datos");  
 $buscar = mysql_query("select * FROM personas where PERSONAS_ESTADOS not like '%fallecido%'",$con) 
 or die(mysql_error($con));
 while($row = mysql_fetch_array($buscar))
 {
 echo '<option value = "'.$row['ID_PERSONAS'].'">'.$row['PERSONAS_AYN'].'.'.$row['PERSONAS_DNI'].'.'.$row['PERSONAS_ESTADOS'].'</option>';
 }
?>
          </select>
          <label>
          <input name="detalle_cantidad14" type="text" id="detalle_cantidad145" value="Ingresar Cantidad" />
          </label>
      </p></td>
    </tr>
    <tr>
      <td><div align="center">
          <input name="submit" type="submit" value="Grabar" align="cernter" />
      </div></td>
    </tr>
  </table>
  <label>    </label>
  </p>
</form>


</body>

</html>
