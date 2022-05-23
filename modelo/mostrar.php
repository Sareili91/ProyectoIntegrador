<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mostrar</title>
    <link rel="icon" href="../img/logo1.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/tablas.css">
    
</head>
<body background="../img/fondoadmi.jpg" >
    
<?php
$mysql = new mysqli ("localhost", "root", "123456", "cuidado_con_elperro1");
$sql = "SELECT * FROM otonio_invierno";
$result = $mysql->query($sql);

$sql2 = "SELECT * FROM primavera_verano";
$result2 = $mysql->query($sql2);

$numeroRegistros = $result->num_rows;
$numeroRegistros2 = $result2->num_rows;
if($numeroRegistros<=0 && $numeroRegistros2<=0){
    echo 'No hay registros';
}
else
{
   ?> <div class="tabla1">
    <table border="2">
    <h1>Temporada Otoño-Invierno</h1>
        <tr>
            <th>Id</th>
            <th>Prenda</th>
            <th>Tipo</th>
            <th>Cantidad</th>
            <th>Fecha de adquisicion</th>
            <th>Talla</th>
            <th>Costo</th>
            <th>Descripción</th>
            <th>Marca</th>
            <th>Imágen</th>
        </tr>
        <?php
        while($row = $result -> fetch_array() ){
        ?>
        <tr>
            <td><?php printf ($row["id"]) ?></td>
            <td><?php printf ($row["prenda"]) ?> </td>
            <td><?php printf ($row["tipo"]) ?></td>
            <td><?php printf ($row["cantidad"]) ?></td>
            <td><?php printf ($row["fecha_adquisicion"]) ?></td>
            <td><?php printf ($row["talla"]) ?></td>
            <td><?php printf ($row["costo"]) ?></td>
            <td><?php printf ($row["descripcion"]) ?></td>
            <td><?php printf ($row["marca"]) ?></td>
            <td><img height="180px" src="data:image/jpg;base64, <?php echo base64_encode($row["imagen"]); ?>"></td>
        </tr>

    <?php
        }
    ?>

    <table border="2">
    <h1>Temporada Primavera-Verano</h1>
        <tr>
            <th>Id</th>
            <th>Prenda</th>
            <th>Tipo</th>
            <th>Cantidad</th>
            <th>Fecha de adquisicion</th>
            <th>Talla</th>
            <th>Costo</th>
            <th>Descripción</th>
            <th>Marca</th>
            <th>Imágen</th>
        </tr>
        <?php
        while($row2 = $result2 -> fetch_array() ){
        ?>
        <tr>
            <td><?php printf ($row2["id"]) ?></td>
            <td><?php printf ($row2["prenda"]) ?> </td>
            <td><?php printf ($row2["tipo"]) ?></td>
            <td><?php printf ($row2["cantidad"]) ?></td>
            <td><?php printf ($row2["fecha_adquisicion"]) ?></td>
            <td><?php printf ($row2["talla"]) ?></td>
            <td><?php printf ($row2["costo"]) ?></td>
            <td><?php printf ($row2["descripcion"]) ?></td>
            <td><?php printf ($row2["marca"]) ?></td>
            <td><img height="180px" src="data:image/jpg;base64, <?php echo base64_encode($row2["imagen"]); ?>"></td>
        </tr>
        <?php
        }
    ?>
    </table>
    
<?php
} //CIERRA LLAVE DEL ELSE
?></table> </div>
<br><center> <a href="../admin.php"> <input type="submit" value ="Volver atras"></a>
</center>
</body>
</html>

