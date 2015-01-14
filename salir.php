<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>
<body>
<?php
session_start();
unset($_SESSION['user']); 
ob_start();
    ?>
    <script type='text/javascript'>			location.href='./index.php'</script> 
    <?
ob_end_flush(); 

?>
</body>
</html>