<?php
session_start();
if(!isset($_SESSION['usuario'])){
	header('location: index.php');
}

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

  
  <!-- Full Page Intro -->

		<form method="post" action="enviar.php">
		<fieldset>			
			<legend>Ingrese la informacion de la carga</legend>
		<table border=0>			
			<tr>
				<td>
					Nro. Registro:
				</td>
				<td>
					<input type="text" name="numRegistro" required />					
				</td>
			</tr>
			<tr>
				<td>
					<label>Fecha:
				</td>
				<td>
					<input type="date" name="fecha" required="true" />
					</label>
				</td>					
			</tr>
			<tr>
				<td>
					<label>Fecha de asignación:
				</td>
				<td>
					<input type="date" name="fechaAsignacion" />
					</label>
				</td>					
			</tr>
			<tr>
				<td>
					<label>Fecha de arribo
				</td>
				<td>
					<input type="date" name="fechaArribo" />
					</label>
				</td>					
			</tr>
			<!--<tr>
				<td>
					Fecha lim. Devolucion:
				</td>
				<td>
					<input type="date" name="fechaLimDev">
				</td>					
			</tr>-->
			<tr>
				<td>
					<label>Fecha devolucion:
				</td>
				<td>
					<input type="date" name="fechaDev" readonly="readonly"/>
					</label>
				</td>					
			</tr>
			<tr>
				<td>
					<label>Placa de automovil:
				</td>
				<td>
					<input type="text" name="placa" />
					</label>
				</td>					
			</tr>
			<tr>
				<td>
					<label>Empresa:
				</td>
				<td>
					<input type="text" name="empresa" />
					</label>
				</td>					
			</tr>
			<tr>
				<td>
					<label>Conductor:
				</td>
				<td>
					<input type="text" name="conductor" />
					</label>
				</td>					
			</tr>
			<tr>
				<td>
					Naviera:
				</td>
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
				<td>
					<label>Bill of lading:
				</td>
				<td>
					<input type="text" name="bol" />
					</label>
				</td>					
			</tr>
			<tr>
				<td>
					<label>tamanho de contenedor:
				</td>
				<td>
					<input type="text" name="tamCont" />
					</label>
				</td>					
			</tr>
			<tr>
				<td>
					<label>Contenedor:
				</td>
				<td>
					<input type="text" name="contenedor" />
					</label>
				</td>					
			</tr>
			<tr>
				<td>
					<label>Cliente:
				</td>
				<td>
					<input type="text" name="cliente" />
					</label>
				</td>					
			</tr>
			<tr>
				<td>
					<label>Remit/Consig:
				</td>
				<td>
					<input type="text" name="remitConsig" />
					</label>
				</td>					
			</tr>
			<tr>
				<td>
					<label>Peso:
				</td>
				<td>
					<input type="text" name="peso" />
					</label>
				</td>					
			</tr>
			<tr>
				<td>
					<label>Detalle:
				</td>
				<td>
					<input type="text" name="detalle" />
					</label>
				</td>					
			</tr>
			<tr>
				<td>
					<label>Tramo de la carga:
				</td>
				<td>
					<input type="text" name="tramo" />
					</label>
				</td>					
			</tr>
			<tr>
				<td>
					<label>Factura softrain:
				</td>
				<td>
					<input type="text" name="facSoftrain" />
					</label>
				</td>					
			</tr>
			<tr>
				<td>
					<label>Factura apoyo:
				</td>
				<td>
					<input type="text" name="facApoyo" />
					</label>
				</td>					
			</tr>			
			<tr>
				<td></td>
				<td>
					<input type="submit" value="enviar"/>
				</td>	
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
