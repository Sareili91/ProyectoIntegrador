<?php
    
    $mysql = new mysqli ("localhost", "root", "123456", "cuidado_con_elperro1");
    $sql = "UPDATE primavera_verano SET prenda = ' ".$_POST["prendaNueva"]." ', 
    tipo = '".$_POST["tipoNuevo"]."' ,
    cantidad= ' ".$_POST["cantidadNueva"]."' ,
    fecha_adquisicion= ' " .$_POST["fechaNueva"]. "',
    talla = '".$_POST["tallaNueva"]. "',
    costo = '".$_POST["costoNuevo"]."',
    descripcion = '".$_POST["descripcionNueva"]."',
    marca = '".$_POST["marcaNueva"]."'
    WHERE id = '".$_POST["idBuscar"]."'";

    print ($sql."<br>");

    $result = $mysql->query($sql);

    if($result!=null){
        print ("La prenda se modifico");
        header("Location: ../actualizar.php");
    }
    else{
        print("La prenda no se modifico");
    }
?>