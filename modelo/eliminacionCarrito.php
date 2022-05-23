<?php
$nom=$_GET['id'];
$mysql = new mysqli ("localhost", "root", "123456", "cuidado_con_elperro1");
$sql = "DELETE FROM carrito WHERE id = '".$nom."'";
$result = $mysql->query($sql);  

if($result!=null){

       header ("Location: mostrarCarrito.php");
}
else
  	print("No se pudo eliminar");
	
?>
