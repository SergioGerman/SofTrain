<?php
require('../modelo/conexion.php');

$var=6.91;

$id_carga=$_POST['id'];

$ObsAC=$_POST['ObsAC'];
$debeAC=$_POST['debeAC'];
$haberAC=$_POST['haberAC'];
$debeDolAC=$_POST['debeDolAC'];
$haberDolAC=$_POST['haberDolAC'];

if ($debeAC!='' and $debeDolAC !='') {
	$debeDolAC = $debeAC/$var;
    $debeAC= $debeDolAC * $var;
}

if ($haberAC !='' and $haberDolAC !='') {
	$haberDolAC = $haberAC/$var;
    $haberAC= $haberDolAC * $var;
}

$ObsAT=$_POST['ObsAT'];
$ObsFT=$_POST['ObsFT'];

$ObsL=$_POST['ObsL'];
$debeL=$_POST['debeL'];
$haberL=$_POST['haberL'];
$debeDolL=$_POST['debeDolL'];
$haberDolL=$_POST['haberDolL'];

if ($debeL!='' and $debeDolL!='') {
	$debeDolL=$debeL/$var;
   $debeL= $debeDolL * $var;
}

if ($haberL!='' and $haberDolL!='') {
	$haberDolL=$haberL/$var;
   $haberL= $haberDolL * $var;
}


$obsFT=$_POST['ObsFT'];
$debeFT=$_POST['debeFT'];
$haberFT=$_POST['haberFT'];
$debeDolFT=$_POST['debeDolFT'];
$haberDolFT=$_POST['haberDolFT'];

if ($debeFT!='' and $debeDolFT!='') {
	$debeDolFT= $debeFT / $var;
   $debeFT= $debeDolFT * $var;
}

if ($haberFT!='' and $haberDolFT!='') {
	$haberDolFT=$haberFT/$var;
   $haberFT= $haberDolFT * $var;
}

$ObsTHC=$_POST['ObsTHC'];
$debeTHC=$_POST['debeTHC'];
$haberTHC=$_POST['haberTHC'];
$debeDolTHC=$_POST['debeDolTHC'];
$haberDolTHC=$_POST['haberDolTHC'];

if ($debeTHC!='' and $debeDolTHC!='') {
	$debeDolTHC=$debeTHC/$var;
   $debeTHC= $debeDolTHC * $var;
}

if ($haberTHC!='' and $haberDolTHC!='') {
	$haberDolTHC=$haberTHC/$var;
   $haberTHC= $haberDolTHC * $var;
}

$ObsC=$_POST['ObsC'];
$debeC=$_POST['debeC'];
$haberC=$_POST['haberC'];
$debeDolC=$_POST['debeDolC'];
$haberDolC=$_POST['haberDolC'];

if ($debeC!='' and $debeDolC!='') {
	$debeDolC=$debeC/$var;
   $debeC= $debeDolC * $var;
}

if ($haberC!='' and $haberDolC!='') {
	$haberDolC=$haberC/$var;
   $haberC= $haberDolC * $var;
}

$ObsEDF=$_POST['ObsEDF'];
$debeEDF=$_POST['debeEDF'];
$haberEDF=$_POST['haberEDF'];
$debeDolEDF=$_POST['debeDolEDF'];
$haberDolEDF=$_POST['haberDolEDF'];

if ($debeEDF!='' and $debeDolEDF!='') {
	$debeDolEDF=$debeEDF/$var;
   $debeEDF= $debeDolEDF *$var;
}

if ($haberEDF!='' and $haberDolEDF!='') {
	$haberDolEDF=$haberEDF/$var;
   $haberEDF= $haberDolEDF * $var;
}

$ObsGI=$_POST['ObsGI'];
$debeGI=$_POST['debeGI'];
$haberGI=$_POST['haberGI'];
$debeDolGI=$_POST['debeDolGI'];
$haberDolGI=$_POST['haberDolGI'];

if ($debeGI!='' and $debeDolGI!='') {
	$debeDolGI=$debeGI/$var;
   $debeGI= $debeDolGI * $var;
}

if ($haberGI!='' and $haberDolGI!='') {
	$haberDolGI=$haberGI/$var;
   $haberGI= $haberDolGI * $var;
}

$ObsGO=$_POST['ObsGO'];
$debeGO=$_POST['debeGO'];
$haberGO=$_POST['haberGO'];
$debeDolGO=$_POST['debeDolGO'];
$haberDolGO=$_POST['haberDolGO'];

if ($debeGO!='' and $debeDolGO!='') {
	$debeDolGO=$debeGO/$var;
   $debeGO= $debeDolGO *$var;
}

if ($haberGO!='' and $haberDolGO!='') {
	$haberDolGO=$haberGO/$var;
   $haberGO= $haberDolGO * $var;
}

$ObsTD=$_POST['ObsTD'];
$debeTD=$_POST['debeTD'];
$haberTD=$_POST['haberTD'];
$debeDolTD=$_POST['debeDolTD'];
$haberDolTD=$_POST['haberDolTD'];
if ($debeTD!='' and $debeDolTD!='') {
	$debeDolTD=$debeTD/$var;
   $debeTD= $debeDolTD * $var;
}

if ($haberTD!='' and $haberDolTD!='') {
	$haberDolTD=$haberTD/$var;
   $haberTD= $haberDolTD * $var;
}
$ObsPCont=$_POST['ObsPCont'];
$debePCont=$_POST['debePCont'];
$haberPCont=$_POST['haberPCont'];
$debeDolPCont=$_POST['debeDolPCont'];
$haberDolPCont=$_POST['haberDolPCont'];
if ($debePCont!='' and $debeDolPCont!='') {
	$debeDolPCont=$debePCont/$var;
   $debePCont= $debeDolPCont * $var;
}

if ($haberPCont!='' and $haberDolPCont!='') {
	$haberDolPCont=$haberPCont/$var;
   $haberPCont= $haberDolPCont * $var;
}
$ObsDC=$_POST['ObsDC'];
$debeDC=$_POST['debeDC'];
$haberDC=$_POST['haberDC'];
$debeDolDC=$_POST['debeDolDC'];
$haberDolDC=$_POST['haberDolDC'];
if ($debeDC!='' and $debeDolDC!='') {
	$debeDolDC=$debeDC/$var;
   $debeDC= $debeDolDC * $var;
}

if ($haberDC!='' and $haberDolDC!='') {
	$haberDolDC=$haberDC/$var;
   $haberDC= $haberDolDC *$var;
}
$ObsG=$_POST['ObsG'];
$debeG=$_POST['debeG'];
$haberG=$_POST['haberG'];
$debeDolG=$_POST['debeDolG'];
$haberDolG=$_POST['haberDolG'];
if ($debeG!='' and $debeDolG!='') {
	$debeDolG=$debeG/$var;
   $debeG= $debeDolG * $var;
}

if ($haberG!='' and $haberDolG!='') {
	$haberDolG=$haberG/$var;
   $haberG= $haberDolG * $var;
}
$ObsA=$_POST['ObsA'];
$debeA=$_POST['debeA'];
$haberA=$_POST['haberA'];
$debeDolA=$_POST['debeDolA'];
$haberDolA=$_POST['haberDolA'];
if ($debeA!='' and $debeDolA!='') {
	$debeDolA=$debeA/$var;
   $debeA= $debeDolA * $var;
}

if ($haberA!='' and $haberDolA!='') {
	$haberDolA=$haberA/$var;
   $haberA= $haberDolA *$var;
}
$ObsPC=$_POST['ObsPC'];
$debePC=$_POST['debePC'];
$haberPC=$_POST['haberPC'];
$debeDolPC=$_POST['debeDolPC'];
$haberDolPC=$_POST['haberDolPC'];

if ($debePC!='' and $debeDolPC!='') {
	$debeDolPC=$debePC/$var;
   $debePC= $debeDolPC * $var;
}

if ($haberPC!='' and $haberDolPC!='') {
	$haberDolPC=$haberPC/$var;
   $haberPC= $haberDolPC * $var;
}

$ObsDP=$_POST['ObsDP'];
$debeDP=$_POST['debeDP'];
$haberDP=$_POST['haberDP'];
$debeDolDP=$_POST['debeDolDP'];
$haberDolDP=$_POST['haberDolDP'];

if ($debeDP!='' and $debeDolDP!='') {
	$debeDolDP=$debeDP/$var;
   $debeDP= $debeDolDP * $var;
}

if ($haberDP!='' and $haberDolDP!='') {
	$haberDolDP=$haberDP/$var;
   $haberDP= $haberDolDP *$var;
}

$ObsPAA=$_POST['ObsPAA'];
$debePAA=$_POST['debePAA'];
$haberPAA=$_POST['haberPAA'];
$debeDolPAA=$_POST['debeDolPAA'];
$haberDolPAA=$_POST['haberDolPAA'];

if ($debePAA!='' and $debeDolPAA!='') {
	$debeDolPAA=$debePAA/$var;

   $debePAA= $debeDolPAA *$var;
}

if ($haberPAA!='' and $haberDolPAA!='') {
	$haberDolPAA=$haberPAA/$var;
   $haberPAA= $haberDolPAA * $var;
}

$ObsAlm=$_POST['ObsAlm'];
$debeAlm=$_POST['debeAlm'];
$haberAlm=$_POST['haberAlm'];
$debeDolAlm=$_POST['debeDolAlm'];
$haberDolAlm=$_POST['haberDolAlm'];

if ($debeAlm!='' and $debeDolAlm!='') {
	$debeDolAlm=$debeAlm/$var;
   $debeAlm= $debeDolAlm * $var;
}

if ($haberAlm!='' and $haberDolAlm!='') {
	$haberDolAlm=$haberAlm/$var;
   $haberAlm= $haberDolAlm * $var;
}

$ObsTra=$_POST['ObsTra'];
$debeTra=$_POST['debeTra'];
$haberTra=$_POST['haberTra'];
$debeDolTra=$_POST['debeDolTra'];
$haberDolTra=$_POST['haberDolTra'];

if ($debeTra!='' and $debeDolTra!='') {
	$debeDolTra=$debeTra/$var;
   $debeTra= $debeDolTra * $var;
}

if ($haberTra!='' and $haberDolTra!='') {
	$haberDolTra=$haberTra/$var;
   $haberTra= $haberDolTra * $var;
}


$ObsEst=$_POST['ObsEst'];
$debeEst=$_POST['debeEst'];
$haberEst=$_POST['haberEst'];
$debeDolEst=$_POST['debeDolEst'];	
$haberDolEst=$_POST['haberDolEst'];
if ($debeEst!='' and $debeDolEst!='') {
	$debeDolEst=$debeEst/$var;
   $debeEst= $debeDolEst * $var;
}

if ($haberEst!='' and $haberDolEst!='') {
	$haberDolEst=$haberEst/$var;
   $haberEst= $haberDolEst *$var;
}

$ObsOtro=$_POST['ObsOtros'];
$debeOtro=$_POST['debeOtros'];
$haberOtro=$_POST['debeOtros'];
$debeDolOtro=$_POST['debeDolOtros'];
$haberDolOtro=$_POST['haberDolOtros'];
if ($debeOtro!='' and $debeDolOtro!='') {
	$debeDolOtro=$debeOtro/$var;
   $debeOtro= $debeDolOtro * $var;
}

if ($haberOtro!='' and $haberDolOtro!='') {
	$haberDolOtro=$haberOtro/$var;
   $haberOtro= $haberDolOtro * $var;
}

$ObsCC=$_POST['ObsCC'];
$debeCC=$_POST['debeCC'];
$haberCC=$_POST['haberCC'];
$debeDolCC=$_POST['debeDolCC'];
$haberDolCC=$_POST['haberDolCC'];
if ($debeCC!='' and $debeDolCC!='') {
	$debeDolCC=$debeCC/$var;
   $debeCC= $debeDolCC * $var;
}

if ($haberCC!='' and $haberDolCC!='') {
	$haberDolCC=$haberCC/$var;
   $haberCC= $haberDolCC *$var;
}


$ObsFTrans=$_POST['ObsFTrans'];
$debeFTrans=$_POST['debeFTrans'];
$haberFTrans=$_POST['haberFTrans'];
$debeDolFTrans=$_POST['debeDolFTrans'];
$haberDolFTrans=$_POST['haberDolFTrans'];
if ($debeFTrans!='' and $debeDolFTrans!='') {
	$debeDolFTrans=$debeFTrans/$var;
   $debeFTrans= $debeDolFTrans *$var;
}

if ($haberFTrans!='' and $haberDolFTrans!='') {
	$haberDolFTrans=$haberFTrans/$var;
   $haberFTrans= $haberDolFTrans *$var;
}

$ObsTHD=$_POST['ObsTHD'];
$debeTHD=$_POST['debeTHD'];
$haberTHD=$_POST['haberTHD'];
$debeDolTHD=$_POST['debeDolTHD'];
$haberDolTHD=$_POST['haberDolTHD'];
if ($debeTHD!='' and $debeDolTHD!='') {
	$debeDolTHD=$debeTHD/$var;
   $debeTHD= $debeDolTHD * $var;
}

if ($haberTHD!='' and $haberDolTHD!='') {
	$haberDolTHD=$haberTHD/$var;
   $haberTHD= $haberDolTHD * $var;
}

$ObsEDS=$_POST['ObsEDS'];
$debeEDS=$_POST['debeEDS'];
$haberEDS=$_POST['haberEDS'];
$debeDolEDS=$_POST['debeDolEDS'];
$haberDolEDS=$_POST['haberDolEDS'];
if ($debeEDS!='' and $debeDolEDS!='') {
	$debeDolEDS=$debeEDS/$var;
   $debeEDS= $debeDolEDS * $var;
}

if ($haberEDS!='' and $haberDolEDS!='') {
	$haberDolEDS=$haberEDS/$var;
   $haberEDS= $haberDolEDS * $var;
}

$ObsCG=$_POST['ObsCG'];
$debeCG=$_POST['debeCG'];
$haberCG=$_POST['haberCG']; 
$debeDolCG=$_POST['debeDolCG']; 
$haberDolCG=$_POST['haberDolCG']; 
if ($debeCG!='' and $debeDolCG!='') {
	$debeDolCG=$debeCG/$var;
   $debeCG= $debeDolCG * $var;
}

if ($haberCG!='' and $haberDolCG!='') {
	$haberDolCG=$haberCG/$var;
   $haberCG= $haberDolCG * $var;
}

$ObsEDS=$_POST['ObsEDS']; 
$debeEDS=$_POST['debeEDS']; 
$haberEDS=$_POST['haberEDS']; 
$debeDolEDS=$_POST['debeDolEDS'];
$haberDolEDS=$_POST['haberDolEDS']; 

if ($debeEDS!='' and $debeDolEDS!='') {
	$debeDolEDS=$debeEDS/$var;
   $debeEDS= $debeDolEDS * $var;
}

if ($haberEDS!='' and $haberDolEDS!='') {
	$haberDolEDS=$haberEDS/$var;
   $haberEDS= $haberDolEDS * $var;
}


$ObsTHD=$_POST['ObsTHD'];
$debeTHD=$_POST['debeTHD']; 	
$haberTHD=$_POST['haberTHD']; 
$debeDolTHD=$_POST['debeDolTHD']; 
$haberDolTHD=$_POST['haberDolTHD'];
if ($debeTHD!='' and $debeDolTHD!='') {
	$debeDolTHD=$debeTHD/$var;
   $debeTHD= $debeDolTHD * $var;
}

if ($haberTHD!='' and $haberDolTHD!='') {
	$haberDolTHD=$haberTHD/$var;
   $haberTHD= $haberDolTHD * $var;
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
?>