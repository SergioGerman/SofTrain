<?php
  require("../modelo/conexion.php");
?>
<html>
  <head>
    <title>Imagenes</title>
  </head>
  <body>
    <fieldset>
      <legend>Bill Of Landing</legend>
      <table>
        <tr>
          <td>Nombre</td>
          <td>Accion de eliminar</td>
        </tr>
    <?php
    $id_train=$_GET['id'];
    foreach ($conexion->query("SELECT *	from Ficheros where id_train='$id_train'") as $row){
    ?>
<tr>
  <td><a href="mostrarBill.php?id=<?php echo $row['id'] ?>"><?php echo $row['nombre']?></a></td>
  <td><a href="../controlador/eliminarArchivo.php?id=<?php echo $row['id']; ?>&ruta=<?php echo $row['ruta']; ?>">eliminar</a></td>
</tr>
<?php
  }
?>
<tr>
  <td><hr></td>
</tr>
<form method="post" action="../controlador/subirFicheros.php" enctype="multipart/form-data" id="form_subir">
<input type="hidden" name="id_train" value="<?php echo $id_train ?>">
<tr>
<td><label for="">Bill of Landing:</label></td>
<td><input type="file" name="fichero" /><br/></td>
</tr>
<tr>
  <td><input type="submit" class="btn" value="Enviar"/></td>  
</tr>
</form>
<tr>
  <td><hr></td>
</tr>
<?php
    foreach ($conexion->query("SELECT *	from train where id='$id_train'") as $row2){
      $rutaFS=$row2["facSoftrain"];
      $rutaFA=$row2["facturaApoyo"];
      //echo "$rutaFS";
?>
</table>
</fieldset>
<fieldset>
  <legend>Facturas</legend>
<table border="1">
  <tr>
    <td>FACTURA SOFTRAIN</td>
    <td>FACTURA APOYO</td>
  </tr>
<tr>
  <?php
  if(!empty($rutaFS)){
  ?>
  <td><iframe src="../Ficheros/<?php echo $rutaFS; ?>"></iframe><a href="../controlador/eliminarArchivo.php?idFS=<?php echo $row2['id']; ?>&rutaFS=<?php echo $row2['facSoftrain']; ?>">eliminar</a></td>
  <td><iframe src="../Ficheros/<?php echo $rutaFA; ?>"></iframe><a href="../controlador/eliminarArchivo.php?idFA=<?php echo $row2['id']; ?>&rutaFA=<?php echo $row2['facturaApoyo']; ?>">eliminar</a></td>
  <?php
  }else{
  ?>
  <td><p>No existen imagenes</p></td>
  <td><p>No existen imagenes</p></td>
  <?php
  }
  ?>
</tr>
<?php
}
?>
</table>
</fieldset>
  </body>
</html>
