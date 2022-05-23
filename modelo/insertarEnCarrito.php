<?php
$nom=$_GET['id'];
    $mysql = new mysqli ("localhost", "root", "123456", "cuidado_con_elperro1");
    $sql = "SELECT * FROM `otonio_invierno` WHERE id = '".$nom."'";
    
    $result = $mysql->query($sql);

    $row = $result->fetch_array();
    $prenda = $row ["prenda"];
    $tipo = $row ["tipo"];
    $talla = $row["talla"];
    $costo = $row["costo"];
    $descripcion = $row["descripcion"];
    $marca = $row["marca"];


$sql2 = "INSERT INTO carrito (prenda, tipo, talla, costo, descripcion, marca) VALUES ('".$prenda."','".$tipo."', '".$talla."', '".$costo."','".$descripcion."', '".$marca."' )";
$result2 = $mysql->query($sql2);

if($result==null){
    print("Error");
    }
    else{
        print("Se agregó con exito!");
        ?><br><a href="../otonio_invierno.php"> Volver atras </a>
        <?php
    }
    
    ?>

