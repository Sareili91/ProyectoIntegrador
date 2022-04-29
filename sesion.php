<?php
    session_start();
    require 'database.php';

    if(isset($_SESSION['user_id'] ) ){ //Condicional para verificar si en la SESSION existe una variable llamada user_id
                                        //en este caso sí existe, se le asigno en el archivo login.php
        $records = $conn->prepare('SELECT id, email, contrasenia FROM users WHERE id = :id');
        $records->bindParam(':id', $_SESSION['user_id']);
        $records->execute();

        $results = $records->fetch(PDO::FETCH_ASSOC);

        $user = null;

        if(!empty($results)){
            $user = $results;
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesion - Registarse | Cuidado con el Perro</title>
    <link rel="icon" href="img/logo1.png">
    <link rel ="stylesheet" href="css/style.css">
</head>
<body background="img/fondo5.jpg">



<?php if(!empty($user) ): ?>

<div class="logeado">
    <br> Bienvenido. <?= $user['email'] ?>
    <br> Estás ingresado!
    <a href="logout.php"> Cerrar sesion</a>
</div>
    

<?php else: ?>

<div class ="cajita"> 
    <h1>Iniciar sesión o registrarse</h1>
    <a href = "login.php"> Iniciar Sesion </a> o
    <a href="signup.php"> Registrarse</a>
</div>

<?php endif; ?>
<figure>
      <a href="index.php"> Volver atras </a>
</figure>    
    
</body>
</html>