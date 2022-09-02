<?php
include('conexion.php');
session_start();

if(isset($_POST['registrar'])){
	$nombre = $_POST['nombre'];
	$descripcion = $_POST['descripcion'];
	$categoria = $_POST['categorias'];
	$precio = $_POST["precio"];
	
	if($categoria != 0){
		if($query = $conexion->prepare("INSERT INTO platillos(nombre,descripcion,tipo,precio) VALUES(?,?,?,?)")){
			$query->bind_Param('ssid',$nombre,$descripcion,$categoria,$precio);
			$result = $query->execute();
		}
		else{
			$error = $conexion->errno . ' ' . $conexion->error;
			echo "Error> ".$error; // 1054 Unknown column 'foo' in 'field list'
		}
		if ($result) {
			print('<script type="text/javascript"> alert("Platillo Guardado"); </script>');
			header("location:nuevoplatillo.php");
		} else {
			echo '<script type="text/javascript"> alert("Error: Servidor no disponible"); window.location.href="nuevoplatillo.php"; </script>';
		}
	}
	else{
		echo'<script type="text/javascript"> alert("Debes seleccionar una categoria"); window.location.href="nuevoplatillo.php"; </script>';
	}
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="imagenes/icono.ico" />

  <title>El Manjar. Nuevo platillo</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">        <!-- Google web font "Open Sans" -->
  <link rel="stylesheet" href="css/bootstrap.min.css">                                            <!-- https://getbootstrap.com/ -->
  <link rel="stylesheet" href="css/fontawesome-all.min.css">                                      <!-- Font awesome -->
  <link rel="stylesheet" href="css/tooplate-style.css">                                           <!-- Templatemo style -->

  <script>
    var renderPage = true;

    if (navigator.userAgent.indexOf('MSIE') !== -1
      || navigator.appVersion.indexOf('Trident/') > 0) {
      /* Microsoft Internet Explorer detected in. */
      alert("Please view this in a modern browser such as Chrome or Microsoft Edge.");
      renderPage = false;
    }
  </script>

</head>

<body>

  <!-- Loader -->
  <div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
  </div>

  <div class="tm-main">

    <div class="tm-welcome-section">
      <div class="container tm-navbar-container">
        <div class="row">
          <div class="col-xl-12">
            <nav class="navbar navbar-expand-sm">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a href="index.php" class="nav-link tm-nav-link tm-text-white active">El manjar</a>
                </li>
                <li class="nav-item">
                  <a href="menu.php" class="nav-link tm-nav-link tm-text-white">Menú</a>
                </li>
                <li class="nav-item">
                  <a href="eventos.php" class="nav-link tm-nav-link tm-text-white">Servicio de eventos</a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>

      <div class="container text-center tm-welcome-container">
        <div class="tm-welcome">
          <!--i class="fas tm-fa-big fa-music tm-fa-mb-big"></i -->
		<img src= "imagenes/logo.png" width="600" class = "fas tm-fa-big tm-fa-mb-big img-fluid"> 
        </div>
      </div>

    </div>


    <div class="container">
      <!--Facebook-->
		<div class="tm-bg-gray">
		<iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Frestauranteelmanjar.com%2F&width=450&layout=standard&action=like&size=large&share=true&height=35&appId" width="450" height="35" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
		</div>

      <div class="row tm-mt-big tm-about-row tm-mb-medium">
        <div class="col-xl-12 col-lg-12 col-md-12 col-xs-12 tm-contact-col">
          <div class="tm-contact-left tm-bg-image tm-text-white text-right p-md-5 p-4">
            <i class="fas fa-3x fa-utensils mb-4"></i>
            <h2 class="tm-media-2-header">Datos del platillo</h2>
          </div>
          <div class="tm-bg-image tm-contact-middle">
<!-- Formulario -->
            <form action="" method="post" name="nuevoplatillo" enctype="multipart/form-data">
              <div class="form-group mb-4">
                <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre del platillo" required/>
              </div>
               <div class="form-group mb-4">
                <textarea rows="8" id="descripcion" name="descripcion" class="form-control" placeholder="Descripción del platillo" required></textarea>
              </div>
				<div class="form-group mb-4">
                <select name="categorias" class="tm-select" id="categorias" required>
                  <option value="0">Tipo de platillo</option>
                  <option value="1">Ensaladas</option>
                  <option value="2">Cremas</option>
                  <option value="3">Sopas</option>
                  <option value="4">Pasta</option>
				  <option value="5">Pollo</option>
				  <option value="6">Res</option>
				  <option value="7">Cerdo</option>
				  <option value="8">Pescados y mariscos</option>
				  <option value="9">Bebidas</option>
				  <option value="10">Bar</option>
				  <option value="11">Postres</option>
				  <option value="12">Combos</option>
                </select>
              </div>
			<div class="form-group mb-4">
                <input type="text" pattern="[0-9.]+" id="precio" name="precio" class="form-control" placeholder="Precio" />
			</div>	
              
              <div class="form-group mb-0">
                <button type="submit" class="btn btn-secondary" name="registrar">Guardar</button>
              </div>
            </form>
<!--FIN de formulario-->
          </div>
          <div class="tm-bg-image tm-contact-right">
            <!-- GOOGLE MAP -->
             
             <div>
               <h2 class="tm-media-2-header tm-text-pink-dark mb-3">Revisa los datos</h2>
               <p class="mb-0 tm-text-white">Verifica la informacion antes de guardar</p>
			 </br>
             </div>
          </div>
        </div>
      </div>

      
      <footer class="row tm-about-row">
        <div class="col-xl-12">
          <p class="text-center p-4">Copyright &copy; <span class="tm-current-year">2018</span> Quetzal Software 
          
          // Diseño: Tooplate & Quetzal Software</p>
        </div>
      </footer>
    </div> <!-- .container -->

  </div> <!-- .main -->

  <!-- load JS -->
  <script src="js/jquery-3.2.1.slim.min.js"></script> <!-- https://jquery.com/ -->
  <script src="js/bootstrap.min.js"></script>         <!-- https://getbootstrap.com/ -->
  <script>

    /* DOM is ready
    ------------------------------------------------*/
    $(function () {

      if (renderPage) {
        $('body').addClass('loaded');
      }

      $('.tm-current-year').text(new Date().getFullYear());  // Update year in copyright
    });

  </script>
</body>
</html>
