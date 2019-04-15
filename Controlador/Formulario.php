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
            <a href="logout.php">
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
	

<div class="modal fade right" id="fullHeightModalRight" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true" data-backdrop="true">
    <div class="modal-dialog modal-full-height modal-right modal-notify modal-info" role="document">
      <!--Content-->
      <div class="modal-content">
        <!--Header-->
        <div class="modal-header">

			

          <p class="heading lead"><strong>INSERTAR REGISTRO</strong></p>

          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="white-text">&times;</span>
          </button>
        </div>
				<form method="post" action="enviar.php" enctype="multipart/form-data">
			<input type="hidden" name="id_usuario" value="<?php echo $id_usuario; ?>">
        <!--Body-->
        <div class="modal-body">
         <p>Complete los siguentes campos
            </p>	
						<form method="post" action="enviar.php">
				 
						<div class="md-form form-sm">
                  
                  <input id="form1" type="text" name="numRegistro" required class="form-control form-control-sm">
                  <label for="form1">Nro. Registro:</label>
                </div>

								<div class="md-form form-sm">
                  
                      <input  input type="date" name="fecha" required="true" id="form2" class="form-control form-control-sm">
                      <label class="active" for="form2">Fecha:</label>
                  </div>		
						
									<div class="md-form form-sm">
                  
                      <input  input type="date" name="fechaAsignacion" id="form3" class="form-control form-control-sm">
                      <label class="active" for="form3">Fecha de asignación:</label>
                  </div>		
			
									<div class="md-form form-sm">
                  
                      <input input type="date" name="fechaArribo" id="form4" class="form-control form-control-sm">
                      <label class="active" for="form4">Fecha de arribo:</label>
                  </div>	
			
									<div class="md-form form-sm">
                  
                      <input input type="date" name="fechaDev" id="form5" readonly="readonly" class="form-control form-control-sm">
                      <label class="active" for="form5">Fecha devolucion:</label>
                  </div>
			
									<div class="md-form form-sm">
                  
                  <input id="form6" input type="text" name="placa"  class="form-control form-control-sm">
                  <label for="form6">Placa de automovil:</label>
								</div>
								
								<div class="md-form form-sm">
                  
                  <input id="form7" type="text" name="empresa"  class="form-control form-control-sm">
                  <label for="form7">Empresa:</label>
                </div>
			
								<div class="md-form form-sm">
                  
                  <input id="form8" type="text" name="conductor"  class="form-control form-control-sm">
                  <label for="form8">Conductor:</label>
								</div>
								
								<label for="form9">Naviera:</label>
								<select class="mdb-select md-form" name="naviera" >
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


			
								<div class="md-form form-sm">
                  
                  <input id="form10" type="number" name="tamCont" step="any"  class="form-control form-control-sm">
                  <label for="form10">tamaño del contenedor:</label>
								</div>

								<div class="md-form form-sm">
                  
                  <input id="form11" type="text" name="contenedor"  class="form-control form-control-sm">
                  <label for="form11">Contenedor:</label>
								</div>
			
								<div class="md-form form-sm">
                  
                  <input id="form12" type="text" name="cliente"  class="form-control form-control-sm">
                  <label for="form12">Cliente:</label>
								</div>
			
								<div class="md-form form-sm">
                  
                  <input id="form13" type="text" name="remitConsig"  class="form-control form-control-sm">
                  <label for="form13">Remit/Consig:</label>
								</div>

								<div class="md-form form-sm">
                  
                  <input id="form14" type="number" name="peso" step="any"  class="form-control form-control-sm">
                  <label for="form14">Peso:</label>
								</div>

								<div class="md-form form-sm">
                  
                  <input id="form15" type="number" name="peso" step="any"  class="form-control form-control-sm">
                  <label for="form15">Peso:</label>
								</div>

								<div class="md-form form-sm">
                  
                  <input id="form16" type="text" name="detalle" class="form-control form-control-sm">
                  <label for="form16">Detalle:</label>
								</div>
			
								<div class="md-form form-sm">
                  
                  <input id="form17" type="text" name="tramo" class="form-control form-control-sm">
                  <label for="form17">Tramo de la carga:</label>
								</div>

								<div class="md-form form-sm">
									<label for="form18">Factura Softrain::</label>
									<br><br>
                  <input id="form18" type="file" name="ficheroFS" >
								</div>

								<div class="md-form form-sm">
								<label for="form19">Factura Apoyo:</label>
								<br><br>
                <input id="form19" type="file" name="ficheroFA" >                 
								</div>
				
			<hr>
			
   

        <!--Footer-->
				<button type="submit" class="btn btn-success">Guardar Registro</button>

            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
    </form>
        
            
         
      </div>
      <!--/.Content-->
    </div>
  </div>
  <!-- Full Height Modal Right Success Demo-->










  <!--

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
		-->

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
