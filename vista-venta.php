<?php
include ("./4/conexion4.php");
session_start();
function generaSelect()
{
	
	$usuario=$_SESSION['user'];
	conectar();
	$consulta=mysql_query("SELECT DISTINCT * FROM EC WHERE (usuario='$usuario') ORDER BY cliente ASC");
	

	// Voy imprimiendo el primer select compuesto por los clientes
	echo "<select name='select1' id='select1' onChange='cargaContenido(this.id)'>";
	echo "<option value='0'>Elige</option>";
	while($registro=mysql_fetch_row($consulta))
	{
		echo "<option value='".$registro['3']."'>".$registro['2']."</option>";
	}
	echo "</select>";
	desconectar();
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Ingresar Venta</title>
<script>

function calculo(cantidad,precio,devolucion,abono,totaltext){
    subtotal=cantidad-devolucion;
	total = precio*(subtotal);	
	totaltext.value = total-abono;
	
}
</script>
<script type="text/javascript" src="select_dependientes_3_niveles.js"></script>
</head>
<body>
<form method="post" action="addventa.php">
<div id="demo" style="width:600px;">
Elige un cliente:
<div id="demoIzq"><?php generaSelect(); ?></div>
Elige un producto:
<div id="demoMed">
					<select disabled="disabled" name="select2" id="select2">
						<option value="0">Selecciona opci&oacute;n...</option>
					</select>
				</div>
Precio:                
				<div id="demoDer">
					<select disabled="disabled" name="select3" id="select3">
						<option value="0">Selecciona opci&oacute;n...</option>
					</select>
                
				</div>
				
				
			</div>

<br/><br/>
Cantidad:
<input type="text" size="4" maxlength="3" placeholder=" 0" id="cantidad" name="cantidad"><br/><br/>
<!--Precio:
<input type="text" size="4" maxlength="4" disabled value="10" id="precio">-->
Vuelta:
<select name="vuelta" required>
<option value="">--</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</select>
<br/><br/>
Devolución:
<input type="text" size="3" maxlength="3" placeholder=" 0" id="devolucion" name="devolucion"><br/><br/>
Abono:
<input type="text" size="3" maxlength="3" name="abono" placeholder=" 0" onChange="calculo(cantidad.value,select3.value,devolucion.value,this.value,total);">
<br/><br/>
Total:
<input type="text" id="total" size="8" value="" disabled name="total"> 
<br/><br/>
        <input type="submit" name="send" value="Cobrar"/> <input type="reset" value="Cancelar">
</form>        
</body>
</html>