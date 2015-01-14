<!DOCTYPE html>
<html dir="ltr" lang="es-MX"><head>
    <meta charset="utf-8">
    <title>Inicio</title>
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">

    <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="style.css" media="screen">
    <!--[if lte IE 7]><link rel="stylesheet" href="style.ie7.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href="style.responsive.css" media="all">


    <script src="jquery.js"></script>
    <script src="script.js"></script>
    <script src="script.responsive.js"></script>
    <script>
		function validar(){
			var p1 = document.form1.user.value;
			var p2 = document.form1.pass.value;
			var espacios = false;
			var cont = 0;
			
			if( p1 == null || p1.length == 0 || /^\s+$/.test(p1)|| ( p2 == null || p2.length == 0 || /^\s+$/.test(p2) ) || (p3==0) )  {
				alert('Por favor introduce correctamente tu usuario y/o password');	
			}

			else {
				alert('Bienvenido');
				
				return false;
			}
		
	}
	</script>


<style>
.art-content .art-postcontent-0 .layout-item-0 { padding-right: 0px;padding-left: 0px;  }
.ie7 .post .layout-cell {border:none !important; padding:0 !important; }
.ie6 .post .layout-cell {border:none !important; padding:0 !important; }

</style></head>
<body>
<div id="art-main">
<nav class="art-nav clearfix">
    <ul class="art-hmenu">
      <li><a href="" class="active">Control de <span class="neg">Ventas</span></a></li></ul>
  </nav>
<div class="art-sheet clearfix">
            <div class="art-layout-wrapper clearfix">
                <div class="art-content-layout">
                    <div class="art-content-layout-row">
                        <div class="art-layout-cell art-content clearfix"><article class="art-post art-article">
                                
                                                
                <div class="art-postcontent art-postcontent-0 clearfix"><div class="art-content-layout">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-0" style="width: 100%" >
        <p><span style="font-weight: bold;"><center><img src="image/logo.png">
<form name="form1" method="post" action="edo.php">
Nombre de Usuario:<br/>
			<input name="user" type="text" required id="user" placeholder="Usuario" size="40" maxlength="30"><br><br/><br/>
            Contraseña:<br/>
			<input type="password" name="pass" id="pass" required placeholder="Contrase&ntilde;a" size="40" maxlength="30"><br/><br/>
            <input src="image/Boton.png" onclick="validar(); return false;" type="image" name="send" id="send" value="Enviar">
		</form>
</center></p>
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