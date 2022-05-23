<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/tablas.css">
    <title>Mostar disponible</title>
</head>
<body>
<?php
$mysql = new mysqli ("localhost", "root", "123456", "cuidado_con_elperro1");
$sql = "SELECT * FROM otonio_invierno";
$result = $mysql->query($sql);
$numeroRegistros = $result->num_rows;



if($numeroRegistros<=0){
    echo 'No hay registros';
}
else
{
   ?> 
   <div class="tabla1">
    <table border="1">
        <tr>
            <th>Imágen</th>
            <th>Prenda</th>
            <th>Tipo</th>
            <th>Talla</th>
            <th>Costo</td>
            <th>Descripción</th>
            <th>Marca</th>
            
        </tr>
        <?php
        while($row = $result -> fetch_array() ){
            $nom = $row["id"];
        ?>
        <tr>
        <td><img height="180px" src="data:image/jpg;base64, <?php echo base64_encode($row["imagen"]); ?>"></td>
            <td><?php printf ($row["prenda"]) ?> </td>
            <td><?php printf ($row["tipo"]) ?></td>
            <td><?php printf ($row["talla"]) ?></td>
            <td><?php printf ($row["costo"]) ?></td>
            <td><?php printf ($row["descripcion"]) ?></td>
            <td><?php printf ($row["marca"]) ?></td>
            <td><a href="modelo/insertarEnCarrito.php?id=<?php echo($nom);?>"> <img src="./img/carro.png" height="35px"></a></td>

        </tr>
 
    <?php
        }
}
?>
</table>
</div>
</body>
</html>

