<?php
require("../modelo/conexion.php");
$id_nc=$_POST['id'];
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