<?php
  session_start();
if(!isset($_SESSION['usuario'])){
	header('location: ../index.php');
}
require('../modelo/conexion.php');
$id=$_GET['id'];
foreach ($conexion->query("SELECT * from train where id='$id'") as $row){
?>
<html>
  <head>
    <title>Imagenes</title>
  </head>
  <body>
    <fieldset>
      <legend>Archivos</legend>
	  <table align="center">
		<tr>
			<td>
				Cliente
			</td>
			<td>
				<?php echo $row['cliente']?>
			</td>
			</tr>
			<tr>
			<td>
				Consignatario
			</td>
			<td>
				<?php echo $row['remitConsig']?>
			</td>
			</tr>
			<tr>
			<td>
				Nro. Registro
			</td>
			<td>
				<?php echo $row['numRegistro']?>
			</td>
			</tr>
		</table>
<?php
}
$id_train=$_GET['id'];
    foreach ($conexion->query("SELECT *	from train where id='$id_train'") as $row2){
      $rutaFS=$row2["facSoftrain"];
      $rutaFA=$row2["facturaApoyo"];
?>
<fieldset>
  <legend>FACTURAS</legend>
  <table border="1">
  <form method="post" action="../controlador/subirFicheros.php" enctype="multipart/form-data" id="form_subir">
  <input type="hidden" name="id_train" value="<?php echo $id_train ?>">
  <tr>
    <td>FACTURA SOFTRAIN</td>
    <td>FACTURA APOYO</td>
  </tr>

  <?php
  if(!empty($rutaFS) && !empty($rutaFA)){
  ?>
<tr>
  <td><iframe src="../Ficheros/<?php echo $rutaFS; ?>"></iframe><a href="../controlador/eliminarArchivo.php?idFS=<?php echo $row2['id']; ?>&rutaFS=<?php echo $row2['facSoftrain']; ?>">eliminar</a></td>
  <td><iframe src="../Ficheros/<?php echo $rutaFA; ?>"></iframe><a href="../controlador/eliminarArchivo.php?idFA=<?php echo $row2['id']; ?>&rutaFA=<?php echo $row2['facturaApoyo']; ?>">eliminar</a></td>
  <?php
  }elseif(!empty($rutaFS) && empty($rutaFA) ){
  ?>
	<td><iframe src="../Ficheros/<?php echo $rutaFS; ?>"></iframe><a href="../controlador/eliminarArchivo.php?idFS=<?php echo $row2['id']; ?>&rutaFS=<?php echo $row2['facSoftrain']; ?>">eliminar</a></td>
	<td>carga un archivo<br><br><input type="file" name="ficheroFA" /></td>

  <?php
  }elseif(!empty($rutaFA) && empty($rutaFS)){
?>
	<td>carga un archivo<br><br><input type="file" name="ficheroFS" /></td>
	<td><iframe src="../Ficheros/<?php echo $rutaFA; ?>"></iframe><a href="../controlador/eliminarArchivo.php?idFA=<?php echo $row2['id']; ?>&rutaFA=<?php echo $row2['facturaApoyo']; ?>">eliminar</a></td>
<?php
  }else{
?>
	<td>carga un archivo<br><br><input type="file" name="ficheroFS" /></td>
	<td>carga un archivo<br><br><input type="file" name="ficheroFA" /></td>
<?php
  }
  ?>
 </tr>
<?php
}
?>

</table>
</fieldset>
<fieldset>
<legend>BILL OF LANDING</legend>
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
  <td><a href="../controlador/eliminarArchivo.php?id=<?php echo $row['id']; ?>&ruta=<?php echo $row['ruta']; ?>&id_train=<?php echo $id_train; ?>">eliminar</a></td>
</tr>
<?php
  }
?>
<tr>
  <td><hr></td>
</tr>
<tr>
<td><label for="">Cargar un nuevo Archivo Bill of Landing:</label></td>
</tr>
<tr>
<td><input type="file" name="fichero" /><br/></td>
</tr>
<tr>

</tr>
<tr>
  <td><hr></td>
</tr>
</table>
</fieldset>
<br>
<input type="submit" value="Enviar"/>
</form>
</fieldset>
  </body>
</html>
