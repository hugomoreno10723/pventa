<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Crear Mensaje</title>
			
</head>
<body>
<?php
include ("conex.php");
session_start();
$musuario=$_SESSION['user'];
$usuarios=mysql_query("SELECT DISTINCT usuario,nombre FROM usuario WHERE usuario NOT IN ('$musuario') ORDER BY nombre ASC") or die("problemas en consulta:" . mysql_error()); 
?>
Para:
<form name="form1" method="post" action="addm.php">
<select name="usuario" id="usuario" required> 
    <option value="">Selecciona un usuario de la lista</option>
    <?php
	while ($lista_usuario = mysql_fetch_array($usuarios)) { ?>  
    
    <option value="<?php echo $lista_usuario['musuario']; ?>"><?php echo $lista_usuario['nombre']; ?></option> 

                    <?php } ?> 
</select>
<br/><br/><br/>
Mensaje:<br/>
<textarea required name="texto" id="texto" cols="50" rows="4" placeholder="Ingresa aquí tu mensaje"></textarea>
<br/><br/>
<input style="margin-left:7px;" src="image/aceptar.png" type="image" name="send" value="Enviar"/>
</form>
</body>

</html>