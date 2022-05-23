<?php

$mysql = new mysqli ("localhost", "root", "123456", "cuidado_con_elperro");
$sql = "DELETE FROM carrito";
$result = $mysql->query($sql);

if($result==null){
    print ("Hubo un error en la compra");
}
else{
    print ("Compra finalizada!")
    ?> <br><a href="../indexCliente.php"> Volver a la página principal </a>
<?php
}
	
?>
