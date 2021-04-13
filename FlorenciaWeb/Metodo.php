
<?php 



include("conexion.php");  



$id= $_GET['id']; 

$sql="DELETE FROM mensaje  WHERE idMensaje = ".$id ;
mysqli_query($conexion,$sql);

header("Location: P-Buzon.php");



?>
