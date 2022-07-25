<?php 
session_start();
if(isset($_SESSION['cocina'])) 
   require "index_cocina.php";
elseif(isset($_SESSION['restaurant'])) 
	require "index_restaurant.php";
else
	require "proyecto_10mo/login.php";
	
 ?>