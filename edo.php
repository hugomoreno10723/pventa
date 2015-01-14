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
$tarjet=$_SESSION['user']= $_REQUEST["user"];
$pass= $_REQUEST["pass"];
$pass_enc= md5($pass);
$sql="SELECT * FROM usuario WHERE usuario='$tarjet' AND pass='$pass_enc'";
$query=mysql_query($sql);
$row = mysql_fetch_array($query);
if(($row['puesto']=='Ventas')){
	echo "<script type='text/javascript'>location.href='./ventas.php'</script> ";
}
if(($row['puesto']=='Jefe')){

echo "<script type='text/javascript'>location.href='./admin.php'</script> ";
}
if(($row['puesto']=='Empleado')){

echo "<script type='text/javascript'>location.href='./admin.php'</script> ";
}
?>


</body>
</html>