<?php
session_start();
if(!isset($_SESSION['usuario'])){
	header('location: ../index.php');
}
//recuperando los datos de la session
$usuario=$_SESSION['usuario'];
require('../vista/vistaAgenda.php');
?>
<?php
foreach ($conexion->query("SELECT * from usuarios where usuario='$usuario'") as $row){
	$id_usuario=$row['id'];
}
?>
<html>
	<head>
		<title>Formulario</title>
	</head>
	<body>
		<form method="post" action="enviar.php" enctype="multipart/form-data">
		<input type="hidden" name="id_usuario" value="<?php echo $id_usuario; ?>">
		<fieldset>
			<legend>Ingrese la informacion de la carga</legend>
		<table border=0>
			<tr>
				<td>
					Nro. Registro:
				</td>
				<td>
					<input type="text" name="numRegistro" required />
				</td>
			</tr>
			<tr>
				<td>
					<label>Fecha:
				</td>
				<td>
					<input type="date" name="fecha" required="true" />
					</label>
				</td>
			</tr>
			<tr>
				<td>
					<label>Fecha de asignación:
				</td>
				<td>
					<input type="date" name="fechaAsignacion" />
					</label>
				</td>
			</tr>
			<tr>
				<td>
					<label>Fecha de arribo
				</td>
				<td>
					<input type="date" name="fechaArribo" required/>
					</label>
				</td>
			</tr>
			<tr>
				<td>
					<label>Fecha devolucion:
				</td>
				<td>
					<input type="date" name="fechaDev" />
					</label>
				</td>
			</tr>
			<tr>
				<td>
					<label>Placa de automovil:
				</td>
				<td>
					<input type="text" name="placa" />
					</label>
				</td>
			</tr>
			<tr>
				<td>
					<label>Empresa:
				</td>
				<td>
					<input type="text" name="empresa" />
					</label>
				</td>
			</tr>
			<tr>
				<td>
					<label>Conductor:
				</td>
				<td>
					<input type="text" name="conductor" />
					</label>
				</td>
			</tr>
			<tr>
				<td>
					<labell>Naviera:</label>
				</td>
				<td>
					<select name="naviera" >
					<option value="Mapag Lloyd">Mapag Lloyd</option>
					<option value="MSC">MSC</option>
					<option value="Maersk">Maersk</option>
					<option value="Hambug Sud">Hambug Sud</option>
					<option value="Cosco">Cosco</option>
					<option value="CMA CGM">CMA CGM</option>
					<option value="Seabord Marine">Seabord Marine</option>
					<option value="Evergreen lin">Evergreen lin</option>
					<option value="Sea Land">Sea Land</option>
					<option value="CSAV">CSAV</option>
					</select>
				</td>
			</tr>
			<!--tr>
				<td>
					<label>Bill of lading:</label>
				</td>
				<td>
					<input type="file" name="fichero" /><br/>
				</td>
			</tr-->
			<tr>
				<td>
					<label>tamanho de contenedor:</label>
				</td>
				<td>
					<input type="text" name="tamCont" />
				</td>
			</tr>
			<tr>
				<td>
					<label>Contenedor:
				</td>
				<td>
					<input type="text" name="contenedor" />
					</label>
				</td>
			</tr>
			<tr>
				<td>
					<label>Cliente:
				</td>
				<td>
					<input type="text" name="cliente" />
					</label>
				</td>
			</tr>
			<tr>
				<td>
					<label>Remit/Consig:
				</td>
				<td>
					<input type="text" name="remitConsig" />
					</label>
				</td>
			</tr>
			<tr>
				<td>
					<label>Peso:
				</td>
				<td>
					<input type="text" name="peso" />
					</label>
				</td>
			</tr>
			<tr>
				<td>
					<label>Detalle:
				</td>
				<td>
					<input type="text" name="detalle" />
					</label>
				</td>
			</tr>
			<tr>
				<td>
					<label>Tramo de la carga:
				</td>
				<td>
					<input type="text" name="tramo" />
					</label>
				</td>
			</tr>
			<tr>
				<td>
					<label>Factura Softrain</label>
				</td>
				<td>
					<input type="file" name="ficheroFS" /><br/>
				</td>
			</tr>
			<tr>
				<td>
					<label>Factura Apoyo:</label>
				</td>
				<td>
					<input type="file" name="ficheroFA" /><br/>
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
	</body>
</html>
