<?php include ("conexion.php");?>
	<?php mysql_select_db($baseDatos);?>
	<?php 
		$sql="SELECT * FROM CP WHERE producto=".$_GET['producto'];
		$res=mysql_query($sql);
		/*while ($fila=mysql_fetch_array($res)){
		echo $fila['nombre'];
		}*/
	?>

Precio:
<select name="precio-prod" >	
	<?php while ($fila=mysql_fetch_array($res)){ ?>
	<option value="<?php echo $fila['precio']?>"><?php echo $fila['precio']?></option>
<?php }?>
</select>
