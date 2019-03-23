<?php
session_start();
if(!isset($_SESSION['usuario'])){
	header('location: index.php');
}
require('../modelo/conexion.php');
$id=$_GET['id'];
$var=6.91;
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
		<?php foreach ($conexion->query("SELECT * from train where id='$id'") as $row){ ?>
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
<?php	} ?>	
		<table  border=1>
			
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
	$id1= $row['id'];
	$a1='0';
	$a2='0';
	$a3='0';
	$a4='0';
	$a5='0';
	$a6='0';
	$a7='0';
	$a8='0';
	$a9='0';
	$a10='0';
	$a11='0';
	$a12='0';
	$a13='0';
	$a14='0';
	$a15='0';
	$a16='0';
	$a17='0';
	$a18='0';
	$a19='0';
	$a20='0';
   $subTotalD=  $row['debeAC']+
				$row['debeFT']+
				$row['debeL']+
				$row['debeTHC']+
				$row['debeTHD']+
				$row['debeC']+
				$row['debeEDF']+
				$row['debeGI']+
				$row['debeGO']+
				$row['debeTD']+
				$row['debePCont']+
				$row['debeDC']+
				$row['debeG']+
				$row['debeA']+
				$row['debePC']+
				$row['debeDP']+
				$row['debePAA']+
				$row['debeAlm']+
				$row['debeTra']+
				$row['debeEst']+
				$row['debeCC']+
				$row['debeCG']+
				$row['debeEDS'];

 
   $subTotalH=  $row['haberAC']+
				$row['haberFT']+
				$row['haberL']+
				$row['haberTHC']+
				$row['haberTHD']+
				$row['haberC']+
				$row['haberEDF']+ 
				$row['haberEDS']+ 
				$row['haberGI']+
				$row['haberGO']+ 
				$row['haberTD']+
				$row['haberPCont']+
				$row['haberDC']+
				$row['haberG']+
				$row['haberA']+
				$row['haberPC']+
				$row['haberDP']+ 
				$row['haberPAA']+ 
				$row['haberAlm']+ 
				$row['haberTra']+
				$row['haberEst']+
				$row['haberCC']+
				$row['haberCG'];
				;

   $subTotalDD=$row['debeDolAC']+
				$row['debeDolFT']+
				$row['debeDolL']+
				$row['debeDolTHC']+
				$row['debeDolTHD']+
				$row['debeDolC']+
				$row['debeDolEDF']+
				$row['debeDolEDS']+
				$row['debeDolGI']+
				$row['debeDolGO']+ 
				$row['debeDolTD']+ 
				$row['debeDolPCont']+ 
				$row['debeDolDC']+
				$row['debeDolG']+
				$row['debeDolA']+
				$row['debeDolPC']+
				$row['debeDolDP']+
				$row['debeDolPAA']+
				$row['debeDolAlm']+
				$row['debeDolTra']+
				$row['debeDolEst']+
				$row['debeDolCG']+
				$row['debeDolCC'];

   $subTotalHD=     $row['haberDolAC']+
					$row['haberDolFT']+
					$row['haberDolL']+
					$row['haberDolTHC']+
					$row['haberDolTHD']+
					$row['haberDolC']+
					$row['haberDolEDF']+
					$row['haberDolEDS']+
					$row['haberDolGI']+
					$row['haberDolGO']+
					$row['haberDolTD']+
					$row['haberDolPCont']+
					$row['haberDolDC']+
					$row['haberDolG']+
					$row['haberDolA']+
					$row['haberDolPC']+
					$row['haberDolDP']+
					$row['haberDolPAA']+
					$row['haberDolAlm']+
					$row['haberDolTra']+
					$row['haberDolEst']+
					$row['haberDolCG']+
				    $row['haberDolCC'];
					     
    


	foreach ($conexion->query("SELECT * from notacontables2 where id_nc=$id1") as $ro){
    
    $a1=$a1+$ro['debeAT'];      
    $a2=$a2+$ro['haberAT'];  
    $a3=$a3+$ro['debeDolAT'];    	
    $a4=$a4+$ro['haberDolAT'];  

    $a5=$a5+$ro['debeCP'];  
    $a6=$a6+$ro['haberCP'];  
    $a7=$a7+$ro['debeDolCP'];  
    $a8=$a8+$ro['haberDolCP'];

    $a9=$a9+$ro['debeFTrans'];  
    $a10=$a10+$ro['haberFTrans'];  
    $a11=$a11+$ro['debeDolFTrans'];  
    $a12=$a12+$ro['haberDolFTrans']; 

    $a13=$ro['deAT'];  
    $a14=$ro['deCP'];  
    $a15=$ro['deFTrans']; 

    $a20=$ro['deOtro'];  
    $a16=$a16+$ro['debeOtro'];  
    $a17=$a17+$ro['haberOtro'];  
    $a18=$a18+$ro['debeDolOtro'];  
    $a19=$a19+$ro['haberDolOtro']; 
      /*
    Textos completos 	id 	debeAT Ascendente 1 	debeDolAT 	haberAT 	deAT 	haberDolAT 	deFTrans 	debeFTrans 	haberFTrans 	debeDolFTrans 	haberDolFTrans 	deCP 	debeCP 	haberCP 	debeDolCP 	haberDolCP 	deOtro 	haberDolOtro 	debeOtro 	id_nc 	haberOtro 	debeDolOtro 
*/
	
			}
?>
			<tr >

				<td id="tabla1"  onclick="window.location = 'vistaNotaContable2.php?id=<?php echo $id; ?>'"  >
					<label>Adelanto Transportista:</label>
				</td>
				<td>
					<input type="text"  value="<?php echo $a13 ?>" name="ObsAT"  />
					
				</td>
				<td>
					<input type="number" step="any"  value="<?php echo $a1 ?>" name="haberAT" min=0 max=10000000  />
				</td>
				<td>
					<input type="number" step="any" value="<?php echo $a2 ?>" name="haberAT" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" value="<?php echo $a3 ?>" name="debeDolAT" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" value="<?php echo $a4 ?>" name="haberDolAT" min=0 max=10000000  />					
				</td>
			</tr>
			<tr >
				<td id="tabla2" onclick="window.location = 'vistaNotaContable2.php?id=<?php echo $id; ?>'">
					<label>Cuenta por Pagar:</label>
				</td>
				<td>
					<input type="text" value="<?php echo $a15 ?>" name="ObsCP" />
					
				</td>				
				<td>
					<input type="number" step="any" value="<?php echo $a5 ?>" name="debeCP" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" value="<?php echo $a6 ?>" name="haberCP" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" value="<?php echo $a7 ?>" name="debeDolCP" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" value="<?php echo $a8 ?>" name="haberDolCP" min=0 max=10000000  />					
				</td>
			</tr>
			<tr >
				<td id="tabla3" onclick="window.location = 'vistaNotaContable2.php?id=<?php echo $id; ?>'">
					<label>Flete del Transportista:</label>
				</td>
				<td>
					<input type="text" value="<?php echo $a14 ?>" name="ObsFTrans" />
					
				</td>				
				<td>
					<input type="number"  name="debeFTrans"  value="<?php echo $a9 ?>" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="haberFTrans" value="<?php echo $a10 ?>"min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="debeDolFTrans" value="<?php echo $a11 ?>" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="haberDolFTrans" value="<?php echo $a12 ?>" min=0 max=10000000  />					
				</td>
			</tr>
			
			<tr>
				<td>
					<label>Flete del Transporte:</label>
				</td>
				<td>
					<input type="text" name="ObsFT" value="<?php echo $row['ObsFT']?>"/>
					
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
					<label>Cuenta por Cobrar:</label>
				</td>
				<td>
					<input type="text" name="ObsCC" value="<?php echo $row['ObsCC']?>"/>
					
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
					<label>Liberacion:	</label>
				</td>
				<td>
					<input type="text" name="ObsL" value="<?php echo $row['ObsL']?>" />
				
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
					<label>THC:</label>
				</td>
				<td>
					<input type="text" name="ObsTHC" value="<?php echo $row['ObsTHC']?>"/>
					
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
					<label>THD:	</label>
				</td>
				<td>
					<input type="text" name="ObsTHD" value="<?php echo $row['ObsTHD']?>" />
				
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
					<label>COMODATO:</label>
				</td>
				<td>
					<input type="text" name="ObsC" value="<?php echo $row['ObsC']?>" />
					
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
					<label>EDF:</label>
				</td>
				<td>
					<input type="text" name="ObsEDF" value="<?php echo $row['ObsEDF']?>" />
					
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
					<label>EDS:</label>
				</td>
				<td>
					<input type="text" name="ObsEDS" value="<?php echo $row['ObsEDS']?>"/>
					
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
					<label>Gate in:</label>
				</td>
				<td>
					<input type="text" name="ObsGI" value="<?php echo $row['ObsGI']?>"/>
					
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
					<label>Gate Out:</label>
				</td>
				<td>
					<input type="text" name="ObsGO" value="<?php echo $row['ObsGO']?>" />
					
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
					<label>Transporte puerto Deposito:</label>
				</td>
				<td>
					<input type="text" name="ObsTD" value="<?php echo $row['ObsTD']?>"/>
					
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
					<label>Poliza de Contenedores:</label>
				</td>
				<td>
					<input type="text" name="ObsPCont" value="<?php echo $row['ObsPCont']?>"/>
					
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
					<label>Demoras de Contenedor:</label>
				</td>
				<td>
					<input type="text" name="ObsDC" value="<?php echo $row['ObsDC']?>"/>
					
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
					<label>Garantias:</label>
				</td>
				<td>
					<input type="text" name="ObsG" value="<?php echo $row['ObsG']?>" />
					
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
					<label>Aclaraciones:</label>
				</td>
				<td>
					<input type="text" name="ObsA" value="<?php echo $row['ObsA']?>"  />
					
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
					<label>Pagos Collet:</label>
				</td>
				<td>
					<input type="text" name="ObsPC" value="<?php echo $row['ObsPC']?>" />
					
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
					<label>Despacho Preferente:	</label>
				</td>
				<td>
					<input type="text" name="ObsDP" value="<?php echo $row['ObsDP']?>"/>
				
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
					<label>Pago Agencia de Aduana:</label>
				</td>
				<td>
					<input type="text" name="ObsPAA" value="<?php echo $row['ObsPAA']?>"/>
					
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
					<label>Almacenaje:</label>
				</td>
				<td>
					<input type="text" name="ObsAlm" value="<?php echo $row['ObsAlm']?>"/>
					
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
					<label>Transbordo:</label>
				</td>
				<td>
					<input type="text" name="ObsTra" value="<?php echo $row['ObsTra']?>"/>
					
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
					<label>Estibadores:</label>
				</td>
				<td>
					<input type="text" name="ObsEst" value="<?php echo $row['obsEst']?>" />
					
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
					<label>Comision Giro 2.5%:</label>
				</td>
				<td>
					<input type="text" name="ObsCG" value="<?php echo $row['ObsCG']?>" />
					
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
					<label>Otros:</label>
				</td>
				<td>
					<input type="text" name="ObsOtros" value="<?php echo $a20?>" />
					
				</td>
				<td>
					<input type="number" step="any" name="debeOtros" value="<?php echo $a16?>" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="haberOtros" value="<?php echo $a17?>" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="debeDolOtros" value="<?php echo $a18?>" min=0 max=10000000  />					
				</td>
				<td>
					<input type="number" step="any" name="haberDolOtros" value="<?php echo $a19?>" min=0 max=10000000  />					
				</td>
			</tr>
			
			<tr>
				<td></td>
				<?php
				if($a1!=''){
				 $subTotalD=$subTotalD +$a1+$a5+$a9+$a16;
                 $subTotalH=$subTotalH +$a2+$a6+$a10+$a17;
                 $subTotalDD=$subTotalDD +$a3+$a7+$a11+$a18;
                 $subTotalHD=$subTotalHD +$a5+$a8+$a12+$a19;
                 $totalB=$subTotalH-$subTotalD;
                 $totalD=$subTotalHD-$subTotalDD;
             }elseif($a1==''){
                
                 $totalB=$subTotalH-$subTotalD;
                 $totalD=$subTotalHD-$subTotalDD;
             }
				 ?>
             

				<td>SUB TOTAL</td>
				
				<td><?php  echo $subTotalD ?></td>
				<td><?php  echo $subTotalH ?></td>
				<td><?php  echo $subTotalDD ?></td>
				<td><?php  echo $subTotalHD ?></td>

			</tr>
			<tr>
				<td></td>
				<td>TOTAL</td>
				
                  	<td colspan=2 align="center">  <?php  echo $totalB ?></td>
                  
                  	<td colspan=2 align="center">  <?php  echo $totalD ?></td>
                 		
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
	
	

	var tabla1 = document.getElementById('tabla1');
	var tabla2 = document.getElementById('tabla2');
	var tabla3 = document.getElementById('tabla3');

	 tabla1.addEventListener('mouseover',function(){
	 	console.log('solbre enciama')
	   			tabla1.style.color="red";
	   })  
	 tabla1.addEventListener('mouseout',function(){
	 	console.log('se salio')
	   		tabla1.style.color="black";
	   })  
    tabla2.addEventListener('mouseover',function(){
	 	console.log('solbre enciama')
	   			tabla2.style.color="red";
	   })  
	 tabla2.addEventListener('mouseout',function(){
	 	console.log('se salio')
	   		tabla2.style.color="black";
	   })  
	 tabla3.addEventListener('mouseover',function(){
	 	console.log('solbre enciama')
	   			tabla3.style.color="red";
	   })  
	 tabla3.addEventListener('mouseout',function(){
	 	console.log('se salio')
	   		tabla3.style.color="black";
	   	
			
	   })  


</script>