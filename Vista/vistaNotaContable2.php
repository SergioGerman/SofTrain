<?php
session_start();
if(!isset($_SESSION['usuario'])){
	header('location: index.php');
}
require('../modelo/conexion.php');
$id=$_GET['id'];
foreach ($conexion->query("SELECT  * from train
inner join notaContables on train.id=notaContables.id_carga where id_carga='$id'") as $row){
$id=$row['id'];
?>
<html>
	<head>
		<title>Nota Contable</title>
	</head>
	<body>
		<fieldset>			
			<legend>Ingrese la informacion de la Nota Contable</legend>
		<form method="post" action="../controlador/enviarNotaContable2.php">
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		<table>
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
<?php	}?>	
		<table border=1>
			
			<tr>
				<td>
				</td>
				<td>
				</td>
				<td colspan=2 align="center">
					Bolivianos
				</td>
				<td colspan=2 align="center">
					Dolares
				</td>				
			</tr>
			<tr>
				<td align="center">
					Detalle
				</td>
				<td align="center">
				Observaciones
				</td>
				<td align="center">
					Debe					
				</td>
				<td align="center">
					Haber					
				</td>
				<td align="center">
					Debe					
				</td align="center">
				<td>
					Haber					
				</td>
			</tr>
		<tr>
				<td>
					<label>Adelanto Transportista:
				</td>
				<td>
					<input type="text" name="deAT" />
					</label>
				</td>
				<td>
					<input type="number" step="any" name="debeAT" min=0 max=10000000/>					
				</td>
				<td>
					<input type="number" name="haberAT" min=0 max=10000000 step="any" />					
				</td>
				<td>
					<input type="number" name="debeDolAT" min=0 max=10000000 step="any" />					
				</td>
				<td>
					<input type="number" name="haberDolAT" min=0 max=10000000 step="any" />					
				</td>
			</tr>
			<tr>
				<td>
					<label>Flete del Transportista:
				</td>
				<td>
					<input type="text" name="deFTrans" />
					</label>
				</td>				
				<td>
					<input type="number" name="debeFTrans" min=0 max=10000000 step="any" />					
				</td>
				<td>
					<input type="number" name="haberFTrans" min=0 max=10000000 step="any" />					
				</td>
				<td>
					<input type="number" name="debeDolFTrans" min=0 max=10000000 step="any" />					
				</td>
				<td>
					<input type="number" name="haberDolFTrans" min=0 max=10000000 step="any" />					
				</td>
			</tr>
			<tr>
				<td>
					Cuentas por Pagar:
				</td>
				<td>
					<input type="text" name="deCP" />					
				</td>
				<td>
					<input type="number" name="debeCP" min=0 max=10000000 step="any" />					
				</td>
				<td>
					<input type="number" name="haberCP" min=0 max=10000000 step="any" />					
				</td>
				<td>
					<input type="number" name="debeDolCP" min=0 max=10000000 step="any" />					
				</td>
				<td>
					<input type="number" name="haberDolCP" min=0 max=10000000 step="any" />					
				</td>
			</tr>
			<tr>
				<td>
					<label>Otros:
				</td>
				<td>
					<input type="text" name="deOtro" />
					</label>
				</td>
				<td>
					<input type="number" name="debeOtro" min=0 max=10000000 step="any" />					
				</td>
				<td>
					<input type="number" name="haberOtro" min=0 max=10000000 step="any" />					
				</td>
				<td>
					<input type="number" name="debeDolOtro" min=0 max=10000000 step="any" />					
				</td>
				<td>
					<input type="number" name="haberDolOtro" min=0 max=10000000 step="any" />					
				</td>
			</tr>
			<tr>
				<td>
					<input type="submit" value="enviar"/>
				</td>	
			</tr>
	</table>
	</fieldset>
	</form>
</body>
</html>