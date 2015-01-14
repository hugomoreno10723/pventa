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
$musuario=$_SESSION['user'];
"<script> 
alert('Datos: $musuario') ;
</script> "; 

$para=$_POST["usuario"];
$mensaje=$_POST["texto"];
$fecha=date("Y-m-d");
$hora=date("H:i:s");

$sql="INSERT INTO mensaje VALUES (0,'$usuario', '$para', '$mensaje', '$fecha', '$hora',0)";
$res=mysql_query($sql,$conectar);

//"header("Location: admin.php");
?>
<script type='text/javascript'>			location.href='./admin.php'</script> 
</body>
</html>