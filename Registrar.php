<?php
/*
if(!empty($_POST)){
	if(isset($_POST["Nombre_usu"]) &&isset($_POST["Email_usu"]) &&isset($_POST["Telefono_usu"]) &&isset($_POST["Contra_usu"]) &&isset($_POST["Tipo_usu"])){
		if($_POST["Nombre_usu"]!=""&& $_POST["Email_usu"]!=""&&$_POST["Telefono_usu"]!=""&&$_POST["Contra_usu"]!=""&&$_POST["Contra_usu"]!=""&&$_POST["Tipo_usu"]){
			include "cn1.php";

			$found=false;
			$sql1= "select * from usuario where Email_usu=\"$_POST[Email_usu]\" or Nombre_usu=\"$_POST[Nombre_usu]\"";
			$query = $conexion->query($sql1);
			while ($r=$query->fetch_array()) {
				$found=true;
				break;
			}
			if($found){
				print "<script>alert(\"El correo que quiere registrar ya esta en uso en la plataforma, intente ingresar con otro.\");window.location='registro.php';</script>";
			}
			
			$sql = "insert into Usuario(Nombre_usu, Email_usu, Telefono_usu, Contra_usu, Tipo_usu ) value (\"$_POST[Nombre_usu]\",\"$_POST[Email_usu]\",\"$_POST[Telefono_usu]\",\"$_POST[Contra_usu]\",\"$_POST[Tipo_usu]\")";
		
			$query = $conexion->query($sql);
			if($query!=null){
				print "<script>alert(\"Registro exitoso. Proceda a logearse\");window.location='login.php';</script>";
			}
		}
	}
}
*/

include 'cn1.php';

$Nombre_usu= $_POST['Nombre_usu'];
$Email_usu= $_POST["Email_usu"];
$Telefono_usu= $_POST["Telefono_usu"];
$Contra_usu= $_POST["Contra_usu"];
$Tipo_usu = $_POST["Tipo_usu"];






 $insertar ="INSERT INTO usuario (Nombre_usu, Email_usu, Telefono_usu, Contra_usu, Tipo_usu) VALUES ('$Nombre_usu', '$Email_usu', '$Telefono_usu', '$Contra_usu', '$Tipo_usu')";


$resultado = mysqli_query($conexion, $insertar);
  if ($resultado){
     
      echo "<script>alert('Registro exitoso. Proceda a logearse');window.location='login.php'; </script>";
  
   
}else{
echo "<script>alert('Error al Registrarse, verifica tus datos');window.history.go(-1); </script>";
    
   
  }
   
//Cerrar conexion
  mysqli_close($conexion);

?>