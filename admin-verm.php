<?php
$dbhost="willycof.globatmysql.com";
$dbname="bd_puntoventa";
$dbuser="hugo10723";
$dbpass="ipodrosa";
$db = new mysqli($dbhost,$dbuser,$dbpass,$dbname);
session_start();
if (isset($_GET) && count($_GET)>0)
{
	if ($db->connect_errno) 
	{
		die ("<span class='ko'>Fallo al conectar a MySQL: (" . $db->connect_errno . ") " . $db->connect_error."</span>");
	}
	else
	{
		$usuario=$_SESSION['user'];
		$fecha_actual=date("Y-m-d");
		$query=$db->query("SELECT de,mensaje,hora FROM mensaje WHERE (para='All') AND fecha='$fecha_actual'");
		$datos=array();
		while ($usuarios=$query->fetch_array())
		{
			$datos[]=array(	"de"=>$usuarios["de"],
							"mensaje"=>$usuarios["mensaje"],
							"hora"=>$usuarios["hora"]
			);
		}
		echo json_encode($datos);
	}
}
?>