<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="img/logo1.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estiloagregar.css" media="screen" title="no title"> 
    <script src="js/evalua.js"></script>
    <title>Datos tarjeta</title>
</head>
<body  background="img/fondoadmi.jpg">

     <div class="contenedor">
     <div class="tittle"> Datos de tarjeta </div>
    
    <form action="modelo/vaciarCarrito.php" method="POST" onsubmit="return evaluaTarjeta()">
    <div class="todo">
   
    <div class="insertar">
    Nombre del titular: <input type="text" name ="txtTitular" id="txtTitular">
    </div>
    <div class="insertar">
    Número de tarjeta: <input type="text" name = "txtTarjeta" maxlength="16" id="txtTarjeta">
    </div>
    <div class="insertar">
    Fecha de expiración: 
    <input type="text" size="1" name = "txtDia" id ="txtDia" placeholder="Día" >
    
    <input type="text" size = "1" name = "txtMes" id="txtMes" placeholder="Mes" >
    </div>
    <div class="insertar">
    Código de seguridad: 
    <input type="text" size="1" name = "txtCodigo" id="txtCodigo" minlength = "0" maxlength = "3">
    </div>
    <div class="boton">
    <input type="submit" value ="Finalizar compra">
    </div>
</div>
    </form>
    <div class="boton1">
    <a href="datosDomicilio.php"> 
    <input type="submit" value ="Volver atras">  </a>
    </div>
</div>

</body>
</html>