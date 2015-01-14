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
$Usuario=$_SESSION['user'];
$cliente=$_REQUEST["select1"];
$cl="SELECT * FROM cliente WHERE id=".$cliente;
$res=mysql_query($cl);
while ($fila=mysql_fetch_array($res)){ 
	$alias_cliente=$fila['alias'];
	//$id_cliente=$fila['id'];
}
$producto=$_REQUEST["select2"];
$pp="SELECT * FROM CP WHERE id=".$producto;
$res2=mysql_query($pp);
while ($fila2=mysql_fetch_array($res2)){ 
	$nom_prod=$fila2['producto'];
//	$id_cliente=$fila['id'];
}
$precio=$_REQUEST["select3"];
$cantidad=$_REQUEST["cantidad"];
$vuelta=$_REQUEST["vuelta"];
$devolucion=$_REQUEST["devolucion"];
$abono=$_REQUEST["abono"];
$subtotal= $precio*($cantidad - $devolucion);
$total= $subtotal - $abono;
$fecha=date("Y-m-d");
$hora=date("H:i:s");


$sql="INSERT INTO venta VALUES (0, '$Usuario', '$alias_cliente', '$nom_prod', '$cantidad', '$vuelta', '$devolucion', '$abono', '$fecha', '$hora', '$total')";
$res=mysql_query($sql,$conectar);

/*echo "<script> 
alert('Datos:$nom_prod,$total,$hora') ;
</script> "; */
//"header("Location: admin.php");
?>
<script type='text/javascript'>			location.href='./ventas.php'</script> 

</body>
</html>