<?php
require("../modelo/conexion.php");
session_start();
if(!isset($_SESSION['usuario'])){
	header('location: ../index.php');
}
?>
<html>
<head></head>
<body>
<?php
$id=$_GET['id'];
  foreach ($conexion->query("SELECT *	from Ficheros where id='$id'") as $row){
?>
<iframe src="../ficheros/<?php echo $row['ruta']; ?>"></iframe>
<?php
  }
?>
</body>
</html>
