<?php

include 'cn.php';

$borrar = 'borrar';   
//$id = $_POST['id'];

    
if (isset($_GET["borrar"])){
    $borrar="DELETE FROM cocina WHERE id_cocina='$_GET[borrar]'"; 
}
   $resultados = mysqli_query($conexion, $borrar);
   
//Cerrar conexion
  mysqli_close($conexion);
  
echo "<script>";
echo "alert('¡La cocina se borró exitosamente!');";
echo "location.href='index.php';";
echo "</script>";


?>