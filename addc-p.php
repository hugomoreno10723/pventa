<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>
<body>
<?php
include ("conex.php");
session_start();


$Cliente=$_REQUEST["Cliente"];
$pp="SELECT * FROM cliente WHERE id=".$Cliente;
$res=mysql_query($pp);
while ($fila=mysql_fetch_array($res)){ 
	$alias_cliente=$fila['alias'];
	$id_cliente=$fila['id'];
}

$Producto=$_REQUEST["lyon"];

$pp="SELECT id,nombre,precio FROM producto WHERE id=".$Producto;
$res=mysql_query($pp);
while ($fila=mysql_fetch_array($res)){ 
	$nom_producto=$fila['nombre'];
	$Publico=$fila['precio'];
}



//Si el campo "username" está vacío
if (empty($_POST['PrecioE'])) {
  $Especial=$Publico;
}
else {
	$Especial=$_POST["PrecioE"];
	
}

$sql="INSERT INTO CP (id, cliente, id_cliente, producto, precio) VALUES (0,'$alias_cliente', '$id_cliente' ,'$nom_producto', '$Especial')";
$res=mysql_query($sql,$conectar);
/*echo "<script> 
alert('Datos: $Cliente, $Producto, $nom_producto, $Especial') ;
</script> ";*/

?>
<script type='text/javascript'>			location.href='./admin.php'</script> 

</body>
</html>