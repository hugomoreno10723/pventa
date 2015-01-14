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

$nombre=$_REQUEST["Name"];
$usuario=$_POST["user"];
$pass=$_POST["pass"];
$pass_enc=md5($pass);
$posicion=$_POST["puesto"];

$sql="INSERT INTO usuario VALUES (0, '$nombre', '$pass_enc', '$usuario','$posicion')";
$res=mysql_query($sql,$conectar);

/*echo "<script> 
alert('Datos: $res') ;
</script> "; */
//"header("Location: admin.php");
?>
<script type='text/javascript'>			location.href='./admin.php'</script> 

</body>
</html>