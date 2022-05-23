<?php
    $idBuscar = $_GET['id'];
    $mysql = new mysqli ("localhost", "root", "123456", "cuidado_con_elperro1");
    $sql = "SELECT * FROM primavera_verano WHERE id = '".$idBuscar."'";
    $result = $mysql->query($sql);

    if($result == null){
        print ("No se encontró el registro");
    }
    else{
        $row = $result->fetch_array();
        $prenda = $row ["prenda"];
        $tipo = $row ["tipo"];
        $cantidad = $row ["cantidad"];
        $fecha = $row ["fecha_adquisicion"];
        $talla = $row["talla"];
        $costo = $row["costo"];
        $descripcion = $row["descripcion"];
        $marca = $row["marca"];
        $imagen = $row["imagen"];
    }
?>