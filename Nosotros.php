<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Quienes somos</title>

  </head>
  <body>
     <!-- ----------------------------------------menu --------------------------------------------->
    
     <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #e41b22;">
      <div class="container">
      
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>     
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">

            <!-- Inicio -->
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="nosotros.php">Inicio</a>
        </li>

          <!-- Aprende   -->
            
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" aria-current="page" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Aprende</a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="nosotros.php#QuienesSomos">Quienes somos</a></li>
                <li><a class="dropdown-item" href="nosotros.php#MisiónyVisión">Visión</a></li>
                <li><a class="dropdown-item" href="nosotros.php#MisiónyVisión">Misión</a></li>
              </ul>
            </li>
          
            <form action="cerrarsesion.php" method="POST">
            <button class="btn btn-outline-success" type="submit">Cerrar Sesión</button>
            </form>

          </form>
        </div>
      </div>
    </nav>


<!--------------------------------------------- Slider / carrusel -------------------------------------------->

    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
      <!-- Indicadores -->
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>

      <!-- Imagenes -->
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="1000">
          <img src="images/carrusel3.jpg" class="d-block w-100 h-90" alt="img1">
          <div class="carousel-caption d-none d-md-block">
            <font color="white" SIZE=40 Face="impact">
            Creciendo Juntos para un mejor futuro
            <!--<p>Creciendo Juntos para un mejor futuro</p>-->
          </div></font>
        </div>

        <div class="carousel-item" data-bs-interval="2000">
          <img src="images/carrusel2.jpg" class="d-block w-100" alt="img2">
          <div class="carousel-caption d-none d-md-block">
            
          </div>
        </div>

        <div class="carousel-item" data-bs-interval="2000">
          <img src="images/carrusel4.jpg" class="d-block w-100" alt="img3" >
          <div class="carousel-caption d-none d-md-block">
            
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <!-- -------------------------------              Main                  ------------------------------------------------->
    <main>

      <br><br><br><br><br><br>
        <!-- Quienes Somos-->
      <section id="QuienesSomos">
        <div class="container">
          <div class="row">

            <div class="col-12 col-sm-6">
              <img class="img-fluid shadow-lg" src="images/quienes1.jpg" alt="" width="400" height="300"><br><br><br><br><br>
            </div>
            
            <div class="col-12 col-sm-6 text-center">
              <h2>¿Quiénes Somos?</h2>
              <p>
                Aprende es un grupo que tiene como modelo la innovación. Y busca estudiantes a los cuales tengan
                 varios talentos, habilidades y que quieran ser agentes de cambio. Nosotros ofrecemos una educación
                  de calidad, con distintos enfoques como en la tecnología, artes y ciencias, donde nuestros estudiantes crecen en
                   un buen ambiente y muy bien preparados para salir adelante.
              </p>
            </div>

        <br>
        


      <br><br><br>
        <!-- Mision y vision -->
        <section id="MisiónyVisión">
            <div class="container">
              <div class="row">

                <div class="col-12 col-sm-6 text-center">
                
                  <img class="img-fluid shadow-lg" src="images/wallpaper8.jpg" alt="img4" width="500" height="400"><br>
                  <br><h2>Misión</h2>
                  <p> 
                    Educar a los estudiantes para que puedan aprender acerca de la libertad, creatividad, independencia,
                     trabajo en grupo y valores para que se puedan desarrollarse en un ambiente positivo.

                  </p>
                </div>
                <br>
                <div class="col-12 col-sm-6 text-center">
                  
                  <img class="img-fluid shadow-lg" src="images/wallpaper7.jpg" alt="img5" width="500" height="600"><br>
                  <br><h2>Visión</h2>
                  <p> 
                    Promover los valores éticos y morales, al igual que la conciencia social, enseñándole a los estudiantes responsabilidad. 
    
                  </p>
                </div> 

              </div>
            </div>
        </section>
      
    </main>

    <!-- -------------------------------              footer                  ------------------------------------------------->
    <footer>
      <section>
        <div class="container">
          <div class="row">
            <div class="col-12 col-sm-6 text-left">
              <br><br><br><br><br>
              <h6>© 2021 Aprende. Todos los derechos reservados</h6>
            </div>

        
          </div>
        </div>
    </section>
   
    </footer>

    <!-- bootstrap xd -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


  </body>
</html>