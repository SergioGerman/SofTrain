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
		<title>Nota Contable</title>
	</head>
	<body>
		<fieldset>			
			<legend>Ingrese la informacion de la Nota Contable</legend>
		<form method="post" action="../controlador/enviarNotaContable.php">
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
					<input type="text" name="ObsAT" />
					</label>
				</td>
				<td>
					<a href="vistaNotaContable2.php?id=<?php echo $id; ?>">anadir</a>
				</td>
				<td>
					<input type="number" step="any" name="haberAT" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="debeDolAT" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="haberDolAT" min=0 max=10000000  />					
				</td>
			</tr>
			<tr>
				<td>
					<label>Cuenta por Pagar:
				</td>
				<td>
					<input type="text" name="ObsCP" />
					</label>
				</td>				
				<td>
					<input type="number" step="any" name="debeCP" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="haberCP" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="debeDolCP" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="haberDolCP" min=0 max=10000000  />					
				</td>
			</tr>
			<tr>
				<td>
					<label>Flete del Transportista:
				</td>
				<td>
					<input type="text" name="ObsFTrans" />
					</label>
				</td>				
				<td>
					<input type="number" value= step="any" name="debeFTrans" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="haberFTrans" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="debeDolFTrans" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="haberDolFTrans" min=0 max=10000000  />					
				</td>
			</tr>
			<tr>
				<td>
					<label>Flete del Transporte:
				</td>
				<td>
					<input type="text" name="ObsFT" />
					</label>
				</td>				
				<td>
					<input type="number" step="any" name="debeFT" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="haberFT" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="debeDolFT" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="haberDolFT" min=0 max=10000000  />					
				</td>
			</tr>
			<tr>
				<td>
					Adelanto Cliente:
				</td>
				<td>
				<input type="text" name="ObsAC" />
				</td>
				<td>
					<input type="number" step="any" step="any" min=0 max=10000000 name="debeAC" />					
				</td>
				<td>
					<input type="number" step="any" min=0 max=10000000 name="haberAC"/>					
				</td>
				<td>
					<input type="number" step="any" min=0 max=10000000 name="debeDolAC" />					
				</td>
				<td>
					<input type="number" step="any" name="haberDolAC" min=0 max=10000000  />					
				</td>
			</tr>
			<tr>
				<td>
					<label>Cuenta por Cobrar:
				</td>
				<td>
					<input type="text" name="ObsCC" />
					</label>
				</td>				
				<td>
					<input type="number" step="any" name="debeCC" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="haberCC" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="debeDolCC" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="haberDolCC" min=0 max=10000000  />					
				</td>
			</tr>				
			<tr>
				<td>
					<label>Liberacion:
				</td>
				<td>
					<input type="text" name="ObsL" />
					</label>
				</td>
				<td>
					<input type="number" step="any" name="debeL" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="haberL" min=0 max=10000000  />					
				</td>	
				<td>
					<input type="number" step="any" name="debeDolL" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="haberDolL" min=0 max=10000000  />					
				</td>
			</tr>
			<tr>
				<td>
					<label>THC:
				</td>
				<td>
					<input type="text" name="ObsTHC" />
					</label>
				</td>
				<td>
					<input type="number" step="any" name="debeTHC" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="haberTHC" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="debeDolTHC" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="haberDolTHC" min=0 max=10000000  />					
				</td>
			</tr>
			<tr>
				<td>
					<label>THD:
				</td>
				<td>
					<input type="text" name="ObsTHD" />
					</label>
				</td>
				<td>
					<input type="number" step="any" name="debeTHD" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="haberTHD" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="debeDolTHD" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="haberDolTHD" min=0 max=10000000  />					
				</td>
			</tr>
			<tr>
				<td>
					<label>COMODATO:
				</td>
				<td>
					<input type="text" name="ObsC" />
					</label>
				</td>
				<td>
					<input type="number" step="any" name="debeC" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="haberC" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="debeDolC" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="haberDolC" min=0 max=10000000  />					
				</td>
			</tr>
			<tr>
				<td>
					<label>EDF:
				</td>
				<td>
					<input type="text" name="ObsEDF" />
					</label>
				</td>
				<td>
					<input type="number" step="any" name="debeEDF" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="haberEDF" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="debeDolEDF" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="haberDolEDF" min=0 max=10000000  />					
				</td>
			</tr>
			<tr>
				<td>
					<label>EDS:
				</td>
				<td>
					<input type="text" name="ObsEDS" />
					</label>
				</td>
				<td>
					<input type="number" step="any" name="debeEDS" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="haberEDS" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="debeDolEDS" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="haberDolEDS" min=0 max=10000000  />					
				</td>
			</tr>
			<tr>
				<td>
					<label>Gate in:
				</td>
				<td>
					<input type="text" name="ObsGI" />
					</label>
				</td>					
				<td>
					<input type="number" step="any" name="debeGI" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="haberGI" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="debeDolGI" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="haberDolGI" min=0 max=10000000  />					
				</td>
			</tr>
			<tr>
				<td>
					<label>Gate Out:
				</td>
				<td>
					<input type="text" name="ObsGO" />
					</label>
				</td>
				<td>
					<input type="number" step="any" name="debeGO" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="haberGO" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="debeDolGO" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="haberDolGO" min=0 max=10000000  />					
				</td>
			</tr>
			<tr>
				<td>
					<label>Transporte puerto Deposito:
				</td>
				<td>
					<input type="text" name="ObsTD" />
					</label>
				</td>
				<td>
					<input type="number" step="any" name="debeTD" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="haberTD" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="debeDolTD" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="haberDolTD" min=0 max=10000000  />					
				</td>
			</tr>
			<tr>
				<td>
					<label>Poliza de Contenedores:
				</td>
				<td>
					<input type="text" name="ObsPCont" />
					</label>
				</td>
				<td>
					<input type="number" step="any" name="debePCont" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="haberPCont" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="debeDolPCont" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="haberDolPCont" min=0 max=10000000  />					
				</td>
			</tr>
			<tr>
				<td>
					<label>Demoras de Contenedor:
				</td>
				<td>
					<input type="text" name="ObsDC" />
					</label>
				</td>
				<td>
					<input type="number" step="any" name="debeDC" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="haberDC" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="debeDolDC" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="haberDolDC" min=0 max=10000000  />					
				</td>
			</tr>
			<tr>
				<td>
					<label>Garantias:
				</td>
				<td>
					<input type="text" name="ObsG" />
					</label>
				</td>
				<td>
					<input type="number" step="any" name="debeG" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="haberG" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="debeDolG" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="haberDolG" min=0 max=10000000  />					
				</td>
			</tr>
			<tr>
				<td>
					<label>Aclaraciones:
				</td>
				<td>
					<input type="text" name="ObsA" />
					</label>
				</td>
				<td>
					<input type="number" step="any" name="debeA" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="haberA" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="debeDolA" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="haberDolA" min=0 max=10000000  />					
				</td>
			</tr>
			<tr>
				<td>
					<label>Pagos Collet:
				</td>
				<td>
					<input type="text" name="ObsPC" />
					</label>
				</td>
				<td>
					<input type="number" step="any" name="debePC" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="haberPC" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="debeDolPC" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="haberDolPC" min=0 max=10000000  />					
				</td>
			</tr>
			<tr>
				<td>
					<label>Despacho Preferente:
				</td>
				<td>
					<input type="text" name="ObsDP" />
					</label>
				</td>
				<td>
					<input type="number" step="any" name="debeDP" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="haberDP" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="debeDolDP" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="haberDolDP" min=0 max=10000000  />					
				</td>
			</tr>
			<tr>
				<td>
					<label>Pago Agencia de Aduana:
				</td>
				<td>
					<input type="text" name="ObsPAA" />
					</label>
				</td>
				<td>
					<input type="number" step="any" name="debePAA" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="haberPAA" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="debeDolPAA" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="haberDolPAA" min=0 max=10000000  />					
				</td>
			</tr>
			<tr>
				<td>
					<label>Almacenaje:
				</td>
				<td>
					<input type="text" name="ObsAlm" />
					</label>
				</td>
				<td>
					<input type="number" step="any" name="debeAlm" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="haberAlm" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="debeDolAlm" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="haberDolAlm" min=0 max=10000000  />					
				</td>
			</tr>
			<tr>
				<td>
					<label>Transbordo:
				</td>
				<td>
					<input type="text" name="ObsTra" />
					</label>
				</td>
				<td>
					<input type="number" step="any" name="debeTra" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="haberTra" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="debeDolTra" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="haberDolTra" min=0 max=10000000  />					
				</td>
			</tr>
				<tr>
				<td>
					<label>Estibadores:
				</td>
				<td>
					<input type="text" name="ObsEst" />
					</label>
				</td>
				<td>
					<input type="number" step="any" name="debeEst" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="haberEst" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="debeDolEst" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="haberDolEst" min=0 max=10000000  />					
				</td>
			</tr>
			<tr>
				<td>
					<label>Comision Giro 2.5%:
				</td>
				<td>
					<input type="text" name="ObsCG" />
					</label>
				</td>
				<td>
					<input type="number" step="any" name="debeCG" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="haberCG" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="debeDolCG" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="haberDolCG" min=0 max=10000000  />					
				</td>
			</tr>
			<tr>
				<td>
					<label>Otros:
				</td>
				<td>
					<input type="text" name="ObsOtros" />
					</label>
				</td>
				<td>
					<input type="number" step="any" name="debeOtros" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="haberOtros" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="debeDolOtros" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="haberDolOtros" min=0 max=10000000  />					
				</td>
			</tr>
			
			<tr>
				<td></td>
				<td>SUB TOTAL</td>
				<td>0.00</td>
				<td>0.00</td>
				<td>00.00</td>
				<td>00.00</td>
			</tr>
			<tr>
				<td></td>
				<td>TOTAL</td>
				<td colspan=2 align="center">0.00</td>				
				<td colspan=2 align="center">00.00</td>				
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