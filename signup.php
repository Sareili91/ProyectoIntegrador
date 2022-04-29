<?php
require 'database.php'; //Se hace la conexión a la base de datos que está en el archivo database.php
   $message='';
    if(!empty($_POST['email']) && !empty($_POST['contrasenia'])){ //este if verifica que el email y el password NO están vacios
        $sql = "INSERT INTO users (email, contrasenia) VALUES (:email, :contrasenia)"; //sentencia SQL INSERT. Los ":"email significa que mas adelante esos valores pueden cambiar
                                                                                        //las variables despues de VALUES son las que están en los inputs de la parte html del codigo
        $stmt = $conn->prepare($sql); //la variable conn está dentro del archivo database, "prepare" significa que se va a ejecutar una sentencia sql
        $stmt-> bindParam(':email', $_POST['email']); //bindParam lo que hace es vincular parametros
        $stmt-> bindParam(':contrasenia', $_POST['contrasenia']);

        if($stmt->execute()){
            $message = '¡Registro completado!';
            header("Location: login.php"); 
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
    <title>Sign up | Cuidado con el Perro</title>
    <link rel="icon" href="img/logo1.png">
    <link rel ="stylesheet" href="css/style.css">

   
</head>
<body background="img/fondo5.jpg">

<div class="cajita">
    <?php if(!empty($message)): ?>
        <p> <?=$message?> </p>
    <?php endif; ?>


    <h1>Registrate introduciendo tus datos.</h1>
    <form action="signup.php" method="post"> 

    <input type="text" name ="email" placeholder="Ingresa tu mail">
    <input type="password" name="contrasenia" placeholder="Ingresa tu contraseña">
    <input type="submit" value="Registrarse">

    </form>

</div>
 
<figure>
      <a href="sesion.php"> Volver atras </a>
</figure>

</body>
</html>
