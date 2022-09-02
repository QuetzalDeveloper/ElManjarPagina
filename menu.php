<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="imagenes/icono.ico" />

  <title>El manjar. Menú.</title>
<!--

Template 2101 Insertion

http://www.tooplate.com/view/2101-insertion

-->
 <link rel="stylesheet" href="css/carrus.css"> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <!-- load CSS -->
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
                <li class="nav-item active">
                  <a href="index.html" class="nav-link tm-nav-link tm-text-white ">El manjar</a>
                </li>
                <li class="nav-item">
                  <a href="menu.php" class="nav-link tm-nav-link tm-text-white active">Menú</a>
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
		
		<!-- Carrusel de imagenes-->
		<div class="tm-tab-content-container">
		  <div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
			  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			  <li data-target="#myCarousel" data-slide-to="1"></li>
			  <li data-target="#myCarousel" data-slide-to="2"></li>
				<li data-target="#myCarousel" data-slide-to="3"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner">
			  <div class="item active">
				<img src="imagenes/foto1.jpg" alt="Promo 1" style="width:100%;">
			  </div>

			  <div class="item">
				<img src="imagenes/foto2.jpg" alt="Promo 2" style="width:100%;">
			  </div>

			  <div class="item">
				<img src="imagenes/foto3.jpg" alt="Promo 3" style="width:100%;">
			  </div>
				
				<div class="item">
				<img src="imagenes/foto4.jpg" alt="Promo 4" style="width:100%;">
			  </div>
			</div>

			<!-- Left and right controls -->
			<a class="left carousel-control" href="#myCarousel" data-slide="prev">
			  <span class="glyphicon glyphicon-chevron-left"></span>
			  <span class="sr-only">Anterior</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" data-slide="next">
			  <span class="glyphicon glyphicon-chevron-right"></span>
			  <span class="sr-only">Siguiente</span>
			</a>
		  </div>
			</div>
<!-- Fin de caruusel de imagenes-->		

       <div class="row mb-5">
        <div class="col-xl-12">
          <div class="media-boxes">
	<!--
			<div align="center">
          	<p class="tm-site-description" style="color: black; font-size: 300%" >Domingos de Buffet</p>
		  	</div>
		
			<div >
              <div class="media-body tm-bg-image">
				<img src="imagenes/logo.png" width="100" height="100" alt="Image" class="mr-3">
                <div class="tm-description-box" >
                  <h5 class="tm-text-white">Adulto</h5>
					<p class="mb-0 tm-text-gold"><strong>$ 250</strong></p>
                </div>
              </div>
            </div>

			  
			<div>
              <div class="media-body tm-bg-image">
				<img src="imagenes/logo.png" width="100" height="100" alt="Image" class="mr-3">
                <div class="tm-description-box">
                  <h5 class="tm-text-white">Niños (menores de 10 años)</h5>
					<p class="mb-0 tm-text-gold"><strong>$ 150</strong></p>
                </div>
              </div>
            </div>
-->

<?php
include("conexion.php");
//session_start();
$query = mysqli_query($conexion, "SELECT * FROM platillos ORDER BY tipo");
if($query){
	$filas = $query -> num_rows;
}
else{
	$filas = 0;
}
$flag = 0;
if($filas > 0){
	for($x = 0; $x < $filas; $x++){
			$registro = $query -> fetch_object();
		if($registro->tipo == 1 && $flag != 1){
			print('<div align="center">
          	<p class="tm-site-description" style="color: black; font-size: 300%" >Ensaladas</p>
		  	</div>');
			$flag = 1;
		}
		elseif($registro->tipo == 2 && $flag != 2){
			print('<div align="center">
          	<p class="tm-site-description" style="color: black; font-size: 300%" >Cremas</p>
		  	</div>');
			$flag = 2;
		}
		elseif($registro->tipo == 3 && $flag != 3){
			print('<div align="center">
          	<p class="tm-site-description" style="color: black; font-size: 300%" >Sopas</p>
		  	</div>');
			$flag = 3;
		}
		elseif($registro->tipo == 4 && $flag != 4){
			print('<div align="center">Plato principal
          	<p class="tm-site-description" style="color: black; font-size: 300%" >Pastas</p>
		  	</div>');
			$flag = 4;
		}
		elseif($registro->tipo == 5 && $flag != 5){
			print('<div align="center">
          	<p class="tm-site-description" style="color: black; font-size: 300%" >Pollo</p>
		  	</div>');
			$flag = 5;
		}
		elseif($registro->tipo == 6 && $flag != 6){
			print('<div align="center">
          	<p class="tm-site-description" style="color: black; font-size: 300%" >Res</p>
		  	</div>');
			$flag = 6;
		}
		elseif($registro->tipo == 7 && $flag != 7){
			print('<div align="center">
          	<p class="tm-site-description" style="color: black; font-size: 300%" >Cerdo</p>
		  	</div>');
			$flag = 7;
		}
		elseif($registro->tipo == 8 && $flag != 8){
			print('<div align="center">
          	<p class="tm-site-description" style="color: black; font-size: 300%" >Pescados y mariscos</p>
		  	</div>');
			$flag = 8;
		}
		elseif($registro->tipo == 9 && $flag != 9){
			print('<div align="center">
          	<p class="tm-site-description" style="color: black; font-size: 300%" >Bebidas</p>
		  	</div>');
			$flag = 9;
		}
		elseif($registro->tipo == 10 && $flag != 10){
			print('<div align="center">
          	<p class="tm-site-description" style="color: black; font-size: 300%" >Bar</p>
		  	</div>');
			$flag = 10;
		}
		elseif($registro->tipo == 11 && $flag != 11){
			print('<div align="center">
          	<p class="tm-site-description" style="color: black; font-size: 300%" >Postres</p>
		  	</div>');
			$flag = 11;
		}
		elseif($registro->tipo == 12 && $flag != 12){
			print('<div align="center">
          	<p class="tm-site-description" style="color: black; font-size: 300%" >Combos</p>
		  	</div>');
			$flag = 12;
		}
		
		if(empty($registro->imagen)){
			print('<div>
				  <div class="media-body tm-bg-image">
					<img src="imagenes/logo.png" width="100" height="100" alt="Image" class="mr-3">
					<div class="tm-description-box">
					  <h5 class="tm-text-white">'.$registro->nombre.'</h5>
						<p class="mb-0 tm-text-gold"><strong>$ '.$registro->precio.'</strong></p>
					</div>
				  </div>
				</div>');
		}
		else{
			print('<div>
				  <div class="media-body tm-bg-image">
					<img src="'.$registro->imagen.'" width="100" height="100" alt="Image" class="mr-3">
					<div class="tm-description-box">
					  <h5 class="tm-text-white">'.$registro->nombre.'</h5>
						<p class="mb-0 tm-text-gold"><strong>$ '.$registro->precio.'</strong></p>
					</div>
				  </div>
				</div>');
		}
	}

}
?>
		  
          </div> <!-- media-boxes -->
        </div>
      </div>


      <footer class="row">
        <div class="col-xl-12">
          <p class="text-center p-4">Copyright &copy; <span class="tm-current-year">2018</span> Quetzal Software 
          
          // Design:  Quetzal Software & Tooplate</p>
        </div>
      </footer>
    </div> <!-- .container -->

  </div> <!-- .main -->

  <!-- load JS -->
  <script src="js/jquery-3.2.1.slim.min.js"></script> <!-- https://jquery.com/ -->
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