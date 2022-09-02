<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Insertion - Contact Page</title>
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
                <li class="nav-item">
                  <a href="index.html" class="nav-link tm-nav-link tm-text-white">El manjar</a>
                </li>
                <li class="nav-item">
                  <a href="menu.php" class="nav-link tm-nav-link tm-text-white">Menú</a>
                </li>
                <li class="nav-item">
                  <a href="eventos.php" class="nav-link tm-nav-link tm-text-white active">Servicio de eventos</a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>

      <div class="container text-center tm-welcome-container">
        <div class="tm-welcome">
          <!--i class="fas tm-fa-big fa-music tm-fa-mb-big"></i-->
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
		
		</br>
		
       <div class="row tm-mt-big tm-about-row tm-mb-medium">
        <div class="col-xl-12 col-lg-12 col-md-12 col-xs-12 tm-contact-col">
          <div class="tm-contact-left tm-bg-image tm-text-white text-right p-md-5 p-4">
            <i class="fas fa-3x fa-comments mb-4"></i>
            <h2 class="tm-media-2-header">Contacto</h2>
          </div>
          <div class="tm-bg-image tm-contact-middle">
            <form action="#" method="post">
              <div class="form-group mb-4">
                <input type="text" id="contact_name" name="contact_name" class="form-control" placeholder="Nombre" required/>
              </div>
              <div class="form-group mb-4">
                <input type="email" id="contact_email" name="contact_email" class="form-control" placeholder="Correo" required/>
              </div>
              <div class="form-group mb-4">
                <input type="tel" id="contact_phone" name="contact_phone" class="form-control" placeholder="Teléfono" required/>
              </div>
              <div class="form-group mb-4">
                <textarea rows="8" id="contact_message" name="contact_message" class="form-control" placeholder="Mensaje" required></textarea>
              </div>
              <div class="form-group mb-0">
                <button type="submit" class="btn btn-secondary">Envíar</button>
              </div>
            </form>
          </div>
			<div class="tm-bg-gray tm-contact-right">
            <!-- GOOGLE MAP -->
             <div id="google-map" class="text-center mb-5">
             <!-- How to change your own map point
                    1. Go to Google Maps
                    2. Click on your location point
                    3. Click "Share" and choose "Embed map" tab
                    4. Copy only URL and paste it within the src="" field below
              -->
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.9448072327227!2d-98.91153418468375!3d19.414790546279907!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1e1cf498ef389%3A0x37a80a6194fa317a!2sRestaurante%20Gourmet%20El%20Manjar!5e0!3m2!1ses-419!2smx!4v1621555536441!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
             </div>

             <div>
				 <h2 class="tm-media-2-header tm-text-gold mb-3">Ubicación</h2>
				  <p class="mb-4">Avenida Libertad #90. Cabecera municipal. Chicoloapan de Juárez. Código postal 56370. Estado de México.</p>
				  <h2 class="tm-media-2-header tm-text-gold mb-3">Horarios</h2>
				  <p class="mb-4">Martes a Sábado de 12:00 a 20:00 horas</p>
				  <p class="mb-4">Domingos de buffet de 11:00 a 20:00 horas</p>
				  <h2 class="tm-media-2-header tm-text-gold mb-3">Teléfonos:</h2>
				  <p class="mb-4">5565069373</p>
				  <p class="mb-4">5527430625</p>
             </div>
          </div>
        </div>
      </div>

        
      
		   
          
      

      <!-- Bottom links -->
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
