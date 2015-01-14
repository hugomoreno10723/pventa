<?php
include ("conex.php");
session_start();
?>
<!DOCTYPE html>
<html dir="ltr" lang="es-MX">
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

<!--Tabla--
<link rel="stylesheet" href="./editar.css" type="text/css">-->



    <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="style-panel.css" media="screen">
    <!--[if lte IE 7]><link rel="stylesheet" href="style.ie7.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href="style.responsive.css" media="all">

    <script src="script.js"></script>
    <script src="script.responsive.js"></script>

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
<style>
.art-content .art-postcontent-0 .layout-item-0 { padding-right: 0px;padding-left: 0px;  }
.ie7 .post .layout-cell {border:none !important; padding:0 !important; }
.ie6 .post .layout-cell {border:none !important; padding:0 !important; }

</style>


<style type="text/css">
	/* CSS demo */
#content{
		padding:20px 0 0 0px
	}
	#content .filtro{
		overflow:hidden;
		padding-bottom:-15px
	}
	#content .filtro select{
		width:105px
	}
	#content .filtro ul{
		list-style:none;
		padding:0
	}
	#content .filtro li{
		float:left;
		display:block;
		margin:0 -20px
	}
	#content .filtro li a{
		color:#006;
		position:relative;
		text-decoration:underline;
		margin-left: 50px;
	}
	#content .filtro li label{
		float:left;
		padding:4px 5px 0 0
	}
	#content table{
		border-collapse:collapse;
		width:680px;
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
	}
</style>
<link rel="stylesheet" type="text/css" href="assets/jqueryui/css/smoothness/jquery-ui-1.8.16.custom.css"/>

<script type="text/javascript" src="assets/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="assets/jqueryui/js/jquery-ui-1.8.16.custom.min.js"></script>
<script type="text/javascript" src="assets/js/js.js"></script>
</head>




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
    <?php
  echo "<a href='./volver.php?usuario=$user'>Regresar al Menú Principal</a> "
  ?>  
    <div id="content">
        <div class="filtro">
        	<form id="frm_filtro" method="post" action="">
                <ul>
                    <li><label style="margin-left:-10px;">Nacimiento: &nbsp; del</label> 
                    	<input type="text2" name="del" id="del" size="15" class="datepicker" style="margin-left:-2px;" /> 
                        al 
                        <input type="text2" name="al" id="al" size="15" class="datepicker" /></li>
                    <li><label>Empleado:</label> <!--<input type="text" name="nombre_email" size="25" />-->
                     <select name="nombre_empleado">
                            <option value="">--</option>
                            <!-- Listar Empleados -->
                            <?php
                            $query = mysql_query("SELECT * FROM usuario ORDER BY usuario ASC"); 
                            while($row = mysql_fetch_array($query)){
                                ?>
                                <option value="<?php echo $row['usuario'] ?>">
                                    <?php echo $row['usuario'] ?>
                                </option>
                                <?php
                            }
                            ?>
                      </select>                </li>
                    <li><label style="margin-left:35px;">Cliente:</label>
                        <select name="nombre_cliente">
                            <option value="">--</option>
                            <!-- Listar Clientes -->
                            <?php
                            $query = mysql_query("SELECT * FROM cliente ORDER BY nombre ASC"); 
                            while($row = mysql_fetch_array($query)){
                                ?>
                                <option value="<?php echo $row['nombre'] ?>">
                                    <?php echo $row['nombre'] ?>
                                </option>
                                <?php
                            }
                            ?>
                      </select>                	
                    </li><br/><br/>
                    <li><label>Producto:</label>
                        <select name="nombre_producto">
                            <option value="">--</option>
                            <!-- Listar Clientes -->
                            <?php
                            $query = mysql_query("SELECT * FROM producto ORDER BY nombre ASC"); 
                            while($row = mysql_fetch_array($query)){
                                ?>
                                <option value="<?php echo $row['nombre'] ?>">
                                    <?php echo $row['nombre'] ?>
                                </option>
                                <?php
                            }
                            ?>
                      </select>                	
                    </li>
                     <li>
                    	<button type="button" id="btnfiltrar" style="margin-left:40px;">Buscar</button>
                    </li><br/><br/>
                    <li><label style="margin-left:5px;">Vuelta:</label>
                    <select name="vuelta">
                    	<option value="">--</option>
                    	<option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                    </li>
                           
                    <li>
                    	<a href="javascript:;" id="btncancel">Cancelar Busqueda</a>
                    </li>
                    
                </ul>
            </form>
        </div><br/>
        <table cellpadding="0" cellspacing="0" id="data">
        	<thead>
            	<tr>
                    <th><span title="fecha">Fecha</span></th>
                    <th><span title="hora">Hora</span></th>
                    <th><span title="vuelta">Vuelta</span></th>
                    <th><span title="usuario">Empleado</span></th>
                    <th><span title="cliente">Cliente</span></th>
                    <th><span title="producto">Producto</span></th>
                    <th><span title="cantidad">Cantidad</span></th>
                    <th><span title="total">Total</span></th>
                    <th><span title="devolucion">Devolucion</span></th>
                    <th><span title="abono">Abono</span></th>
                    
                </tr>
            </thead>
            <tbody>
            	
            </tbody>
        </table>
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