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
$ObsAT=$_POST['ObsAT'];

$ObsFT=$_POST['ObsFT'];

$ObsL=$_POST['ObsL'];
$debeL=$_POST['debeL'];
$haberL=$_POST['haberL'];
$debeDolL=$_POST['debeDolL'];
$haberDolL=$_POST['haberDolL'];
$obsFT=$_POST['ObsFT'];
$debeFT=$_POST['debeFT'];
$haberFT=$_POST['haberFT'];
$debeDolFT=$_POST['debeDolFT'];
$haberDolFT=$_POST['haberDolFT'];
$ObsTHC=$_POST['ObsTHC'];
$debeTHC=$_POST['debeTHC'];
$haberTHC=$_POST['haberTHC'];
$debeDolTHC=$_POST['debeDolTHC'];
$haberDolTHC=$_POST['haberDolTHC'];
$ObsC=$_POST['ObsC'];
$debeC=$_POST['debeC'];
$haberC=$_POST['haberC'];
$debeDolC=$_POST['debeDolC'];
$haberDolC=$_POST['haberDolC'];
$ObsEDF=$_POST['ObsEDF'];
$debeEDF=$_POST['debeEDF'];
$haberEDF=$_POST['haberEDF'];
$debeDolEDF=$_POST['debeDolEDF'];
$haberDolEDF=$_POST['haberDolEDF'];
$ObsGI=$_POST['ObsGI'];
$debeGI=$_POST['debeGI'];
$haberGI=$_POST['haberGI'];
$debeDolGI=$_POST['debeDolGI'];
$haberDolGI=$_POST['haberDolGI'];
$ObsGO=$_POST['ObsGO'];
$debeGO=$_POST['debeGO'];
$haberGO=$_POST['haberGO'];
$debeDolGO=$_POST['debeDolGO'];
$haberDolGO=$_POST['haberDolGO'];
$ObsTD=$_POST['ObsTD'];
$debeTD=$_POST['debeTD'];
$haberTD=$_POST['haberTD'];
$debeDolTD=$_POST['debeDolTD'];
$haberDolTD=$_POST['haberDolTD'];
$ObsPCont=$_POST['ObsPCont'];
$debePCont=$_POST['debePCont'];
$haberPCont=$_POST['haberPCont'];
$debeDolPCont=$_POST['debeDolPCont'];
$haberDolPCont=$_POST['haberDolPCont'];
$ObsDC=$_POST['ObsDC'];
$debeDC=$_POST['debeDC'];
$haberDC=$_POST['haberDC'];
$debeDolDC=$_POST['debeDolDC'];
$haberDolDC=$_POST['haberDolDC'];
$ObsG=$_POST['ObsG'];
$debeG=$_POST['debeG'];
$haberG=$_POST['haberG'];
$debeDolG=$_POST['debeDolG'];
$haberDolG=$_POST['haberDolG'];
$ObsA=$_POST['ObsA'];
$debeA=$_POST['debeA'];
$haberA=$_POST['haberA'];
$debeDolA=$_POST['debeDolA'];
$haberDolA=$_POST['haberDolA'];
$ObsPC=$_POST['ObsPC'];
$debePC=$_POST['debePC'];
$haberPC=$_POST['haberPC'];
$debeDolPC=$_POST['debeDolPC'];
$haberDolPC=$_POST['haberDolPC'];
$ObsDP=$_POST['ObsDP'];
$debeDP=$_POST['debeDP'];
$haberDP=$_POST['haberDP'];
$debeDolDP=$_POST['debeDolDP'];
$haberDolDP=$_POST['haberDolDP'];
$ObsPAA=$_POST['ObsPAA'];
$debePAA=$_POST['debePAA'];
$haberPAA=$_POST['haberPAA'];
$debeDolPAA=$_POST['debeDolPAA'];
$haberDolPAA=$_POST['haberDolPAA'];
$ObsAlm=$_POST['ObsAlm'];
$debeAlm=$_POST['debeAlm'];
$haberAlm=$_POST['haberAlm'];
$debeDolAlm=$_POST['debeDolAlm'];
$haberDolAlm=$_POST['haberDolAlm'];
$ObsTra=$_POST['ObsTra'];
$debeTra=$_POST['debeTra'];
$haberTra=$_POST['haberTra'];
$debeDolTra=$_POST['debeDolTra'];
$haberDolTra=$_POST['haberDolTra'];
$ObsEst=$_POST['ObsEst'];
$debeEst=$_POST['debeEst'];
$haberEst=$_POST['haberEst'];
$debeDolEst=$_POST['debeDolEst'];	
$haberDolEst=$_POST['haberDolEst'];
$ObsOtro=$_POST['ObsOtros'];
$debeOtro=$_POST['debeOtros'];
$haberOtro=$_POST['debeOtros'];
$debeDolOtro=$_POST['debeDolOtros'];
$haberDolOtro=$_POST['haberDolOtros'];
$ObsCC=$_POST['ObsCC'];
$debeCC=$_POST['debeCC'];
$haberCC=$_POST['haberCC'];
$debeDolCC=$_POST['debeDolCC'];
$haberDolCC=$_POST['haberDolCC'];
$ObsFTrans=$_POST['ObsFTrans'];
$debeFTrans=$_POST['debeFTrans'];
$haberFTrans=$_POST['haberFTrans'];
$debeDolFTrans=$_POST['debeDolFTrans'];
$haberDolFTrans=$_POST['haberDolFTrans'];
$ObsTHD=$_POST['ObsTHD'];
$debeTHD=$_POST['debeTHD'];
$haberTHD=$_POST['haberTHD'];
$debeDolTHD=$_POST['debeDolTHD'];
$haberDolTHD=$_POST['haberDolTHD'];
$ObsEDS=$_POST['ObsEDS'];
$debeEDS=$_POST['debeEDS'];
$haberEDS=$_POST['haberEDS'];
$debeDolEDS=$_POST['debeDolEDS'];
$haberDolEDS=$_POST['haberDolEDS'];
$ObsCG=$_POST['ObsCG'];
$debeCG=$_POST['debeCG'];
$haberCG=$_POST['haberCG']; 
$debeDolCG=$_POST['debeDolCG']; 
$haberDolCG=$_POST['haberDolCG']; 
$ObsEDS=$_POST['ObsEDS']; 
$debeEDS=$_POST['debeEDS']; 
$haberEDS=$_POST['haberEDS']; 
$debeDolEDS=$_POST['debeDolEDS'];
$haberDolEDS=$_POST['haberDolEDS']; 
$ObsTHD=$_POST['ObsTHD'];
$debeTHD=$_POST['debeTHD']; 
$haberTHD=$_POST['haberTHD']; 
$debeDolTHD=$_POST['debeDolTHD']; 
$haberDolTHD=$_POST['haberDolTHD'];
$ObsCP=$_POST['ObsCP'];
/*$ObsOtro2=$_POST['ObsOtros2'];
$debeOtro2=$_POST['debeOtros2'];
$haberOtro2=$_POST['debeOtros2'];
$debeDolOtro2=$_POST['debeDolOtros2'];
$haberDolOtro2=$_POST['haberDolOtros2'];*/
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