<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>
<body>

<?php
include ("conex.php");
session_start();
/*		$vusuario=$_SESSION['user'];
		$fecha_actual=date("Y-m-d");
		echo $fecha_actual;
		$sql="SELECT de,mensaje,hora FROM mensaje WHERE (para='$vusuario' OR para='All') AND fecha='$fecha_actual'";
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
			url: "admin-verm.php?tabla=1"
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