
<?php
	require('../modelo/conexion.php');
?>
<script>
	function eliminarcarga(id){
		if(confirm("¡Se eliminará este registro permanentemente!")==true){
			return true;
		}else{
			return false;
		}
	}
</script>
<fieldset>
<legend>Información de la cargas realizadas</legend>
<table border='1' class="table table-striped">
  	
		<thead>
		<tr>
			<th>N. REGISTRO</th>
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
			<th>Bill of Landing</th>
			<th>Tam. Contenedor</th>
			<th>Contenedor</th>
			<th>Cliente</th>
			<th>Remit/Consig</th>
			<th>PESO</th>
			<th>Detalle Tramo</th>
			<th>Fact. Softrain</th>
			<th>Fact. Apoyo</th>
			<th>Nota Contable</th>
			<th></th>
		</tr>
		</thead>
<?php foreach ($conexion->query("SELECT *, datediff(fechaLimDev,fechaDev) as sobre,
										date_format(fecha, '%d/%m/%y') as fecha, 
										date_format(fechaAsignacion, '%d/%m/%y') as fechaAsignacion,
										date_format(fechaArribo, '%d/%m/%y') as fechaArribo,
										date_format(fechaLimDev, '%d/%m/%y') as fechaLimDev,
										date_format(fechaDev, '%d/%m/%y') as fechaDev
										from train") as $row){
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
	<td><?php echo $row['numBillOflanding'] ?></td>
	<td><?php echo $row['tamCont'] ?></td>
    <td><?php echo $row['contenedor'] ?></td>
	<td><?php echo $row['cliente'] ?></td>
	<td><?php echo $row['remitConsig'] ?></td>
	<td><?php echo $row['pesoKg'] ?></td>
	<td><?php echo $row['detalle'] ?></td>
	<td><?php echo $row['facSoftrain'] ?></td>
	<td><?php echo $row['facturaApoyo'] ?></td>
	<?php
	$id=$row['id'];
	$query2="select id_carga from notaContables where id_carga='$id'";
	$resultado=mysqli_query($conexion, $query2);
	$columna=mysqli_fetch_array($resultado);
	if(empty($columna['id_carga'])){
	?>
		<td><a href="../vista/vistaNotaContable.php?id=<?php echo $row['id'] ?>">anadir</a></td>
	<?php
	}else{?>
		<td><a href="../vista/vistaEditarNotaContable.php?id=<?php echo $id ?>">ver</a></td>	
	<?php
	}
	?>
	<td><a onclick="return eliminarcarga(<?php echo $row['id'];?>);"
	href="../controlador/eliminar.php?id=<?php echo $row['id'];?>">
	eliminar</a></td>
	<td><a  href="editar.php?id=<?php echo $row['id'];?>">Modificar</a></td>
<?php
	}
	
?>
</table>
</fieldset>

