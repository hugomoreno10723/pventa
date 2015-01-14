<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Ingresar Cliente</title>
<link rel="stylesheet" href="./venta-mensaje.css" type="text/css">
</head>
<body>
<?php
include ("conex.php");
session_start();
	/*	$usuario=$_SESSION['user'];
		$fecha_actual=date("Y-m-d");
		$sql="SELECT de,mensaje,hora FROM mensaje WHERE (para='$usuario' OR para='All') AND fecha='$fecha_actual'";
		$mensaje=mysql_query($sql);
		while($row = mysql_fetch_array($mensaje)) { 
     echo $row['de']."-".$row['mensaje']."-".$row['hora']."<br/>";
   } */
		?>
        <div class="contenedor">
		<div class="mensaje"></div>
		<table class="editinplace">
			<tr>
				<th>De</th>
				<th>Mensaje</th>
				<th>Hora</th>
			</tr>
		</table>
	</div>
    
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script>
	$(document).ready(function() 
	{
		/* OBTENEMOS TABLA */
		$.ajax({
			type: "GET",
			url: "venta-verm.php?tabla=1"
		})
		.done(function(json) {
			json = $.parseJSON(json)
			for(var i=0;i<json.length;i++)
			{
				$('.editinplace').append(
					"<tr><td class='de'>"+json[i].de+"</td><td class='editable' data-campo='mensaje'><span>"+json[i].mensaje+"</span></td><td class='editable' data-campo='hora'><span>"+json[i].hora+"</span></td></tr>");
			}
		});
	});
	
	</script>
</body>
</html>