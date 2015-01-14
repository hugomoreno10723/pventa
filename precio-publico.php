<?php include ("conex.php");?>
	<?php 
		$sql="SELECT * FROM producto WHERE id=".$_GET['id'];
		$res=mysql_query($sql);
		while ($fila=mysql_fetch_array($res)){
			echo $fila['precio'];
		}
	?>

<?php while ($fila=mysql_fetch_array($res)){ ?>
<input type="text" name="PrecioP" size="4" style="color:#369; font-size:13px; border-radius:5px; background-color:#000;" disabled value="<?php echo $fila['precio']?>">
<?php }?>


