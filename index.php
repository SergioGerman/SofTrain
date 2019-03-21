<?php require('modelo/conexion.php'); ?>
<html>
	<head>
		<title>Login</title>
	</head>

	<body>
	<table align="center">
		<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" >
			<tr>
				<label>
			<td>
				Usuario:
			</td>
			<td>
			<input id="usuario" name="usuario" type="text" ></div>
			</label>
			</td>
			</tr>
			<tr>
			<td>
			<div><label>Password:</label>
			</td>
			<td>
			<input id="password" name="password" type="password">
			</td>
			</tr>
			<tr>
			<td></td>
			<td>
			<div><input name="login" type="submit" value="login"></div>
			</td>
			</tr>
		</form>

		<br />

		<div style = "font-size:16px; color:#cc0000;"><?php echo isset($error) ? utf8_decode($error) : '' ; ?></div>
	</table>
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

		$sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND password = '$password'";
		$result=$conexion->query($sql);
		$rows = $result->num_rows;

		if($rows > 0) {
			$row = $result->fetch_assoc();
			$_SESSION['usuario'] = $row['usuario'];
			$_SESSION['id'] = $row['id'];

			header("location: Controlador/Formulario.php");
			} else {
			$error = "El nombre o contraseña son incorrectos";
			echo($error);
		}
	}
?>
