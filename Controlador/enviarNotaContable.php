<?php
require('../modelo/conexion.php');

/*/$id_nc=$_POST['id'];
$deAT=$_POST['deAT'];
$debeAT=$_POST['debeAT'];
$haberAT=$_POST['haberAT'];
$debeDolAT=$_POST['debeDolAT'];
$haberDolAT=$_POST['haberDolAT'];
$deFTrans=$_POST['deFTrans'];
$debeFTrans=$_POST['debeFTrans'];
$haberFTrans=$_POST['haberFTrans'];
$debeDolFTrans=$_POST['debeDolFTrans'];
$haberDolFTrans=$_POST['haberDolFTrans'];
$deCP=$_POST['deCP'];
$debeCP=$_POST['debeCP'];
$haberCP=$_POST['haberCP'];
$debeDolCP=$_POST['debeDolCP'];
$haberDolCP=$_POST['haberDolCP'];
$deOtro=$_POST['deOtro'];
$debeOtro=$_POST['debeOtro'];
$haberOtro=$_POST['haberOtro'];
$debeDolOtro=$_POST['debeDolOtro'];
$haberDolOtro=$_POST['haberDolOtro'];
*/
$id_carga=$_POST['id'];

$ObsAC=$_POST['ObsAC'];
$debeAC=$_POST['debeAC'];
$haberAC=$_POST['haberAC'];
$debeDolAC=$_POST['debeDolAC'];
$haberDolAC=$_POST['haberDolAC'];

if ($debeAC!='' and $debeDolAC=='') {
	$debeDolAC=$debeAC/6.91;
}elseif($debeAC=='' and $debeDolAC!=''){
   $debeAC= $debeDolAC * 6.91;
}

if ($haberAC!='' and $haberDolAC=='') {
	$haberDolAC=$haberAC/6.91;
}elseif($haberAC=='' and $haberDolAC!=''){
   $haberAC= $haberDolAC * 6.91;
}


$ObsAT=$_POST['ObsAT'];
$ObsFT=$_POST['ObsFT'];

$ObsL=$_POST['ObsL'];
$debeL=$_POST['debeL'];
$haberL=$_POST['haberL'];
$debeDolL=$_POST['debeDolL'];
$haberDolL=$_POST['haberDolL'];

if ($debeL!='' and $debeDolL=='') {
	$debeDolL=$debeL/6.91;
}elseif($debeL=='' and $debeDolL!=''){
   $debeL= $debeDolL * 6.91;
}

if ($haberL!='' and $haberDolL=='') {
	$haberDolL=$haberL/6.91;
}elseif($haberL=='' and $haberDolL!=''){
   $haberL= $haberDolL * 6.91;
}


$obsFT=$_POST['ObsFT'];
$debeFT=$_POST['debeFT'];
$haberFT=$_POST['haberFT'];
$debeDolFT=$_POST['debeDolFT'];
$haberDolFT=$_POST['haberDolFT'];

if ($debeFT!='' and $debeDolFT=='') {
	$debeDolFT=$debeFT/6.91;
}elseif($debeFT=='' and $debeDolFT!=''){
   $debeFT= $debeDolFT * 6.91;
}

if ($haberFT!='' and $haberDolFT=='') {
	$haberDolFT=$haberFT/6.91;
}elseif($haberFT=='' and $haberDolFT!=''){
   $haberFT= $haberDolFT * 6.91;
}

$ObsTHC=$_POST['ObsTHC'];
$debeTHC=$_POST['debeTHC'];
$haberTHC=$_POST['haberTHC'];
$debeDolTHC=$_POST['debeDolTHC'];
$haberDolTHC=$_POST['haberDolTHC'];

if ($debeTHC!='' and $debeDolTHC=='') {
	$debeDolTHC=$debeTHC/6.91;
}elseif($debeTHC=='' and $debeDolTHC!=''){
   $debeTHC= $debeDolTHC * 6.91;
}

if ($haberTHC!='' and $haberDolTHC=='') {
	$haberDolTHC=$haberTHC/6.91;
}elseif($haberTHC=='' and $haberDolTHC!=''){
   $haberTHC= $haberDolTHC * 6.91;
}

$ObsC=$_POST['ObsC'];
$debeC=$_POST['debeC'];
$haberC=$_POST['haberC'];
$debeDolC=$_POST['debeDolC'];
$haberDolC=$_POST['haberDolC'];

if ($debeC!='' and $debeDolC=='') {
	$debeDolC=$debeC/6.91;
}elseif($debeC=='' and $debeDolC!=''){
   $debeC= $debeDolC * 6.91;
}

if ($haberC!='' and $haberDolC=='') {
	$haberDolC=$haberC/6.91;
}elseif($haberC=='' and $haberDolC!=''){
   $haberC= $haberDolC * 6.91;
}

$ObsEDF=$_POST['ObsEDF'];
$debeEDF=$_POST['debeEDF'];
$haberEDF=$_POST['haberEDF'];
$debeDolEDF=$_POST['debeDolEDF'];
$haberDolEDF=$_POST['haberDolEDF'];

if ($debeEDF!='' and $debeDolEDF=='') {
	$debeDolEDF=$debeEDF/6.91;
}elseif($debeEDF=='' and $debeDolEDF!=''){
   $debeEDF= $debeDolEDF * 6.91;
}

if ($haberEDF!='' and $haberDolEDF=='') {
	$haberDolEDF=$haberEDF/6.91;
}elseif($haberEDF=='' and $haberDolEDF!=''){
   $haberEDF= $haberDolEDF * 6.91;
}

$ObsGI=$_POST['ObsGI'];
$debeGI=$_POST['debeGI'];
$haberGI=$_POST['haberGI'];
$debeDolGI=$_POST['debeDolGI'];
$haberDolGI=$_POST['haberDolGI'];

if ($debeGI!='' and $debeDolGI=='') {
	$debeDolGI=$debeGI/6.91;
}elseif($debeGI=='' and $debeDolGI!=''){
   $debeGI= $debeDolGI * 6.91;
}

if ($haberGI!='' and $haberDolGI=='') {
	$haberDolGI=$haberGI/6.91;
}elseif($haberGI=='' and $haberDolGI!=''){
   $haberGI= $haberDolGI * 6.91;
}

$ObsGO=$_POST['ObsGO'];
$debeGO=$_POST['debeGO'];
$haberGO=$_POST['haberGO'];
$debeDolGO=$_POST['debeDolGO'];
$haberDolGO=$_POST['haberDolGO'];

if ($debeGO!='' and $debeDolGO=='') {
	$debeDolGO=$debeGO/6.91;
}elseif($debeGO=='' and $debeDolGO!=''){
   $debeGO= $debeDolGO * 6.91;
}

if ($haberGO!='' and $haberDolGO=='') {
	$haberDolGO=$haberGO/6.91;
}elseif($haberGO=='' and $haberDolGO!=''){
   $haberGO= $haberDolGO * 6.91;
}

$ObsTD=$_POST['ObsTD'];
$debeTD=$_POST['debeTD'];
$haberTD=$_POST['haberTD'];
$debeDolTD=$_POST['debeDolTD'];
$haberDolTD=$_POST['haberDolTD'];
if ($debeTD!='' and $debeDolTD=='') {
	$debeDolTD=$debeTD/6.91;
}elseif($debeTD=='' and $debeDolTD!=''){
   $debeTD= $debeDolTD * 6.91;
}

if ($haberTD!='' and $haberDolTD=='') {
	$haberDolTD=$haberTD/6.91;
}elseif($haberTD=='' and $haberDolTD!=''){
   $haberTD= $haberDolTD * 6.91;
}
$ObsPCont=$_POST['ObsPCont'];
$debePCont=$_POST['debePCont'];
$haberPCont=$_POST['haberPCont'];
$debeDolPCont=$_POST['debeDolPCont'];
$haberDolPCont=$_POST['haberDolPCont'];
if ($debePCont!='' and $debeDolPCont=='') {
	$debeDolPCont=$debePCont/6.91;
}elseif($debePCont=='' and $debeDolPCont!=''){
   $debePCont= $debeDolPCont * 6.91;
}

if ($haberPCont!='' and $haberDolPCont=='') {
	$haberDolPCont=$haberPCont/6.91;
}elseif($haberPCont=='' and $haberDolPCont!=''){
   $haberPCont= $haberDolPCont * 6.91;
}
$ObsDC=$_POST['ObsDC'];
$debeDC=$_POST['debeDC'];
$haberDC=$_POST['haberDC'];
$debeDolDC=$_POST['debeDolDC'];
$haberDolDC=$_POST['haberDolDC'];
if ($debeDC!='' and $debeDolDC=='') {
	$debeDolDC=$debeDC/6.91;
}elseif($debeDC=='' and $debeDolDC!=''){
   $debeDC= $debeDolDC * 6.91;
}

if ($haberDC!='' and $haberDolDC=='') {
	$haberDolDC=$haberDC/6.91;
}elseif($haberDC=='' and $haberDolDC!=''){
   $haberDC= $haberDolDC * 6.91;
}
$ObsG=$_POST['ObsG'];
$debeG=$_POST['debeG'];
$haberG=$_POST['haberG'];
$debeDolG=$_POST['debeDolG'];
$haberDolG=$_POST['haberDolG'];
if ($debeG!='' and $debeDolG=='') {
	$debeDolG=$debeG/6.91;
}elseif($debeG=='' and $debeDolG!=''){
   $debeG= $debeDolG * 6.91;
}

if ($haberG!='' and $haberDolG=='') {
	$haberDolG=$haberG/6.91;
}elseif($haberG=='' and $haberDolG!=''){
   $haberG= $haberDolG * 6.91;
}
$ObsA=$_POST['ObsA'];
$debeA=$_POST['debeA'];
$haberA=$_POST['haberA'];
$debeDolA=$_POST['debeDolA'];
$haberDolA=$_POST['haberDolA'];
if ($debeA!='' and $debeDolA=='') {
	$debeDolA=$debeA/6.91;
}elseif($debeA=='' and $debeDolA!=''){
   $debeA= $debeDolA * 6.91;
}

if ($haberA!='' and $haberDolA=='') {
	$haberDolA=$haberA/6.91;
}elseif($haberA=='' and $haberDolA!=''){
   $haberA= $haberDolA * 6.91;
}
$ObsPC=$_POST['ObsPC'];
$debePC=$_POST['debePC'];
$haberPC=$_POST['haberPC'];
$debeDolPC=$_POST['debeDolPC'];
$haberDolPC=$_POST['haberDolPC'];

if ($debePC!='' and $debeDolPC=='') {
	$debeDolPC=$debePC/6.91;
}elseif($debePC=='' and $debeDolPC!=''){
   $debePC= $debeDolPC * 6.91;
}

if ($haberPC!='' and $haberDolPC=='') {
	$haberDolPC=$haberPC/6.91;
}elseif($haberPC=='' and $haberDolPC!=''){
   $haberPC= $haberDolPC * 6.91;
}


$ObsDP=$_POST['ObsDP'];
$debeDP=$_POST['debeDP'];
$haberDP=$_POST['haberDP'];
$debeDolDP=$_POST['debeDolDP'];
$haberDolDP=$_POST['haberDolDP'];

if ($debeDP!='' and $debeDolDP=='') {
	$debeDolDP=$debeDP/6.91;
}elseif($debeDP=='' and $debeDolDP!=''){
   $debeDP= $debeDolDP * 6.91;
}

if ($haberDP!='' and $haberDolDP=='') {
	$haberDolDP=$haberDP/6.91;
}elseif($haberDP=='' and $haberDolDP!=''){
   $haberDP= $haberDolDP * 6.91;
}

$ObsPAA=$_POST['ObsPAA'];
$debePAA=$_POST['debePAA'];
$haberPAA=$_POST['haberPAA'];
$debeDolPAA=$_POST['debeDolPAA'];
$haberDolPAA=$_POST['haberDolPAA'];

if ($debePAA!='' and $debeDolPAA=='') {
	$debeDolPAA=$debePAA/6.91;
}elseif($debePAA=='' and $debeDolPAA!=''){
   $debePAA= $debeDolPAA * 6.91;
}

if ($haberPAA!='' and $haberDolPAA=='') {
	$haberDolPAA=$haberPAA/6.91;
}elseif($haberPAA=='' and $haberDolPAA!=''){
   $haberPAA= $haberDolPAA * 6.91;
}

$ObsAlm=$_POST['ObsAlm'];
$debeAlm=$_POST['debeAlm'];
$haberAlm=$_POST['haberAlm'];
$debeDolAlm=$_POST['debeDolAlm'];
$haberDolAlm=$_POST['haberDolAlm'];

if ($debeAlm!='' and $debeDolAlm=='') {
	$debeDolAlm=$debeAlm/6.91;
}elseif($debeAlm=='' and $debeDolAlm!=''){
   $debeAlm= $debeDolAlm * 6.91;
}

if ($haberAlm!='' and $haberDolAlm=='') {
	$haberDolAlm=$haberAlm/6.91;
}elseif($haberAlm=='' and $haberDolAlm!=''){
   $haberAlm= $haberDolAlm * 6.91;
}

$ObsTra=$_POST['ObsTra'];
$debeTra=$_POST['debeTra'];
$haberTra=$_POST['haberTra'];
$debeDolTra=$_POST['debeDolTra'];
$haberDolTra=$_POST['haberDolTra'];

if ($debeTra!='' and $debeDolTra=='') {
	$debeDolTra=$debeTra/6.91;
}elseif($debeTra=='' and $debeDolTra!=''){
   $debeTra= $debeDolTra * 6.91;
}

if ($haberTra!='' and $haberDolTra=='') {
	$haberDolTra=$haberTra/6.91;
}elseif($haberTra=='' and $haberDolTra!=''){
   $haberTra= $haberDolTra * 6.91;
}


$ObsEst=$_POST['ObsEst'];
$debeEst=$_POST['debeEst'];
$haberEst=$_POST['haberEst'];
$debeDolEst=$_POST['debeDolEst'];	
$haberDolEst=$_POST['haberDolEst'];
if ($debeEst!='' and $debeDolEst=='') {
	$debeDolEst=$debeEst/6.91;
}elseif($debeEst=='' and $debeDolEst!=''){
   $debeEst= $debeDolEst * 6.91;
}

if ($haberEst!='' and $haberDolEst=='') {
	$haberDolEst=$haberEst/6.91;
}elseif($haberEst=='' and $haberDolEst!=''){
   $haberEst= $haberDolEst * 6.91;
}

$ObsOtro=$_POST['ObsOtros'];
$debeOtro=$_POST['debeOtros'];
$haberOtro=$_POST['debeOtros'];
$debeDolOtro=$_POST['debeDolOtros'];
$haberDolOtro=$_POST['haberDolOtros'];
if ($debeOtro!='' and $debeDolOtro=='') {
	$debeDolOtro=$debeOtro/6.91;
}elseif($debeOtro=='' and $debeDolOtro!=''){
   $debeOtro= $debeDolOtro * 6.91;
}

if ($haberOtro!='' and $haberDolOtro=='') {
	$haberDolOtro=$haberOtro/6.91;
}elseif($haberOtro=='' and $haberDolOtro!=''){
   $haberOtro= $haberDolOtro * 6.91;
}

$ObsCC=$_POST['ObsCC'];
$debeCC=$_POST['debeCC'];
$haberCC=$_POST['haberCC'];
$debeDolCC=$_POST['debeDolCC'];
$haberDolCC=$_POST['haberDolCC'];
if ($debeCC!='' and $debeDolCC=='') {
	$debeDolCC=$debeCC/6.91;
}elseif($debeCC=='' and $debeDolCC!=''){
   $debeCC= $debeDolCC * 6.91;
}

if ($haberCC!='' and $haberDolCC=='') {
	$haberDolCC=$haberCC/6.91;
}elseif($haberCC=='' and $haberDolCC!=''){
   $haberCC= $haberDolCC * 6.91;
}


$ObsFTrans=$_POST['ObsFTrans'];
$debeFTrans=$_POST['debeFTrans'];
$haberFTrans=$_POST['haberFTrans'];
$debeDolFTrans=$_POST['debeDolFTrans'];
$haberDolFTrans=$_POST['haberDolFTrans'];
if ($debeFTrans!='' and $debeDolFTrans=='') {
	$debeDolFTrans=$debeFTrans/6.91;
}elseif($debeFTrans=='' and $debeDolFTrans!=''){
   $debeFTrans= $debeDolFTrans * 6.91;
}

if ($haberFTrans!='' and $haberDolFTrans=='') {
	$haberDolFTrans=$haberFTrans/6.91;
}elseif($haberFTrans=='' and $haberDolFTrans!=''){
   $haberFTrans= $haberDolFTrans * 6.91;
}

$ObsTHD=$_POST['ObsTHD'];
$debeTHD=$_POST['debeTHD'];
$haberTHD=$_POST['haberTHD'];
$debeDolTHD=$_POST['debeDolTHD'];
$haberDolTHD=$_POST['haberDolTHD'];
if ($debeTHD!='' and $debeDolTHD=='') {
	$debeDolTHD=$debeTHD/6.91;
}elseif($debeTHD=='' and $debeDolTHD!=''){
   $debeTHD= $debeDolTHD * 6.91;
}

if ($haberTHD!='' and $haberDolTHD=='') {
	$haberDolTHD=$haberTHD/6.91;
}elseif($haberTHD=='' and $haberDolTHD!=''){
   $haberTHD= $haberDolTHD * 6.91;
}

$ObsEDS=$_POST['ObsEDS'];
$debeEDS=$_POST['debeEDS'];
$haberEDS=$_POST['haberEDS'];
$debeDolEDS=$_POST['debeDolEDS'];
$haberDolEDS=$_POST['haberDolEDS'];
if ($debeEDS!='' and $debeDolEDS=='') {
	$debeDolEDS=$debeEDS/6.91;
}elseif($debeEDS=='' and $debeDolEDS!=''){
   $debeEDS= $debeDolEDS * 6.91;
}

if ($haberEDS!='' and $haberDolEDS=='') {
	$haberDolEDS=$haberEDS/6.91;
}elseif($haberEDS=='' and $haberDolEDS!=''){
   $haberEDS= $haberDolEDS * 6.91;
}

$ObsCG=$_POST['ObsCG'];
$debeCG=$_POST['debeCG'];
$haberCG=$_POST['haberCG']; 
$debeDolCG=$_POST['debeDolCG']; 
$haberDolCG=$_POST['haberDolCG']; 
if ($debeCG!='' and $debeDolCG=='') {
	$debeDolCG=$debeCG/6.91;
}elseif($debeCG=='' and $debeDolCG!=''){
   $debeCG= $debeDolCG * 6.91;
}

if ($haberCG!='' and $haberDolCG=='') {
	$haberDolCG=$haberCG/6.91;
}elseif($haberCG=='' and $haberDolCG!=''){
   $haberCG= $haberDolCG * 6.91;
}

$ObsEDS=$_POST['ObsEDS']; 
$debeEDS=$_POST['debeEDS']; 
$haberEDS=$_POST['haberEDS']; 
$debeDolEDS=$_POST['debeDolEDS'];
$haberDolEDS=$_POST['haberDolEDS']; 

if ($debeEDS!='' and $debeDolEDS=='') {
	$debeDolEDS=$debeEDS/6.91;
}elseif($debeEDS=='' and $debeDolEDS!=''){
   $debeEDS= $debeDolEDS * 6.91;
}

if ($haberEDS!='' and $haberDolEDS=='') {
	$haberDolEDS=$haberEDS/6.91;
}elseif($haberEDS=='' and $haberDolEDS!=''){
   $haberEDS= $haberDolEDS * 6.91;
}



$ObsTHD=$_POST['ObsTHD'];
$debeTHD=$_POST['debeTHD']; 
$haberTHD=$_POST['haberTHD']; 
$debeDolTHD=$_POST['debeDolTHD']; 
$haberDolTHD=$_POST['haberDolTHD'];
if ($debeTHD!='' and $debeDolTHD=='') {
	$debeDolTHD=$debeTHD/6.91;
}elseif($debeTHD=='' and $debeDolTHD!=''){
   $debeTHD= $debeDolTHD * 6.91;
}

if ($haberTHD!='' and $haberDolTHD=='') {
	$haberDolTHD=$haberTHD/6.91;
}elseif($haberTHD=='' and $haberDolTHD!=''){
   $haberTHD= $haberDolTHD * 6.91;
}


$ObsCP=$_POST['ObsCP'];
/*$ObsOtro2=$_POST['ObsOtros2'];
$debeOtro2=$_POST['debeOtros2'];
$haberOtro2=$_POST['debeOtros2'];
$debeDolOtro2=$_POST['debeDolOtros2'];
$haberDolOtro2=$_POST['haberDolOtros2'];*/
//

//
$query = "INSERT INTO notacontables (
ObsAC, debeAC, haberAC, debeDolAC, haberDolAC, 
ObsAT, 
ObsFT, debeFT, haberFT, debeDolFT, haberDolFT, 
ObsL, debeL, haberL, debeDolL, haberDolL, 
ObsTHC, debeTHC, haberTHC, debeDolTHC, haberDolTHC, 
ObsC, debeC, haberC, debeDolC, haberDolC, 
ObsEDF, debeEDF, haberEDF, debeDolEDF, haberDolEDF, 
ObsGI, debeGI, haberGI, debeDolGI, haberDolGI, 
ObsGO, debeGO, haberGO, debeDolGO, haberDolGO, 
ObsTD, debeTD, haberTD, debeDolTD, haberDolTD, 
ObsPCont, debePCont, debeDolPCont, haberDolPCont, 
ObsDC, debeDC, haberDC, debeDolDC, haberDolDC, 
ObsG, debeG, haberG, debeDolG, haberDolG, 
ObsA, debeA, haberA, debeDolA, haberDolA, 
ObsPC, debePC, haberPC, debeDolPC, haberDolPC, 
ObsDP, debeDP, haberDP, debeDolDP, haberDolDP, 
ObsPAA, debePAA, haberPAA, debeDolPAA, haberDolPAA, 
ObsAlm, debeAlm, haberAlm, debeDolAlm, haberDolAlm, 
ObsTra, debeTra, haberTra, debeDolTra, haberDolTra, 
obsEst, debeEst, haberEst, debeDolEst, haberDolEst,
ObsOtro,
subToDebe, subToHaber, subToDebeDol, subToHaberDol, 
TotalBol, TotalDol, 
haberPCont,
ObsCC, debeCC, haberCC, debeDolCC, haberDolCC, 
ObsFTrans,
ObsCG, debeCG, haberCG, debeDolCG, haberDolCG, 
ObsEDS, debeEDS, haberEDS, debeDolEDS, haberDolEDS, 
ObsTHD, debeTHD, haberTHD, debeDolTHD, haberDolTHD,
ObsCP, id_carga) VALUES 
('$ObsAC', '$debeAC', '$haberAC', '$debeDolAC', '$haberDolAC',
'$ObsAT',
'$ObsFT', '$debeFT', '$haberFT','$debeDolFT', '$haberDolFT',
'$ObsL', '$debeL', '$haberL', '$debeDolL', '$haberDolL',
'$ObsTHC','$debeTHC','$haberTHC','$debeDolTHC','$haberDolTHC',
'$ObsC', '$debeC', '$haberC', '$debeDolC', '$haberDolC',
'$ObsEDF', '$debeEDF', '$haberEDF','$debeDolEDF', '$haberDolEDF',
'$ObsGI', '$debeGI', '$haberGI', '$debeDolGI', '$haberDolGI',
'$ObsGO', '$debeGO', '$haberGO', '$debeDolGO', '$haberDolGO',
'$ObsTD', '$debeTD', '$haberTD', '$debeDolTD', '$haberDolTD',
'$ObsPCont', '$debePCont', '$debeDolPCont', '$haberDolPCont',
'$ObsDC', '$debeDC', '$haberDC', '$debeDolDC','$haberDolDC',
'$ObsG', '$debeG', '$haberG', '$debeDolG', '$haberDolG',
'$ObsA', '$debeA', '$haberA', '$debeDolA', '$haberDolA',
'$ObsPC', '$debePC', '$haberPC', '$debeDolPC', '$haberDolPC',
'$ObsDP', '$debeDP','$haberDP', '$debeDolDP', '$haberDolDP',
'$ObsPAA', '$debePAA', '$haberPAA', '$debeDolPAA', '$haberDolPAA',
'$ObsAlm', '$debeAlm', '$haberAlm', '$debeDolAlm', '$haberDolAlm',
'$ObsTra', '$debeTra','$haberTra', '$debeDolTra', '$haberDolTra',
'$ObsEst', '$debeEst','$haberEst', '$debeDolEst','$haberDolEst',
'$ObsOtro',
NULL, NULL, NULL, NULL,
NULL, NULL,
'$haberPCont',
'$ObsCC', '$debeCC', '$haberCC', '$debeDolCC', '$haberDolCC',
'$ObsFTrans',
'$ObsCG', '$debeCG', '$haberCG', '$debeDolCG', '$haberDolCG',
'$ObsEDS', '$debeEDS', '$haberEDS', '$debeDolEDS', '$haberDolEDS',
'$ObsTHD', '$debeTHD', '$haberTHD', '$debeDolTHD', '$haberDolTHD',
'$ObsCP', '$id_carga')";

//

//$query2="insert into cargas (id_notacontable) values ('$id_notacontable')";
//
if($conexion->query($query)===true /*&& $conexion->query($query2)===true */){
	header("location: Formulario.php");
}else{
	die('error al insertar datos '.$conexion->error);
}
?>