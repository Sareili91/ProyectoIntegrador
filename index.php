<!DOCTYPE html>
<html>
<head>
    <title>Temporadas | cuidado con el Perro</title>
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
        <label class="icon-align"for="menu-bar"> </label>
        <nav class="menu">
            <a href="sesionesCliente.php">Mi cuenta | Registrarse</a>
            <a href="https://www.cuidadoconelperro.com.mx/">Lo de hoy</a>
            <a href="sesionAdmin.php">Personal administrativo</a>
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
                 <img src="img/primavera1.jpg">
                 </a>
                <h4>Primavera-Verano</h4>
            </article>
           
            <article>
               <a href="otonio_invierno.php">
                <img src="img/otoño1.jpg">
                </a>
                <h4>Otoño-Invierno</h4>
            </article>
            </div>

        </section>

 <footer id="pie"> <center> 
     Cuidado con el Perro &copy; | Todos los derechos reservados  2021-2022
      <address>
          <a href="http://www.itorizaba.edu.mx">ITO</a>
      </address>
</footer> </center>  

</main>
<?php
} else{
?>
 <header>
    <div class="contenedor">
        <input type="checkbox" id="menu-bar">
        <label class="icon-align"for="menu-bar"> </label>
        <nav class="menu">
            <a href="sesionesCliente.php">Mi cuenta | Registrarse</a>
            <a href="https://www.cuidadoconelperro.com.mx/">Lo de hoy</a>
            <a href="sesionAdmin.php">Personal administrativo</a>
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
        <a href="#blog">Ver más</a>
    </div>
    </section>
<section id="nuevacoleccion">
     <img src="img/fondo6.jpg">   
</section>    

<section id="blog">
    <div class="contenedor1">
         <h3> CONOCE NUESTRAS NUEVAS COLECCIONES  </h3> 
            <h3 id="moda"> <a href="iniciarSesionCliente.php">Inicia sesión</a> o <a href="registrarCliente.php">Registrate</a> para ver lo último en moda para ti</h3>
</div>
</section> 
<aside>
<div class="container2">
<h2>SIGUENOS EN NUESTRAS REDES</h2>

    <div class="face">
        <a href="https://www.facebook.com/cuidadoconelperromx">
        <img src="img/facebook.jpg">
    </a>
    </div>


    <div class="twit">
    <a href="https://twitter.com/ccperro"> 
    <img src="img/instagram.jpg">
    </a>
    </div>


    <div class="inst">
    <a href="https://www.instagram.com/cuidadoconelperromx"> 
        <img src="img/twitter.jpg">
    </a>
    </div>

</div>
</aside>

<aside>
    <div class="container1">
    <h2>DESCARGA NUESTRA APLICACION</h2>
    
    
        <div class="face">
            <a href="https://play.google.com/store/apps/details?id=com.cuidadoconelperro.android">
            <img src="img/playstore.png">
        </a>
        </div>
        <img src="img/app.png"> 
    
    </div>
    </aside>
     
</main>


<footer id="pie"> <center> 
     Cuidado con el Perro &copy; | Todos los derechos reservados  2021-2022
      <address>
          <a href="http://www.itorizaba.edu.mx">ITO</a>
      </address>
</footer> </center>  


<?php 
}
?>
  </body>
  </html> 
