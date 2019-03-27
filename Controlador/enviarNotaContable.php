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
$var=6.91;
$id_carga=$_POST['id'];

$ObsAC=$_POST['ObsAC'];
$debeAC=$_POST['debeAC'];
$haberAC=$_POST['haberAC'];
$debeDolAC=$_POST['debeDolAC'];
$haberDolAC=$_POST['haberDolAC'];

if ($debeAC!='' and $debeDolAC=='') {
	$debeDolAC=$debeAC/$var;
}elseif($debeAC=='' and $debeDolAC!=''){
   $debeAC= $debeDolAC * $var;
}

if ($haberAC!='' and $haberDolAC=='') {
	$haberDolAC=$haberAC/$var;
}elseif($haberAC=='' and $haberDolAC!=''){
   $haberAC= $haberDolAC * $var;
}


$ObsAT=$_POST['ObsAT'];
$ObsFT=$_POST['ObsFT'];

$ObsL=$_POST['ObsL'];
$debeL=$_POST['debeL'];
$haberL=$_POST['haberL'];
$debeDolL=$_POST['debeDolL'];
$haberDolL=$_POST['haberDolL'];

if ($debeL!='' and $debeDolL=='') {
	$debeDolL=$debeL/$var;
}elseif($debeL=='' and $debeDolL!=''){
   $debeL= $debeDolL * $var;
}

if ($haberL!='' and $haberDolL=='') {
	$haberDolL=$haberL/$var;
}elseif($haberL=='' and $haberDolL!=''){
   $haberL= $haberDolL * $var;
}


$obsFT=$_POST['ObsFT'];
$debeFT=$_POST['debeFT'];
$haberFT=$_POST['haberFT'];
$debeDolFT=$_POST['debeDolFT'];
$haberDolFT=$_POST['haberDolFT'];

if ($debeFT!='' and $debeDolFT=='') {
	$debeDolFT=$debeFT/$var;
}elseif($debeFT=='' and $debeDolFT!=''){
   $debeFT= $debeDolFT * $var;
}

if ($haberFT!='' and $haberDolFT=='') {
	$haberDolFT=$haberFT/$var;
}elseif($haberFT=='' and $haberDolFT!=''){
   $haberFT= $haberDolFT * $var;
}

$ObsTHC=$_POST['ObsTHC'];
$debeTHC=$_POST['debeTHC'];
$haberTHC=$_POST['haberTHC'];
$debeDolTHC=$_POST['debeDolTHC'];
$haberDolTHC=$_POST['haberDolTHC'];

if ($debeTHC!='' and $debeDolTHC=='') {
	$debeDolTHC=$debeTHC/$var;
}elseif($debeTHC=='' and $debeDolTHC!=''){
   $debeTHC= $debeDolTHC * $var;
}

if ($haberTHC!='' and $haberDolTHC=='') {
	$haberDolTHC=$haberTHC/$var;
}elseif($haberTHC=='' and $haberDolTHC!=''){
   $haberTHC= $haberDolTHC * $var;
}

$ObsC=$_POST['ObsC'];
$debeC=$_POST['debeC'];
$haberC=$_POST['haberC'];
$debeDolC=$_POST['debeDolC'];
$haberDolC=$_POST['haberDolC'];

if ($debeC!='' and $debeDolC=='') {
	$debeDolC=$debeC/$var;
}elseif($debeC=='' and $debeDolC!=''){
   $debeC= $debeDolC * $var;
}

if ($haberC!='' and $haberDolC=='') {
	$haberDolC=$haberC/$var;
}elseif($haberC=='' and $haberDolC!=''){
   $haberC= $haberDolC * $var;
}

$ObsEDF=$_POST['ObsEDF'];
$debeEDF=$_POST['debeEDF'];
$haberEDF=$_POST['haberEDF'];
$debeDolEDF=$_POST['debeDolEDF'];
$haberDolEDF=$_POST['haberDolEDF'];

if ($debeEDF!='' and $debeDolEDF=='') {
	$debeDolEDF=$debeEDF/$var;
}elseif($debeEDF=='' and $debeDolEDF!=''){
   $debeEDF= $debeDolEDF * $var;
}

if ($haberEDF!='' and $haberDolEDF=='') {
	$haberDolEDF=$haberEDF/$var;
}elseif($haberEDF=='' and $haberDolEDF!=''){
   $haberEDF= $haberDolEDF * $var;
}

$ObsGI=$_POST['ObsGI'];
$debeGI=$_POST['debeGI'];
$haberGI=$_POST['haberGI'];
$debeDolGI=$_POST['debeDolGI'];
$haberDolGI=$_POST['haberDolGI'];

if ($debeGI!='' and $debeDolGI=='') {
	$debeDolGI=$debeGI/$var;
}elseif($debeGI=='' and $debeDolGI!=''){
   $debeGI= $debeDolGI * $var;
}

if ($haberGI!='' and $haberDolGI=='') {
	$haberDolGI=$haberGI/$var;
}elseif($haberGI=='' and $haberDolGI!=''){
   $haberGI= $haberDolGI * $var;
}

$ObsGO=$_POST['ObsGO'];
$debeGO=$_POST['debeGO'];
$haberGO=$_POST['haberGO'];
$debeDolGO=$_POST['debeDolGO'];
$haberDolGO=$_POST['haberDolGO'];

if ($debeGO!='' and $debeDolGO=='') {
	$debeDolGO=$debeGO/$var;
}elseif($debeGO=='' and $debeDolGO!=''){
   $debeGO= $debeDolGO * $var;
}

if ($haberGO!='' and $haberDolGO=='') {
	$haberDolGO=$haberGO/$var;
}elseif($haberGO=='' and $haberDolGO!=''){
   $haberGO= $haberDolGO * $var;
}

$ObsTD=$_POST['ObsTD'];
$debeTD=$_POST['debeTD'];
$haberTD=$_POST['haberTD'];
$debeDolTD=$_POST['debeDolTD'];
$haberDolTD=$_POST['haberDolTD'];
if ($debeTD!='' and $debeDolTD=='') {
	$debeDolTD=$debeTD/$var;
}elseif($debeTD=='' and $debeDolTD!=''){
   $debeTD= $debeDolTD * $var;
}

if ($haberTD!='' and $haberDolTD=='') {
	$haberDolTD=$haberTD/$var;
}elseif($haberTD=='' and $haberDolTD!=''){
   $haberTD= $haberDolTD * $var;
}
$ObsPCont=$_POST['ObsPCont'];
$debePCont=$_POST['debePCont'];
$haberPCont=$_POST['haberPCont'];
$debeDolPCont=$_POST['debeDolPCont'];
$haberDolPCont=$_POST['haberDolPCont'];
if ($debePCont!='' and $debeDolPCont=='') {
	$debeDolPCont=$debePCont/$var;
}elseif($debePCont=='' and $debeDolPCont!=''){
   $debePCont= $debeDolPCont * $var;
}

if ($haberPCont!='' and $haberDolPCont=='') {
	$haberDolPCont=$haberPCont/$var;
}elseif($haberPCont=='' and $haberDolPCont!=''){
   $haberPCont= $haberDolPCont * $var;
}
$ObsDC=$_POST['ObsDC'];
$debeDC=$_POST['debeDC'];
$haberDC=$_POST['haberDC'];
$debeDolDC=$_POST['debeDolDC'];
$haberDolDC=$_POST['haberDolDC'];
if ($debeDC!='' and $debeDolDC=='') {
	$debeDolDC=$debeDC/$var;
}elseif($debeDC=='' and $debeDolDC!=''){
   $debeDC= $debeDolDC * $var;
}

if ($haberDC!='' and $haberDolDC=='') {
	$haberDolDC=$haberDC/$var;
}elseif($haberDC=='' and $haberDolDC!=''){
   $haberDC= $haberDolDC *$var1;
}
$ObsG=$_POST['ObsG'];
$debeG=$_POST['debeG'];
$haberG=$_POST['haberG'];
$debeDolG=$_POST['debeDolG'];
$haberDolG=$_POST['haberDolG'];
if ($debeG!='' and $debeDolG=='') {
	$debeDolG=$debeG/$var;
}elseif($debeG=='' and $debeDolG!=''){
   $debeG= $debeDolG * $var;
}

if ($haberG!='' and $haberDolG=='') {
	$haberDolG=$haberG/$var;
}elseif($haberG=='' and $haberDolG!=''){
   $haberG= $haberDolG * $var;
}
$ObsA=$_POST['ObsA'];
$debeA=$_POST['debeA'];
$haberA=$_POST['haberA'];
$debeDolA=$_POST['debeDolA'];
$haberDolA=$_POST['haberDolA'];
if ($debeA!='' and $debeDolA=='') {
	$debeDolA=$debeA/$var;
}elseif($debeA=='' and $debeDolA!=''){
   $debeA= $debeDolA * $var;
}

if ($haberA!='' and $haberDolA=='') {
	$haberDolA=$haberA/$var;
}elseif($haberA=='' and $haberDolA!=''){
   $haberA= $haberDolA * $var;
}
$ObsPC=$_POST['ObsPC'];
$debePC=$_POST['debePC'];
$haberPC=$_POST['haberPC'];
$debeDolPC=$_POST['debeDolPC'];
$haberDolPC=$_POST['haberDolPC'];

if ($debePC!='' and $debeDolPC=='') {
	$debeDolPC=$debePC/$var;
}elseif($debePC=='' and $debeDolPC!=''){
   $debePC= $debeDolPC * $var;
}

if ($haberPC!='' and $haberDolPC=='') {
	$haberDolPC=$haberPC/$var;
}elseif($haberPC=='' and $haberDolPC!=''){
   $haberPC= $haberDolPC * $var;
}


$ObsDP=$_POST['ObsDP'];
$debeDP=$_POST['debeDP'];
$haberDP=$_POST['haberDP'];
$debeDolDP=$_POST['debeDolDP'];
$haberDolDP=$_POST['haberDolDP'];

if ($debeDP!='' and $debeDolDP=='') {
	$debeDolDP=$debeDP/$var;
}elseif($debeDP=='' and $debeDolDP!=''){
   $debeDP= $debeDolDP * $var;
}

if ($haberDP!='' and $haberDolDP=='') {
	$haberDolDP=$haberDP/$var;
}elseif($haberDP=='' and $haberDolDP!=''){
   $haberDP= $haberDolDP * $var;
}

$ObsPAA=$_POST['ObsPAA'];
$debePAA=$_POST['debePAA'];
$haberPAA=$_POST['haberPAA'];
$debeDolPAA=$_POST['debeDolPAA'];
$haberDolPAA=$_POST['haberDolPAA'];

if ($debePAA!='' and $debeDolPAA=='') {
	$debeDolPAA=$debePAA/$var;
}elseif($debePAA=='' and $debeDolPAA!=''){
   $debePAA= $debeDolPAA * $var;
}

if ($haberPAA!='' and $haberDolPAA=='') {
	$haberDolPAA=$haberPAA/$var;
}elseif($haberPAA=='' and $haberDolPAA!=''){
   $haberPAA= $haberDolPAA * $var;
}

$ObsAlm=$_POST['ObsAlm'];
$debeAlm=$_POST['debeAlm'];
$haberAlm=$_POST['haberAlm'];
$debeDolAlm=$_POST['debeDolAlm'];
$haberDolAlm=$_POST['haberDolAlm'];

if ($debeAlm!='' and $debeDolAlm=='') {
	$debeDolAlm=$debeAlm/$var;
}elseif($debeAlm=='' and $debeDolAlm!=''){
   $debeAlm= $debeDolAlm * $var;
}

if ($haberAlm!='' and $haberDolAlm=='') {
	$haberDolAlm=$haberAlm/$var;
}elseif($haberAlm=='' and $haberDolAlm!=''){
   $haberAlm= $haberDolAlm * $var;
}

$ObsTra=$_POST['ObsTra'];
$debeTra=$_POST['debeTra'];
$haberTra=$_POST['haberTra'];
$debeDolTra=$_POST['debeDolTra'];
$haberDolTra=$_POST['haberDolTra'];

if ($debeTra!='' and $debeDolTra=='') {
	$debeDolTra=$debeTra/$var;
}elseif($debeTra=='' and $debeDolTra!=''){
   $debeTra= $debeDolTra * $var;
}

if ($haberTra!='' and $haberDolTra=='') {
	$haberDolTra=$haberTra/$var;
}elseif($haberTra=='' and $haberDolTra!=''){
   $haberTra= $haberDolTra * $var;
}


$ObsEst=$_POST['ObsEst'];
$debeEst=$_POST['debeEst'];
$haberEst=$_POST['haberEst'];
$debeDolEst=$_POST['debeDolEst'];	
$haberDolEst=$_POST['haberDolEst'];
if ($debeEst!='' and $debeDolEst=='') {
	$debeDolEst=$debeEst/$var;
}elseif($debeEst=='' and $debeDolEst!=''){
   $debeEst= $debeDolEst *$var;
}

if ($haberEst!='' and $haberDolEst=='') {
	$haberDolEst=$haberEst/$var;
}elseif($haberEst=='' and $haberDolEst!=''){
   $haberEst= $haberDolEst * $var;
}

$ObsOtro=$_POST['ObsOtros'];
$debeOtro=$_POST['debeOtros'];
$haberOtro=$_POST['debeOtros'];
$debeDolOtro=$_POST['debeDolOtros'];
$haberDolOtro=$_POST['haberDolOtros'];
if ($debeOtro!='' and $debeDolOtro=='') {
	$debeDolOtro=$debeOtro/$var;
}elseif($debeOtro=='' and $debeDolOtro!=''){
   $debeOtro= $debeDolOtro * $var;
}

if ($haberOtro!='' and $haberDolOtro=='') {
	$haberDolOtro=$haberOtro/$var;
}elseif($haberOtro=='' and $haberDolOtro!=''){
   $haberOtro= $haberDolOtro * $var;
}

$ObsCC=$_POST['ObsCC'];
$debeCC=$_POST['debeCC'];
$haberCC=$_POST['haberCC'];
$debeDolCC=$_POST['debeDolCC'];
$haberDolCC=$_POST['haberDolCC'];
if ($debeCC!='' and $debeDolCC=='') {
	$debeDolCC=$debeCC/$var;
}elseif($debeCC=='' and $debeDolCC!=''){
   $debeCC= $debeDolCC * $var;
}

if ($haberCC!='' and $haberDolCC=='') {
	$haberDolCC=$haberCC/$var;
}elseif($haberCC=='' and $haberDolCC!=''){
   $haberCC= $haberDolCC * $var;
}


$ObsFTrans=$_POST['ObsFTrans'];
$debeFTrans=$_POST['debeFTrans'];
$haberFTrans=$_POST['haberFTrans'];
$debeDolFTrans=$_POST['debeDolFTrans'];
$haberDolFTrans=$_POST['haberDolFTrans'];
if ($debeFTrans!='' and $debeDolFTrans=='') {
	$debeDolFTrans=$debeFTrans/$var;
}elseif($debeFTrans=='' and $debeDolFTrans!=''){
   $debeFTrans= $debeDolFTrans * $var;
}

if ($haberFTrans!='' and $haberDolFTrans=='') {
	$haberDolFTrans=$haberFTrans/$var;
}elseif($haberFTrans=='' and $haberDolFTrans!=''){
   $haberFTrans= $haberDolFTrans * $var;
}

$ObsTHD=$_POST['ObsTHD'];
$debeTHD=$_POST['debeTHD'];
$haberTHD=$_POST['haberTHD'];
$debeDolTHD=$_POST['debeDolTHD'];
$haberDolTHD=$_POST['haberDolTHD'];
if ($debeTHD!='' and $debeDolTHD=='') {
	$debeDolTHD=$debeTHD/$var;
}elseif($debeTHD=='' and $debeDolTHD!=''){
   $debeTHD= $debeDolTHD * $var;
}

if ($haberTHD!='' and $haberDolTHD=='') {
	$haberDolTHD=$haberTHD/$var;
}elseif($haberTHD=='' and $haberDolTHD!=''){
   $haberTHD= $haberDolTHD * $var;
}

$ObsEDS=$_POST['ObsEDS'];
$debeEDS=$_POST['debeEDS'];
$haberEDS=$_POST['haberEDS'];
$debeDolEDS=$_POST['debeDolEDS'];
$haberDolEDS=$_POST['haberDolEDS'];
if ($debeEDS!='' and $debeDolEDS=='') {
	$debeDolEDS=$debeEDS/$var;
}elseif($debeEDS=='' and $debeDolEDS!=''){
   $debeEDS= $debeDolEDS * $var;
}

if ($haberEDS!='' and $haberDolEDS=='') {
	$haberDolEDS=$haberEDS/6.91;
}elseif($haberEDS=='' and $haberDolEDS!=''){
   $haberEDS= $haberDolEDS * $var;
}

$ObsCG=$_POST['ObsCG'];
$debeCG=$_POST['debeCG'];
$haberCG=$_POST['haberCG']; 
$debeDolCG=$_POST['debeDolCG']; 
$haberDolCG=$_POST['haberDolCG']; 
if ($debeCG!='' and $debeDolCG=='') {
	$debeDolCG=$debeCG/$var;
}elseif($debeCG=='' and $debeDolCG!=''){
   $debeCG= $debeDolCG * $var;
}

if ($haberCG!='' and $haberDolCG=='') {
	$haberDolCG=$haberCG/$var;
}elseif($haberCG=='' and $haberDolCG!=''){
   $haberCG= $haberDolCG * $var;
}

$ObsEDS=$_POST['ObsEDS']; 
$debeEDS=$_POST['debeEDS']; 
$haberEDS=$_POST['haberEDS']; 
$debeDolEDS=$_POST['debeDolEDS'];
$haberDolEDS=$_POST['haberDolEDS']; 

if ($debeEDS!='' and $debeDolEDS=='') {
	$debeDolEDS=$debeEDS/$var;
}elseif($debeEDS=='' and $debeDolEDS!=''){
   $debeEDS= $debeDolEDS * $var;
}

if ($haberEDS!='' and $haberDolEDS=='') {
	$haberDolEDS=$haberEDS/$var;
}elseif($haberEDS=='' and $haberDolEDS!=''){
   $haberEDS= $haberDolEDS * $var;
}



$ObsTHD=$_POST['ObsTHD'];
$debeTHD=$_POST['debeTHD']; 
$haberTHD=$_POST['haberTHD']; 
$debeDolTHD=$_POST['debeDolTHD']; 
$haberDolTHD=$_POST['haberDolTHD'];
if ($debeTHD!='' and $debeDolTHD=='') {
	$debeDolTHD=$debeTHD/$var;
}elseif($debeTHD=='' and $debeDolTHD!=''){
   $debeTHD= $debeDolTHD * $var;
}

if ($haberTHD!='' and $haberDolTHD=='') {
	$haberDolTHD=$haberTHD/$var;
}elseif($haberTHD=='' and $haberDolTHD!=''){
   $haberTHD= $haberDolTHD * $var;
}

$subToDebe=$_POST['subToDebe'];
$subToHaber=$_POST['subToHaber'];
$subToDebeDol=$_POST['subToDebeDol'];
$subToHaberDol=$_POST['subToHaberDol'];
$TotalBol=$_POST['TotalBol'];
$TotalDol=$_POST['TotalDol'];
$ObsCP=$_POST['ObsCP'];
/*
 $subToDebe=  $debeAC+$debeFT+$debeL+$debeTHC+$debeTHD+$debeC+$debeEDF+$debeGI+$debeGO+$debeTD+$debePCont+$debeDC+$debeG+$debeA+$debePC+$debeDP+$debePAA+$debeAlm+$debeTra+$debeEst+$debeCC+$debeCG+$debeEDS;

  $subToHaber=  $haberAC+$haberFT+$haberL+$haberTHC+$haberTHD+$haberC+$haberEDF+ $haberEDS+ $haberGI+$haberGO+ $haberTD+$haberPCont+$haberDC+$haberG+
				$haberA+$haberPC+$haberDP+ $haberPAA+ $haberAlm+ $haberTra+$haberEst+$haberCC+$haberCG;
				

   $subToDebeDol=$debeDolAC+$debeDolFT+$debeDolL+$debeDolTHC+$debeDolTHD+$debeDolC+$debeDolEDF+$debeDolEDS+$debeDolGI+$debeDolGO+ $debeDolTD+ $debeDolPCont+ $debeDolDC+$debeDolG+$debeDolA+$debeDolPC+$debeDolDP+$debeDolPAA+$debeDolAlm+$debeDolTra+$debeDolEst+$debeDolCG+$debeDolCC;

   $subToHaberDol= $haberDolAC+$haberDolFT+$haberDolL+$haberDolTHC+$haberDolTHD+$haberDolC+$haberDolEDF+$haberDolEDS+$haberDolGI+$haberDolGO+$haberDolTD+$haberDolPCont+$haberDolDC+$haberDolG+$haberDolA+$haberDolPC+$haberDolDP+$haberDolPAA+$haberDolAlm+$haberDolTra+$haberDolEst+$haberDolCG+$haberDolCC;


    $TotalBol=$subToDebe-$subToHaber;
    $TotalDol=$subToDebeDol-$subToHaberDol;
  */  

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
'$subToDebe', '$subToHaber', '$subToDebeDol', '$subToHaberDol',
'$TotalBol', '$TotalDol',
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