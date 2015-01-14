<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Ingresar Cliente</title>

</head>
<body>
<?php
include ("conex.php");
session_start();
?>
<form name="formc" method="post" action="addc.php">
<div align="right" style="margin-right:20px;"><input type="checkbox" name="devolucion" value="1">Devoluciones</div><img src="image/name.png"><br/>
<div style="margin-left:7px;"><input name="name_client" type="text" required placeholder="Nombre del Cliente" ></div>
<img src="image/alias.png"> <img src="image/rfc.png" style="margin-left:170px;"><img src="image/cp.png" style="margin-left:170px;"> 
<div style="margin-left:7px;"><input name="alias" type="text2" required placeholder="Alias o sobrenombre" ><input style="margin-left:10px;" name="rfc" type="text2" required placeholder="R.F.C. del Cliente"><input name="cp" style="margin-left:10px;" type="text2" placeholder="Código Postal"></div>
<img src="image/domicilio.png"><br/>
<input style="margin-left:7px;" name="dom" type="text" required placeholder="Domicilio del Cliente"><br/>
<img src="image/colonia.png"><br/>
<input style="margin-left:7px;" name="col" type="text" required placeholder="Colonia del Cliente"><br/>
<img src="image/correo.png"> <img src="image/tel.png" style="margin-left:75px;"><img src="image/cel.png" style="margin-left:107px;"><br/>

<input style="margin-left:7px;" name="correo" type="text2" required placeholder="E-mail del Cliente">

<input style="margin-left:10px;" name="tel" type="text2" required placeholder="Telefono">

<input style="margin-left:10px;" name="cel" type="text2" required placeholder="Número del Móvil"><br/><br/>
<input style="margin-left:7px;" src="image/aceptar.png" type="image" name="send" value="Enviar"/>
</form>
</body>
</html>