<?php
$dbhost="willycof.globatmysql.com";
$dbname="bd_puntoventa";
$dbuser="hugo10723";
$dbpass="ipodrosa";
$db = new mysqli($dbhost,$dbuser,$dbpass,$dbname);
if (isset($_POST) && count($_POST)>0)
{
	if ($db->connect_errno) 
	{
		die ("<span class='ko'>Fallo al conectar a MySQL: (" . $db->connect_errno . ") " . $db->connect_error."</span>");
	}
	else
	{
		$query=$db->query("update cliente set ".$_POST["campo"]."='".$_POST["valor"]."' where id='".intval($_POST["id"])."' limit 1");
		if ($query) echo "<span class='ok'>Valores modificados correctamente.</span>";
		else echo "<span class='ko'>".$db->error."</span>";
	}
}

if (isset($_GET) && count($_GET)>0)
{
	if ($db->connect_errno) 
	{
		die ("<span class='ko'>Fallo al conectar a MySQL: (" . $db->connect_errno . ") " . $db->connect_error."</span>");
	}
	else
	{
		$query=$db->query("select * from cliente order by id asc");
		$datos=array();
		while ($usuarios=$query->fetch_array())
		{
			$datos[]=array(	"rfc"=>$usuarios["rfc"],
							"nombre"=>$usuarios["nombre"],
							"domicilio"=>$usuarios["domicilio"],
							"correo"=>$usuarios["correo"],
							"tel"=>$usuarios["tel"]
			);
		}
		echo json_encode($datos);
	}
}
?>