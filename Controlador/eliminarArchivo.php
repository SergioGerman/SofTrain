<?php
require("../modelo/conexion.php");
// recuperando el id para ser eliminado.
$ruta=$_GET['ruta'];
// eliminar archivo factura softrain.
if($ruta==null && !empty($_GET['rutaFS'])){
$idFS=$_GET['idFS'];
$rutaFS=$_GET['rutaFS'];
$query2="UPDATE train SET facSoftrain = '' WHERE id = $idFS";
if($conexion->query($query2)===true){
  unlink("../Ficheros/$rutaFS");
  header("location: ../vista/verFicheros.php?id=$idFS");
}else{
  die('error al insertar datos'.$conexion->error);
}
// eliminar archivo factura apoyo
}elseif($ruta==null && !empty($_GET['rutaFA'])) {
  $idFA=$_GET['idFA'];
  $rutaFA=$_GET['rutaFA'];
  $query2="UPDATE train SET facturaApoyo = '' WHERE id = $idFA";
  if($conexion->query($query2)===true){
    unlink("../Ficheros/$rutaFA");
    header("location: ../vista/verFicheros.php?id=$idFA");
  }else{
    die('error al insertar datos'.$conexion->error);
  }
}else{

  // Eliminar archivo bill of landing
  $id=$_GET['id'];
  $id_train=$_GET['id_train'];
  $sql = "DELETE from ficheros WHERE id='$id'";
  $result = $conexion->query($sql);
  unlink("../Ficheros/$ruta");
  header("location: ../vista/verFicheros.php?id=$id_train");
}



  //echo ($direcion.$ruta);
  //header("location: Formulario.php");


?>
