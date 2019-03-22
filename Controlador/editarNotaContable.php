<?php
require('../modelo/conexion.php');
$var=6.91;

$id_carga=$_POST['id'];
foreach ($conexion->query("SELECT * from notaContables where id_carga='$id_carga'") as $row){

$ObsAC=$_POST['ObsAC'];
$debeAC=$_POST['debeAC'];
$haberAC=$_POST['haberAC'];
$debeDolAC=$_POST['debeDolAC'];
$haberDolAC=$_POST['haberDolAC'];

if ($debeAC == $row['debeAC'] ) {
	$debeAC= $debeDolAC * $var;
}
if ($debeDolAC == $row['debeDolAC'] ) {
	 $debeDolAC = $debeAC/$var;
}

if ($haberAC == $row['haberAC'] ) {
	$haberAC= $haberDolAC * $var;
}
if ($haberDolAC == $row['haberDolAC'] ) {
	 $haberDolAC = $haberAC/$var;
}
$ObsAT=$_POST['ObsAT'];
$ObsFT=$_POST['ObsFT'];

$ObsL=$_POST['ObsL'];
$debeL=$_POST['debeL'];
$haberL=$_POST['haberL'];
$debeDolL=$_POST['debeDolL'];
$haberDolL=$_POST['haberDolL'];


if ($debeL == $row['debeL'] ) {
	$debeL= $debeDolL * $var;
}
if ($debeDolL == $row['debeDolL'] ) {
	 $debeDolL = $debeL/$var;
}

if ($haberL == $row['haberL'] ) {
	$haberL= $haberDolL * $var;
}
if ($haberDolL == $row['haberDolL'] ) {
	 $haberDolL = $haberL/$var;
}

$obsFT=$_POST['ObsFT'];
$debeFT=$_POST['debeFT'];
$haberFT=$_POST['haberFT'];
$debeDolFT=$_POST['debeDolFT'];
$haberDolFT=$_POST['haberDolFT'];

if ($debeFT == $row['debeFT'] ) {
	$debeFT= $debeDolFT * $var;
}
if ($debeDolFT == $row['debeDolFT'] ) {
	 $debeDolFT = $debeFT/$var;
}
//-------7//
if ($haberFT == $row['haberFT'] ) {
	$haberFT= $haberDolFT * $var;
}
if ($haberDolFT == $row['haberDolFT'] ) {
	 $haberDolFT = $haberFT/$var;
}


$ObsTHC=$_POST['ObsTHC'];
$debeTHC=$_POST['debeTHC'];
$haberTHC=$_POST['haberTHC'];
$debeDolTHC=$_POST['debeDolTHC'];
$haberDolTHC=$_POST['haberDolTHC'];

if ($debeTHC == $row['debeTHC'] ) {
	$debeTHC= $debeDolTHC * $var;
}
if ($debeDolTHC == $row['debeDolTHC'] ) {
	 $debeDolTHC = $debeTHC/$var;
}
//-------------------------------------7//
if ($haberTHC == $row['haberTHC'] ) {
	$haberTHC= $haberDolTHC * $var;
}
if ($haberDolTHC == $row['haberDolTHC'] ) {
	 $haberDolTHC = $haberTHC/$var;
}

$ObsC=$_POST['ObsC'];
$debeC=$_POST['debeC'];
$haberC=$_POST['haberC'];
$debeDolC=$_POST['debeDolC'];
$haberDolC=$_POST['haberDolC'];

if ($debeC == $row['debeC'] ) {
	$debeC= $debeDolC * $var;
}
if ($debeDolC == $row['debeDolC'] ) {
	 $debeDolC = $debeC/$var;
}
//-------------------------------------7//
if ($haberC == $row['haberC'] ) {
	$haberC= $haberDolC * $var;
}
if ($haberDolC == $row['haberDolC'] ) {
	 $haberDolC = $haberC/$var;
}


$ObsEDF=$_POST['ObsEDF'];
$debeEDF=$_POST['debeEDF'];
$haberEDF=$_POST['haberEDF'];
$debeDolEDF=$_POST['debeDolEDF'];
$haberDolEDF=$_POST['haberDolEDF'];

if ($debeEDF == $row['debeEDF'] ) {
	$debeEDF= $debeDolEDF * $var;
}
if ($debeDolEDF == $row['debeDolEDF'] ) {
	 $debeDolEDF = $debeEDF/$var;
}
//-------------------------------------7//
if ($haberEDF == $row['haberEDF'] ) {
	$haberEDF= $haberDolEDF * $var;
}
if ($haberDolEDF == $row['haberDolEDF'] ) {
	 $haberDolEDF = $haberEDF/$var;
}

$ObsGI=$_POST['ObsGI'];
$debeGI=$_POST['debeGI'];
$haberGI=$_POST['haberGI'];
$debeDolGI=$_POST['debeDolGI'];
$haberDolGI=$_POST['haberDolGI'];

if ($debeGI == $row['debeGI'] ) {
	$debeGI= $debeDolGI * $var;
}
if ($debeDolGI == $row['debeDolGI'] ) {
	 $debeDolGI = $debeGI/$var;
}
//-------------------------------------7//
if ($haberGI == $row['haberGI'] ) {
	$haberGI= $haberDolGI * $var;
}
if ($haberDolGI == $row['haberDolGI'] ) {
	 $haberDolGI = $haberGI/$var;
}

$ObsGO=$_POST['ObsGO'];
$debeGO=$_POST['debeGO'];
$haberGO=$_POST['haberGO'];
$debeDolGO=$_POST['debeDolGO'];
$haberDolGO=$_POST['haberDolGO'];

if ($debeGO == $row['debeGO'] ) {
	$debeGO= $debeDolGO * $var;
}
if ($debeDolGO == $row['debeDolGO'] ) {
	 $debeDolGO = $debeGO/$var;
}
//-------------------------------------7//
if ($haberGO == $row['haberGO'] ) {
	$haberGO= $haberDolGO * $var;
}
if ($haberDolGO == $row['haberDolGO'] ) {
	 $haberDolGO = $haberGO/$var;
}

$ObsTD=$_POST['ObsTD'];
$debeTD=$_POST['debeTD'];
$haberTD=$_POST['haberTD'];
$debeDolTD=$_POST['debeDolTD'];
$haberDolTD=$_POST['haberDolTD'];

if ($debeTD == $row['debeTD'] ) {
	$debeTD= $debeDolTD * $var;
}
if ($debeDolTD == $row['debeDolTD'] ) {
	 $debeDolTD = $debeTD/$var;
}
//-------------------------------------7//
if ($haberTD == $row['haberTD'] ) {
	$haberTD= $haberDolTD * $var;
}
if ($haberDolTD == $row['haberDolTD'] ) {
	 $haberDolTD = $haberTD/$var;
}

$ObsPCont=$_POST['ObsPCont'];
$debePCont=$_POST['debePCont'];
$haberPCont=$_POST['haberPCont'];
$debeDolPCont=$_POST['debeDolPCont'];
$haberDolPCont=$_POST['haberDolPCont'];
if ($debePCont == $row['debePCont'] ) {
	$debePCont= $debeDolPCont * $var;
}
if ($debeDolPCont == $row['debeDolPCont'] ) {
	 $debeDolPCont = $debePCont/$var;
}
//-------------------------------------7//
if ($haberPCont == $row['haberPCont'] ) {
	$haberPCont= $haberDolPCont * $var;
}
if ($haberDolPCont == $row['haberDolPCont'] ) {
	 $haberDolPCont = $haberPCont/$var;
}

$ObsDC=$_POST['ObsDC'];
$debeDC=$_POST['debeDC'];
$haberDC=$_POST['haberDC'];
$debeDolDC=$_POST['debeDolDC'];
$haberDolDC=$_POST['haberDolDC'];

if ($debeDC == $row['debeDC'] ) {
	$debeDC= $debeDolDC * $var;
}
if ($debeDolDC == $row['debeDolDC'] ) {
	 $debeDolDC = $debeDC/$var;
}
//-------------------------------------7//
if ($haberDC == $row['haberDC'] ) {
	$haberDC= $haberDolDC * $var;
}
if ($haberDolDC == $row['haberDolDC'] ) {
	 $haberDolDC = $haberDC/$var;
}


$ObsG=$_POST['ObsG'];
$debeG=$_POST['debeG'];
$haberG=$_POST['haberG'];
$debeDolG=$_POST['debeDolG'];
$haberDolG=$_POST['haberDolG'];

if ($debeG == $row['debeG'] ) {
	$debeG= $debeDolG * $var;
}
if ($debeDolG == $row['debeDolG'] ) {
	 $debeDolG = $debeG/$var;
}
//-------------------------------------7//
if ($haberG == $row['haberG'] ) {
	$haberG= $haberDolG * $var;
}
if ($haberDolG == $row['haberDolG'] ) {
	 $haberDolG = $haberG/$var;
}



$ObsA=$_POST['ObsA'];
$debeA=$_POST['debeA'];
$haberA=$_POST['haberA'];
$debeDolA=$_POST['debeDolA'];
$haberDolA=$_POST['haberDolA'];
if ($debeA == $row['debeA'] ) {
	$debeA= $debeDolA * $var;
}
if ($debeDolA == $row['debeDolA'] ) {
	 $debeDolA = $debeA/$var;
}
//-------------------------------------7//
if ($haberA == $row['haberA'] ) {
	$haberA= $haberDolA * $var;
}
if ($haberDolA == $row['haberDolA'] ) {
	 $haberDolA = $haberA/$var;
}
$ObsPC=$_POST['ObsPC'];
$debePC=$_POST['debePC'];
$haberPC=$_POST['haberPC'];
$debeDolPC=$_POST['debeDolPC'];
$haberDolPC=$_POST['haberDolPC'];

if ($debePC == $row['debePC'] ) {
	$debePC= $debeDolPC * $var;
}
if ($debeDolPC == $row['debeDolPC'] ) {
	 $debeDolPC = $debePC/$var;
}
//-------------------------------------7//
if ($haberPC == $row['haberPC'] ) {
	$haberPC= $haberDolPC * $var;
}
if ($haberDolPC == $row['haberDolPC'] ) {
	 $haberDolPC = $haberPC/$var;
}
$ObsDP=$_POST['ObsDP'];
$debeDP=$_POST['debeDP'];
$haberDP=$_POST['haberDP'];
$debeDolDP=$_POST['debeDolDP'];
$haberDolDP=$_POST['haberDolDP'];

if ($debeDP == $row['debeDP'] ) {
	$debeDP= $debeDolDP * $var;
}
if ($debeDolDP == $row['debeDolDP'] ) {
	 $debeDolDP = $debeDP/$var;
}
//-------------------------------------7//
if ($haberDP == $row['haberDP'] ) {
	$haberDP= $haberDolDP * $var;
}
if ($haberDolDP == $row['haberDolDP'] ) {
	 $haberDolDP = $haberDP/$var;
}

$ObsPAA=$_POST['ObsPAA'];
$debePAA=$_POST['debePAA'];
$haberPAA=$_POST['haberPAA'];
$debeDolPAA=$_POST['debeDolPAA'];
$haberDolPAA=$_POST['haberDolPAA'];

if ($debePAA == $row['debePAA'] ) {
	$debePAA= $debeDolPAA * $var;
}
if ($debeDolPAA == $row['debeDolPAA'] ) {
	 $debeDolPAA = $debePAA/$var;
}
//-------------------------------------7//
if ($haberPAA == $row['haberPAA'] ) {
	$haberPAA= $haberDolPAA * $var;
}
if ($haberDolPAA == $row['haberDolPAA'] ) {
	 $haberDolPAA = $haberPAA/$var;
}

$ObsAlm=$_POST['ObsAlm'];
$debeAlm=$_POST['debeAlm'];
$haberAlm=$_POST['haberAlm'];
$debeDolAlm=$_POST['debeDolAlm'];
$haberDolAlm=$_POST['haberDolAlm'];

if ($debeAlm == $row['debeAlm'] ) {
	$debeAlm= $debeDolAlm * $var;
}
if ($debeDolAlm == $row['debeDolAlm'] ) {
	 $debeDolAlm = $debeAlm/$var;
}
//-------------------------------------7//
if ($haberAlm == $row['haberAlm'] ) {
	$haberAlm= $haberDolAlm * $var;
}
if ($haberDolAlm == $row['haberDolAlm'] ) {
	 $haberDolAlm = $haberAlm/$var;
}

$ObsTra=$_POST['ObsTra'];
$debeTra=$_POST['debeTra'];
$haberTra=$_POST['haberTra'];
$debeDolTra=$_POST['debeDolTra'];
$haberDolTra=$_POST['haberDolTra'];

if ($debeTra == $row['debeTra'] ) {
	$debeTra= $debeDolTra * $var;
}
if ($debeDolTra == $row['debeDolTra'] ) {
	 $debeDolTra = $debeTra/$var;
}
//-------------------------------------7//
if ($haberTra == $row['haberTra'] ) {
	$haberTra= $haberDolTra * $var;
}
if ($haberDolTra == $row['haberDolTra'] ) {
	 $haberDolTra = $haberTra/$var;
}

$ObsEst=$_POST['ObsEst'];
$debeEst=$_POST['debeEst'];
$haberEst=$_POST['haberEst'];
$debeDolEst=$_POST['debeDolEst'];	
$haberDolEst=$_POST['haberDolEst'];
if ($debeEst == $row['debeEst'] ) {
	$debeEst= $debeDolEst * $var;
}
if ($debeDolEst == $row['debeDolEst'] ) {
	 $debeDolEst = $debeEst/$var;
}
//-------------------------------------7//
if ($haberEst == $row['haberEst'] ) {
	$haberEst= $haberDolEst * $var;
}
if ($haberDolEst == $row['haberDolEst'] ) {
	 $haberDolEst = $haberEst/$var;
}

$ObsOtro=$_POST['ObsOtros'];
$debeOtro=$_POST['debeOtros'];
$haberOtro=$_POST['debeOtros'];
$debeDolOtro=$_POST['debeDolOtros'];
$haberDolOtro=$_POST['haberDolOtros'];

if ($debeOtro == $row['debeOtro'] ) {
	$debeOtro= $debeDolOtro * $var;
}
if ($debeDolOtro == $row['debeDolOtro'] ) {
	 $debeDolOtro = $debeOtro/$var;
}
//-------------------------------------7//
if ($haberOtro == $row['haberOtro'] ) {
	$haberOtro= $haberDolOtro * $var;
}
if ($haberDolOtro == $row['haberDolOtro'] ) {
	 $haberDolOtro = $haberOtro/$var;
}


$ObsCC=$_POST['ObsCC'];
$debeCC=$_POST['debeCC'];
$haberCC=$_POST['haberCC'];
$debeDolCC=$_POST['debeDolCC'];
$haberDolCC=$_POST['haberDolCC'];

if ($debeCC == $row['debeCC'] ) {
	$debeCC= $debeDolCC * $var;
}
if ($debeDolCC == $row['debeDolCC'] ) {
	 $debeDolCC = $debeCC/$var;
}
//-------------------------------------7//
if ($haberCC == $row['haberCC'] ) {
	$haberCC= $haberDolCC * $var;
}
if ($haberDolCC == $row['haberDolCC'] ) {
	 $haberDolCC = $haberCC/$var;
}


$ObsFTrans=$_POST['ObsFTrans'];
$debeFTrans=$_POST['debeFTrans'];
$haberFTrans=$_POST['haberFTrans'];
$debeDolFTrans=$_POST['debeDolFTrans'];
$haberDolFTrans=$_POST['haberDolFTrans'];

if ($debeFTrans == $row['debeFTrans'] ) {
	$debeFTrans= $debeDolFTrans * $var;
}
if ($debeDolFTrans == $row['debeDolFTrans'] ) {
	 $debeDolFTrans = $debeFTrans/$var;
}
//-------------------------------------7//
if ($haberFTrans == $row['haberFTrans'] ) {
	$haberFTrans= $haberDolFTrans * $var;
}
if ($haberDolFTrans == $row['haberDolFTrans'] ) {
	 $haberDolFTrans = $haberFTrans/$var;
}


$ObsTHD=$_POST['ObsTHD'];
$debeTHD=$_POST['debeTHD'];
$haberTHD=$_POST['haberTHD'];
$debeDolTHD=$_POST['debeDolTHD'];
$haberDolTHD=$_POST['haberDolTHD'];

if ($debeTHD == $row['debeTHD'] ) {
	$debeTHD= $debeDolTHD * $var;
}
if ($debeDolTHD == $row['debeDolTHD'] ) {
	 $debeDolTHD = $debeTHD/$var;
}
//-------------------------------------7//
if ($haberTHD == $row['haberTHD'] ) {
	$haberTHD= $haberDolTHD * $var;
}
if ($haberDolTHD == $row['haberDolTHD'] ) {
	 $haberDolTHD = $haberTHD/$var;
}
$ObsEDS=$_POST['ObsEDS'];
$debeEDS=$_POST['debeEDS'];
$haberEDS=$_POST['haberEDS'];
$debeDolEDS=$_POST['debeDolEDS'];
$haberDolEDS=$_POST['haberDolEDS'];

if ($debeEDS == $row['debeEDS'] ) {
	$debeEDS= $debeDolEDS * $var;
}
if ($debeDolEDS == $row['debeDolEDS'] ) {
	 $debeDolEDS = $debeEDS/$var;
}
//-------------------------------------7//
if ($haberEDS == $row['haberEDS'] ) {
	$haberEDS= $haberDolEDS * $var;
}
if ($haberDolEDS == $row['haberDolEDS'] ) {
	 $haberDolEDS = $haberEDS/$var;
}

$ObsCG=$_POST['ObsCG'];
$debeCG=$_POST['debeCG'];
$haberCG=$_POST['haberCG']; 
$debeDolCG=$_POST['debeDolCG']; 
$haberDolCG=$_POST['haberDolCG']; 

if ($debeCG == $row['debeCG'] ) {
	$debeCG= $debeDolCG * $var;
}
if ($debeDolCG == $row['debeDolCG'] ) {
	 $debeDolCG = $debeCG/$var;
}
//-------------------------------------7//
if ($haberCG == $row['haberCG'] ) {
	$haberCG= $haberDolCG * $var;
}
if ($haberDolCG == $row['haberDolCG'] ) {
	 $haberDolCG = $haberCG/$var;
}

$ObsTHD=$_POST['ObsTHD'];
$debeTHD=$_POST['debeTHD']; 	
$haberTHD=$_POST['haberTHD']; 
$debeDolTHD=$_POST['debeDolTHD']; 
$haberDolTHD=$_POST['haberDolTHD'];

if ($debeTHD == $row['debeTHD'] ) {
	$debeTHD= $debeDolTHD * $var;
}
if ($debeDolTHD == $row['debeDolTHD'] ) {
	 $debeDolTHD = $debeTHD/$var;
}
//-------------------------------------7//
if ($haberTHD == $row['haberTHD'] ) {
	$haberTHD= $haberDolTHD * $var;
}
if ($haberDolTHD == $row['haberDolTHD'] ) {
	 $haberDolTHD = $haberTHD/$var;
}

$ObsCP=$_POST['ObsCP'];
 

$query="UPDATE notaContables SET 
ObsAC='$ObsAC',debeAC='$debeAC',haberAC='$haberAC',debeDolAC='$debeDolAC',haberDolAC='$haberDolAC',
ObsAT='$ObsAT',ObsFT='$ObsFT',
ObsL='$ObsL',debeL='$debeL',haberL='$haberL',debeDolL='$debeDolL',haberDolL='$haberDolL',
ObsFT='$obsFT',debeFT='$debeFT',haberFT='$haberFT',debeDolFT='$debeDolFT',haberDolFT='$haberDolFT',
ObsTHC='$ObsTHC',debeTHC='$debeTHC',haberTHC='$haberTHC',debeDolTHC='$debeDolTHC',haberDolTHC='$haberDolTHC',
ObsC='$ObsC',debeC='$debeC',haberC='$haberC',debeDolC='$debeDolC',haberDolC='$haberDolC',
ObsEDF='$ObsEDF',debeEDF='$debeEDF',haberEDF='$haberEDF',debeDolEDF='$debeDolEDF',haberDolEDF='$haberDolEDF',
ObsGI='$ObsGI',debeGI='$debeGI',haberGI='$haberGI',debeDolGI='$debeDolGI',haberDolGI='$haberDolGI',
ObsGO='$ObsGO',debeGO='$debeGO',haberGO='$haberGO',debeDolGO='$debeDolGO',haberDolGO='$haberDolGO',
ObsTD='$ObsTD',debeTD='$debeTD',haberTD='$haberTD',debeDolTD='$debeDolTD',haberDolTD='$haberDolTD',
ObsPCont='$ObsPCont',debePCont='$debePCont',haberPCont='$haberPCont',debeDolPCont='$debeDolPCont',haberDolPCont='$haberDolPCont',
ObsDC='$ObsDC',debeDC='$debeDC',haberDC='$haberDC',debeDolDC='$debeDolDC',haberDolDC='$haberDolDC',
ObsG='$ObsG',debeG='$debeG',haberG='$haberG',debeDolG='$debeDolG',haberDolG='$haberDolG',
ObsA='$ObsA',debeA='$debeA',haberA='$haberA',debeDolA='$debeDolA',haberDolA='$haberDolA',
ObsPC='$ObsPC',debePC='$debePC',haberPC='$haberPC',debeDolPC='$debeDolPC',haberDolPC='$haberDolPC',
ObsDP='$ObsDP',debeDP='$debeDP',haberDP='$haberDP',debeDolDP='$debeDolDP',haberDolDP='$haberDolDP',
ObsPAA='$ObsPAA',debePAA='$debePAA',haberPAA='$haberPAA',debeDolPAA='$debeDolPAA',haberDolPAA='$haberDolPAA',
ObsAlm='$ObsAlm',debeAlm='$debeAlm',haberAlm='$haberAlm',debeDolAlm='$debeDolAlm',haberDolAlm='$haberDolAlm',
ObsTra='$ObsTra',debeTra='$debeTra',haberTra='$haberTra',debeDolTra='$debeDolTra',haberDolTra='$haberDolTra',
ObsEst='$ObsEst',debeEst='$debeEst',haberEst='$haberEst',debeDolEst='$debeDolEst',haberDolEst='$haberDolEst',
ObsOtro='$ObsOtro',
ObsCC='$ObsCC',debeCC='$debeCC',haberCC='$haberCC',debeDolCC='$debeDolCC',haberDolCC='$haberDolCC',
ObsFTrans='$ObsFTrans',
ObsTHD='$ObsTHD',debeTHD='$debeTHD',haberTHD='$haberTHD',debeDolTHD='$debeDolTHD',haberDolTHD='$haberDolTHD',
ObsEDS='$ObsEDS',debeEDS='$debeEDS',haberEDS='$haberEDS',debeDolEDS='$debeDolEDS',haberDolEDS='$haberDolEDS',
ObsCG='$ObsCG',debeCG='$debeCG',haberCG='$haberCG',debeDolCG='$debeDolCG',haberDolCG='$haberDolCG',
ObsEDS='$ObsEDS',debeEDS='$debeEDS',haberEDS='$haberEDS',debeDolEDS='$debeDolEDS',haberDolEDS='$haberDolEDS',
ObsTHD='$ObsTHD',debeTHD='$debeTHD',haberTHD='$haberTHD',debeDolTHD='$debeDolTHD',haberDolTHD='$haberDolTHD',
ObsCP='$ObsCP' where id_carga=$id_carga";
if($conexion->query($query)===true){
	header("location: Formulario.php");
}else{
	die('error al insertar datos'.$conexion->error);
}
}
?>