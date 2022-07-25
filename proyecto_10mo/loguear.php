<?php 
require "config.php"; 
session_start();
$mensaje="";
if(isset($_POST['btn_login'])):
	require "Cone.php";
   $user= new Apptiva();
   $email = $_POST['Email_usu'];
   $password = $_POST['pass_usu'];
   $data="Email_usu='".$email."' AND Contra_usu = '".$password."'";
   $u=$user->buscar("usuario",$data);
     
    
   if($u):
   foreach ($u as  $value):
   	if($value['Tipo_usu']== 2):
   	      $_SESSION['restaurant'] = $value['Nombre_usu'];

     

       else:
   
            
  $_SESSION['cocina'] = $value['Nombre_cocina'];
  
   endif; 

         $_SESSION['restaurant']= $value['Nombre_usu'];

    endforeach;
    $mensaje="mensaje=Bienvenido";
    header("location:".urlsite."?".$mensaje);;

    
   else:
    $mensaje="mensaje=Acceso denegado"; 
    header("location:".urlsite."?".$mensaje);;     
    endif;

	else:

endif;	





    ?>