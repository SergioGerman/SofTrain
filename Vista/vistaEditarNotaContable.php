<?php
session_start();
if(!isset($_SESSION['usuario'])){
	header('location: index.php');
}
require('../modelo/conexion.php');
$id=$_GET['id'];
foreach ($conexion->query("SELECT * from train where id='$id'") as $row){
?>
<html>
	<head>
		<title>Editar de Nota Contable</title>
	</head>
	<body>
		<fieldset>			
			<legend>Usted esta editando la Nota Contable</legend>
		<form method="post" action="../controlador/editarNotaContable.php">
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
<?php
foreach ($conexion->query("SELECT * from notaContables where id_carga='$id'") as $row){
?>
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
					<input type="text" name="ObsFT" value="<?php echo $row['ObsFT']?>"/>
					</label>
				</td>				
				<td>
					<input type="number" step="any" value="<?php echo $row['debeFT']?>" name="debeFT" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" value="<?php echo $row['haberFT']?>" name="haberFT" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" value="<?php echo $row['debeDolFT']?>" name="debeDolFT" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" value="<?php echo $row['haberDolFT']?>" name="haberDolFT" min=0 max=10000000  />					
				</td>
			</tr>
			<tr>
				<td>
					Adelanto Cliente:
				</td>
				<td>
				<input type="text" name="ObsAC" value="<?php echo $row['ObsAC']?>"/>
				</td>
				<td>
					<input type="number" step="any" value="<?php echo $row['debeAC']?>" step="any" min=0 max=10000000 name="debeAC" />					
				</td>
				<td>
					<input type="number" step="any" value="<?php echo $row['haberAC']?>" min=0 max=10000000 name="haberAC"/>					
				</td>
				<td>
					<input type="number" step="any" min=0 max=10000000 value="<?php echo $row['debeDolAC']?>" name="debeDolAC" />					
				</td>
				<td>
					<input type="number" step="any" name="haberDolAC" value="<?php echo $row['haberDolAC']?>" min=0 max=10000000  />					
				</td>
			</tr>
			<tr>
				<td>
					<label>Cuenta por Cobrar:
				</td>
				<td>
					<input type="text" name="ObsCC" value="<?php echo $row['ObsCC']?>"/>
					</label>
				</td>				
				<td>
					<input type="number" step="any" name="debeCC" value="<?php echo $row['debeCC']?>"value="<?php echo $row['ObsAC']?>" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="haberCC" value="<?php echo $row['haberCC']?>"min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="debeDolCC" value="<?php echo $row['debeDolCC']?>" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="haberDolCC" value="<?php echo $row['haberDolCC']?>" min=0 max=10000000  />					
				</td>
			</tr>				
			<tr>
				<td>
					<label>Liberacion:
				</td>
				<td>
					<input type="text" name="ObsL" value="<?php echo $row['ObsL']?>" />
					</label>
				</td>
				<td>
					<input type="number" step="any" name="debeL" value="<?php echo $row['debeL']?>" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="haberL" value="<?php echo $row['haberL']?>" min=0 max=10000000  />					
				</td>	
				<td>
					<input type="number" step="any" name="debeDolL" value="<?php echo $row['debeDolL']?>" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="haberDolL" value="<?php echo $row['haberDolL']?>" min=0 max=10000000  />					
				</td>
			</tr>
			<tr>
				<td>
					<label>THC:
				</td>
				<td>
					<input type="text" name="ObsTHC" value="<?php echo $row['ObsTHC']?>"/>
					</label>
				</td>
				<td>
					<input type="number" step="any" name="debeTHC" value="<?php echo $row['debeTHC']?>" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="haberTHC" value="<?php echo $row['haberTHC']?>" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="debeDolTHC" value="<?php echo $row['debeDolTHC']?>" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="haberDolTHC" value="<?php echo $row['haberDolTHC']?>" min=0 max=10000000  />					
				</td>
			</tr>
			<tr>
				<td>
					<label>THD:
				</td>
				<td>
					<input type="text" name="ObsTHD" value="<?php echo $row['ObsTHD']?>" />
					</label>
				</td>
				<td>
					<input type="number" step="any" name="debeTHD" value="<?php echo $row['debeTHD']?>" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="haberTHD" value="<?php echo $row['haberTHD']?>" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="debeDolTHD" value="<?php echo $row['debeDolTHD']?>" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="haberDolTHD" value="<?php echo $row['haberDolTHD']?>" min=0 max=10000000  />					
				</td>
			</tr>
			<tr>
				<td>
					<label>COMODATO:
				</td>
				<td>
					<input type="text" name="ObsC" value="<?php echo $row['ObsC']?>" />
					</label>
				</td>
				<td>
					<input type="number" step="any" name="debeC" min=0 max=10000000 value="<?php echo $row['debeC']?>"  />					
				</td>
				<td>
					<input type="number" step="any" name="haberC" value="<?php echo $row['haberC']?>" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="debeDolC" value="<?php echo $row['debeDolC']?>" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="haberDolC" value="<?php echo $row['haberDolC']?>" min=0 max=10000000  />					
				</td>
			</tr>
			<tr>
				<td>
					<label>EDF:
				</td>
				<td>
					<input type="text" name="ObsEDF" value="<?php echo $row['ObsEDF']?>" />
					</label>
				</td>
				<td>
					<input type="number" step="any" name="debeEDF" value="<?php echo $row['debeEDF']?>" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="haberEDF" value="<?php echo $row['haberEDF']?>" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="debeDolEDF" value="<?php echo $row['debeDolEDF']?>" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="haberDolEDF" value="<?php echo $row['haberDolEDF']?>" min=0 max=10000000  />					
				</td>
			</tr>
			<tr>
				<td>
					<label>EDS:
				</td>
				<td>
					<input type="text" name="ObsEDS" value="<?php echo $row['ObsEDS']?>"/>
					</label>
				</td>
				<td>
					<input type="number" step="any" name="debeEDS" value="<?php echo $row['debeEDS']?>" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="haberEDS" value="<?php echo $row['haberEDS']?>" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="debeDolEDS" min=0 max=10000000  value="<?php echo $row['debeDolEDS']?>"/>					
				</td>
				<td>
					<input type="number" step="any" name="haberDolEDS" value="<?php echo $row['haberDolEDS']?>"min=0 max=10000000  />					
				</td>
			</tr>
			<tr>
				<td>
					<label>Gate in:
				</td>
				<td>
					<input type="text" name="ObsGI" value="<?php echo $row['ObsGI']?>"/>
					</label>
				</td>					
				<td>
					<input type="number" step="any" name="debeGI" value="<?php echo $row['debeGI']?>"min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="haberGI" value="<?php echo $row['haberGI']?>" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="debeDolGI" value="<?php echo $row['debeDolGI']?>" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="haberDolGI" value="<?php echo $row['haberDolGI']?>" min=0 max=10000000  />					
				</td>
			</tr>
			<tr>
				<td>
					<label>Gate Out:
				</td>
				<td>
					<input type="text" name="ObsGO" value="<?php echo $row['ObsGO']?>" />
					</label>
				</td>
				<td>
					<input type="number" step="any" name="debeGO" value="<?php echo $row['debeGO']?>" min=0 max=10000000  />		
				</td>
				<td>
					<input type="number" step="any" name="haberGO" value="<?php echo $row['haberGO']?>" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="debeDolGO" value="<?php echo $row['debeDolGO']?>" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="haberDolGO" value="<?php echo $row['haberDolGO']?>" min=0 max=10000000  />					
				</td>
			</tr>
			<tr>
				<td>
					<label>Transporte puerto Deposito:
				</td>
				<td>
					<input type="text" name="ObsTD" value="<?php echo $row['ObsTD']?>"/>
					</label>
				</td>
				<td>
					<input type="number" step="any" name="debeTD" value="<?php echo $row['debeTD']?>" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="haberTD" value="<?php echo $row['haberTD']?>" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="debeDolTD" value="<?php echo $row['debeDolTD']?>" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="haberDolTD" value="<?php echo $row['haberDolTD']?>" min=0 max=10000000  />					
				</td>
			</tr>
			<tr>
				<td>
					<label>Poliza de Contenedores:
				</td>
				<td>
					<input type="text" name="ObsPCont" value="<?php echo $row['ObsPCont']?>"/>
					</label>
				</td>
				<td>
					<input type="number" step="any" name="debePCont" value="<?php echo $row['debePCont']?>" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="haberPCont" value="<?php echo $row['haberPCont']?>" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="debeDolPCont" value="<?php echo $row['debeDolPCont']?>" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="haberDolPCont" value="<?php echo $row['haberDolPCont']?>" min=0 max=10000000  />					
				</td>
			</tr>
			<tr>
				<td>
					<label>Demoras de Contenedor:
				</td>
				<td>
					<input type="text" name="ObsDC" value="<?php echo $row['ObsDC']?>"/>
					</label>
				</td>
				<td>
					<input type="number" step="any" name="debeDC" value="<?php echo $row['debeDC']?>" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="haberDC" value="<?php echo $row['haberDC']?>" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="debeDolDC" value="<?php echo $row['debeDolDC']?>" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="haberDolDC" value="<?php echo $row['haberDolDC']?>" min=0 max=10000000  />					
				</td>
			</tr>
			<tr>
				<td>
					<label>Garantias:
				</td>
				<td>
					<input type="text" name="ObsG" value="<?php echo $row['ObsG']?>" />
					</label>
				</td>
				<td>
					<input type="number" step="any" name="debeG" value="<?php echo $row['debeG']?>"  min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="haberG" value="<?php echo $row['haberG']?>"  min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="debeDolG" value="<?php echo $row['debeDolG']?>"  min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="haberDolG" value="<?php echo $row['haberDolG']?>"  min=0 max=10000000  />					
				</td>
			</tr>
			<tr>
				<td>
					<label>Aclaraciones:
				</td>
				<td>
					<input type="text" name="ObsA" value="<?php echo $row['ObsA']?>"  />
					</label>
				</td>
				<td>
					<input type="number" step="any" name="debeA" value="<?php echo $row['debeA']?>" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="haberA" value="<?php echo $row['haberA']?>" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="debeDolA" value="<?php echo $row['debeDolA']?>" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="haberDolA" value="<?php echo $row['haberDolA']?>" min=0 max=10000000  />					
				</td>
			</tr>
			<tr>
				<td>
					<label>Pagos Collet:
				</td>
				<td>
					<input type="text" name="ObsPC" value="<?php echo $row['ObsPC']?>" />
					</label>
				</td>
				<td>
					<input type="number" step="any" name="debePC" value="<?php echo $row['debePC']?>" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="haberPC" value="<?php echo $row['haberPC']?>" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="debeDolPC" value="<?php echo $row['debeDolPC']?>" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="haberDolPC" value="<?php echo $row['haberDolPC']?>" min=0 max=10000000  />					
				</td>
			</tr>
			<tr>
				<td>
					<label>Despacho Preferente:
				</td>
				<td>
					<input type="text" name="ObsDP" value="<?php echo $row['ObsDP']?>"/>
					</label>
				</td>
				<td>
					<input type="number" step="any" name="debeDP" value="<?php echo $row['debeDP']?>" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="haberDP" value="<?php echo $row['haberDP']?>" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="debeDolDP" value="<?php echo $row['debeDolDP']?>" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="haberDolDP" value="<?php echo $row['haberDolDP']?>" min=0 max=10000000  />					
				</td>
			</tr>
			<tr>
				<td>
					<label>Pago Agencia de Aduana:
				</td>
				<td>
					<input type="text" name="ObsPAA" value="<?php echo $row['ObsPAA']?>"/>
					</label>
				</td>
				<td>
					<input type="number" step="any" name="debePAA"  value="<?php echo $row['debePAA']?>" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="haberPAA" value="<?php echo $row['haberPAA']?>" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="debeDolPAA" value="<?php echo $row['debeDolPAA']?>" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="haberDolPAA" value="<?php echo $row['haberDolPAA']?>" min=0 max=10000000  />					
				</td>
			</tr>
			<tr>
				<td>
					<label>Almacenaje:
				</td>
				<td>
					<input type="text" name="ObsAlm" value="<?php echo $row['ObsAlm']?>"/>
					</label>
				</td>
				<td>
					<input type="number" step="any" name="debeAlm" value="<?php echo $row['debeAlm']?>" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="haberAlm" value="<?php echo $row['haberAlm']?>" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="debeDolAlm" value="<?php echo $row['debeDolAlm']?>" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="haberDolAlm" value="<?php echo $row['haberDolAlm']?>" min=0 max=10000000  />					
				</td>
			</tr>
			<tr>
				<td>
					<label>Transbordo:
				</td>
				<td>
					<input type="text" name="ObsTra" value="<?php echo $row['ObsTra']?>"/>
					</label>
				</td>
				<td>
					<input type="number" step="any" name="debeTra"  value="<?php echo $row['debeTra']?>" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="haberTra" value="<?php echo $row['haberTra']?>" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="debeDolTra" value="<?php echo $row['debeDolTra']?>" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="haberDolTra" value="<?php echo $row['haberDolTra']?>" min=0 max=10000000  />					
				</td>
			</tr>
				<tr>
				<td>
					<label>Estibadores:
				</td>
				<td>
					<input type="text" name="ObsEst" value="<?php echo $row['obsEst']?>" />
					</label>
				</td>
				<td>
					<input type="number" step="any" name="debeEst" value="<?php echo $row['debeEst']?>"  min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="haberEst" value="<?php echo $row['haberEst']?>"  min=0 max=10000000  />					
				</td>
				<td> 
					<input type="number" step="any" name="debeDolEst" value="<?php echo $row['debeDolEst']?>"  min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="haberDolEst" value="<?php echo $row['haberDolEst']?>"  min=0 max=10000000  />					
				</td>
			</tr>
			<tr>
				<td>
					<label>Comision Giro 2.5%:
				</td>
				<td>
					<input type="text" name="ObsCG" value="<?php echo $row['ObsCG']?>" />
					</label>
				</td>
				<td>
					<input type="number" step="any" name="debeCG" value="<?php echo $row['debeCG']?>"  min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="haberCG" value="<?php echo $row['haberCG']?>" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="debeDolCG" value="<?php echo $row['debeDolCG']?>" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="haberDolCG" value="<?php echo $row['haberDolCG']?>"  min=0 max=10000000  />					
				</td>
			</tr>
			<tr>
				<td>
					<label>Otros:
				</td>
				<td>
					<input type="text" name="ObsOtros" value="<?php echo $row['ObsOtro']?>" />
					</label>
				</td>
				<td>
					<input type="number" step="any" name="debeOtros" value="<?php echo $row['debeOtro']?>"  min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="haberOtros" value="<?php echo $row['haberOtro']?>" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="debeDolOtros" value="<?php echo $row['debeDolOtro']?>" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="haberDolOtros" value="<?php echo $row['haberDolOtro']?>" min=0 max=10000000  />					
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
			<tr>
				<td><a onclick="return eliminarNotaContable(<?php echo $row['id_carga'];?>);"
				href="../controlador/EliminarNotaContable.php?id_carga=<?php echo $row['id_carga'];?>">
				eliminar</a></td>
			</tr>
<?php } ?>
		</table>
		</fieldset>
		</form>
	</body>
</html>
<script>
	function eliminarNotaContable(id_carga){
		if(confirm("¡Se eliminará este registro permanentemente!")==true){
			return true;
		}else{
			return false;
		}
	}
</script>