<?php
require("../modelo/conexion.php");
// recuperando el id para ser eliminado.
$ruta=$_GET['ruta'];
if($ruta==null && !empty($_GET['rutaFS'])){
$idFS=$_GET['idFS'];
$rutaFS=$_GET['rutaFS'];
$query2="UPDATE train SET facSoftrain = '' WHERE id = $idFS";
if($conexion->query($query2)===true){
  unlink("../Ficheros/$rutaFS");
  header("location: Formulario.php");
}else{
  die('error al insertar datos'.$conexion->error);
}
}elseif($ruta==null && !empty($_GET['rutaFA'])) {
  $idFA=$_GET['idFA'];
  $rutaFA=$_GET['rutaFA'];
  $query2="UPDATE train SET facturaApoyo = '' WHERE id = $idFA";
  if($conexion->query($query2)===true){
    unlink("../Ficheros/$rutaFA");
    header("location: Formulario.php");
  }else{
    die('error al insertar datos'.$conexion->error);
  }
}else{

  // code...
  $id=$_GET['id'];
  //$ruta=$_GET['ruta'];
  $sql = "DELETE from ficheros WHERE id='$id'";
  $result = $conexion->query($sql);
  unlink("../Ficheros/$ruta");
}



  //echo ($direcion.$ruta);
  //header("location: Formulario.php");


?>
