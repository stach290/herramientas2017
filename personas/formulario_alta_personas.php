<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Formulario alta de personas</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
<h1 align="center">Modulo de Carga de Personas</h1>
<form action="alta_personas.php" method="post">
<table>
<tr>
<td>Ingresar Apellido y Nombre:</td>
<td><input type="text" name="personas_nya"></td>
</tr>
<tr>
<td>Ingresar Documento:</td>
<td><input type="text" name="personas_dni"></td>
</tr>
<tr>
<td>seleccionar Sexo:</td>
<td>
<select name="personas_sexo">
<option value="">SELECCIONAR......</option>
<option value="Masculino">Masculino</option>
<option value="Femenino">Femenino</option>
</select>
</td>
</tr>
<tr>
<td>seleccionar Fecha de Nacimiento:</td>
<td><input type="date" name="personas_fecha_nacimiento"></td>
</tr>
<tr>
<td>seleccionar Estado:</td>
<td>
<select name="personas_estado">
<option value="">SELECCIONAR......</option>
<option value="Habilitado">Habilitado</option>
<option value="Fallecido">Fallecido</option>
</select>
</td>
</tr>
<tr>
<td><input type="submit" value="GRABAR"></td>
</tr>
</table>
</form>
</body>
</html>
