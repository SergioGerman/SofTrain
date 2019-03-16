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
				<td>
					N` Registro:
				</td>
				<td>
					<input type="text" name="numRegistro" value="<?php echo $row['numRegistro']?>"/>	
				</td>
			</tr>
			<tr>
				<td>
					<label>Fecha:
				</td>
				<td>
					<input type="date" name="fecha" value="<?php echo $row['fecha']?>"/>
					</label>
				</td>					
			</tr>
			<tr>
				<td>
					<label>Fecha de asignacion:
				</td>
				<td>
					<input type="date" name="fechaAsignacion" value="<?php echo $row['fechaAsignacion']?>"/>
					</label>
				</td>					
			</tr>
			<tr>
				<td>
					<label>Fecha de arribo
				</td>
				<td>
					<input type="date" name="fechaArribo" value="<?php echo $row['fechaArribo']?>"/>
					</label>
				</td>					
			</tr>
			<!--tr>
				<td>
					<label>Fecha lim. Devolucion:
				</td>
				<td>
					<input type="date" name="fechaLimDev" value="<?php echo $row['fechaLimDev']?>"/>
					</label>
				</td>					
			</tr-->
			<tr>
				<td>
					<label>Fecha devolucion:
				</td>
				<td>
					<input type="date" name="fechaDev" value="<?php echo $row['fechaDev']?>"/>
					</label>
				</td>					
			</tr>
			<tr>
				<td>
					<label>Placa de automovil:
				</td>
				<td>
					<input type="text" name="placa" value="<?php echo $row['placa']?>"/>
					</label>
				</td>					
			</tr>
			<tr>
				<td>
					<label>Empresa:
				</td>
				<td>
					<input type="text" name="empresa" value="<?php echo $row['empresa']?>"/>
					</label>
				</td>					
			</tr>
			<tr>
				<td>
					<label>Conductor:
				</td>
				<td>
					<input type="text" name="conductor" value="<?php echo $row['conductor']?>"/>
					</label>
				</td>					
			</tr>
			<tr>
				<td>
					Naviera:
				</td>
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
				<td>
					<label>Bill of lading:
				</td>
				<td>
					<input type="text" name="bol" value="<?php echo $row['numBillOflanding']?>"/>
					</label>
				</td>					
			</tr>
			<tr>
				<td>
					<label>tamanho de contenedor:
				</td>
				<td>
					<input type="text" name="tamCont" value="<?php echo $row['tamCont']?>"/>
					</label>
				</td>					
			</tr>
			<tr>
				<td>
					<label>Contenedor:
				</td>
				<td>
					<input type="text" name="contenedor" value="<?php echo $row['contenedor']?>"/>
					</label>
				</td>					
			</tr>
			<tr>
				<td>
					<label>Cliente:
				</td>
				<td>
					<input type="text" name="cliente" value="<?php echo $row['cliente']?>"/>
					</label>
				</td>					
			</tr>
			<tr>
				<td>
					<label>Remit/Consig:
				</td>
				<td>
					<input type="text" name="remitConsig" value="<?php echo $row['remitConsig']?>"/>
					</label>
				</td>					
			</tr>
			<tr>
				<td>
					<label>Peso:
				</td>
				<td>
					<input type="text" name="peso" value="<?php echo $row['pesoKg']?>"/>
					</label>
				</td>					
			</tr>
			<tr>
				<td>
					<label>Detalle:
				</td>
				<td>
					<input type="text" name="detalle" value="<?php echo $row['detalle']?>"/>
					</label>
				</td>					
			</tr>
			<tr>
				<td>
					<label>Tramo de la carga:
				</td>
				<td>
					<input type="text" name="tramo" value="<?php echo $row['tramo']?>"/>
					</label>
				</td>					
			</tr>
			<tr>
				<td>
					<label>Factura softrain:
				</td>
				<td>
					<input type="text" name="facSoftrain" value="<?php echo $row['facSoftrain']?>"/>
					</label>
				</td>					
			</tr>
			<tr>
				<td>
					<label>Factura apoyo:
				</td>
				<td>
					<input type="text" name="facApoyo" value="<?php echo $row['facturaApoyo']?>"/>
					</label>
				</td>					
			</tr>			
			<tr>
				<td></td>
				<td>
					<input type="submit" value="enviar"/>
				</td>	
			</tr>
		</table>
		</fieldset>
	</form>
<?php
	}
?>
