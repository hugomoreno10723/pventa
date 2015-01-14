<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Ingresar Empleado</title>

</head>
<body>
<?php
include ("conex.php");
session_start();
?>
 <form name="forme" method="post" action="adde.php" enctype="multipart/form-data"><br/>
<img src="image/name.png"><br/>
<div style="margin-left:7px;"><input name="Name" type="text" required placeholder="Nombre Completo" ></div>
<div id="Info"></div><br/>
<img src="image/user.png"><br/>
<div style="margin-left:7px;"><input name="user" type="text" required placeholder="Usuario o Alias" ></div><br/>
<img src="image/pass.png"><br/>
<div style="margin-left:7px;"><input name="pass" type="password" required placeholder="Su Contraseña"></div><br/>
<div style="margin-left:7px;">Jerarquía:<br/>
<select name="puesto" required>
	<option value"">Seleccione la jerarquía del usuario</option>
	<option value="Empleado">Empleado</option>
    <option value="Jefe">Jefe</option>
    <option value="Ventas">Ventas</option>
</select><br/><br/>
<input src="image/aceptar.png" type="image" name="send" value="Enviar"/>
</form>
</body>
</html>