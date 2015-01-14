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
		$query=$db->query("SELECT * FROM venta ORDER BY id DESC LIMIT 20");
		$datos=array();
		while ($usuarios=$query->fetch_array())
		{
			$datos[]=array(	"fecha"=>$usuarios["fecha"],
							"hora"=>$usuarios["hora"],
							"vuelta"=>$usuarios["vuelta"],
							"empleado"=>$usuarios["usuario"],
							"cliente"=>$usuarios["cliente"],
							"producto"=>$usuarios["producto"],
							"cantidad"=>$usuarios["cantidad"],
							"total"=>$usuarios["total"],
							"devolucion"=>$usuarios["devolucion"],
							"abono"=>$usuarios["abono"],
			);
		}
		echo json_encode($datos);
	}
}
?>