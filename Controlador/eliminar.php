<?php
$id=$_GET['id'];

if (isset($id))
{
require('../modelo/conexion.php');

$sql = "DELETE train from train WHERE id='$id'";
$result = $conexion->query($sql);
 header("location: formulario.php");
}
else{
echo "Debe especificar un 'id'.\n";
}
?>