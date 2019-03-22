<?php
require('../modelo/conexion.php');

$id_train=$_POST['id_train'];
// fichero upload
$formatos =array('.jpg', '.png', '.pdf');
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
								//header("location: Formulario.php");
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
