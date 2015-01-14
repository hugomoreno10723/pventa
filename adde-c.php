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

$Usuario=$_REQUEST["Usuario"];
$Cliente=$_REQUEST["Cliente"];

for ($i=0;$i<count($Cliente);$i++) 
{ 
	/*	echo "<br> Usuario: ".$Usuario;
      	echo "<br> Cliente " . $i . ": " . $Cliente[$i];*/
		$pp="SELECT * FROM cliente WHERE id=".$Cliente[$i];
		$res=mysql_query($pp);
		while ($fila=mysql_fetch_array($res)){ 
			$nom_cliente=$fila['nombre'];
			$id_cliente=$fila['id'];
		} 
$sql="INSERT INTO EC (id, usuario, cliente, id_cliente) VALUES (0,'$Usuario', '$nom_cliente', '$id_cliente')";
$res=mysql_query($sql,$conectar);
/*echo "<script> 
alert('Datos: $Usuario, $id_cliente, $nom_cliente') ;
</script> ";*/
} 

/*$sql="INSERT INTO EC (id, usuario, cliente) VALUES (0,'$Usuario', '$Cliente')";
$res=mysql_query($sql,$conectar);*/

?>
<script type='text/javascript'>			location.href='./admin.php'</script>

</body>
</html>