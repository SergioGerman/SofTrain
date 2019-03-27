<?php
require('../modelo/conexion.php');
$id=$_POST['id'];
$fecha=$_POST['fecha'];
$numRegistro = $_POST['numRegistro'];
$fechaAsignacion = $_POST['fechaAsignacion'];
$fechaArribo = $_POST['fechaArribo'];
$fechaDev = $_POST['fechaDev'];
$placa = $_POST['placa'];
$empresa = $_POST['empresa'];
$naviera = $_POST['naviera'];
$tamCont = $_POST['tamCont'];
$contenedor = $_POST['contenedor'];
$remitConsig = $_POST['remitConsig'];
$peso = $_POST['peso'];
$detalle = $_POST['detalle'];
$tramo = $_POST['tramo'];
$facSoftrain = $_POST['facSoftrain'];
$cliente = $_POST['cliente'];
//$facApoyo = $_POST['facApoyo'];
//$conductor = $_POST['conductor'];

if($naviera=='Mapag Lloyd'||$naviera=='MSC'||$naviera=='Maersk'||$naviera=='Cosco'|| $naviera=='Evergreen lin'||$naviera=='Sea land'||$naviera=='CSAV'){
	//$fecha = date('y-m-d');
	$fechaLimDev2 = strtotime('+21 day', strtotime($fecha));
	$fechaLimDev2 = date ('y-m-d', $fechaLimDev2);
//Preparamos la orden SQL
$query="UPDATE train SET numRegistro='$numRegistro',fecha='$fecha', fechaAsignacion='$fechaAsignacion',
fechaArribo='$fechaArribo',fechaLimDev='$fechaLimDev2',pesoKg='$peso',detalle='$detalle',
facSoftrain='$facSoftrain',facturaApoyo='$facApoyo',naviera='$naviera',
numBillOflanding='$bol',fechaDev='$fechaDev',placa='$placa',empresa='$empresa',
conductor='$conductor',tamCont='$tamCont',
contenedor='$contenedor',cliente='$cliente',remitConsig='$remitConsig',
tramo='$tramo' where id=$id";
}elseif($naviera=='CMA CGM'||$naviera=='Hambug Sud'){
	//$today = date('y-m-d');
	$fechaLimDev2 = strtotime('+20 day', strtotime($fecha));
	$fechaLimDev2 = date ('y-m-d', $fechaLimDev2);
//Preparamos la orden SQL
$query="UPDATE train SET numRegistro='$numRegistro',fecha='$fecha', fechaAsignacion='$fechaAsignacion',
fechaArribo='$fechaArribo',fechaLimDev='$fechaLimDev2',pesoKg='$peso',detalle='$detalle',
facSoftrain='$facSoftrain',facturaApoyo='$facApoyo',naviera='$naviera',
numBillOflanding='$bol',fechaDev='$fechaDev',placa='$placa',empresa='$empresa',
conductor='$conductor',tamCont='$tamCont',
contenedor='$contenedor',cliente='$cliente',remitConsig='$remitConsig',
tramo='$tramo' where id=$id";
}elseif($naviera=='Seabord Marine'){
	//$today = date('y-m-d');
	$fechaLimDev2 = strtotime('+22 day', strtotime($fecha));
	$fechaLimDev2 = date ('y-m-d', $fechaLimDev2);
//Preparamos la orden SQL
$query="UPDATE train SET numRegistro='$numRegistro',fecha='$fecha', fechaAsignacion='$fechaAsignacion',
fechaArribo='$fechaArribo',fechaLimDev='$fechaLimDev2',pesoKg='$peso',detalle='$detalle',
facSoftrain='$facSoftrain',facturaApoyo='$facApoyo',naviera='$naviera',
numBillOflanding='$bol',fechaDev='$fechaDev',placa='$placa',empresa='$empresa',
conductor='$conductor',tamCont='$tamCont',
contenedor='$contenedor',cliente='$cliente',remitConsig='$remitConsig',
tramo='$tramo' where id=$id";
}
if($conexion->query($query)===true){
	header("location: Formulario.php");
}else{
	die('error al insertar datos'.$conexion->error);
}
//}

?>
