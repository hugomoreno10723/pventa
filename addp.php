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

$nombre=$_POST["name"];
$caract=$_POST["caract"];
$pp=$_POST["pp"];


$sql="INSERT INTO producto VALUES (0,'$nombre', '$caract',$pp)";
$res=mysql_query($sql,$conectar);

//"header("Location: admin.php");
?>
<script type='text/javascript'>			location.href='./admin.php'</script> 
</body>
</html>