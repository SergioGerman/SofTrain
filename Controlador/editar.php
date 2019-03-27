<?php
	require('../modelo/conexion.php');
	$id=$_GET['id'];
	foreach ($conexion->query("SELECT * from train where id='$id'") as $row){

?>
<form method="post" action="actualizarcarga.php">
		<fieldset>
			<legend>Ingrese la informacion de la carga</legend>
		<table border=0>
		<input type="hidden" name="id" value="<?php echo $row['id'] ?>">
		<input type="hidden" name="fecha" value="<?php echo $row['fecha'] ?>">
			<tr>
				<td>Nro. Registro:</td>
				<td><input type="text" name="numRegistro" value="<?php echo $row['numRegistro']?>"/>	</td>
			</tr>
			<tr>
				<td><label>Fecha:</label></td>
				<td><input type="date" name="fecha" value="<?php echo $row['fecha']?>"/></td>
			</tr>
			<tr>
				<td><label>Fecha de asignacion:</label></td>
				<td><input type="date" name="fechaAsignacion" value="<?php echo $row['fechaAsignacion']?>"/></td>
			</tr>
			<tr>
				<td><label>Fecha de arribo:</label></td>
				<td><input type="date" name="fechaArribo" value="<?php echo $row['fechaArribo']?>"/></td>
			</tr>
			<tr><td><label>Fecha devolucion:</label></td>
				<td><input type="date" name="fechaDev" value="<?php echo $row['fechaDev']?>"/></td>
			</tr>
			<tr>
				<td><label>Placa de automovil:</label></td>
				<td><input type="text" name="placa" value="<?php echo $row['placa']?>"/></td>
			</tr>
			<tr>
				<td><label>Empresa:</label></td>
				<td><input type="text" name="empresa" value="<?php echo $row['empresa']?>"/></td>
			</tr>
			<tr>
				<td><label>Conductor:</label></td>
				<td><input type="text" name="conductor" value="<?php echo $row['conductor']?>"/></td>
			</tr>
			<tr>
				<td>Naviera:</td>
				<td>
					<select name="naviera" >
					<option value="<?php echo $row['naviera']?>"><?php echo $row['naviera']?> </option>
					<option value="Mapag Lloyd">Mapag Lloyd</option>
					<option value="MSC">MSC</option>
					<option value="Maersk">Maersk</option>
					<option value="Hambug Sud">Hambug Sud</option>
					<option value="Cosco">Cosco</option>
					<option value="CMA CGM">CMA CGM</option>
					<option value="Seabord Marine">Seabord Marine</option>
					<option value="Evergreen lin">Evergreen lin</option>
					<option value="Sea land">Sea Land</option>
					<option value="CSAV">CSAV</option>
					</select>
				</td>
			</tr>
			<tr>
				<td><label>tamanho de contenedor:</label></td>
				<td><input type="text" name="tamCont" value="<?php echo $row['tamCont']?>"/></td>
			</tr>
			<tr>
				<td><label>Contenedor:</label></td>
				<td><input type="text" name="contenedor" value="<?php echo $row['contenedor']?>"/></td>
			</tr>
			<tr>
				<td><label>Cliente:</label></td>
				<td><input type="text" name="cliente" value="<?php echo $row['cliente']?>"/></td>
			</tr>
			<tr>
				<td><label>Remit/Consig:</label></td>
				<td><input type="text" name="remitConsig" value="<?php echo $row['remitConsig']?>"/></td>
			</tr>
			<tr>
				<td><label>Peso:</label></td>
				<td><input type="text" name="peso" value="<?php echo $row['pesoKg']?>"/></td>
			</tr>
			<tr>
				<td><label>Detalle:</label></td>
				<td><input type="text" name="detalle" value="<?php echo $row['detalle']?>"/></td>
			</tr>
			<tr>
				<td><label>Tramo de la carga:</label></td>
				<td><input type="text" name="tramo" value="<?php echo $row['tramo']?>"/></td>
			</tr>
			<tr>
				<td><label>Factura softrain:</label></td>
				<td><input type="file" name="facSoftrain" value="<?php echo $row['facSoftrain']?>"/></td>
			</tr>
			<tr>
				<td><label>Factura apoyo:</label></td>
				<td><input type="file" name="facApoyo" value="<?php echo $row['facturaApoyo']?>"/></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="enviar"/></td>
			</tr>
		</table>
		</fieldset>
	</form>
<?php
	}
?>
