<?php

    $mysql = new mysqli ("localhost", "root", "123456", "cuidado_con_elperro1");
    $sql = "INSERT INTO cliente (usuario, contrasenia) VALUES  ('".$_POST["txtEmail"]."','".$_POST["txtContrasenia"]."')";
    $result = $mysql->query($sql);

    if($result!=null){
    print("Se ha registrado correctamente!");
    header ("Location: ../iniciarSesionCliente.php");
    }
else
   print("No se pudo registrar");
   
    ?>