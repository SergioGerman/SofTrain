<?php
require('../modelo/conexion.php');
//traspasamos a variables locales, para evitar complicaciones con las comillas:
/*if(isset($_POST['numRegistro'] && $_POST['fecha'] && $_POST['fechaAsignacion'] && 
$_POST['fechaArribo'] && $_POST['fechaLimDev'] && $_POST['fechaDev'] &&
$_POST['placa'] && $_POST['empresa'] && $_POST['naviera'] && $_POST['bol']
&& $_POST['tamCont'] && $_POST['contenedor'] && $_POST['remitConsig'] && $_POST['peso']
&& $_POST['detalle'] && $_POST['tramo'] && $_POST['facSoftrain'] && $_POST['facApoyo']
&& $_POST['conductor'] && $_POST['cliente'])){*/

$numRegistro = $_POST['numRegistro'];
$fecha=$_POST['fecha'];
$fechaAsignacion = $_POST['fechaAsignacion'];
$fechaArribo = $_POST['fechaArribo'];
$fechaLimDev = $_POST['fechaLimDev'];
$fechaDev = $_POST['fechaDev'];
$placa = $_POST['placa'];
$empresa = $_POST['empresa'];
$naviera = $_POST['naviera'];
$bol = $_POST['bol'];
$tamCont = $_POST['tamCont'];
$contenedor = $_POST['contenedor'];
$remitConsig = $_POST['remitConsig'];
$peso = $_POST['peso'];
$detalle = $_POST['detalle'];
$tramo = $_POST['tramo'];
$facSoftrain = $_POST['facSoftrain'];
$facApoyo = $_POST['facApoyo'];
$conductor = $_POST['conductor'];
$cliente = $_POST['cliente'];	

if($naviera=='Mapag Lloyd'||$naviera=='MSC'||$naviera=='Maersk'||$naviera=='Casco'|| $naviera=='Evergreen lin'||$naviera=='Sea land'||$naviera=='CSAV'){
	//$today = date('y-m-d');
	$fechaLimDev2 = strtotime('+21 day', strtotime($fechaArribo));
	$fechaLimDev2 = date ('y-m-d', $fechaLimDev2);
//Preparamos la orden SQL
$query="insert into train (numRegistro,fecha,fechaAsignacion,
fechaArribo,fechaLimDev,calculoFecha,pesoKg,detalle,facSoftrain,
facturaApoyo,naviera,numBillOflanding,fechaDev,placa,empresa,conductor,
tamCont,contenedor,cliente,remitConsig,tramo,id_usuario, id_bol) values 
('$numRegistro','$fecha','$fechaAsignacion','$fechaArribo','$fechaLimDev2',
null,'$peso','$detalle','$facSoftrain','$facApoyo','$naviera',
'$bol','$fechaDev','$placa','$empresa','$conductor','$tamCont',
'$contenedor','$cliente','$remitConsig','$tramo',null,null)";
}elseif($naviera=='CMA CGM'||$naviera=='Hambug Sud'){
	//$today = date('y-m-d');
	$fechaLimDev2 = strtotime('+20 day', strtotime($fechaArribo));
	$fechaLimDev2 = date ('y-m-d', $fechaLimDev2);
//Preparamos la orden SQL
$query="insert into train (numRegistro,fecha,fechaAsignacion,
fechaArribo,fechaLimDev,calculoFecha,pesoKg,detalle,facSoftrain,
facturaApoyo,naviera,numBillOflanding,fechaDev,placa,empresa,conductor,
tamCont,contenedor,cliente,remitConsig,tramo,id_usuario, id_bol) values 
('$numRegistro','$fecha','$fechaAsignacion','$fechaArribo','$fechaLimDev2',
null,'$peso','$detalle','$facSoftrain','$facApoyo','$naviera',
'$bol','$fechaDev','$placa','$empresa','$conductor','$tamCont',
'$contenedor','$cliente','$remitConsig','$tramo',null,null)";
}elseif($naviera=='Seabord Marine'){
	//$today = date('y-m-d');
	$fechaLimDev2 = strtotime('+22 day', strtotime($fechaArribo));
	$fechaLimDev2 = date ('y-m-d', $fechaLimDev2);
//Preparamos la orden SQL
$query="insert into train (numRegistro,fecha,fechaAsignacion,
fechaArribo,fechaLimDev,calculoFecha,pesoKg,detalle,facSoftrain,
facturaApoyo,naviera,numBillOflanding,fechaDev,placa,empresa,conductor,
tamCont,contenedor,cliente,remitConsig,tramo,id_usuario, id_bol) values 
('$numRegistro','$fecha','$fechaAsignacion','$fechaArribo','$fechaLimDev2',
null,'$peso','$detalle','$facSoftrain','$facApoyo','$naviera',
'$bol','$fechaDev','$placa','$empresa','$conductor','$tamCont',
'$contenedor','$cliente','$remitConsig','$tramo',null,null)";
}
if($conexion->query($query)===true){
	header("location: Formulario.php");
}else{
	die('error al insertar datos'.$conexion->error);
}
//}	

?> 