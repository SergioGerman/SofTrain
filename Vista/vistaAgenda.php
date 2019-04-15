
<?php
	require('../modelo/conexion.php');
?>
<!--script para la confirmacion de eliminacion-->
<script>
	function eliminarcarga(id){
		if(confirm("¡Se eliminará este registro permanentemente!")==true){
			return true;
		}else{
			return false;
		}
	}
</script>
<!--listado de los registros ingresados en la base de datos-->
<fieldset>
<legend>Información de la cargas realizadas</legend>
<hr>
<button type="button" class="btn btn-info" data-toggle="modal" data-target="#fullHeightModalRight">Insertar Carga</button>
<div class="container">
			<div class="md-form form-sm">
              <input type="text" id="formu" class="form-control form-control-sm">
              <label for="formu">Buscar registro</label>
            </div>
		  </div>
<div class="contenedor">
<table  border="1" class="table table-striped">

<thead class="info-color" align="center">
		<tr >
			<th>N. REGISTROoooo</th>
			<th>FECHA</th>
			<th>Fecha Asignacion</th>
			<th>Fecha Arribo</th>
			<th>Fecha Lim. Devolucion</th>
			<th>Fecha Devolucion</th>
			<th>Sobre Estadias</th>
			<th>Placa</th>
			<th>Empresa</th>
			<th>Conductor</th>
			<th>Naviera</th>
			<th>Tam. Contenedor</th>
			<th>Contenedor</th>
			<th>Cliente</th>
			<th>Remit/Consig</th>
			<th>PESO</th>
			<th>Detalle Tramo</th>
			<th>Bill of Landing</th>
			<th>Fact. Softrain</th>
			<th>Fact. Apoyo</th>
			<th>Nota Contable</th>
			<th >accion</th>
			<th >accion</th>
		</tr>
		</thead>
<?php foreach ($conexion->query("SELECT *, datediff(fechaLimDev,fechaDev) as sobre,
										date_format(fecha, '%d/%m/%y') as fecha,
										date_format(fechaAsignacion, '%d/%m/%y') as fechaAsignacion,
										date_format(fechaArribo, '%d/%m/%y') as fechaArribo,
										date_format(fechaLimDev, '%d/%m/%y') as fechaLimDev,
										date_format(fechaDev, '%d/%m/%y') as fechaDev
										from train") as $row){
$id=$row['id'];
?>
<tr>
	<td><?php echo $row['numRegistro'] ?></td>
    <td><?php echo $row['fecha'] ?></td>
	<td><?php echo $row['fechaAsignacion'] ?></td>
	<td><?php echo $row['fechaArribo'] ?></td>
	<td><?php echo $row['fechaLimDev']?></td>
	<td><?php echo $row['fechaDev'] ?></td>
	<td><?php echo $row['sobre'] ?></td>
	<td><?php echo $row['placa'] ?></td>
	<td><?php echo $row['empresa'] ?></td>
	<td><?php echo $row['conductor'] ?></td>
	<td><?php echo $row['naviera'] ?></td>
	<td><?php echo $row['tamCont'] ?></td>
  <td><?php echo $row['contenedor'] ?></td>
	<td><?php echo $row['cliente'] ?></td>
	<td><?php echo $row['remitConsig'] ?></td>
	<td><?php echo $row['pesoKg'] ?></td>
	<td><?php echo $row['detalle'] ?></td>
	<?php
	$queryFile="select id_train, nombre from ficheros where id_train='$id'";
	$resultado=mysqli_query($conexion, $queryFile);
	$columna=mysqli_fetch_array($resultado);
	if(empty($columna['id_train'])){
	?>
	<td><a href="../vista/formFicheros.php?id=<?php echo $id; ?>">
	<button type="button" class="btn btn-info btn-sm">anadir</button></a></td>
	<?php
}else{
	?>
	<td><a href="../vista/verFicheros.php?id=<?php echo $id; ?>"><?php echo ($columna['nombre']); ?></a></td>
<?php
}
?>
<?php

$pathFS = $row['facSoftrain'];
$pathFA = $row['facturaApoyo'];
$fileFS = basename($pathFS, ".jpg");
$fileFA = basename($pathFA, ".jpg");
?>
	<td><?php echo $fileFS; ?></td>
	<td><?php echo $fileFA; ?></td>
	<?php
	$query2="select id_carga from notaContables where id_carga='$id'";
	$resultado=mysqli_query($conexion, $query2);
	$columna=mysqli_fetch_array($resultado);
	if(empty($columna['id_carga'])){
		?>
		<td><a href="../vista/vistaNotaContable.php?id=<?php echo $row['id'] ?>">
		<button type="button" class="btn btn-info btn-sm">anadir</button></a></td>
	<?php
	}else{?>
		<td><a href="../vista/vistaEditarNotaContable.php?id=<?php echo $id ?>">
		<button type="button" class="btn btn-orange btn-sm">
			ver ...</button></a></td>
	<?php
	}
	?>
	<td><a onclick="return eliminarcarga(<?php echo $row['id'];?>);"
	href="../controlador/eliminar.php?id=<?php echo $row['id'];?>">
	<button type="button" class="btn btn-danger btn-sm">
		eliminar
		</button>
		</a>
	</td>
	<td><a  href="editar.php?id=<?php echo $row['id'];?>">
	<button type="button" class="btn btn-default btn-sm">Modificar</button></a></td>
<?php
	}

?>
<thead class="info-color" align="center">
		<tr >
			<th>N. REGISTROoooo</th>
			<th>FECHA</th>
			<th>Fecha Asignacion</th>
			<th>Fecha Arribo</th>
			<th>Fecha Lim. Devolucion</th>
			<th>Fecha Devolucion</th>
			<th>Sobre Estadias</th>
			<th>Placa</th>
			<th>Empresa</th>
			<th>Conductor</th>
			<th>Naviera</th>
			<th>Tam. Contenedor</th>
			<th>Contenedor</th>
			<th>Cliente</th>
			<th>Remit/Consig</th>
			<th>PESO</th>
			<th>Detalle Tramo</th>
			<th>Bill of Landing</th>
			<th>Fact. Softrain</th>
			<th>Fact. Apoyo</th>
			<th>Nota Contable</th>
			<th >accion</th>
			<th >accion</th>
		</tr>
		</thead>
</table>
</div>
</fieldset>
