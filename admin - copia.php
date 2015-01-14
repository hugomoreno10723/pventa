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
<style type="text/css">
	/* CSS demo */
	#content{
		padding:0px 0 0 0px
	}
	#content .filtro{
		overflow:hidden;
		padding-bottom:15px
	}
	#content .filtro select{
		width:100px
	}
	#content .filtro ul{
		list-style:none;
		padding:0
	}
	#content .filtro li{
		float:left;
		display:block;
		margin:0 5px
	}
	#content .filtro li a{
		color:#006;
		position:relative;
		top:5px;
		text-decoration:underline
	}
	#content .filtro li label{
		float:left;
		padding:4px 5px 0 0
	}
/*	#content table{
		border-collapse:collapse;
		width:940px;
	}
	#content table th{
		border:1px solid #999;
		padding:8px;
		background:#F8F8F8
	}
	#content table th span{
		cursor:pointer;
		padding-right:12px
	}
	#content table th span.asc{
		background:url(assets/imgs/sorta.gif) no-repeat right center;
	}
	#content table th span.desc{
		background:url(assets/imgs/sortd.gif) no-repeat right center;
	}
	#content table td{
		border:1px solid #999;
		padding:6px
	}*/
	
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
        <form name="form1" method="post" action="adde.php" enctype="multipart/form-data"><br/>
<img src="image/name.png"><br/>
<div style="margin-left:7px;"><input name="Name" type="text" required placeholder="Nombre Completo" ></div>
<div id="Info"></div><br/>
<img src="image/user.png"><br/>
<div style="margin-left:7px;"><input name="user" type="text" required placeholder="Usuario o Alias" ></div><br/>
<img src="image/pass.png"><br/>
<div style="margin-left:7px;"><input name="pass" type="password" required placeholder="Su Contraseña"></div><br/>
<div style="margin-left:7px;">Jerarquía:<br/>
<select name="puesto" required>
	<option value"">Seleccione la jerarquía del usuario</option>
	<option value="Empleado">Empleado</option>
    <option value="Jefe">Jefe</option>
    <option value="Ventas">Ventas</option>
</select><br/><br/>
<input src="image/aceptar.png" type="image" name="send" value="Enviar"/>
</form></div>
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
        <form name="form1" method="post" action="addp.php">
<br/>
<img src="image/name.png"><br/>
<div style="margin-left:7px;"><input name="name" type="text" required placeholder="Nombre del producto" ></div><br/>
<img src="image/caract.png"><br/>
<div style="margin-left:7px;"><textarea required name="caract" cols="50" rows="4" placeholder="Caracteristicas del producto"></textarea></div><br/>
<img src="image/pp.png"><br/>
<div style="margin-left:7px;"><input name="pp" type="text" required placeholder="Precio al publico en general" ><br/><br/>
<input src="image/aceptar.png" type="image" name="send" value="Enviar"/></div>
</form></div>
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
        <div> <h2>Agregar Empleado-Cliente</h2>
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
    
    <option value="<?php echo $lista_usuario['nombre']; ?>"><?php echo $lista_usuario['nombre']; ?>-<?php echo $lista_usuario['alias']; ?></option> 

                    <?php } ?> 
</select>

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
        <form name="form1" method="post" action="addc-p.php">
      <?
$cliente=mysql_query("SELECT * FROM cliente ORDER BY nombre ASC") or die("problemas en consulta:" . mysql_error()); 
?>
Selecciona un cliente de la lista<br/>
 <select name="Cliente" id="Cliente" required>
 <option value="">Cliente</option> 
    <?php
	while ($lista_usuario = mysql_fetch_array($cliente)) { ?>  
    
    <option value="<?php echo $lista_usuario['nombre']; ?>"><?php echo $lista_usuario['nombre']; ?>-<?php echo $lista_usuario['alias']; ?></option> 

                    <?php } ?> 
</select>
<?
$producto=mysql_query("SELECT * FROM producto ORDER BY nombre ASC") or die("problemas en consulta:" . mysql_error()); 
?><br/><br/>
Selecciona un Producto de la lista<br/>
 <select name="Cliente" id="Cliente" required> 
 <option value="">Producto</option>
    <?php
	while ($lista_producto = mysql_fetch_array($producto)) { ?>  
    
    <option value="<?php echo $lista_producto['nombre']; ?>"><?php echo $lista_producto['nombre']; ?>-<?php echo $lista_producto['caracteristicas']; ?></option> 

                    <?php } ?> 
</select><br/><br/>
Precio Público:<br/><br/>
<input type="text2" size="4" maxlength="4" value="">
<br/><br/>
Ingresar Precio Especial para este Cliente:<br/><br/>
<input type="text2" size="4" maxlength="4" placeholder="  $7.50">
<br/><br/>
*Si no se asigna precio especial, se asignará el precio normal
        <input type="submit" name="send" value="Enviar"/>
</form>
        </div>
	</div>
</div>
      

<div id="popup7" style="display: none;" >
    <div class="content-popup">
        <div class="close7"><a href="#" id="close7"><img src="./close.png"/></a></div>
        <div> <h2>Datos Del Cliente</h2> 
                    	<a href="javascript:;" id="btncancel">Todos</a>
        <br/>
        <div id="content">
        <div class="filtro">
        	<form id="frm_filtro" method="post" action="">
                <ul>
                    <li><label>Nacimiento: &nbsp;&nbsp; del</label> 
                    	<input type="text3" name="del" id="del" size="15" class="datepicker" /> 
                        al 
                        <input type="text3" name="al" id="al" size="15" class="datepicker" /></li>
                    <li><label>Nombre/Email:</label> <input type="text3" name="nombre_email" size="25" /></li><br/><br/>
                    <li><label>Empleado:</label>
                        <select name="pais">
                            <option value="0">--</option>
                            <!-- Listar Paises -->
                            <?php
                            $query = mysql_query("SELECT DISTINCT * FROM usuario WHERE usuario NOT IN ('$usuario') ORDER BY usuario ASC "); 
                            while($row = mysql_fetch_array($query)){
                                ?>
                                <option value="<?php echo $row['usuario'] ?>">
                                    <?php echo $row['usuario'] ?>
                                </option>
                                <?php
                            }
                            ?>
                        </select>                	
                    </li>
                    <li>
                    	<button type="button" id="btnfiltrar">Filtrar</button>
                    </li>                
                    
                </ul>
            </form>
        </div><br/>
        <table cellpadding="0" cellspacing="0" id="data">
        	<thead>
            	<tr>
                    <th width="22%"><span title="nacimiento">Fecha de Venta</span></th>
                    <th width="35%"><span title="nombre">Nombre del Vendedor</span></th>
                    <th width="30%"><span title="email">Nombre del Cliente</span></th>
                    <th><span title="nombre_pais">Producto</span></th>
                </tr>
            </thead>
            <tbody>
            	
            </tbody>
        </table>
	</div>    
        
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
<script type="text/javascript" src="assets/js/js.js"></script>
<link rel="stylesheet" type="text/css" href="assets/jqueryui/css/smoothness/jquery-ui-1.8.16.custom.css"/>
<script type="text/javascript" src="assets/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="assets/jqueryui/js/jquery-ui-1.8.16.custom.min.js"></script>
</html>