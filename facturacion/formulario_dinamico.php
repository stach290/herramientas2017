<html>
<head>
<title>Crear Campo de texto</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<script type="text/javascript">
 
icremento = 0;
function crear(obj) {
  icremento++;

if(icremento < 11){ 
  field = document.getElementById('field');
 contenedor = document.createElement('div');
  contenedor.id = 'div'+icremento;
  field.appendChild(contenedor);
 
  campo_texto = document.createElement('input');
  campo_texto.type = 'text';
  campo_texto.name = 'text'+'[ ]';
  contenedor.appendChild(campo_texto);
  
  combo = document.createElement('select');
  combo.type = 'text';
  combo.name = 'producto'+'[ ]';
 
// Creamos un objeto option
var miOption=document.createElement("option");
 
// Añadimos las propiedades value y label
miOption.setAttribute("value","85");
//miOption.setAttribute("label","casa");
miOption.innerHTML = "producto1";
// Añadimos el option al select
combo.appendChild(miOption);
 
var miOption2=document.createElement("option");
miOption2.setAttribute("value","50");
//miOption2.setAttribute("label","avion");
miOption2.innerHTML = "producto2";
// Dejamos seleccionado este valor por defecto
miOption2.setAttribute("selected","true");
 
combo.appendChild(miOption2);

var miOption3=document.createElement("option");
miOption3.setAttribute("value","50");
//miOption2.setAttribute("label","avion");
miOption3.innerHTML = "producto3";
// Dejamos seleccionado este valor por defecto
miOption3.setAttribute("selected","true");
 
combo.appendChild(miOption3);
 
  contenedor.appendChild(combo);
 
}
 else{
   alert("registro maximo 10");
}
}
function borrar(obj) {
  field = document.getElementById('field');
  field.removeChild(document.getElementById(obj));
}

/*function cargar(){
    var select = document.getElementById("select1").value; // para saber el valor de select1
 
    var miSelect2 = document.getElementById("producto");
    var aTag = document.createElement('option');
    aTag.setAttribute('value',"1");
    aTag.innerHTML = "Uno";
    miSelect2.appendChild(aTag)
}*/
</script>
</head>
<body>
<form name="form1" method="POST" action="save.php">
<fieldset id="field">
<input type="button" value="Crear Factura" onclick="crear(this)">
<input type="button" value="Eliminar caja de texto" onclick="borrar(this)">
<input name="save" type="submit" value="Generar" onclick="enviar(this)">
</fieldset>
</form>
</body>
</html>
</body>
</html>