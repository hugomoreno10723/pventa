<?php 
include("conexion.php");

if($_GET['action'] == 'listar')
{
	// valores recibidos por POST
	$vnm   = $_POST['nombre_empleado'];
	$vnm_c   = $_POST['nombre_cliente'];
	$vnm_p   = $_POST['nombre_producto'];
	$vuelta = $_POST['vuelta'];
	$vdel  = ($_POST['del'] != '' ) ? explode("/",$_POST['del']) : '';
	$val   = ($_POST['al']  != '' ) ? explode("/",$_POST['al']) : '';
	
/*	$sql = "SELECT * FROM personas pe, pais p
				WHERE pe.pais = p.id_pais ";	*/
			/*	$sql = "SELECT * FROM personas pe WHERE pe.id=pe.id";*/
	$sql = "SELECT * FROM venta v WHERE v.id=v.id ";			
										
	// Vericamos si hay algun filtro
	$sql .= ($vnm != '')      ? " AND CONCAT(usuario) LIKE '%$vnm%'" : "";
	$sql .= ($vnm_c != '')      ? " AND CONCAT(cliente) LIKE '%$vnm_c%'" : "";
	$sql .= ($vnm_p != '')      ? " AND CONCAT(producto) LIKE '%$vnm_p%'" : "";
	$sql .= ($vuelta > 0)      ? " AND v.vuelta = '".$vuelta."'" : "";
	$sql .= ($vdel && $val)   ? " AND fecha BETWEEN '$vdel[2]-$vdel[0]-$vdel[1]' 													AND '$val[2]-$val[0]-$val[1]' " : "";
	
	// Ordenar por
	$vorder = $_POST['orderby'];
	
	if($vorder != ''){
		$sql .= " ORDER BY ".$vorder;
	}
	
	$query = mysql_query($sql);
	$datos = array();
	
	while($row = mysql_fetch_array($query))
	{
		$datos[] = array(
			'id'          => $row['id'],
			'empleado'    => $row['usuario'],
			'fecha'		  => $row['fecha'],
			'hora'		  => $row['hora'],
			'vuelta'      => $row['vuelta'],
			'cliente'     => $row['cliente'],
			'producto'    => $row['producto'],
			'cantidad'    => $row['cantidad'],
			'total'       => $row['total'],
			'devolucion'  => $row['devolucion'],
			'abono'       => $row['abono'],			
			
		);
	}
	// convertimos el array de datos a formato json
	echo json_encode($datos);
}

?>