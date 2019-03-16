<?php
$id=$_GET['id_carga'];

if (isset($id))
{
require('../modelo/conexion.php');

$sql = "DELETE  notaContables from notaContables WHERE id_carga='$id'";
$result = $conexion->query($sql);
 header("location: ../controlador/formulario.php");
}
else{
echo "Debe especificar un 'id'.\n";
}
?>