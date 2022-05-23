<!DOCTYPE html>
<html lang="en">
<head>
    <script src="../js/evalua.js"></script>
    <link rel="icon" href="../img/logo1.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/tablas.css">

    <title>Mostrar Carrito</title>
</head>
<body background="../img/fondoadmi.jpg">
<?php
$mysql = new mysqli ("localhost", "root", "123456", "cuidado_con_elperro1");

$sql = "SELECT * FROM carrito";
$result = $mysql->query($sql);
$numeroRegistros = $result->num_rows;

if($numeroRegistros<=0){
    echo 'No hay prendas en el carrito';
    ?> <br><a href="../indexCliente.php"> <input type="submit" value ="Volver atras"> </a> <?php
}
else
{
   ?>
   <div class="tabla1">
    <table>
        <thead>

        <tr>
            <th>Prenda</th>
            <th>Tipo</th>
            <th>Talla</th>
            <th>Costo</th>
            <th>Descripción</th>
            <th>Marca</th>
            <th>Opcion</th>
            
        </tr>
        </thead>

        <?php
        $sum=0;
        $membresia=0;
        while($row = $result -> fetch_array() ){
            $nom = $row["id"];
        ?>
<script>
    function clicked (e){
        if(!confirm('¿Estas seguro que desea eliminar la prenda del carrito?')) e.preventDefault();
    }
</script>
<tbody>
        <tr>
            <td><?php printf ($row["prenda"]) ?> </td>
            <td><?php printf ($row["tipo"]) ?> </td>
            <td><?php printf ($row["talla"]) ?></td>
            <td><?php printf ($row["costo"]) ?></td>
            <td><?php printf ($row["descripcion"]) ?></td>
            <td><?php printf ($row["marca"]) ?></td>
            <td><a onclick ="clicked (event)" href="eliminacionCarrito.php?id=<?php echo($nom);?>"> <img src="../img/eliminarRegistro.png"  height="35px"></a></td>
        </tr>
        </tbody>
    
    <?php
    $sum=$sum+$row['costo'];
}

?>
</table>
</div>

<!--Aqui pide la membresia--> 


<center>
<h3>Total: $ <?php printf ($sum) ?> </h3>
<form action="../datosDomicilio.php" method="post">
    <input type="submit" value ="Comprar">
</form>

<!--Segun yo asi ya funciona, solo falta pedir la membresia -->

<a href="../indexCliente.php"> <input type="submit" value ="Volver atras"> </a>
<?php
}
?> </center>


</body>
</html>
