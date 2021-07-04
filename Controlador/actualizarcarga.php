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
$cliente = $_POST['cliente'];
$conductor = $_POST['conductor'];
$formatos =array('.jpg', '.png', '.pdf','.PNG');

if ((is_uploaded_file($_FILES['ficheroFS']['tmp_name'])) && (is_uploaded_file($_FILES['ficheroFA']['tmp_name']))) { // preguntar si existe un archivo cargado
$ruta = "../Ficheros/";// creamos las variables para los ficheros
$nombreFS=trim($_FILES['ficheroFS']['name']); //captura del nombre
$nombreFA=trim($_FILES['ficheroFA']['name']); //captura del nombre
$extFS=substr($nombreFS, strrpos($nombreFS, '.'));//capturamos el formato de la imagen
$extFA=substr($nombreFA, strrpos($nombreFA, '.'));//capturamos el formato de la imagen
if(in_array($extFS,$formatos) && in_array($extFA,$formatos)) { // pregunta por el formato de la imagen
$nombreFS=str_replace(" ", "", $nombreFS);//sustituyendo una expresion regular
$nombreFA=str_replace(" ", "", $nombreFA);//sustituyendo una expresion regular
$uploadFS=$ruta . $nombreFS;
$uploadFA=$ruta . $nombreFA;
if(!file_exists($uploadFS) && !file_exists($uploadFA)){ // verificar si el archivo existe en la BD.
if(move_uploaded_file($_FILES['ficheroFS']['tmp_name'], $uploadFS) && move_uploaded_file($_FILES['ficheroFA']['tmp_name'], $uploadFA)) {// movemos el archivo a su ubicacion
	//elimina el archivo de la base de datos
	foreach($conexion->query("Select * from train where id='$id'") as $row){
		$rutaFS=$row['facSoftrain'];
		$rutaFA=$row['facturaApoyo'];
	}
	unlink("../Ficheros/$rutaFS");
	unlink("../Ficheros/$rutaFA");
	if($naviera=='Mapag Lloyd'||$naviera=='MSC'||$naviera=='Maersk'||$naviera=='Cosco'|| $naviera=='Evergreen lin'||$naviera=='Sea land'||$naviera=='CSAV'){
	//Comveriir la fecha
	$fechaLimDev2 = strtotime('+21 day', strtotime($fechaArribo));//se suman 21days a fecha limite
	$fechaLimDev2 = date ('y-m-d', $fechaLimDev2);
//Preparamos la orden SQL
$query="UPDATE train SET numRegistro='$numRegistro',fecha='$fecha', fechaAsignacion='$fechaAsignacion',
fechaArribo='$fechaArribo',fechaLimDev='$fechaLimDev2',pesoKg='$peso',detalle='$detalle',
facSoftrain='$nombreFS', facturaApoyo='$nombreFA',naviera='$naviera',
numBillOflanding='$bol',fechaDev='$fechaDev',placa='$placa',empresa='$empresa',
conductor='$conductor',tamCont='$tamCont',
contenedor='$contenedor',cliente='$cliente',remitConsig='$remitConsig',
tramo='$tramo' where id=$id";
}elseif($naviera=='CMA CGM'||$naviera=='Hambug Sud'){
	//$today = date('y-m-d');
	$fechaLimDev2 = strtotime('+20 day', strtotime($fechaArribo));
	$fechaLimDev2 = date ('y-m-d', $fechaLimDev2);
//Preparamos la orden SQL
$query="UPDATE train SET numRegistro='$numRegistro',fecha='$fecha', fechaAsignacion='$fechaAsignacion',
fechaArribo='$fechaArribo',fechaLimDev='$fechaLimDev2',pesoKg='$peso',detalle='$detalle',
facSoftrain='$nombreFS', facturaApoyo='$nombreFA',naviera='$naviera',
numBillOflanding='$bol',fechaDev='$fechaDev',placa='$placa',empresa='$empresa',
conductor='$conductor',tamCont='$tamCont',
contenedor='$contenedor',cliente='$cliente',remitConsig='$remitConsig',
tramo='$tramo' where id=$id";
}elseif($naviera=='Seabord Marine'){
	//$today = date('y-m-d');
	$fechaLimDev2 = strtotime('+22 day', strtotime($fechaArribo));
	$fechaLimDev2 = date ('y-m-d', $fechaLimDev2);
//Preparamos la orden SQL
$query="UPDATE train SET numRegistro='$numRegistro',fecha='$fecha', fechaAsignacion='$fechaAsignacion',
fechaArribo='$fechaArribo',fechaLimDev='$fechaLimDev2',pesoKg='$peso',detalle='$detalle',
facSoftrain='$nombreFS', facturaApoyo='$nombreFA',naviera='$naviera',
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
}else{
	echo "error de envio de archivo a su ubicacion";
}
}else{
	echo "archivo ya existe elija uno con diferente nombre";
}
}else{
	echo "no se  pudo subir el archivo es diferente formato";
}
}elseif(is_uploaded_file($_FILES['ficheroFS']['tmp_name'])){// preuntar si un fichero esta cargado
	$ruta = "../Ficheros/";// creamos las variables para los ficheros
	$nombreFS=trim($_FILES['ficheroFS']['name']); //captura del nombre
	$extFS=substr($nombreFS, strrpos($nombreFS, '.'));//capturamos el formato de la imagen
	if(in_array($extFS,$formatos)) { // pregunta por el formato de la imagen
	$nombreFS=str_replace(" ", "", $nombreFS);//sustituyendo una exprecion regular
	$uploadFS=$ruta . $nombreFS;
	if(!file_exists($uploadFS)) { // verificar si el archivo existe en la BD.
	if(move_uploaded_file($_FILES['ficheroFS']['tmp_name'], $uploadFS)) {// movemos el archivo a su ubicacion
		//elimina el archivo de la base de datos
			foreach($conexion->query("Select * from train where id='$id'") as $row){
				$rutaFS=$row['facSoftrain'];
			}
			unlink("../Ficheros/$rutaFS");
			//Preguntar por la naviera
	if($naviera=='Mapag Lloyd'||$naviera=='MSC'||$naviera=='Maersk'||$naviera=='Cosco'|| $naviera=='Evergreen lin'||$naviera=='Sea land'||$naviera=='CSAV'){
	//$fecha = date('y-m-d');
	$fechaLimDev2 = strtotime('+21 day', strtotime($fechaArribo));//se suman 21days a fecha limite
	$fechaLimDev2 = date ('y-m-d', $fechaLimDev2);
		$query="UPDATE train SET numRegistro='$numRegistro',fecha='$fecha', fechaAsignacion='$fechaAsignacion',
fechaArribo='$fechaArribo',fechaLimDev='$fechaLimDev2',pesoKg='$peso',detalle='$detalle',
facSoftrain='$nombreFS',naviera='$naviera',
numBillOflanding='$bol',fechaDev='$fechaDev',placa='$placa',empresa='$empresa',
conductor='$conductor',tamCont='$tamCont',
contenedor='$contenedor',cliente='$cliente',remitConsig='$remitConsig',
tramo='$tramo' where id=$id";
}elseif($naviera=='CMA CGM'||$naviera=='Hambug Sud'){
	//$today = date('y-m-d');
	$fechaLimDev2 = strtotime('+20 day', strtotime($fechaArribo));
	$fechaLimDev2 = date ('y-m-d', $fechaLimDev2);
//Preparamos la orden SQL
$query="UPDATE train SET numRegistro='$numRegistro',fecha='$fecha', fechaAsignacion='$fechaAsignacion',
fechaArribo='$fechaArribo',fechaLimDev='$fechaLimDev2',pesoKg='$peso',detalle='$detalle',
facSoftrain='$nombreFS', naviera='$naviera',
numBillOflanding='$bol',fechaDev='$fechaDev',placa='$placa',empresa='$empresa',
conductor='$conductor',tamCont='$tamCont',
contenedor='$contenedor',cliente='$cliente',remitConsig='$remitConsig',
tramo='$tramo' where id=$id";
}elseif($naviera=='Seabord Marine'){
	//$today = date('y-m-d');
	$fechaLimDev2 = strtotime('+22 day', strtotime($fechaArribo));
	$fechaLimDev2 = date ('y-m-d', $fechaLimDev2);
//Preparamos la orden SQL
$query="UPDATE train SET numRegistro='$numRegistro',fecha='$fecha', fechaAsignacion='$fechaAsignacion',
fechaArribo='$fechaArribo',fechaLimDev='$fechaLimDev2',pesoKg='$peso',detalle='$detalle',
facSoftrain='$nombreFS', naviera='$naviera',
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
	}else{
		echo "error de envio de archivo a su ubicacion";
	}
	}else{
		echo "archivo ya existe elija uno con diferente nombre";
	}
	}else{
		echo "no se  pudo subir el archivo es diferente formato 2";
	}
}elseif(is_uploaded_file($_FILES['ficheroFA']['tmp_name'])){//Preguntar si el otro esta archivo esta cargado
	$ruta = "../Ficheros/";// creamos las variables para los ficheros
	$nombreFA=trim($_FILES['ficheroFA']['name']); //captura del nombre
	$extFA=substr($nombreFA, strrpos($nombreFA, '.'));//capturamos el formato de la imagen
	if(in_array($extFA,$formatos)) { // pregunta por el formato de la imagen
	$nombreFA=str_replace(" ", "", $nombreFA);//sustituyendo la expresion regular
	$uploadFA=$ruta . $nombreFA;
	if(!file_exists($uploadFA)) { // verificar si el archivo existe en la BD.
	if(move_uploaded_file($_FILES['ficheroFA']['tmp_name'], $uploadFA)) {// movemos el archivo a su ubicacion
		//elimina el archivo de la base de datos
			foreach($conexion->query("Select * from train where id='$id'") as $row){			
				$rutaFA=$row['facturaApoyo'];
			}
			unlink("../Ficheros/$rutaFA");
			//preguntar por la naviera
	if($naviera=='Mapag Lloyd'||$naviera=='MSC'||$naviera=='Maersk'||$naviera=='Cosco'|| $naviera=='Evergreen lin'||$naviera=='Sea land'||$naviera=='CSAV'){
	//$fecha = date('y-m-d');
	$fechaLimDev2 = strtotime('+21 day', strtotime($fechaArribo));//se suman 21days a fecha limite
	$fechaLimDev2 = date ('y-m-d', $fechaLimDev2);
		$query="UPDATE train SET numRegistro='$numRegistro',fecha='$fecha', fechaAsignacion='$fechaAsignacion',
fechaArribo='$fechaArribo',fechaLimDev='$fechaLimDev2',pesoKg='$peso',detalle='$detalle',
facturaApoyo='$nombreFA',naviera='$naviera',
numBillOflanding='$bol',fechaDev='$fechaDev',placa='$placa',empresa='$empresa',
conductor='$conductor',tamCont='$tamCont',
contenedor='$contenedor',cliente='$cliente',remitConsig='$remitConsig',
tramo='$tramo' where id=$id";
}elseif($naviera=='CMA CGM'||$naviera=='Hambug Sud'){
	//$today = date('y-m-d');
	$fechaLimDev2 = strtotime('+20 day', strtotime($fechaArribo));
	$fechaLimDev2 = date ('y-m-d', $fechaLimDev2);
//Preparamos la orden SQL
$query="UPDATE train SET numRegistro='$numRegistro',fecha='$fecha', fechaAsignacion='$fechaAsignacion',
fechaArribo='$fechaArribo',fechaLimDev='$fechaLimDev2',pesoKg='$peso',detalle='$detalle',
facturaApoyo='$nombreFA',naviera='$naviera',
numBillOflanding='$bol',fechaDev='$fechaDev',placa='$placa',empresa='$empresa',
conductor='$conductor',tamCont='$tamCont',
contenedor='$contenedor',cliente='$cliente',remitConsig='$remitConsig',
tramo='$tramo' where id=$id";
}elseif($naviera=='Seabord Marine'){
	//$today = date('y-m-d');
	$fechaLimDev2 = strtotime('+22 day', strtotime($fechaArribo));
	$fechaLimDev2 = date ('y-m-d', $fechaLimDev2);
//Preparamos la orden SQL
$query="UPDATE train SET numRegistro='$numRegistro',fecha='$fecha', fechaAsignacion='$fechaAsignacion',
fechaArribo='$fechaArribo',fechaLimDev='$fechaLimDev2',pesoKg='$peso',detalle='$detalle',
facSoftrain='$nombreFS', facturaApoyo='$nombreFA',naviera='$naviera',
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

	}else{
		echo "error de envio de archivo a su ubicacion";
	}
	}else{
		echo "archivo ya existe elija uno con diferente nombre";
	}
	}else{
		echo "no se  pudo subir el archivo es diferente formato 3";
	}

}elseif($naviera=='Mapag Lloyd'||$naviera=='MSC'||$naviera=='Maersk'||$naviera=='Cosco'|| $naviera=='Evergreen lin'||$naviera=='Sea land'||$naviera=='CSAV'){
	//$fecha = date('y-m-d');
	$fechaLimDev2 = strtotime('+21 day', strtotime($fechaArribo));
	$fechaLimDev2 = date ('y-m-d', $fechaLimDev2);
//Preparamos la orden SQL
$query="UPDATE train SET numRegistro='$numRegistro',fecha='$fecha', fechaAsignacion='$fechaAsignacion',
fechaArribo='$fechaArribo',fechaLimDev='$fechaLimDev2',pesoKg='$peso',detalle='$detalle',
naviera='$naviera',numBillOflanding='$bol',fechaDev='$fechaDev',placa='$placa',empresa='$empresa',
conductor='$conductor',tamCont='$tamCont',
contenedor='$contenedor',cliente='$cliente',remitConsig='$remitConsig',
tramo='$tramo' where id=$id";
}elseif($naviera=='CMA CGM'||$naviera=='Hambug Sud'){
	//$today = date('y-m-d');
	$fechaLimDev2 = strtotime('+20 day', strtotime($fechaArribo));
	$fechaLimDev2 = date ('y-m-d', $fechaLimDev2);
//Preparamos la orden SQL
$query="UPDATE train SET numRegistro='$numRegistro',fecha='$fecha', fechaAsignacion='$fechaAsignacion',
fechaArribo='$fechaArribo',fechaLimDev='$fechaLimDev2',pesoKg='$peso',detalle='$detalle',
naviera='$naviera', numBillOflanding='$bol',fechaDev='$fechaDev',placa='$placa',empresa='$empresa',
conductor='$conductor',tamCont='$tamCont',
contenedor='$contenedor',cliente='$cliente',remitConsig='$remitConsig',
tramo='$tramo' where id=$id";
}elseif($naviera=='Seabord Marine'){
	//$today = date('y-m-d');
	$fechaLimDev2 = strtotime('+22 day', strtotime($fechaArribo));
	$fechaLimDev2 = date ('y-m-d', $fechaLimDev2);
//Preparamos la orden SQL
$query="UPDATE train SET numRegistro='$numRegistro',fecha='$fecha', fechaAsignacion='$fechaAsignacion',
fechaArribo='$fechaArribo',fechaLimDev='$fechaLimDev2',pesoKg='$peso',detalle='$detalle',
,naviera='$naviera',
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

?>
