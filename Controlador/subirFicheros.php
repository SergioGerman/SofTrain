<?php
require('../modelo/conexion.php');

$id_train=$_POST['id_train'];
// fichero upload
$formatos =array('.jpg', '.png', '.pdf');
if ((is_uploaded_file($_FILES['ficheroFS']['tmp_name'])) && (is_uploaded_file($_FILES['ficheroFA']['tmp_name']))) { // preguntar si los 2 archivos estan cargado
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
	$queryF="update train set facSoftrain='$nombreFS', facturaApoyo='$nombreFA' where id=$id_train";
	if($conexion->query($queryF)===true){
		header("location: ../vista/verFicheros.php?id=$id_train");
	}else{
		die('error al insertar el archivo'.$conexion->error);
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
		$queryF="update train set facSoftrain='$nombreFS' where id=$id_train";
	if($conexion->query($queryF)===true){
		header("location: ../vista/verFicheros.php?id=$id_train");
	}else{
		die('error al insertar el archivo'.$conexion->error);
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
	$nombreFA=str_replace(" ", "", $nombreFA);//sustituyendo una exprecion regular
	$uploadFA=$ruta . $nombreFA;
	if(!file_exists($uploadFA)) { // verificar si el archivo existe en la BD.
	if(move_uploaded_file($_FILES['ficheroFA']['tmp_name'], $uploadFA)) {// movemos el archivo a su ubicacion	
		$queryF="update train set facturaApoyo='$nombreFA' where id=$id_train";
	if($conexion->query($queryF)===true){
		header("location: ../vista/verFicheros.php?id=$id_train");
	}else{
		die('error al insertar el archivo'.$conexion->error);
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
}

if(is_uploaded_file($_FILES['fichero']['tmp_name'])){// preguntar si existe un archivo cargado
$ruta = "../Ficheros/";// creamos las variables para los ficheros
$nombreFinal=trim($_FILES['fichero']['name']); //eliminar los espacios en blanco
$ext=substr($nombreFinal, strrpos($nombreFinal, '.'));//capturamos el formato de la imagen
if(in_array($ext,$formatos)){
$nombreFinal=str_replace(" ", "", $nombreFinal);//sustituyendo una exprecion regular
$upload=$ruta . $nombreFinal;
if(!file_exists($upload)){ // verificar si el archivo existe
if(move_uploaded_file($_FILES['fichero']['tmp_name'], $upload)){// movemos el archivo a su ubicacion
	echo "Movido";
	$queryFile="insert into ficheros (nombre, ruta, tipo, size, id_train) values
							('".$_FILES['fichero']['name']."','$nombreFinal','".$_FILES['fichero']['type']."',
							'".$_FILES['fichero']['size']."','$id_train' )";
	if($conexion->query($queryFile)===true){
		header("location: ../vista/verFicheros.php?id=$id_train");
	}else{
		die('error al insertar el archivo'.$conexion->error);
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
}else{
	echo "no se cargo ningun archivo archivo";
}
?>
