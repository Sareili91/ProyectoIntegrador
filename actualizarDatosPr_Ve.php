<!DOCTYPE html>
<html lang="en">
<head>
     <title>Actualizar datos</title>
     <link rel="icon" href="img/logo1.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estiloagregar.css" media="screen" title="no title">
   
</head>
<body background="img/fondoadmi.jpg">
    <?php
    require ("modelo/buscarPr_Ve.php");
    ?>
    
    <div class="contenedor"> 
    <div class="tittle"> Actualizar datos</div>
    <form action="modelo/modificarPr_Ve.php" method="POST">
    <div class="todo">
    <input style="display:none;" type=text size=40 name="idBuscar" value="<?php echo $idBuscar;?>">
    <div class="insertar">
    Prenda 
     <input type="text" name ="prendaNueva"value ="<?php echo $prenda ?>">
     </div>
     <div class="insertar">
             Tipo: 
             <input type="text" name = "tipoNuevo" value ="<?php echo $tipo?>">
             </div>
             <div class="insertar">
         Cantidad: 
            <input type="number" name="cantidadNueva" value ="<?php echo $cantidad?>" >  
            </div>
            <div class="insertar">
        Fecha de adquisición:
            <input type="date" name ="fechaNueva" min="2020-01-01" max="2022-05-17" value ="<?php echo $fecha?>">
            </div>
            <div class="insertar">
       Talla: 
            <input type="text" name ="tallaNueva" value ="<?php echo $talla?>">
            </div>
            <div class="insertar">
        Costo: 
            <input type="number" name ="costoNuevo" value ="<?php echo $costo?>">
            </div>
            <div class="insertar">
            Descripción:
            <input type="text" name ="descripcionNueva" value ="<?php echo $descripcion?>">
            </div>
            <div class="insertar">
            Marca:
            <input type="text" name ="marcaNueva" value ="<?php echo $marca?>">
            </div>
            <div class="boton">
    <input type="submit" value ="Modificar registro">
    </div> 
</div>    
</form>
<center>
<div class="boton1">
<a href="admin.php"> 
<input type="submit" value ="Volver atras"> </a>
    </div></center>
    </div>
</body>
</html>