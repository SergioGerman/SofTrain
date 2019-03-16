<?php
session_start();
if(!isset($_SESSION['usuario'])){
	header('location: index.php');
}
require('../vista/vistaAgenda.php');
?>
<html>
	<head>
		<title>Formulario</title>
	</head>
	<body>
		<form method="post" action="enviar.php">
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
					<label>Fecha de asignacion:
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
					<input type="date" name="fechaArribo" />
					</label>
				</td>					
			</tr>
			<!--<tr>
				<td>
					Fecha lim. Devolucion:
				</td>
				<td>
					<input type="date" name="fechaLimDev">
				</td>					
			</tr>-->
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
					Naviera:
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
			<tr>
				<td>
					<label>Bill of lading:
				</td>
				<td>
					<input type="text" name="bol" />
					</label>
				</td>					
			</tr>
			<tr>
				<td>
					<label>tamanho de contenedor:
				</td>
				<td>
					<input type="text" name="tamCont" />
					</label>
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
					<label>Factura softrain:
				</td>
				<td>
					<input type="text" name="facSoftrain" />
					</label>
				</td>					
			</tr>
			<tr>
				<td>
					<label>Factura apoyo:
				</td>
				<td>
					<input type="text" name="facApoyo" />
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
	</body>
</html>
