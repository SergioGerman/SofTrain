<?php
session_start();
if(!isset($_SESSION['usuario'])){
	header('location: index.php');
}
//recuperando los datos de la session
$usuario=$_SESSION['usuario'];
?>
<html>
	<head>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="../css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="../css/style.min.css" rel="stylesheet">

  <link href="../csscomp/estilos.css" rel="stylesheet">

  <script src="../csscomp/sweetalert.min.js"></script>
    <script src="../csscomp/alertas.js"></script>
    <link rel="stylesheet" type="text/css" href="../csscomp/sweetalert.css">

  <style type="text/css">
    html,
    body,
    header,
    .view {
      height: 100%;
    }

    @media (max-width: 740px) {
      html,
      body,
      header,
      .view {
        height: 1000px;
      }
    }

    @media (min-width: 800px) and (max-width: 850px) {
      html,
      body,
      header,
      .view {
        height: 650px;
      }
    }
    @media (min-width: 800px) and (max-width: 850px) {
              .navbar:not(.top-nav-collapse) {
                  background: #1C2331!important;
              }
          }
  </style>
		<title>Formulario</title>
	</head>
	<body>
		   <!-- Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
    <div class="container">

      <!-- Brand -->
      <a class="navbar-brand" href="#" >
        <strong>SOFTRAIN</strong>
      </a>

      <!-- Collapse -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Links -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <!-- Left -->
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">
						Area de Trabajo
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <!--  <li class="nav-item">
            <a class="nav-link" href="https://mdbootstrap.com/docs/jquery/" target="_blank">Registros</a>
          </li>-->


        </ul>

        <!-- Right -->
        <ul class="navbar-nav nav-flex-icons">

          <li class="nav-item">
            <a href="logout.php"
							target="_blank">
							<button type="button" class="btn btn-orange btn-sm">
							Cerrar Sesion
				</button>
            </a>
          </li>
        </ul>

      </div>

    </div>
  </nav>
  <!-- Navbar -->


		 <br><br><br>

      <?php
		  require('../vista/vistaAgenda.php')
		  ?>
			<?php
			foreach ($conexion->query("SELECT * from usuarios where usuario='$usuario'") as $row){
				$id_usuario=$row['id'];
			}
			?>

  <!-- Full Page Intro -->

		<form method="post" action="enviar.php" enctype="multipart/form-data">
			<input type="hidden" name="id_usuario" value="<?php echo $id_usuario; ?>">
		<fieldset>
			<legend>Ingrese la informacion de la carga</legend>
		<table border=0>
			<tr>
				<td>Nro. Registro:</td>
				<td><input type="text" name="numRegistro" required /></td>
			</tr>
			<tr>
				<td><label>Fecha:</label></td>
				<td><input type="date" name="fecha" required="true" /></td>
			</tr>
			<tr>
				<td><label>Fecha de asignación:</label></td>
				<td><input type="date" name="fechaAsignacion" /></td>
			</tr>
			<tr>
				<td><label>Fecha de arribo</label></td>
				<td><input type="date" name="fechaArribo" /></td>
			</tr>
			<tr>
				<td><label>Fecha devolucion:</label></td>
				<td><input type="date" name="fechaDev"/></td>
			</tr>
			<tr>
				<td><label>Placa de automovil:</label></td>
				<td><input type="text" name="placa" /></td>
			</tr>
			<tr>
				<td><label>Empresa:</label></td>
				<td><input type="text" name="empresa" /></td>
			</tr>
			<tr>
				<td><label>Conductor:</label></td>
				<td><input type="text" name="conductor" /></td>
			</tr>
			<tr>
				<td>Naviera:</td>
				<td>
					<select name="naviera" >
					<option value="Mapag Lloyd">Mapag Lloyd</option>
					<option value="MSC">MSC</option>
					<option value="Maersk">Maersk</option>
					<option value="Hambug Sud">Hambug Sud</option>
					<option value="Cosco">Cosco</option>
					<option value="CMA CGM">CMA CGM</option>
					<option value="Seabord Marine">Seabord Marine</option>
					<option value="Evergreen lin">Evergreen lin</option>
					<option value="Sea Land">Sea Land</option>
					<option value="CSAV">CSAV</option>
					</select>
				</td>
			</tr>
			<tr>
				<td><label>tamanho de contenedor:</label></td>
				<td><input type="number" name="tamCont" step="any"/></td>
			</tr>
			<tr>
				<td><label>Contenedor:</label></td>
				<td><input type="text" name="contenedor" /></td>
			</tr>
			<tr>
				<td><label>Cliente:</label></td>
				<td><input type="text" name="cliente" /></td>
			</tr>
			<tr>
				<td><label>Remit/Consig:</label></td>
				<td><input type="text" name="remitConsig" /></td>
			</tr>
			<tr>
				<td><label>Peso:</label></td>
				<td><input type="number" name="peso" step="any"/></td>
			</tr>
			<tr>
				<td><label>Detalle:</label></td>
				<td><input type="text" name="detalle" /></td>
			</tr>
			<tr>
				<td><label>Tramo de la carga:</label></td>
				<td><input type="text" name="tramo" /></td>
			</tr>
			<tr>
				<td><label>Factura Softrain:</label></td>
				<td><input type="file" name="ficheroFS" /></td>
			</tr>
			<tr>
				<td><label>Factura Apoyo:</label></td>
				<td><input type="file" name="ficheroFA" /></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="enviar"/></td>
			</tr>
		</table>
		</fieldset>
		</form>

		<script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="../js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="../js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="../js/mdb.min.js"></script>
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();
  </script>
	</body>
</html>
