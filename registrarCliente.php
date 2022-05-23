<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registrarse</title>
    <link rel="icon" href="img/logo1.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href="css/style.css">
    
</head>
<body background="img/fondo5.jpg">
    <div class ="cajita">
    <h1>Registrate introduciendo tus datos</h1>

    <form action="modelo/insertarCliente.php" method="post">
        <input type="email" name ="txtEmail" placeholder="Ingresa un email">
        <input type="password" name="txtContrasenia" placeholder="Ingresa una contraseña">
        <input type="submit" value="Registrarse">
    </form>
    <a href="sesionesCliente.php"> 
   <input type="submit" value ="Volver atras"> </a>
    </div>
   
</body>
</html>