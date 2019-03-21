<?php
  require("../modelo/conexion.php");
?>
<html>
  <head>
    <title>Bill of landing</title>
  </head>
  <body>
    <h2>Archivo existentes</h2>
    <?php
    $id_train=$_GET['id'];
    foreach ($conexion->query("SELECT *	from Ficheros where id_train='$id_train'") as $row){
      $ruta_imagen=$row["ruta"];
    echo "$ruta_imagen <br>";
?>
<embed src="../Ficheros/<?php echo $ruta_imagen; ?>" width="50%" height="50%" />
  <br>
<?php
  }
?>


<!--?php
  $listar=null;
  $directorio=opendir("ficheros/");
  while($elemento!= readdir($directorio)){
    if($elemento != '.' && $elemento!='..'){
      if(is_dir("Ficheros/".$elemento)){
        $listar.="<a class"
      }
    }
  }
?-->

  </body>
</html>
