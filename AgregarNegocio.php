<?php

include 'cn.php';

$Nombre_cocina= $_POST['Nombre_cocina'];
$Direccion_cocina= $_POST["Direccion_cocina"];
$Telefono_cocina= $_POST["Telefono_cocina"];
$Nombre_usu= $_POST["id"];


 $sql2 = "SELECT id_usu FROM usuario where Nombre_usu='".$Nombre_usu."' ";
      $query2= mysqli_query($conexion, $sql2);
      $row2 = mysqli_fetch_array($query2);
      $id_usu = $row2['id_usu'];

if($_FILES["archivos"]){
    
        
      
    $nombre_base = basename($_FILES["archivos"]["name"]);
    $ruta = "archivo/" . $nombre_base;
    $subirarchivo = move_uploaded_file($_FILES["archivos"]["tmp_name"], $ruta);

    if($subirarchivo) {
    	$inserta = "INSERT INTO cocina(Nombre_cocina, Direccion_cocina, Telefono_cocina,archivo, id_usu) VALUES ('$Nombre_cocina', '$Direccion_cocina','$Telefono_cocina','https://tankold.000webhostapp.com/ProyectoHK10/$ruta','$id_usu')";
    	$resultados = mysqli_query($conexion, $inserta);

    	if($resultados){
     
      
      $num_archivos=count($_FILES['archivo']['name']);

    for($i=0; $i <= $num_archivos; $i++){
    if( !empty($_FILES['archivo']['name'][$i])){
        
        $ruta_nueva = "uploads/".$_FILES['archivo']['name'][$i];
        if(file_exists($ruta_nueva)){
             echo "<script>alert('Este archivo".$_FILES['archivo']['name'][$i]."  ya se encuentra registrado');window.history.go(-1); </script>";
           
            
        }else{
            $ruta_temporal = $_FILES['archivo']['tmp_name'][$i];
            move_uploaded_file($ruta_temporal, $ruta_nueva);
            echo"se subio";
        echo "<script>alert('Este archivo".$_FILES['archivo']['name'][$i]."se subio de manera exitosa');window.history.go(-1); </script>";
           
        }
    }
}


   
}else{
    echo "<script>alert('Verifica tus datos')</script>";
 echo "<script>alert('Verifica tus datos');window.history.go(-1); </script>";
    
   
  }
    }else{
    printf("Errormessage: %s\n", mysqli_error($conexion));
    }
 
   }else{
   	echo "ERROR AL SUBIR ARCHIVO";
   }





   
//Cerrar conexion
  mysqli_close($conexion);
  
echo "<script>";
echo "alert('¡Tu cocina se agregó exitosamente!');";
echo "location.href='index.php';";
echo "</script>";


?>