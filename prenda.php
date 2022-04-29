<?php
require 'database.php';
$message='';
if ( !empty($_POST['tipoPrenda']) 
  && !empty($_POST['fechaAdquisicion']) 
  && !empty($_POST['cantidad']) 
  && !empty($_POST['costo']) 
  && !empty($_POST['nombreProveedor']) 
  && !empty($_POST['marca'])  ){ //aqui termina el if

    $sql = "INSERT INTO prendas (tipoPrenda, fechaAdquisicion, cantidad, costo, nombreProveedor, marca) 
    VALUES (:tipoPrenda, :fechaAdquisicion, :cantidad, :costo, :nombreProveedor, :marca)";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':tipoPrenda' , $_POST['tipoPrenda'] );
    $stmt->bindParam(':fechaAdquisicion' , $_POST['fechaAdquisicion'] );
    $stmt->bindParam(':cantidad' , $_POST['cantidad'] );
    $stmt->bindParam(':costo' , $_POST['costo'] );
    $stmt->bindParam(':nombreProveedor' , $_POST['nombreProveedor'] );
    $stmt->bindParam(':marca' , $_POST['marca'] );

    if($stmt->execute() ){
        $message = 'Se ha añadido la prenda a la Base de datos';

    }
    else{
        $message = 'A ocurrido un error';
    }
}   
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prenda | Cuidado con el Perro</title>
    <link rel="icon" href="img/logo1.png">
    <link rel ="stylesheet" href="css/styleprenda.css">
    <link rel ="stylesheet" href="js/Tienda.js">
</head>
<body background="img/fondo5.jpg">
    

<div class="cajita">
    <?php if(!empty($message)): ?>
        <p> <?=$message ?> </p>
    <?php endif; ?>



    <h1> Ingresa los datos de la prenda</h1>

    <form action="prenda.php" method="post">

    <p>Tipo de prenda</p>
    <input type="text" name="tipoPrenda"> <br>
   
    <p>Fecha de adquisición</p>
    <input type="date" name="fechaAdquisicion" min="2022-01-01" max ="2025-12-31"> <br> <br>

    <p>Cantidad de prendas</p>
    <input type="number" name="cantidad" min="1" max="100" > <br> <br>

    <p>Costo</p>
    <input type="number" name="costo"> <br>
    
    <p>Nombre del proveedor</p>
    <input type="text" name="nombreProveedor"> <br>
    
    <p>Marca</p>
    <input type="text" name="marca"> <br>

    <input type="submit" value="Registrar prenda">
    </form>

</div>
<figure>
      <a href="index.php"> Volver atras </a>
</figure>
</body>
</html>