<!DOCTYPE html>
<html lang="en">
<head>
    <title>Agregar prenda</title>
    <link rel="icon" href="img/logo1.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estiloagregar.css" media="screen" title="no title">    
    
</head>
<body background="img/fondoadmi.jpg">

    <div class="contenedor">

    <div class="tittle">Agregar prenda</div>
    <!--Formulario para agregar prenda al sistema-->

    <form action="modelo/insertar.php" method="post" enctype="multipart/form-data">
    <div class="todo">
    <div class="insertar">
    Prenda: <input type="text" name ="txtPrenda">
    </div>
    <div class="insertar">
    Tipo: <input type="text" name = "txtTipo">
    </div>
    <div class="insertar">
    Cantidad: <input type="number" name = "txtCantidad">
    </div>
    <div class="insertar">
    Fecha de adquisición: <input type="date" name = "txtFecha" min="2020-01-01" max ="2022-05-17">
    </div>
    <div class="insertar">
    Talla: <input type="text" name = "txtTalla">
    </div>
    <div class="insertar">
    Costo: <input type="number" name = "txtCosto">
    </div>
    <div class="insertar">
    Descripción: <input type="text" name = "txtDescripcion">
    </div>
    <div class="insertar">
    Marca: <input type="text" name = "txtMarca">
    </div>
    <div class="insertar">
    <label for="">Temporada: </label>
    <select name="txtTemporada"> 
        <option value="primavera_verano"> primavera_verano </option>
        <option value="otonio_invierno"> otonio_invierno</option>
    </select>
    </div>
    <div class="insertar">
    <label for="">Imágen: </label>
    <input  id= "img" type="file" name = "imagen">
    
    </div>
    <div class="boton">
    <input type="submit" value ="Agregar prenda">
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