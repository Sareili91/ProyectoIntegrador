<?php
$temp = $_POST["txtTemporada"];
$imagen = addslashes(file_get_contents($_FILES["imagen"]["tmp_name"]));

    $mysql = new mysqli ("localhost", "root", "123456", "cuidado_con_elperro1");
    $sql = "INSERT INTO $temp (prenda, tipo, cantidad, fecha_adquisicion, talla, costo, descripcion, marca, imagen) VALUES  
    ('".$_POST["txtPrenda"]."','"
    .$_POST["txtTipo"]."','"
    .$_POST["txtCantidad"]."','"
    .$_POST["txtFecha"]."','"
    .$_POST["txtTalla"]."','"
    .$_POST["txtCosto"]."','"
    .$_POST["txtDescripcion"]."','"
    .$_POST["txtMarca"]."','$imagen')";
    $result = $mysql->query($sql);

    if($result!=null){
    print("Se agrego la prenda");
    header("Location:  mostrar.php");
}
else
   print("No se pudo agregar la prenda");
   
    ?>
