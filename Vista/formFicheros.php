<html>
<?php
require('../modelo/conexion.php');
session_start();
if(!isset($_SESSION['usuario'])){
	header('location: ../index.php');
}
  $id=$_GET['id'];
  foreach ($conexion->query("SELECT * from train where id='$id'") as $row){
  ?>
  <head>
		<title>subir ficheros</title>
    <link rel="stylesheet" href="../css/upload.css">
	</head>
	<body>
  <table align="center" border=1>
    <tr>
			<td>Cliente</td>
			<td><?php echo $row['cliente']?></td>
    </tr>
    <tr>
      <td>Consignatario</td>
      <td><?php echo $row['remitConsig']?></td>
    </tr>
    <tr>
      <td>Nro. Registro</td>
      <td><?php echo $row['numRegistro']?></td>
    </tr>
  </table>
  <div class="principal">
  <form method="post" action="../controlador/subirFicheros.php" enctype="multipart/form-data" id="form_subir">
    <input type="hidden" name="id_train" value="<?php echo $row['id'] ?>">
<?php	}?>

  <div class="form-1-2">
    <label for="">Bill of Landing:</label>
    <input type="file" name="fichero" /><br/>
  </div>
  <div class="barra">
    <div class="barra_azul" id="barra_estado">
      <span></span>
    </div>
  </div>
<div class="acciones">
<input type="submit" class="btn" value="Enviar"/>
<input type="button" class="cancel" id="cancelar" value="Cancelar"/>
</div>
</form>
</div>
</body>
<!--script src="../js/upload.js"></script-->
</html>
