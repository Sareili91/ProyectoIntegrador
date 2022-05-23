<!DOCTYPE html>
<html lang="en">
<head>
    <title>Iniciar sesion | Registrarse</title>
    <link rel="icon" href="img/logo1.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href="css/style.css">
    <link rel ="stylesheet" href="css/fontello.css">
</head>
<body background="img/fondo5.jpg">

<!--Aqui hay que quitar el undefined index user_email-->
<?php 
session_start();

if (isset($_SESSION ['user_cliente']) && $_SESSION ['user_cliente'] ){?> 
    <br>Bienvenido: <?=$_SESSION ['user_cliente']?>
    <br>Estás ingresado!
    <a href="modelo/cerrarSesion.php"> Cerrar sesión</a>
    <br><a href="index.php"> Volver atras </a>

<?php 
} else {
?>

<div class ="cajita"> 
    <h1>Iniciar sesion o registrarse</h1>
    <section class="sesion">
    <article>
    <a href = "iniciarSesionCliente.php"> 
    <input type="submit" value ="Iniciar sesion">    
    </a> 
    </article>
    <article>
    <a href="registrarCliente.php">
    <input type="submit" value ="Registrarse"></a>
    </article>
    </section>
    <article>
   <a href="index.php"> 
   <input type="submit" value ="Volver atras"> </a>
</article>
</div>
<br>


<?php }?>

    
</body>
</html>