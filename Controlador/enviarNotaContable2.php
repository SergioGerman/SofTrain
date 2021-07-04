<?php
require("../modelo/conexion.php");
$id_nc=$_POST['id'];
$var=6.91;
$deAT=$_POST['deAT'];

$debeAT=$_POST['debeAT'];
$haberAT=$_POST['haberAT'];
$debeDolAT=$_POST['debeDolAT'];
$haberDolAT=$_POST['haberDolAT'];

if ($debeAT!='' and $debeDolAT=='') {
	$debeDolAT=$debeAT/$var;
}elseif($debeAT=='' and $debeDolAT!=''){
   $debeAT= $debeDolAT * $var;
}

if ($haberAT!='' and $haberDolAT=='') {
	$haberDolAT=$haberAT/$var;
}elseif($haberAT=='' and $haberDolAT!=''){
   $haberAT= $haberDolAT * $var;
}
$deFTrans=$_POST['deFTrans'];

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
$deCP=$_POST['deCP'];

$debeCP=$_POST['debeCP'];
$haberCP=$_POST['haberCP'];
$debeDolCP=$_POST['debeDolCP'];
$haberDolCP=$_POST['haberDolCP'];

if ($debeCP!='' and $debeDolCP=='') {
	$debeDolCP=$debeCP/$var;
}elseif($debeCP=='' and $debeDolCP!=''){
   $debeCP= $debeDolCP * $var;
}

if ($haberCP!='' and $haberDolCP=='') {
	$haberDolCP=$haberCP/$var;
}elseif($haberCP=='' and $haberDolCP!=''){
   $haberCP= $haberDolCP * $var;
}
$deOtro=$_POST['deOtro'];

$debeOtro=$_POST['debeOtro'];
$haberOtro=$_POST['haberOtro'];
$debeDolOtro=$_POST['debeDolOtro'];
$haberDolOtro=$_POST['haberDolOtro'];

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
$query="INSERT INTO notacontables2 (
deAT, debeAT, haberAT, debeDolAT, haberDolAT,
deFTrans, debeFTrans, haberFTrans, debeDolFTrans, haberDolFTrans,
deCP, debeCP, haberCP, debeDolCP, haberDolCP,
deOtro, debeOtro, haberOtro, debeDolOtro, haberDolOtro, id_nc) 
VALUES (
'$deAT', '$debeAT', '$haberAT', '$debeDolAT', '$haberDolAT',
'$deFTrans', '$debeFTrans', '$haberFTrans', '$debeDolFTrans', '$haberDolFTrans',
'$deCP', '$debeCP', '$haberCP', '$debeDolCP', '$haberDolCP',
'$deOtro', '$debeOtro', '$haberOtro', '$debeDolOtro', '$haberDolOtro', '$id_nc')";
if($conexion->query($query)===true /*&& $conexion->query($query2)===true */){
	header("location: Formulario.php");
}else{
	die('error al insertar datos '.$conexion->error);
}
?>