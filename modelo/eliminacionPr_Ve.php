<?php
$nom=$_GET['id'];
$mysql = new mysqli ("localhost", "root", "123456", "cuidado_con_elperro1");
$sql = "DELETE FROM primavera_verano WHERE id = '".$nom."'";
$result = $mysql->query($sql);  

if($result!=null){

       header ("Location: ../eliminar.php");
}
else
  	print("No se pudo eliminar");
	
?>
