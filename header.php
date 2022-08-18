<!--REVISADO     -->

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport">
	<title>Registro de usuarios</title>
	<style type="text/css">

  .boton_personalizado{
  	background-color: rgb(66, 73, 73);
  	color: #fff;
     width: calc(100% - 20px);
	padding: 9px;
	margin: auto;
	margin-top: 12px;
	font-size: 16px;
	border-radius: 10px;
  }
</style>
	
</head>
<body>
	<?php 
	if(isset($_SESSION['admin'])):
	$_SESSION['admin'];
	?>
</h1>
   <h1 class="bad">Bienvenido Administrador</h1>
<?php
 elseif(isset($_SESSION['operador'])):
	$_SESSION['operador']; 
?>
	 <h1 class="bad">Bienvenido</h1>  
<?php endif; ?>
	
