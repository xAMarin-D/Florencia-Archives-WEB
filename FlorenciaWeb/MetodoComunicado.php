
<?php 



include("conexion.php");  



$idc= $_GET['idc']; 

$sql="DELETE FROM comunicados  WHERE idComunicado = ".$idc ;
mysqli_query($conexion,$sql);

header("Location: P-Comunicados.php");



?>
