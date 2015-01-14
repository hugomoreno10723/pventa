<!DOCTYPE html>
<html dir="ltr" lang="es-MX">
<?php
include ("conex.php");
session_start();
?>
<head>
    <meta charset="utf-8">
    <title>Tortilleria El Charro</title>
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">
<script language="JavaScript" type="text/javascript" src="ajax.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>


<link rel="stylesheet" type="text/css" href="css/jquery-ui-1.8.6.css" />
<script type="text/javascript" src="jquery-1.3.2.js"></script>
<link href="css.css" media="screen" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="./style-admin.css" type="text/css" media="all" />
<script type="text/javascript" src="jquery.js"></script>

<!--Tabla-->
<link rel="stylesheet" href="./editar.css" type="text/css">



    <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="style-panel.css" media="screen">
    <!--[if lte IE 7]><link rel="stylesheet" href="style.ie7.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href="style.responsive.css" media="all">

    <script src="script.js"></script>
    <script src="script.responsive.js"></script>
    <script type="text/javascript">
$(document).ready(function(){
  $('#open').click(function(){
        $('#popup1').fadeIn('slow');
        $('.popup-overlay').fadeIn('slow');
        $('.popup-overlay').height($(window).height());
        return false;
    });
    
    $('#close').click(function(){
        $('#popup1').fadeOut('slow');
        $('.popup-overlay').fadeOut('slow');
        return false;
    });
	$('#open2').click(function(){
        $('#popup2').fadeIn('slow');
        $('.popup-overlay').fadeIn('slow');
        $('.popup-overlay').height($(window).height());
        return false;
    });
    
    $('#close2').click(function(){
        $('#popup2').fadeOut('slow');
        $('.popup-overlay').fadeOut('slow');
        return false;
    });
	$('#open3').click(function(){
        $('#popup3').fadeIn('slow');
        $('.popup-overlay').fadeIn('slow');
        $('.popup-overlay').height($(window).height());
        return false;
    });
    
    $('#close3').click(function(){
        $('#popup3').fadeOut('slow');
        $('.popup-overlay').fadeOut('slow');
        return false;
    });
	$('#open4').click(function(){
        $('#popup4').fadeIn('slow');
        $('.popup-overlay').fadeIn('slow');
        $('.popup-overlay').height($(window).height());
        return false;
    });
    
    $('#close4').click(function(){
        $('#popup4').fadeOut('slow');
        $('.popup-overlay').fadeOut('slow');
        return false;
    });
	$('#open5').click(function(){
        $('#popup5').fadeIn('slow');
        $('.popup-overlay').fadeIn('slow');
        $('.popup-overlay').height($(window).height());
        return false;
    });
    
    $('#close5').click(function(){
        $('#popup5').fadeOut('slow');
        $('.popup-overlay').fadeOut('slow');
        return false;
    });
	$('#open6').click(function(){
        $('#popup6').fadeIn('slow');
        $('.popup-overlay').fadeIn('slow');
        $('.popup-overlay').height($(window).height());
        return false;
    });
    
    $('#close6').click(function(){
        $('#popup6').fadeOut('slow');
        $('.popup-overlay').fadeOut('slow');
        return false;
    });
	$('#open7').click(function(){
        $('#popup7').fadeIn('slow');
        $('.popup-overlay').fadeIn('slow');
        $('.popup-overlay').height($(window).height());
        return false;
    });
    
    $('#close7').click(function(){
        $('#popup7').fadeOut('slow');
        $('.popup-overlay').fadeOut('slow');
        return false;
    });
});
</script>
<script language="JavaScript">
function mueveReloj(){
	momentoActual = new Date()
	hora = momentoActual.getHours()
	minuto = momentoActual.getMinutes()
	segundo = momentoActual.getSeconds()
	
	str_segundo = new String (segundo)
	if (str_segundo.length == 1) 
		segundo = "0" + segundo
		
	str_minuto = new String (minuto)
	if (str_minuto.length == 1) 
		minuto = "0" + minuto

	str_hora = new String (hora)
	if (str_hora.length == 1) 
		hora = "0" + hora
		
	horaImprimible = hora + " : " + minuto + " : " + segundo
	
	document.form_reloj.reloj.value = horaImprimible
	
	setTimeout("mueveReloj()",1000)
}
</script>
<script type="text/javascript">
	$(document).ready(function() {

		$('#div-btn1').click(function(){

			$.ajax({
	            type: "POST",
	            //data: dataString,
	            url: "consulta.php",
	       		success: function(a) {

	       			$('#div-results3').html(a);

	          	}
			});
		});

		$('#div-btn2').click(function(){

			$.ajax({
	            type: "POST",
	            url: "crearm.php",
	       		success: function(a) {

	       			$('#div-results3').html(a);

	          	}
			});
		});
		$('#div-btn3').click(function(){

			$.ajax({
	            type: "POST",
	            url: "crearc.php",
	       		success: function(a) {

	       			$('#div-results2').html(a);

	          	}
			});
		});
		$('#div-btn4').click(function(){

			$.ajax({
	            type: "POST",
	            url: "verc.php",
	       		success: function(a) {

	       			$('#div-results2').html(a);

	          	}
			});
		});
		
	<!--Empleado-->	
		$('#div-btn5').click(function(){

			$.ajax({
	            type: "POST",
	            url: "creare.php",
	       		success: function(a) {

	       			$('#div-results3').html(a);

	          	}
			});
		});
		$('#div-btn6').click(function(){

			$.ajax({
	            type: "POST",
	            url: "vere.php",
	       		success: function(a) {

	       			$('#div-results3').html(a);

	          	}
			});
		});
<!--Fin Empleado-->

<!--Inicio Producto-->
$('#div-btn7').click(function(){

			$.ajax({
	            type: "POST",
	            url: "crearp.php",
	       		success: function(a) {

	       			$('#div-results4').html(a);

	          	}
			});
		});
		$('#div-btn8').click(function(){

			$.ajax({
	            type: "POST",
	            url: "verp.php",
	       		success: function(a) {

	       			$('#div-results4').html(a);

	          	}
			});
		});
<!--Fin Producto-->


	});
	
	
	</script>
<style>
.art-content .art-postcontent-0 .layout-item-0 { padding-right: 0px;padding-left: 0px;  }
.ie7 .post .layout-cell {border:none !important; padding:0 !important; }
.ie6 .post .layout-cell {border:none !important; padding:0 !important; }

</style></head>
<style>
#popup1, #popup2, #popup3, #popup4, #popup5, #popup6, #popup7 {
    left: 0;
    position: absolute;
    top: 0;
    width: 100%;
    z-index: 1001;
}
</style>
<body onload="mueveReloj()">
<div id="art-main">
<nav class="art-nav clearfix">
    <ul class="art-hmenu"> 
 <li> <br/> 
<div style="font-size:20px; margin-left:-50px;">  <span class="rojo">BIENVENIDO: </span><?php
echo "<br/><strong>".$user."</strong>";
?></div></li><li><a class="active">Control de <span class="neg">Ventas</span></a></li><img style="float:right; margin-right:-50px" src="image/logo.png" width="150" height="85">
  

<form name="form_reloj">
<input type="text3" name="reloj" size="9" style=" color: #900; font-family : Verdana, Arial, Helvetica; font-size : 15pt; text-align: center; border: none; background:none;" onfocus="window.document.form_reloj.reloj.blur()">
</form>

</ul>
  </nav>
<div class="art-sheet clearfix">
            <div class="art-layout-wrapper clearfix">
                <div class="art-content-layout">
                    <div class="art-content-layout-row">
                        <div class="art-layout-cell art-content clearfix"><article class="art-post art-article">
                                
                                                
                <div class="art-postcontent art-postcontent-0 clearfix"><div class="art-content-layout">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-0" style="width: 100%" >
    <br/>
        <div id="popup1" style="display: none;" >
    <div class="content-popup">
        <div class="close2"><a href="#" id="close"><img src="./close.png"/></a></div>
        <div> <h2>Datos Del Empleado</h2>
       <a href="#" id="div-btn5" style="cursor:pointer;">Registrar Empleados</a> |
<a href="#" id="div-btn6" style="cursor:pointer;">Ver Empleados Registrados</a> 
        <br/>
        <div id="div-results3">
        
        </div>


</div>
	</div>
</div>

<div id="popup2" style="display: none;" >
    <div class="content-popup">
        <div class="close2"><a href="#" id="close2"><img src="./close.png"/></a></div>
        <div> <h2>Datos Del Cliente</h2>
        <a href="#" id="div-btn3" style="cursor:pointer;">Registrar Cliente</a> |
<a href="#" id="div-btn4" style="cursor:pointer;">Ver Clientes Registrados</a> 
        <br/>
        <div id="div-results2"></div>
        
        </div>
	</div>
</div>

<div id="popup3" style="display: none;" >
    <div class="content-popup">
        <div class="close2"><a href="#" id="close3"><img src="./close.png"/></a></div>
        <div> <h2>Datos del Producto</h2>
     
       <a href="#" id="div-btn7" style="cursor:pointer;">Registrar Producto</a> |
<a href="#" id="div-btn8" style="cursor:pointer;">Ver Productos Registrados</a> 
        <br/>
        <div id="div-results4"></div>
        
        </div>
        
        
	</div>
</div>

<div id="popup4" style="display: none;" >
    <div class="content-popup">
        <div class="close2"><a href="#" id="close4"><img src="./close.png"/></a></div>
        <div> <h2>Menú Mensajes</h2>
        <a href="#" id="div-btn1" style="cursor:pointer;">Ver Mensaje</a> | <a href="#" id="div-btn2" style="cursor:pointer;">Enviar Mensaje</a> 
        <br/>
        <div id="div-results3"></div>
        </div>
	</div>
</div>

<div id="popup5" style="display: none;" >
    <div class="content-popup">
        <div class="close2"><a href="#" id="close5"><img src="./close.png"/></a></div>
        <div> <h2>Agregar Empleado-Cliente</h2><br/>
        <?php
		$usuario=$_SESSION['user'];
		$usuarios=mysql_query("SELECT * FROM usuario WHERE usuario NOT IN ('$usuario') AND puesto='Ventas' ORDER BY nombre ASC") or die("problemas en consulta:" . mysql_error()); 
?>
        <form name="form1" method="post" action="adde-c.php">
        <select name="Usuario" id="Usuario" required> 
    <option value="">Selecciona un empleado de la lista</option>
    <?php
	while ($lista_usuario = mysql_fetch_array($usuarios)) { ?>  
    
    <option value="<?php echo $lista_usuario['usuario']; ?>"><?php echo $lista_usuario['nombre']; ?></option> 

                    <?php } ?> 
</select><br/><br/>
<?
$cliente=mysql_query("SELECT * FROM cliente ORDER BY nombre ASC") or die("problemas en consulta:" . mysql_error()); 
?>
Selecciona uno o varios clientes de la lista<br/>
 <select multiple name="Cliente[]" id="Cliente" required> 
    <?php
	while ($lista_usuario = mysql_fetch_array($cliente)) { ?>  
    
    <option value="<?php echo $lista_usuario['id']; ?>"><?php echo $lista_usuario['nombre']; ?>-<?php echo $lista_usuario['alias']; ?></option> 

                    <?php } ?> 
</select>
*Para seleccionar varios clientes mantén pulsado Shift + Click Izquierdo
<br/><br/>
        <input type="submit" name="send" value="Enviar"/>
</form>
       
        </div>
	</div>
</div>
        
        
         <div id="popup6" style="display: none;" >
    <div class="content-popup">
        <div class="close2"><a href="#" id="close6"><img src="./close.png"/></a></div>
        <div> <h2>Agregar Cliente-Producto</h2><br/>
        <form name="formp" method="post" action="addc-p.php">
      <?
$cliente=mysql_query("SELECT * FROM cliente ORDER BY nombre ASC") or die("problemas en consulta:" . mysql_error()); 
?>
Selecciona un cliente de la lista<br/>
 <select name="Cliente" id="Cliente" required>
 <option value="">Cliente</option> 
    <?php
	while ($lista_usuario = mysql_fetch_array($cliente)) { ?>  
    
    <option value="<?php echo $lista_usuario['id']; ?>"><?php echo $lista_usuario['nombre']; ?>-<?php echo $lista_usuario['alias']; ?></option> 

                    <?php } ?> 
</select>
<?
$producto=mysql_query("SELECT * FROM producto ORDER BY nombre ASC") or die("problemas en consulta:" . mysql_error()); 
?><br/><br/>
Selecciona un Producto de la lista<br/>
 <select name="lyon" id="" onchange="from(document.formp.lyon.value,'midiv','precio-publico.php')"> 
 <option value="">Producto</option>
    <?php
	while ($lista_producto = mysql_fetch_array($producto)) { ?>  
    
    <option value="<?php echo $lista_producto['id']; ?>"><?php echo $lista_producto['nombre']; ?>-<?php echo $lista_producto['caracteristicas']; ?></option> 

                    <?php } ?> 
</select><br/><br/>
Precio Público:
		<div id="midiv"></div>
<br/>
Ingresar Precio Especial para este Cliente:<br/><br/>
<input type="text2" size="4" maxlength="4" name="PrecioE" placeholder="  $7.50">
<br/><br/>
*Si no se asigna precio especial, se asignará el precio público
        <input type="submit" name="send" value="Enviar"/>
</form>
        </div>
	</div>
</div>
      
<div id="popup7" style="display: none;" >
    <div class="content-popup">
        <div class="close2"><a href="#" id="close7"><img src="./close.png"/></a></div>
        <div> <h2>Últimas Ventas</h2>
*Este reporte solo muestra las últimas 20 ventas realizadas ||<a href="./report.php" style="cursor:pointer;">Reporte completo con filtros</a> 
        <br/>
        <div class="contenedor">
		<div class="mensaje"></div>
		<table class="editinplace">
			<tr>
				<th>Fecha</th>
				<th>Hora</th>
				<th>Vuelta</th>
                <th>Empleado</th>
                <th>Cliente</th>
                <th>Producto</th>
                <th>Cantidad</th>
                <th>Total</th>
                <th>Devoluciones</th>
                <th>Abono</th>
			</tr>
		</table>
	</div>
    
    
	<script>
	$(document).ready(function() 
	{
		/* OBTENEMOS TABLA */
		$.ajax({
			type: "GET",
			url: "reporte-venta.php?tabla=1"
		})
		.done(function(json) {
			json = $.parseJSON(json)
			for(var i=0;i<json.length;i++)
			{
				$('.editinplace').append(
					"<tr><td class='fecha'>"+json[i].fecha+"</td><td class='hora'><span>"+json[i].hora+"</span></td><td class='vuelta'><span>"+json[i].vuelta+"</span></td><td class='empleado'><span>"+json[i].empleado+"</span></td><td class='cliente'><span>"+json[i].cliente+"</span></td><td class='producto'><span>"+json[i].producto+"</span></td><td class='cantidad'><span>"+json[i].cantidad+"</span></td><td class='total'><span>"+json[i].total+"</span></td><td class='devolucion'><span>"+json[i].devolucion+"</span></td><td class='abono'><span>"+json[i].abono+"</span></td></tr>");
			}
		});
	});
	
	</script>
        
        </div>
	</div>
</div>

        
        <a href="#" id="open2"><img src="image/cliente.png" height="150" width="110" style="float:left; margin-left:20px;"></a>
<a href="#" id="open"><img src="image/empleado.png" height="150" width="110" style="float:left; margin-left:140px;"></a>
<a href="#" id="open3"><img src="image/producto.png" height="150" width="110" style="float:right; margin-right:20px;"></a><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<div align="left"><a href="#" id="open4"><img src="image/mensaje.png" height="150" width="110" style="float:left; margin-left:20px;"></a></div>
<div align="center"><a href="#" id="open5"><img src="image/Emp-Cli.png" height="150" width="110" style="float:left; margin-left:140px;"></a></div>
<div align="right"><a href="#" id="open6"><img src="image/Clie-Prod.png" height="150" width="110" style="float:right; margin-right:20px;"></a></div>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<a href="#" id="open7"><img src="image/informes.png" height="150" width="110" style="float:left; margin-left:20px;"></a>
<a href="./salir.php"><img src="image/salir.png" height="150" width="110" style="float:left; margin-left:140px;"></a>
    </div>
    </div>
</div>
</div>
</article></div>
                    </div>
                </div>
            </div>
            <br/>
            
            <footer class="art-footer clearfix">

</footer>

    </div>
    <p class="art-page-footer">
        <span id="art-footnote-links">REIDIS ESTUDIO CREATIVO &copy;2014 TODOS LOS DERECHOS RESERVADOS</span>
    </p>
</div>


</body>
<script type="text/javascript" language="javascript" src="js/ajax.js"></script>
</html>