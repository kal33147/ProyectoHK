<?php 
    session_start();
    include_once "config.php";
    $email = mysqli_real_escape_string($conn, $_POST['email_usu']);
    $password = mysqli_real_escape_string($conn, $_POST['contra_usu']);
    if(!empty($email) && !empty($password)){
        $sql = mysqli_query($conn, "SELECT * FROM usuario WHERE email_usu = '{$email}'");
        if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
            $user_pass = md5($password);
            $enc_pass = $row['password'];
            if($user_pass === $enc_pass){
                $status = "Activo ahora";
                if($sql2){
                    $_SESSION['cocina'] = $row['nombre_usu'];
                    echo "success";
                }else{
                    echo "Algo salió mal. ¡Inténtalo de nuevo!";
                }
            }else{
                echo "¡Correo electrónico o la contraseña son incorrectos!";
            }
        }else{
            echo "$email - ¡Este correo electrónico no existe!";
        }
    }else{
        echo "¡Todos los campos de entrada son obligatorios!";
    }
?>