<!DOCTYPE html>
<html dir="ltr" lang="es-MX">
<?php
include ("conex.php");
session_start();
$usuario=$_SESSION['user'];
?>
<head>
    <meta charset="utf-8">
    <title>Inicio</title>
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">
    <script language="JavaScript" type="text/javascript" src="ajax.js"></script>
    
        

    <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="style.css" media="screen">
    <!--[if lte IE 7]><link rel="stylesheet" href="style.ie7.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href="style.responsive.css" media="all">

    <script src="jquery.js"></script>
    <script src="script.js"></script>
    <script src="script.responsive.js"></script>
    <script type="text/javascript">
	$(document).ready(function() {

		$('#div-btnv').click(function(){

			$.ajax({
	            type: "POST",
	            //data: dataString,
	            url: "imensaje.php",
	       		success: function(a) {

	       			$('#div-results-vent').html(a);

	          	}
			});
		});

		$('#div-btnv-venta').click(function(){

			$.ajax({
	            type: "POST",
	            //data: dataString,
	            url: "vista-venta.php",
	       		success: function(a) {

	       			$('#div-results-vent').html(a);

	          	}
			});
		});

		
		

	});
	</script>


        <link rel="stylesheet" type="text/css" href="css/jquery-ui-1.8.6.css" />
        

<style>
.art-content .art-postcontent-0 .layout-item-0 { padding-right: 0px;padding-left: 0px;  }
.ie7 .post .layout-cell {border:none !important; padding:0 !important; }
.ie6 .post .layout-cell {border:none !important; padding:0 !important; }

</style></head>
<body>
<div id="art-main">
<nav class="art-nav clearfix">
    <ul class="art-hmenu">
      <li><a href="" class="active">Control de <span class="neg">Ventas</span></a></li>
      <img style="margin-left:7px; margin-top:-2px;" src="image/logo.png" height="45" width="80">
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
     
  BIENVENIDO: <div style="margin-left:25px"> <?php
echo "<strong>".$_SESSION['user']."</strong>";
?>  </div> 

 <p><span style="font-weight: bold;"><center>
<div style="margin-top:-30px; margin-left:120px;"><a href="#" id="div-btnv-venta" style="cursor:pointer;">Ventas</a> | <a href="#" id="div-btnv" style="cursor:pointer;">Mensajes</a> | <a href="./salir.php">Salir</a></div>
</center></p>

<br/>
<div id="div-results-vent"></div>
    </div>
    </div>
</div>
</div>
</article></div>
                    </div>
                </div>
            </div><footer class="art-footer clearfix">

</footer>

    </div>
    <p class="art-page-footer">
        <span id="art-footnote-links">REIDIS ESTUDIO CREATIVO &copy;2014<br/>TODOS LOS DERECHOS RESERVADOS<br/>SI TIENE ALGÚN PROBLEMA O DUDA MANDENOS UN CORREO<br/>INFO@REIDIS.COM </span>
    </p>
</div>


</body></html>