<?php
//servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos
	$conexion=new mysqli("localhost","root","","softrain"); 
	
	if($conexion->connect_error){
		die("Conexion Fallida : ". $conexion->connect_error);
		exit();
	}else{
		echo ("Conexion establecida <br>");
		
	}
?>