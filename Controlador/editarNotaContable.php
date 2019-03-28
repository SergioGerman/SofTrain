<?php
require('../modelo/conexion.php');
$var=6.91;
$var1=0;

$id_carga=$_POST['id'];
foreach ($conexion->query("SELECT * from notaContables where id_carga='$id_carga'") as $row){

$ObsAC=$_POST['ObsAC'];
$debeAC=$_POST['debeAC'];
$haberAC=$_POST['haberAC'];
$debeDolAC=$_POST['debeDolAC'];
$haberDolAC=$_POST['haberDolAC'];
if ($debeDolAC == $row['debeDolAC'] ) {
	 $debeDolAC = $debeAC/$var;
}


if ($debeAC == $row['debeAC'] ) {
	$debeAC= $debeDolAC * $var;
}
if ($haberDolAC == $row['haberDolAC'] ) {
	 $haberDolAC = $haberAC/$var;
}

if ($haberAC == $row['haberAC'] ) {
	$haberAC= $haberDolAC * $var;
}
$ObsAT=$_POST['ObsAT'];
$ObsFT=$_POST['ObsFT'];

$ObsL=$_POST['ObsL'];
$debeL=$_POST['debeL'];
$haberL=$_POST['haberL'];
$debeDolL=$_POST['debeDolL'];
$haberDolL=$_POST['haberDolL'];

if ($debeDolL == $row['debeDolL'] ) {
	 $debeDolL = $debeL/$var;
}

if ($debeL == $row['debeL'] ) {
	$debeL= $debeDolL * $var+$var1;
}
if ($haberDolL == $row['haberDolL'] ) {
	 $haberDolL = $haberL/$var;
}
if ($haberL == $row['haberL'] ) {
	$haberL= $haberDolL * $var+$var1;
}


$obsFT=$_POST['ObsFT'];
$debeFT=$_POST['debeFT'];
$haberFT=$_POST['haberFT'];
$debeDolFT=$_POST['debeDolFT'];
$haberDolFT=$_POST['haberDolFT'];
if ($debeDolFT == $row['debeDolFT'] ) {
	 $debeDolFT = $debeFT/$var;
}
if ($debeFT == $row['debeFT'] ) {
	$debeFT= $debeDolFT * $var+$var1;
}
//-------7//
if ($haberDolFT == $row['haberDolFT'] ) {
	 $haberDolFT = $haberFT/$var;
}

if ($haberFT == $row['haberFT'] ) {
	$haberFT= $haberDolFT * $var+$var1;
}



$ObsTHC=$_POST['ObsTHC'];
$debeTHC=$_POST['debeTHC'];
$haberTHC=$_POST['haberTHC'];
$debeDolTHC=$_POST['debeDolTHC'];
$haberDolTHC=$_POST['haberDolTHC'];

if ($debeDolTHC == $row['debeDolTHC'] ) {
	 $debeDolTHC = $debeTHC/$var;
}
if ($debeTHC == $row['debeTHC'] ) {
	$debeTHC= $debeDolTHC * $var+$var1;
}

//-------------------------------------7//
if ($haberDolTHC == $row['haberDolTHC'] ) {
	 $haberDolTHC = $haberTHC/$var;
}
if ($haberTHC == $row['haberTHC'] ) {
	$haberTHC= $haberDolTHC * $var+$var1;
}


$ObsC=$_POST['ObsC'];
$debeC=$_POST['debeC'];
$haberC=$_POST['haberC'];
$debeDolC=$_POST['debeDolC'];
$haberDolC=$_POST['haberDolC'];

if ($debeDolC == $row['debeDolC'] ) {
	 $debeDolC = $debeC/$var;
}
if ($debeC == $row['debeC'] ) {
	$debeC= $debeDolC * $var+$var1;
}

//-------------------------------------7//
if ($haberDolC == $row['haberDolC'] ) {
	 $haberDolC = $haberC/$var;
}

if ($haberC == $row['haberC'] ) {
	$haberC= $haberDolC * $var+$var1;
}


$ObsEDF=$_POST['ObsEDF'];
$debeEDF=$_POST['debeEDF'];
$haberEDF=$_POST['haberEDF'];
$debeDolEDF=$_POST['debeDolEDF'];
$haberDolEDF=$_POST['haberDolEDF'];

if ($debeDolEDF == $row['debeDolEDF'] ) {
	 $debeDolEDF = $debeEDF/$var;
}
if ($debeEDF == $row['debeEDF'] ) {
	$debeEDF= $debeDolEDF * $var+$var1;
}

//-------------------------------------7//
if ($haberDolEDF == $row['haberDolEDF'] ) {
	 $haberDolEDF = $haberEDF/$var;
}

if ($haberEDF == $row['haberEDF'] ) {
	$haberEDF= $haberDolEDF * $var+$var1;
}

$ObsGI=$_POST['ObsGI'];
$debeGI=$_POST['debeGI'];
$haberGI=$_POST['haberGI'];
$debeDolGI=$_POST['debeDolGI'];
$haberDolGI=$_POST['haberDolGI'];

if ($debeDolGI == $row['debeDolGI'] ) {
	 $debeDolGI = $debeGI/$var;
}
if ($debeGI == $row['debeGI'] ) {
	$debeGI= $debeDolGI * $var+$var1;
}

//-------------------------------------7//
if ($haberDolGI == $row['haberDolGI'] ) {
	 $haberDolGI = $haberGI/$var;
}
if ($haberGI == $row['haberGI'] ) {
	$haberGI= $haberDolGI * $var+$var1;
}
if ($haberDolGI == $row['haberDolGI'] ) {
	 $haberDolGI = $haberGI/$var;
}

$ObsGO=$_POST['ObsGO'];
$debeGO=$_POST['debeGO'];
$haberGO=$_POST['haberGO'];
$debeDolGO=$_POST['debeDolGO'];
$haberDolGO=$_POST['haberDolGO'];

if ($debeDolGO == $row['debeDolGO'] ) {
	 $debeDolGO = $debeGO/$var;
}
if ($debeGO == $row['debeGO'] ) {
	$debeGO= $debeDolGO * $var+$var1;
}

//-------------------------------------7//
if ($haberDolGO == $row['haberDolGO'] ) {
	 $haberDolGO = $haberGO/$var;
}
if ($haberGO == $row['haberGO'] ) {
	$haberGO= $haberDolGO * $var+$var1;
}


$ObsTD=$_POST['ObsTD'];
$debeTD=$_POST['debeTD'];
$haberTD=$_POST['haberTD'];
$debeDolTD=$_POST['debeDolTD'];
$haberDolTD=$_POST['haberDolTD'];

if ($debeDolTD == $row['debeDolTD'] ) {
	 $debeDolTD = $debeTD/$var;
}
if ($debeTD == $row['debeTD'] ) {
	$debeTD= $debeDolTD * $var+$var1;
}

//-------------------------------------7//
if ($haberDolTD == $row['haberDolTD'] ) {
	 $haberDolTD = $haberTD/$var;
}

if ($haberTD == $row['haberTD'] ) {
	$haberTD= $haberDolTD * $var+$var1;
}

$ObsPCont=$_POST['ObsPCont'];
$debePCont=$_POST['debePCont'];
$haberPCont=$_POST['haberPCont'];
$debeDolPCont=$_POST['debeDolPCont'];
$haberDolPCont=$_POST['haberDolPCont'];
if ($debeDolPCont == $row['debeDolPCont'] ) {
	 $debeDolPCont = $debePCont/$var;
}
if ($debePCont == $row['debePCont'] ) {
	$debePCont= $debeDolPCont * $var+$var1;
}

//-------------------------------------7//
if ($haberDolPCont == $row['haberDolPCont'] ) {
	 $haberDolPCont = $haberPCont/$var;
}
if ($haberPCont == $row['haberPCont'] ) {
	$haberPCont= $haberDolPCont * $var+$var1;
}


$ObsDC=$_POST['ObsDC'];
$debeDC=$_POST['debeDC'];
$haberDC=$_POST['haberDC'];
$debeDolDC=$_POST['debeDolDC'];
$haberDolDC=$_POST['haberDolDC'];

if ($debeDolDC == $row['debeDolDC'] ) {
	 $debeDolDC = $debeDC/$var;
}
if ($debeDC == $row['debeDC'] ) {
	$debeDC= $debeDolDC * $var+$var1;
}

//-------------------------------------7//
if ($haberDolDC == $row['haberDolDC'] ) {
	 $haberDolDC = $haberDC/$var;
}

if ($haberDC == $row['haberDC'] ) {
	$haberDC= $haberDolDC * $var+$var1;
}


$ObsG=$_POST['ObsG'];
$debeG=$_POST['debeG'];
$haberG=$_POST['haberG'];
$debeDolG=$_POST['debeDolG'];
$haberDolG=$_POST['haberDolG'];

if ($debeDolG == $row['debeDolG'] ) {
	 $debeDolG = $debeG/$var;
}
if ($debeG == $row['debeG'] ) {
	$debeG= $debeDolG * $var+$var1;
}

//-------------------------------------7//
if ($haberDolG == $row['haberDolG'] ) {
	 $haberDolG = $haberG/$var;
}
if ($haberG == $row['haberG'] ) {
	$haberG= $haberDolG * $var+$var1;
}




$ObsA=$_POST['ObsA'];
$debeA=$_POST['debeA'];
$haberA=$_POST['haberA'];
$debeDolA=$_POST['debeDolA'];
$haberDolA=$_POST['haberDolA'];
if ($debeDolA == $row['debeDolA'] ) {
	 $debeDolA = $debeA/$var;
}
if ($debeA == $row['debeA'] ) {
	$debeA= $debeDolA * $var+$var1;
}

//-------------------------------------7//
if ($haberDolA == $row['haberDolA'] ) {
	 $haberDolA = $haberA/$var;
}
if ($haberA == $row['haberA'] ) {
	$haberA= $haberDolA * $var+$var1;
}

$ObsPC=$_POST['ObsPC'];
$debePC=$_POST['debePC'];
$haberPC=$_POST['haberPC'];
$debeDolPC=$_POST['debeDolPC'];
$haberDolPC=$_POST['haberDolPC'];
if ($debeDolPC == $row['debeDolPC'] ) {
	 $debeDolPC = $debePC/$var;
}
if ($debePC == $row['debePC'] ) {
	$debePC= $debeDolPC * $var+$var1;
}

//-------------------------------------7//
if ($haberDolPC == $row['haberDolPC'] ) {
	 $haberDolPC = $haberPC/$var;
}
if ($haberPC == $row['haberPC'] ) {
	$haberPC= $haberDolPC * $var+$var1;
}

$ObsDP=$_POST['ObsDP'];
$debeDP=$_POST['debeDP'];
$haberDP=$_POST['haberDP'];
$debeDolDP=$_POST['debeDolDP'];
$haberDolDP=$_POST['haberDolDP'];
if ($debeDolDP == $row['debeDolDP'] ) {
	 $debeDolDP = $debeDP/$var;
}
if ($debeDP == $row['debeDP'] ) {
	$debeDP= $debeDolDP * $var+$var1;
}

//-------------------------------------7//
if ($haberDolDP == $row['haberDolDP'] ) {
	 $haberDolDP = $haberDP/$var;
}
if ($haberDP == $row['haberDP'] ) {
	$haberDP= $haberDolDP * $var+$var1;
}


$ObsPAA=$_POST['ObsPAA'];
$debePAA=$_POST['debePAA'];
$haberPAA=$_POST['haberPAA'];
$debeDolPAA=$_POST['debeDolPAA'];
$haberDolPAA=$_POST['haberDolPAA'];
if ($debeDolPAA == $row['debeDolPAA'] ) {
	 $debeDolPAA = $debePAA/$var;
}
if ($debePAA == $row['debePAA'] ) {
	$debePAA= $debeDolPAA * $var+$var1;
}

//-------------------------------------7//
if ($haberDolPAA == $row['haberDolPAA'] ) {
	 $haberDolPAA = $haberPAA/$var;
}
if ($haberPAA == $row['haberPAA'] ) {
	$haberPAA= $haberDolPAA * $var+$var1;
}


$ObsAlm=$_POST['ObsAlm'];
$debeAlm=$_POST['debeAlm'];
$haberAlm=$_POST['haberAlm'];
$debeDolAlm=$_POST['debeDolAlm'];
$haberDolAlm=$_POST['haberDolAlm'];
if ($debeDolAlm == $row['debeDolAlm'] ) {
	 $debeDolAlm = $debeAlm/$var;
}
if ($debeAlm == $row['debeAlm'] ) {
	$debeAlm= $debeDolAlm * $var+$var1;
}

//-------------------------------------7//
if ($haberDolAlm == $row['haberDolAlm'] ) {
	 $haberDolAlm = $haberAlm/$var;
}
if ($haberAlm == $row['haberAlm'] ) {
	$haberAlm= $haberDolAlm * $var+$var1;
}


$ObsTra=$_POST['ObsTra'];
$debeTra=$_POST['debeTra'];
$haberTra=$_POST['haberTra'];
$debeDolTra=$_POST['debeDolTra'];
$haberDolTra=$_POST['haberDolTra'];
if ($debeDolTra == $row['debeDolTra'] ) {
	 $debeDolTra = $debeTra/$var;
}
if ($debeTra == $row['debeTra'] ) {
	$debeTra= $debeDolTra * $var+$var1;
}

//-------------------------------------7//
if ($haberDolTra == $row['haberDolTra'] ) {
	 $haberDolTra = $haberTra/$var;
}
if ($haberTra == $row['haberTra'] ) {
	$haberTra= $haberDolTra * $var+$var1;
}


$ObsEst=$_POST['ObsEst'];
$debeEst=$_POST['debeEst'];
$haberEst=$_POST['haberEst'];
$debeDolEst=$_POST['debeDolEst'];	
$haberDolEst=$_POST['haberDolEst'];
if ($debeDolEst == $row['debeDolEst'] ) {
	 $debeDolEst = $debeEst/$var;
}
if ($debeEst == $row['debeEst'] ) {
	$debeEst= $debeDolEst * $var+$var1;
}

//-------------------------------------7//
if ($haberDolEst == $row['haberDolEst'] ) {
	 $haberDolEst = $haberEst/$var;
}
if ($haberEst == $row['haberEst'] ) {
	$haberEst= $haberDolEst * $var+$var1;
}


$ObsOtro=$_POST['ObsOtros'];
$debeOtro=$_POST['debeOtros'];
$haberOtro=$_POST['debeOtros'];
$debeDolOtro=$_POST['debeDolOtros'];
$haberDolOtro=$_POST['haberDolOtros'];
if ($debeDolOtro == $row['debeDolOtro'] ) {
	 $debeDolOtro = $debeOtro/$var;
}

if ($debeOtro == $row['debeOtro'] ) {
	$debeOtro= $debeDolOtro * $var+$var1;
}
//-------------------------------------7//
if ($haberDolOtro == $row['haberDolOtro'] ) {
	 $haberDolOtro = $haberOtro/$var;
}
if ($haberOtro == $row['haberOtro'] ) {
	$haberOtro= $haberDolOtro * $var+$var1;
}

$ObsCC=$_POST['ObsCC'];
$debeCC=$_POST['debeCC'];
$haberCC=$_POST['haberCC'];
$debeDolCC=$_POST['debeDolCC'];
$haberDolCC=$_POST['haberDolCC'];
if ($debeDolCC == $row['debeDolCC'] ) {
	 $debeDolCC = $debeCC/$var;
}
if ($debeCC == $row['debeCC'] ) {
	$debeCC= $debeDolCC * $var+$var1;
}

//-------------------------------------7//
if ($haberDolCC == $row['haberDolCC'] ) {
	 $haberDolCC = $haberCC/$var;
}
if ($haberCC == $row['haberCC'] ) {
	$haberCC= $haberDolCC * $var+$var1;
}



$ObsFTrans=$_POST['ObsFTrans'];
$debeFTrans=$_POST['debeFTrans'];
$haberFTrans=$_POST['haberFTrans'];
$debeDolFTrans=$_POST['debeDolFTrans'];
$haberDolFTrans=$_POST['haberDolFTrans'];
if ($debeDolFTrans == $row['debeDolFTrans'] ) {
	 $debeDolFTrans = $debeFTrans/$var;
}
if ($debeFTrans == $row['debeFTrans'] ) {
	$debeFTrans= $debeDolFTrans * $var+$var1;
}

//-------------------------------------7//
if ($haberDolFTrans == $row['haberDolFTrans'] ) {
	 $haberDolFTrans = $haberFTrans/$var;
}

if ($haberFTrans == $row['haberFTrans'] ) {
	$haberFTrans= $haberDolFTrans * $var+$var1;
}


$ObsTHD=$_POST['ObsTHD'];
$debeTHD=$_POST['debeTHD'];
$haberTHD=$_POST['haberTHD'];
$debeDolTHD=$_POST['debeDolTHD'];
$haberDolTHD=$_POST['haberDolTHD'];
if ($debeDolTHD == $row['debeDolTHD'] ) {
	 $debeDolTHD = $debeTHD/$var;
}
if ($debeTHD == $row['debeTHD'] ) {
	$debeTHD= $debeDolTHD * $var+$var1;
}

//-------------------------------------7//
if ($haberDolTHD == $row['haberDolTHD'] ) {
	 $haberDolTHD = $haberTHD/$var;
}
if ($haberTHD == $row['haberTHD'] ) {
	$haberTHD= $haberDolTHD * $var+$var1;
}

$ObsEDS=$_POST['ObsEDS'];
$debeEDS=$_POST['debeEDS'];
$haberEDS=$_POST['haberEDS'];
$debeDolEDS=$_POST['debeDolEDS'];
$haberDolEDS=$_POST['haberDolEDS'];
if ($debeDolEDS == $row['debeDolEDS'] ) {
	 $debeDolEDS = $debeEDS/$var;
}
if ($debeEDS == $row['debeEDS'] ) {
	$debeEDS= $debeDolEDS * $var+$var1;
}

//-------------------------------------7//
if ($haberDolEDS == $row['haberDolEDS'] ) {
	 $haberDolEDS = $haberEDS/$var;
}
if ($haberEDS == $row['haberEDS'] ) {
	$haberEDS= $haberDolEDS * $var+$var1;
}


$ObsCG=$_POST['ObsCG'];
$debeCG=$_POST['debeCG'];
$haberCG=$_POST['haberCG']; 
$debeDolCG=$_POST['debeDolCG']; 
$haberDolCG=$_POST['haberDolCG']; 
if ($debeDolCG == $row['debeDolCG'] ) {
	 $debeDolCG = $debeCG/$var;
}
if ($debeCG == $row['debeCG'] ) {
	$debeCG= $debeDolCG * $var+$var1;
}

//-------------------------------------7//
if ($haberDolCG == $row['haberDolCG'] ) {
	 $haberDolCG = $haberCG/$var;
}
if ($haberCG == $row['haberCG'] ) {
	$haberCG= $haberDolCG * $var+$var1;
}


$ObsTHD=$_POST['ObsTHD'];
$debeTHD=$_POST['debeTHD']; 	
$haberTHD=$_POST['haberTHD']; 
$debeDolTHD=$_POST['debeDolTHD']; 
$haberDolTHD=$_POST['haberDolTHD'];
if ($debeDolTHD == $row['debeDolTHD'] ) {
	 $debeDolTHD = $debeTHD/$var;
}
if ($debeTHD == $row['debeTHD'] ) {
	$debeTHD= $debeDolTHD * $var+$var1;
}

//-------------------------------------7//
if ($haberDolTHD == $row['haberDolTHD'] ) {
	 $haberDolTHD = $haberTHD/$var;
}

if ($haberTHD == $row['haberTHD'] ) {
	$haberTHD= $haberDolTHD * $var+$var1;
}

$ObsCP=$_POST['ObsCP'];

$subToDebe=$_POST['subToDebe'];
$subToHaber=$_POST['subToHaber'];

$subToDebeDol=$_POST['subToDebeDol'];
$subToHaberDol=$_POST['subToHaberDol'];
$TotalBol=$_POST['TotalBol'];
$TotalDol=$_POST['TotalDol'];

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

subToDebe='$subToDebe',subToHaber='$subToHaber',subToDebeDol='$subToDebeDol',subToHaberDol='$subToHaberDol',TotalBol='$TotalBol',TotalDol='$TotalDol',

ObsCP='$ObsCP' where id_carga=$id_carga";
if($conexion->query($query)===true){
	header("location: Formulario.php");
}else{
	die('error al insertar datos'.$conexion->error);
}
}
?>