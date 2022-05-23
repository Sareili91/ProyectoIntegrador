<?php
    session_start();
    $mysql = new mysqli ("localhost", "root", "123456", "cuidado_con_elperro1");
    $sql = "SELECT usuario, contrasenia FROM cliente WHERE usuario = '".$_POST["email"]."'";
    $result = $mysql->query($sql);
    $row = $result->fetch_array();

    if($_POST["contrasenia"] == $row["contrasenia"]){
        $_SESSION ['user_cliente'] = $row['usuario'];
        header("Location: ../indexCliente.php");
    }
    else{
        echo ("Datos incorrectos");
    }

?>