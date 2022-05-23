<link rel="stylesheet" href="../css/tablas.css">

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
   ?> 
   <div class="tabla1">
    <table border="2">
        <h1>Temporada Otoño-Invierno</h1>
        <tr>
            <td>Id</td>
            <td>Prenda</td>
            <td>Tipo</td>
            <td>Cantidad</td>
            <td>Fecha de adquisicion</td>
            <td>Talla</td>
            <td>Costo</td>
            <td>Descripción</td>
            <td>Marca</td>
            <td>Imágen</td>
            <td>Opcion</td>
            
        </tr>
        <?php
        while($row = $result -> fetch_array() ){
            $nom = $row["id"];
       ?>
        <tr>
            <td><?php printf ($row["id"]) ?> </td>
            <td><?php printf ($row["prenda"]) ?> </td>
            <td><?php printf ($row["tipo"]) ?></td>
            <td><?php printf ($row["cantidad"]) ?></td>
            <td><?php printf ($row["fecha_adquisicion"]) ?></td>
            <td><?php printf ($row["talla"]) ?></td>
            <td><?php printf ($row["costo"]) ?></td>
            <td><?php printf ($row["descripcion"]) ?></td>
            <td><?php printf ($row["marca"]) ?></td>
            <td><img height="180px" src="data:image/jpg;base64, <?php echo base64_encode($row["imagen"]); ?>"></td>
            <td><a href="./actualizarDatosOt_In.php?id=<?php echo($nom);?>"> <img src="./img/actualizarRegistro.png"  height="35px"></a></td>
        </tr>
        
   <?php
        }
?>

<table border="2">
    <h1>Temporada Primavera-Verano</h1>
        <tr>
            <td>Id</td>
            <td>Prenda</td>
            <td>Tipo</td>
            <td>Cantidad</td>
            <td>Fecha de adquisicion</td>
            <td>Talla</td>
            <td>Costo</td>
            <td>Descripción</td>
            <td>Marca</td>
            <td>Imágen</td>
            <td>Opcion</td>
            
        </tr>

        <?php
        while($row2 = $result2 -> fetch_array() ){
            $nom2 = $row2["id"];
       ?>
       <tr>
            <td><?php printf ($row2["id"]) ?> </td>
            <td><?php printf ($row2["prenda"]) ?> </td>
            <td><?php printf ($row2["tipo"]) ?></td>
            <td><?php printf ($row2["cantidad"]) ?></td>
            <td><?php printf ($row2["fecha_adquisicion"]) ?></td>
            <td><?php printf ($row2["talla"]) ?></td>
            <td><?php printf ($row2["costo"]) ?></td>
            <td><?php printf ($row2["descripcion"]) ?></td>
            <td><?php printf ($row2["marca"]) ?></td>
            <td><img height="180px" src="data:image/jpg;base64, <?php echo base64_encode($row2["imagen"]); ?>"></td>
            <td><a href="./actualizarDatosPr_Ve.php?id=<?php echo($nom2);?>"> <img src="./img/actualizarRegistro.png"  height="35px"></a></td>
        </tr>
<?php
    }
?>
<?php
    }
?>
</table>
</div>