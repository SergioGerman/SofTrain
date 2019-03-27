<?php
require('../modelo/conexion.php');

$id_usuario=$_POST['id_usuario'];
$numRegistro = $_POST['numRegistro'];
$fecha=$_POST['fecha'];
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
$conductor = $_POST['conductor'];
$cliente = $_POST['cliente'];
$formatos =array('.jpg', '.png', '.pdf','.PNG');

// fichero upload
if ((is_uploaded_file($_FILES['ficheroFS']['tmp_name'])) && (is_uploaded_file($_FILES['ficheroFA']['tmp_name']))) { // preguntar si existe un archivo cargado
$ruta = "../Ficheros/";// creamos las variables para los ficheros
$nombreFS=trim($_FILES['ficheroFS']['name']); //captura del nombre
$nombreFA=trim($_FILES['ficheroFA']['name']); //captura del nombre
$extFS=substr($nombreFS, strrpos($nombreFS, '.'));//capturamos el formato de la imagen
$extFA=substr($nombreFA, strrpos($nombreFA, '.'));//capturamos el formato de la imagen
if(in_array($extFS,$formatos) && in_array($extFA,$formatos)) { // pregunta por el formato de la imagen
$nombreFS=str_replace(" ", "", $nombreFS);//sustituyendo una exprecion regular
$nombreFA=str_replace(" ", "", $nombreFA);//sustituyendo una exprecion regular
$uploadFS=$ruta . $nombreFS;
$uploadFA=$ruta . $nombreFA;
if(!file_exists($uploadFS) && !file_exists($uploadFA)){ // verificar si el archivo existe en la BD.
if(move_uploaded_file($_FILES['ficheroFS']['tmp_name'], $uploadFS) && move_uploaded_file($_FILES['ficheroFA']['tmp_name'], $uploadFA)) {// movemos el archivo a su ubicacion
	//echo "Movidos";
	if($naviera=='Mapag Lloyd'||$naviera=='MSC'||$naviera=='Maersk'||$naviera=='Cosco'|| $naviera=='Evergreen lin'||$naviera=='Sea Land'||$naviera=='CSAV'){
		//$today = date('y-m-d');
		$fechaLimDev2 = strtotime('+21 day', strtotime($fechaArribo));
		$fechaLimDev2 = date ('y-m-d', $fechaLimDev2);
	//Preparamos la orden SQL
	$query="insert into train (numRegistro,fecha,fechaAsignacion,
	fechaArribo,fechaLimDev,calculoFecha,pesoKg,detalle,facSoftrain,
	facturaApoyo,naviera,numBillOflanding,fechaDev,placa,empresa,conductor,
	tamCont,contenedor,cliente,remitConsig,tramo,id_usuario) values
	('$numRegistro','$fecha','$fechaAsignacion','$fechaArribo','$fechaLimDev2',
	null,'$peso','$detalle','$nombreFS','$nombreFA','$naviera',
	null,'$fechaDev','$placa','$empresa','$conductor','$tamCont',
	'$contenedor','$cliente','$remitConsig','$tramo',$id_usuario)";
	}elseif($naviera=='CMA CGM'||$naviera=='Hambug Sud'){
		//$today = date('y-m-d');
		$fechaLimDev2 = strtotime('+20 day', strtotime($fechaArribo));
		$fechaLimDev2 = date ('y-m-d', $fechaLimDev2);
	//Preparamos la orden SQL
	$query="insert into train (numRegistro,fecha,fechaAsignacion,
	fechaArribo,fechaLimDev,calculoFecha,pesoKg,detalle,facSoftrain,
	facturaApoyo,naviera,numBillOflanding,fechaDev,placa,empresa,conductor,
	tamCont,contenedor,cliente,remitConsig,tramo,id_usuario) values
	('$numRegistro','$fecha','$fechaAsignacion','$fechaArribo','$fechaLimDev2',
	null,'$peso','$detalle','$nombreFS','$nombreFA','$naviera',
	null,'$fechaDev','$placa','$empresa','$conductor','$tamCont',
	'$contenedor','$cliente','$remitConsig','$tramo',$id_usuario)";
	}elseif($naviera=='Seabord Marine'){
		//$today = date('y-m-d');
		$fechaLimDev2 = strtotime('+22 day', strtotime($fechaArribo));
		$fechaLimDev2 = date ('y-m-d', $fechaLimDev2);
	//Preparamos la orden SQL
	$query="insert into train (numRegistro,fecha,fechaAsignacion,
	fechaArribo,fechaLimDev,calculoFecha,pesoKg,detalle,facSoftrain,
	facturaApoyo,naviera,numBillOflanding,fechaDev,placa,empresa,conductor,
	tamCont,contenedor,cliente,remitConsig,tramo,id_usuario) values
	('$numRegistro','$fecha','$fechaAsignacion','$fechaArribo','$fechaLimDev2',
	null,'$peso','$detalle','$nombreFS','$nombreFA','$naviera',
	null,'$fechaDev','$placa','$empresa','$conductor','$tamCont',
	'$contenedor','$cliente','$remitConsig','$tramo',$id_usuario)";
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
}elseif(is_uploaded_file($_FILES['ficheroFS']['tmp_name'])){
	$ruta = "../Ficheros/";// creamos las variables para los ficheros
	$nombreFS=trim($_FILES['ficheroFS']['name']); //captura del nombre
	$extFS=substr($nombreFS, strrpos($nombreFS, '.'));//capturamos el formato de la imagen
	if(in_array($extFS,$formatos)) { // pregunta por el formato de la imagen
	$nombreFS=str_replace(" ", "", $nombreFS);//sustituyendo una exprecion regular
	$uploadFS=$ruta . $nombreFS;
	if(!file_exists($uploadFS)) { // verificar si el archivo existe en la BD.
	if(move_uploaded_file($_FILES['ficheroFS']['tmp_name'], $uploadFS)) {// movemos el archivo a su ubicacion
		//echo "Movidos";
		if($naviera=='Mapag Lloyd'||$naviera=='MSC'||$naviera=='Maersk'||$naviera=='Cosco'|| $naviera=='Evergreen lin'||$naviera=='Sea Land'||$naviera=='CSAV'){
			//$today = date('y-m-d');
			$fechaLimDev2 = strtotime('+21 day', strtotime($fechaArribo));
			$fechaLimDev2 = date ('y-m-d', $fechaLimDev2);
		//Preparamos la orden SQL
		$query="insert into train (numRegistro,fecha,fechaAsignacion,
		fechaArribo,fechaLimDev,calculoFecha,pesoKg,detalle,facSoftrain,
		facturaApoyo,naviera,numBillOflanding,fechaDev,placa,empresa,conductor,
		tamCont,contenedor,cliente,remitConsig,tramo,id_usuario) values
		('$numRegistro','$fecha','$fechaAsignacion','$fechaArribo','$fechaLimDev2',
		null,'$peso','$detalle','$uploadFS',null,'$naviera',
		null,'$fechaDev','$placa','$empresa','$conductor','$tamCont',
		'$contenedor','$cliente','$remitConsig','$tramo',$id_usuario)";
		}elseif($naviera=='CMA CGM'||$naviera=='Hambug Sud'){
			//$today = date('y-m-d');
			$fechaLimDev2 = strtotime('+20 day', strtotime($fechaArribo));
			$fechaLimDev2 = date ('y-m-d', $fechaLimDev2);
		//Preparamos la orden SQL
		$query="insert into train (numRegistro,fecha,fechaAsignacion,
		fechaArribo,fechaLimDev,calculoFecha,pesoKg,detalle,facSoftrain,
		facturaApoyo,naviera,numBillOflanding,fechaDev,placa,empresa,conductor,
		tamCont,contenedor,cliente,remitConsig,tramo,id_usuario) values
		('$numRegistro','$fecha','$fechaAsignacion','$fechaArribo','$fechaLimDev2',
		null,'$peso','$detalle','$uploadFS',null,'$naviera',
		null,'$fechaDev','$placa','$empresa','$conductor','$tamCont',
		'$contenedor','$cliente','$remitConsig','$tramo',$id_usuario)";
		}elseif($naviera=='Seabord Marine'){
			//$today = date('y-m-d');
			$fechaLimDev2 = strtotime('+22 day', strtotime($fechaArribo));
			$fechaLimDev2 = date ('y-m-d', $fechaLimDev2);
		//Preparamos la orden SQL
		$query="insert into train (numRegistro,fecha,fechaAsignacion,
		fechaArribo,fechaLimDev,calculoFecha,pesoKg,detalle,facSoftrain,
		facturaApoyo,naviera,numBillOflanding,fechaDev,placa,empresa,conductor,
		tamCont,contenedor,cliente,remitConsig,tramo,id_usuario) values
		('$numRegistro','$fecha','$fechaAsignacion','$fechaArribo','$fechaLimDev2',
		null,'$peso','$detalle','$uploadFS',null,'$naviera',
		null,'$fechaDev','$placa','$empresa','$conductor','$tamCont',
		'$contenedor','$cliente','$remitConsig','$tramo',$id_usuario)";
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
}elseif(is_uploaded_file($_FILES['ficheroFA']['tmp_name'])){
	$ruta = "../Ficheros/";// creamos las variables para los ficheros
	$nombreFA=trim($_FILES['ficheroFA']['name']); //captura del nombre
	$extFA=substr($nombreFA, strrpos($nombreFA, '.'));//capturamos el formato de la imagen
	if(in_array($extFA,$formatos)) { // pregunta por el formato de la imagen
	$nombreFA=str_replace(" ", "", $nombreFA);//sustituyendo una exprecion regular
	$uploadFA=$ruta . $nombreFA;
	if(!file_exists($uploadFA)) { // verificar si el archivo existe en la BD.
	if(move_uploaded_file($_FILES['ficheroFA']['tmp_name'], $uploadFA)) {// movemos el archivo a su ubicacion
		//echo "Movidos";
		if($naviera=='Mapag Lloyd'||$naviera=='MSC'||$naviera=='Maersk'||$naviera=='Cosco'|| $naviera=='Evergreen lin'||$naviera=='Sea Land'||$naviera=='CSAV'){
			//$today = date('y-m-d');
			$fechaLimDev2 = strtotime('+21 day', strtotime($fechaArribo));
			$fechaLimDev2 = date ('y-m-d', $fechaLimDev2);
		//Preparamos la orden SQL
		$query="insert into train (numRegistro,fecha,fechaAsignacion,
		fechaArribo,fechaLimDev,calculoFecha,pesoKg,detalle,facSoftrain,
		facturaApoyo,naviera,numBillOflanding,fechaDev,placa,empresa,conductor,
		tamCont,contenedor,cliente,remitConsig,tramo,id_usuario) values
		('$numRegistro','$fecha','$fechaAsignacion','$fechaArribo','$fechaLimDev2',
		null,'$peso','$detalle',null,'$uploadFA','$naviera',
		null,'$fechaDev','$placa','$empresa','$conductor','$tamCont',
		'$contenedor','$cliente','$remitConsig','$tramo',$id_usuario)";
		}elseif($naviera=='CMA CGM'||$naviera=='Hambug Sud'){
			//$today = date('y-m-d');
			$fechaLimDev2 = strtotime('+20 day', strtotime($fechaArribo));
			$fechaLimDev2 = date ('y-m-d', $fechaLimDev2);
		//Preparamos la orden SQL
		$query="insert into train (numRegistro,fecha,fechaAsignacion,
		fechaArribo,fechaLimDev,calculoFecha,pesoKg,detalle,facSoftrain,
		facturaApoyo,naviera,numBillOflanding,fechaDev,placa,empresa,conductor,
		tamCont,contenedor,cliente,remitConsig,tramo,id_usuario) values
		('$numRegistro','$fecha','$fechaAsignacion','$fechaArribo','$fechaLimDev2',
		null,'$peso','$detalle',null,'$uploadFA','$naviera',
		null,'$fechaDev','$placa','$empresa','$conductor','$tamCont',
		'$contenedor','$cliente','$remitConsig','$tramo',$id_usuario)";
		}elseif($naviera=='Seabord Marine'){
			//$today = date('y-m-d');
			$fechaLimDev2 = strtotime('+22 day', strtotime($fechaArribo));
			$fechaLimDev2 = date ('y-m-d', $fechaLimDev2);
		//Preparamos la orden SQL
		$query="insert into train (numRegistro,fecha,fechaAsignacion,
		fechaArribo,fechaLimDev,calculoFecha,pesoKg,detalle,facSoftrain,
		facturaApoyo,naviera,numBillOflanding,fechaDev,placa,empresa,conductor,
		tamCont,contenedor,cliente,remitConsig,tramo,id_usuario) values
		('$numRegistro','$fecha','$fechaAsignacion','$fechaArribo','$fechaLimDev2',
		null,'$peso','$detalle',null,'$uploadFA','$naviera',
		null,'$fechaDev','$placa','$empresa','$conductor','$tamCont',
		'$contenedor','$cliente','$remitConsig','$tramo',$id_usuario)";
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
}elseif((is_uploaded_file($_FILES['ficheroFS']['tmp_name']))==null && (is_uploaded_file($_FILES['ficheroFA']['tmp_name']))==null){
	if($naviera=='Mapag Lloyd'||$naviera=='MSC'||$naviera=='Maersk'||$naviera=='Cosco'|| $naviera=='Evergreen lin'||$naviera=='Sea Land'||$naviera=='CSAV'){
		//$today = date('y-m-d');
		$fechaLimDev2 = strtotime('+21 day', strtotime($fechaArribo));
		$fechaLimDev2 = date ('y-m-d', $fechaLimDev2);
	//Preparamos la orden SQL
	$query="insert into train (numRegistro,fecha,fechaAsignacion,
	fechaArribo,fechaLimDev,calculoFecha,pesoKg,detalle,facSoftrain,
	facturaApoyo,naviera,numBillOflanding,fechaDev,placa,empresa,conductor,
	tamCont,contenedor,cliente,remitConsig,tramo,id_usuario) values
	('$numRegistro','$fecha','$fechaAsignacion','$fechaArribo','$fechaLimDev2',
	null,'$peso','$detalle',null,null,'$naviera',
	null,'$fechaDev','$placa','$empresa','$conductor','$tamCont',
	'$contenedor','$cliente','$remitConsig','$tramo',$id_usuario)";
	}elseif($naviera=='CMA CGM'||$naviera=='Hambug Sud'){
		//$today = date('y-m-d');
		$fechaLimDev2 = strtotime('+20 day', strtotime($fechaArribo));
		$fechaLimDev2 = date ('y-m-d', $fechaLimDev2);
	//Preparamos la orden SQL
	$query="insert into train (numRegistro,fecha,fechaAsignacion,
	fechaArribo,fechaLimDev,calculoFecha,pesoKg,detalle,facSoftrain,
	facturaApoyo,naviera,numBillOflanding,fechaDev,placa,empresa,conductor,
	tamCont,contenedor,cliente,remitConsig,tramo,id_usuario) values
	('$numRegistro','$fecha','$fechaAsignacion','$fechaArribo','$fechaLimDev2',
	null,'$peso','$detalle',null,null,'$naviera',
	null,'$fechaDev','$placa','$empresa','$conductor','$tamCont',
	'$contenedor','$cliente','$remitConsig','$tramo',$id_usuario)";
	}elseif($naviera=='Seabord Marine'){
		//$today = date('y-m-d');
		$fechaLimDev2 = strtotime('+22 day', strtotime($fechaArribo));
		$fechaLimDev2 = date ('y-m-d', $fechaLimDev2);
	//Preparamos la orden SQL
	$query="insert into train (numRegistro,fecha,fechaAsignacion,
	fechaArribo,fechaLimDev,calculoFecha,pesoKg,detalle,facSoftrain,
	facturaApoyo,naviera,numBillOflanding,fechaDev,placa,empresa,conductor,
	tamCont,contenedor,cliente,remitConsig,tramo,id_usuario) values
	('$numRegistro','$fecha','$fechaAsignacion','$fechaArribo','$fechaLimDev2',
	null,'$peso','$detalle',null,null,'$naviera',
	null,'$fechaDev','$placa','$empresa','$conductor','$tamCont',
	'$contenedor','$cliente','$remitConsig','$tramo',$id_usuario)";
	}
	if($conexion->query($query)===true){
		header("location: Formulario.php");
	}else{
		die('error al insertar datos'.$conexion->error);
	}
}else{
	echo "no se pudo subir el fichero 4";
}
?>
