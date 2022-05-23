<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="img/logo1.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estiloagregar.css" media="screen" title="no title">
    <script src="js/evalua.js"></script>
    <title>Datos domicilio</title>
</head>
<body background="img/fondoadmi.jpg">
    <div class="contenedor">

    <div class="tittle"> Datos personales  </div>
    <form action="datosTarjeta.php" method="POST" onsubmit="return evaluaDomicilio();">
    <div class="todo">
    <div class="insertar">   
    País: <input type="text" name ="txtPais" id="txtPais">
    </div>
    <div class="insertar"> 
   
    Localidad: <input type="text" name = "txtLocalidad" id="txtLocalidad">
    </div>
    <div class="insertar">
  
    Código postal: 
    <input type="text" size="5" name = "txtCodigoPostal" id="txtCodigoPostal" minlength = "0" maxlength = "5">
    </div>
    <div class="insertar">
    
    Dirección: 
    <input type="text" name = "txtDireccion" id="txtDireccion">
    </div>
    <div class="insertar">
  
    Teléfono: 
    <input type="text" name = "txtTelefono" id="txtTelefono">
    </div>
    
    <div class="boton">
    <input type="submit" value ="Siguiente">
    </div>
</div>
    </form>
    
    <br><br>
    <div class="boton1">
 <a href="modelo/mostrarCarrito.php"> 
 <input type="submit" value ="Volver atras"> </a>
</div>
</div>
</body>
</html>