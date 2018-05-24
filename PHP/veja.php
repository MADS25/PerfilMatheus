<!DOCTYPE html>
<html lang="en">

<head>
  <?php  include_once("meta.php"); ?>
  <title>
    Mais Sobre
  </title>
  
</head>

<body>
  <?php include_once("menu.php"); ?>
  
  <div class="page-header header-filter" data-parallax="true" style="background-image: url('../assets/img/profile_city.jpg')">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1 class="title">Projetos</h1>          
        </div>
      </div>
    </div>
  </div>
  <div class="main main-raised">
      <div class="section">
        <div class="container tim-container">
          <div id="typography" class="cd-section">
            <div class="title">
              <h2>Imagens</h2>
            </div>
            <div class="section" id="carousel">
              <div class="container">
                <div class="row">
                  <div class="col-md-8 mr-auto ml-auto">
                    <div class="card card-raised card-carousel">
                      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img class="d-block w-100" src="../assets/img/img1.png" alt="First slide">
                            <div class="carousel-caption d-none d-md-block">
                              <h4 style="color: #000">
                                 Projeto de um sistema de Transporte
                              </h4>
                            </div>
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" src="../assets/img/img2.png" alt="Second slide">
                            <div class="carousel-caption d-none d-md-block">
                               <h4 style="color: #000">
                                Incrições do Projeto EAFI
                              </h4>
                            </div>
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" src="../assets/img/img3.png" alt="Third slide">
                            <div class="carousel-caption d-none d-md-block">
                               <h4 style="color: #000">
                                Incrições do Projeto FADAT
                              </h4>
                            </div>
                          </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                          <i class="material-icons">keyboard_arrow_left</i>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span class="sr-only">Next</span>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>  
          </div>
        </div>
      </div>
    </div>
 <footer class="footer" data-background-color="black">
      <div class="container">
        <nav class="float-left">
          <ul>
            <li>
              <a href="index.php">
                About Me
              </a>
            </li>
            <li>
              <a href="https://www.facebook.com/matheus25.augusto">
                Facebook
              </a>
            </li>
            <li>
              <a href="https://twitter.com/MADS251">
                Twitter
              </a>
            </li>
            <li>
              <a href="https://www.instagram.com/25mads25/">
                Instagram
              </a>
            </li>
          </ul>
        </nav>
        <div class="copyright float-right">
          &copy;
          <script>
          document.write(new Date().getFullYear())
          </script>,  Matheus Augusto. Material-Kit
        </div>
      </div>
    </footer>
  </body>
    <?php include_once('linkJavaScript.php'); ?>
</html>