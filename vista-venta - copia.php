<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Ingresar Cliente</title>
<!--<script> 
function calcula(operacion){ 
   	var operando1 = document.calc.cant.value 
   	var operando2 = document.calc.op2.value 
	var operando3 = document.calc.op3.value
	
   	var result = eval(operando1 + operando2 + operando3) 
   	document.calc.resultado.value = result 
} 
</script>--><script type="text/javascript" language="javascript" src="js/ajax.js"></script>
<script>

function calculo(cantidad,precio,devolucion,abono,totaltext){
	/*gndtotal= totaltext.value-inputtext.value;
	/* Parametros:
	cantidad - entero con la cantidad
	precio - entero con el precio
	inputtotal - nombre del elemento del formulario donde ira el total
	*/
	// Calculo del subtotal
    subtotal=cantidad-devolucion;
	total = precio*(subtotal);
	//inputtext.value=subtotal;
	
	//Actualizar el total
	// Utilizamos el eval. Ya que el valor es un texto y si lo tratamos como tal
	// es como si estuviesemos manipulando una cadena.
	//total = eval(totaltext.value);
	/*total = eval(gndtotal);
	totaltext.value = total + subtotal;*/
	 //Calculo del total
	
	totaltext.value = total-abono;
}
</script>
<!--<script>
$('select#Client').on('change',function(){
    var valor = $(this).val();
    alert(valor);
});
</script>-->

</head>
<body>
<?php
include ("conex.php");
session_start();
		$usuario=$_SESSION['user'];
   $cliente=mysql_query("SELECT DISTINCT usuario,cliente FROM EC WHERE (usuario='$usuario') ORDER BY cliente ASC") or die("problemas en consulta:" . mysql_error()); 
		?>    
<form>
Selecciona un cliente de la lista<br/>
 <select name="Client" id="Client" required> 
 <option value="">Selecciona uno de tus clientes</option>
    <?php
	while ($lista_usuario = mysql_fetch_array($cliente)) { ?>  
    
    <option value="<?php echo $lista_usuario['cliente']; ?>"><?php echo $lista_usuario['cliente']; ?></option> 

                    <?php } ?> 
</select>
<?php
$producto=mysql_query("SELECT * FROM CP ORDER BY id ASC") or die("problemas en consulta:" . mysql_error()); 
?>
<br/><br/>
Selecciona un producto de la lista
<select name="Product" id="Product" required> 
 <option value="">Selecciona un producto</option>
    <?php
	while ($lista_producto = mysql_fetch_array($producto)) { ?>  
    
    <option value="<?php echo $lista_producto['producto']; ?>"><?php echo $lista_producto['producto']; ?></option> 

                    <?php } ?> 
</select>
<br/><br/>
Cantidad:
<input type="text" size="4" maxlength="3" placeholder=" 0" id="cantidad">
Precio:
<input type="text" size="4" maxlength="4" disabled value="10" id="precio">
Vuelta:
<select name="vuelta" required>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</select>
<br/><br/>
Devolución:
<input type="text" size="3" maxlength="3" placeholder=" 0" id="devolucion">
Abono:
<input type="text" size="3" maxlength="3" placeholder=" 0" onChange="calculo(cantidad.value,precio.value,devolucion.value,this.value,total);">
<br/><br/>
Total:
<input type="text" id="total" size="8" value="0" disabled> 
<br/><br/>
        <input type="submit" name="send" value="Cobrar"/> <input type="reset" value="Cancelar">
</form>        
</body>
</html>