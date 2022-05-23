<?php
    session_start();
    $mysql = new mysqli ("localhost", "root", "123456", "cuidado_con_elperro1");
    $sql = "SELECT email, contrasenia FROM administrador WHERE email = '".$_POST["email"]."'";
    $result = $mysql->query($sql);
    $row = $result->fetch_array();

    if($_POST["contrasenia"] == $row["contrasenia"]){
        $_SESSION ['user_admin'] = $row['email'];
        header("Location: ../admin.php");
    }
    else{
        echo ("Datos incorrectos");
    }

?>