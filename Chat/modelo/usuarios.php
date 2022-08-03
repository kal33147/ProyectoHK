<?php
    session_start();
    include_once "config.php";
    $outgoing_id = $_SESSION['cocina'];
    $sql = "SELECT * FROM usuario WHERE Tipo_usu = 1 ORDER BY id_usu DESC";
    $query = mysqli_query($conn, $sql);
    $output = "";
    if(mysqli_num_rows($query) == 0){
        $output .= "No hay usuarios disponibles para chatear.";
    }elseif(mysqli_num_rows($query) > 0){
        include_once "data.php";
    }
    echo $output;
?>