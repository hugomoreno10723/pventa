<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<link rel="stylesheet" href="./editar.css" type="text/css">
</head>
<body>

<?php
include ("conex.php");
session_start();
?>
<div class="contenedor">
		<div class="mensaje"></div>
		<table class="editinplace">
			<tr>
				<th>Nombre</th>
				<th>Descripción</th>
				<th>Precio Público</th>
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
			url: "edit-prod.php?tabla=1"
		})
		.done(function(json) {
			json = $.parseJSON(json)
			for(var i=0;i<json.length;i++)
			{
				$('.editinplace').append(
					"<tr><td class='editable' data-campo='nombre'><span>"+json[i].nombre+"</span></td><td class='editable' data-campo='caracteristicas'><span>"+json[i].caracteristicas+"</span></td><td class='editable' data-campo='precio'><span>"+json[i].precio+"</span></td></tr>");
			}
		});
		
		var td,campo,valor,id;
		$(document).on("click","td.editable span",function(e)
		{
			e.preventDefault();
			$("td:not(.id)").removeClass("editable");
			td=$(this).closest("td");
			campo=$(this).closest("td").data("campo");
			valor=$(this).text();
			id=$(this).closest("tr").find(".id").text();
			td.text("").html("<input type='text' name='"+campo+"' value='"+valor+"'><a class='enlace guardar' href='#'>Guardar</a><a class='enlace cancelar' href='#'>Cancelar</a>");
		});
		
		$(document).on("click",".cancelar",function(e)
		{
			e.preventDefault();
			td.html("<span>"+valor+"</span>");
			$("td:not(.id)").addClass("editable");
		});
		
		$(document).on("click",".guardar",function(e)
		{
			$(".mensaje").html("<img src='./image/loading.gif'>");
			e.preventDefault();
			nuevovalor=$(this).closest("td").find("input").val();
			if(nuevovalor.trim()!="")
			{
				$.ajax({
					type: "POST",
					url: "editinplace.php",
					data: { campo: campo, valor: nuevovalor, id:id }
				})
				.done(function( msg ) {
					$(".mensaje").html(msg);
					td.html("<span>"+nuevovalor+"</span>");
					$("td:not(.id)").addClass("editable");
					setTimeout(function() {$('.ok,.ko').fadeOut('fast');}, 3000);
				});
			}
			else $(".mensaje").html("<p class='ko'>Debes ingresar un valor</p>");
		});
	});
	
	</script>

<?php /*
		$usuario=$_SESSION['user'];
		$sql="SELECT * FROM cliente";
		$mensaje=mysql_query($sql);
		while($row = mysql_fetch_array($mensaje)) { 
     echo $row['nombre']."-".$row['alias']."-".$row['rfc']."-".$row['domicilio']."-".$row['colonia']."-".$row['cp']."-".$row['correo']."-".$row['tel']."<br/>";
   } */
		?>
</body>
</html>