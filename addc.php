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


if (empty($_POST['devolucion'])) {
  $devolucion=0;
}
else{
	$devolucion=$_POST["devolucion"];
}
$nombre=$_REQUEST["name_client"];
$alias=$_POST["alias"];
$rfc=$_POST["rfc"];
$cod_postal=$_POST["cp"];
$domicilio=$_POST["dom"];
$colonia=$_POST["col"];
$correo=$_POST["correo"];
$tel=$_POST["tel"];
$cel=$_POST["cel"];

$sql="INSERT INTO cliente VALUES (0, '$nombre', '$alias', '$rfc', '$domicilio', '$colonia', $cp, '$correo', $tel, $devolucion, $cel)";
$res=mysql_query($sql,$conectar);
/*
echo "<script> 
alert('Datos: $devolucion,$nombre,$alias,$rfc,$cod_postal,$domicilio,$colonia,$correo, $tel,$cel') ;
</script> "; */
//"header("Location: admin.php");
?>
<script type='text/javascript'>			location.href='./admin.php'</script> 

</body>
</html>