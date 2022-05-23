<!DOCTYPE html>
<html lang="en">
<head>
    <title>Iniciar sesion administrador</title>
    <link rel="icon" href="img/logo1.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href="css/style.css">
    
</head>
<body background="img/fondo5.jpg">
    <div class ="cajita">

    <h1> Iniciar sesión como administrador</h1>


<form action="modelo/loginAdm.php" method="post"> 

    <input type="email" name ="email" placeholder="Ingresa tu mail">
    <input type="password" name="contrasenia" placeholder="Ingresa tu contraseña">
    <input type="submit" value="Ingresar">

</form>
<a href="index.php"> 
<input type="submit" value ="Volver atras"> </a>

</div>

</body>
</html>