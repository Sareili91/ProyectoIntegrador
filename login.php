<?php
session_start();
require 'database.php';

if(!empty($_POST['email'])  &&  !empty($_POST['contrasenia'])){
    $records = $conn->prepare('SELECT id, email, contrasenia FROM users WHERE email=:email');
    $records->bindParam(':email', $_POST['email']); //obtener el parametro y vincularlo
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC); //Se guardan los datos de la tabla en la variable results

    $message='';

    if(count($results) > 0 && ($_POST['contrasenia']== $results['contrasenia'])){ //Verificar si el dato que estamos obteniendo no está vacio (se hace con el count)
                                                                          //También se verifica si la contraseña dada (POST) es igual a la contraseña de la base de datos
        $_SESSION ['user_id'] = $results['id'];
        header("Location: sesion.php"); //redireccionar 
    } else{
        $message ='Los datos no coinciden.';
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Cuidado con el Perro</title>
    <link rel="icon" href="img/logo1.png">
    <link rel ="stylesheet" href="css/style.css">

</head>
<body background="img/fondo5.jpg">

    <div class ="cajita">

    <h1> Iniciar sesión </h1>

    <?php 
    if(!empty($message)): ?>
    <p> <?=$message?> </p>
    <?php endif; ?>

    <form action="login.php" method="post"> 

    <input type="text" name ="email" placeholder="Ingresa tu mail">
    <input type="password" name="contrasenia" placeholder="Ingresa tu contraseña">
    <input type="submit" value="Ingresar">

    </form>

    </div>
    <figure>
      <a href="sesion.php"> Volver atras </a>
</figure>
</body>
</html>