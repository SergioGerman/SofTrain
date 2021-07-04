<?php require('modelo/conexion.php'); ?>
<html>
	<head>
	<link rel="stylesheet" href="frontlogin/assets/css/main.css" />
		
	
	<title>Login</title>
	</head>
	
	<body>
	<header id="header">
	<h1><font color="#FF9933">Sof</font>traiN</h1>
	<!--<p>sistema</p>-->
	</header>
		<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" > 
		Usuario:
		<input id="usuario" name="usuario" type="text" >
		Contraseña:
		<input id="password" name="password" type="password"><br/>
		<input name="login" type="submit" value="Ingresar">

		</form> 
		
		
		
		<div style = "font-size:16px; color:#cc0000;"><?php echo isset($error) ? utf8_decode($error) : '' ; ?></div>
		
		<footer id="footer">
		
				<ul class="icons">
					
					<li><a href="#" class="icon fa-youtube"><span class="label">Twitter</span></a></li>
                    <li><a href="#" class="icon fa-facebook"><span class="label">Twitter</span></a></li>
                    <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
				</ul>
				<ul class="copyright">
					<li>softrain-srl.com</a></li>
				</ul>

			</footer>
	<script src="frontlogin/assets/js/main.js"></script>
	</body>
</html>
<?php	
	session_start();
	
	if(isset($_SESSION["usuario"])){
		header("Location: controlador/Formulario.php");
	}
	
	if(!empty($_POST))
	{
		$usuario = mysqli_real_escape_string($conexion,$_POST['usuario']);
		$password = mysqli_real_escape_string($conexion,$_POST['password']);
		$error = '';
		
		//$sha1_pass = sha1($password);
		
		$sql = "SELECT usuario, password FROM usuarios WHERE usuario = '$usuario' AND password = '$password'";
		$result=$conexion->query($sql);
		$rows = $result->num_rows;
		
		if($rows > 0) {
			$row = $result->fetch_assoc();
			$_SESSION['usuario'] = $row['usuario'];
			$_SESSION['pass'] = $row['password'];
				
			header("location: Controlador/Formulario.php");
			} else {
			$error = "El nombre o contraseña son incorrectos";
			echo($error);
		}
	}
?>
