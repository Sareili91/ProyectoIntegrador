<!DOCTYPE html>
<html>
<head>
    <title>Mi cuenta</title>
    <link rel="icon" href="img/logo1.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-
    width, user-scalable=no, initial-scale=1,maximum-
    scale=1, minimum-scale=1">
    <link rel="stylesheet" href="css/fontello.css">
    <link rel="stylesheet" href="css/estiloprincipal.css" media="screen" title="no title">
  </head>
  <body id="fondo" background="img/cajita.jpg">
  
<?php
session_start();
if(isset($_SESSION ['user_cliente']) && $_SESSION['user_cliente']){?>
   
   <header>
   <div class="contenedor">
        <input type="checkbox" id="menu-bar">
        <label class="icon-user"for="menu-bar"> </label>
        <nav class="menu">
            <a href="#moda">Usuario:<?=$_SESSION ['user_cliente']?> </a>
            <a href="modelo/mostrarCarrito.php">Carrito</a>
            <a href="modelo/cerrarSesion.php">Cerrar sesion</a>
            <img src="img/icono.jpg" id="icono"> 
         </nav>
        
    </div>   
</header>

<main>
    <section id="banner">
        <img src="img/fondo1.jpeg"> 
        <div class="contenedor">
        <h2>Disfruta de nuestra ropa de temporada</h2>
    
        <p> Somos una marca de ropa 100% mexicana inspirada
            en un estilo de vida urbano, enfocada en crear
            diseños únicos, vanguardistas y casuales.</p>    
        <a href="#moda">Ver más</a>
    </div>
    </section>
     <section id="nuevacoleccion">
     <img src="img/fondo6.jpg">
               
    </section>

        <section id="blog">
        <?php //ASIDE.
          include_once("aside.html");
        ?>
            <h3> CONOCE NUESTRAS NUEVAS COLECCIONES  </h3> 
            <h3 id="moda"> Tenemos lo adecuado para cada temporada</h3>
            
            <div class="contenedor">
            <article>
                 <a href="primavera_verano.php">
                 <img height="380px"src="img/primavera1.jpg">
                 <input type="submit" value ="Temporada primavera-verano">
                 </a>
               
            </article>
           
            <article>
               <a href="otonio_invierno.php">
                <img height="380px" src="img/otoño1.jpg">
                <input type="submit" value ="Temporada otoño-invierno">
                </a>
                
            </article>
            </div>

        </section>

 <footer id="pie"> <center> 
     Cuidado con el Perro &copy; | Todos los derechos reservados  2021-2022
      <address>
          <a href="http://www.itorizaba.edu.mx">ITO</a>
      </address>
</footer> </center>  
<?php
} else{
?>
<header> 
<div classs="regresar"> 
  <lable class="icon-reg" for="regresar"></lable>
  <a href="index.php">
 </a>
</div>
</header>

<div class ="cajita"> 
    <h1>Iniciar sesion o registrarse</h1>
    <section class="sesion">
    <article>
    <a href = "iniciarSesionCliente.php"> Iniciar sesion </a> 
    </article>
    <article>
    <a href="registrarCliente.php"> Registrarse</a>
    </article>
    </section>
</div>
<br>





<?php 
}
?>
</main>    
</body>
  </html> 
