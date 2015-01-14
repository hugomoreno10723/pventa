<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Ingresar Producto</title>

</head>
<body>
<?php
include ("conex.php");
session_start();
?>
 <form name="formp" method="post" action="addp.php">
<br/>
<img src="image/name.png"><br/>
<div style="margin-left:7px;"><input name="name" type="text" required placeholder="Nombre del producto" ></div><br/>
<img src="image/caract.png"><br/>
<div style="margin-left:7px;"><textarea required name="caract" cols="50" rows="4" placeholder="Caracteristicas del producto"></textarea></div><br/>
<img src="image/pp.png"><br/>
<div style="margin-left:7px;"><input name="pp" type="text" required placeholder="Precio al publico en general" ><br/><br/>
<input src="image/aceptar.png" type="image" name="send" value="Enviar"/></div>
</form>
</body>
</html>