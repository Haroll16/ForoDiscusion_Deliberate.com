<?php


include 'header.php';
?>

<div class="wrapper">
    <!-- Sidebar - Menu -->
    <nav id="sidebar" class="colorMenu">
        <div class="sidebar-header">
            <img src="<?php echo IMG_PATH; ?>logo.jpg"
                style="position: relative; top: 20px; right: 5px; width: 180px; height :90px; border-radius: 5%; margin: 8%;">

        </div>
        <ul class="list-unstyled components">
            <center>
                <p style="font-family: 'Zen Kaku Gothic New', sans-serif;">CATEGORIAS</p>
            </center>
            <li>
                <a href="<?php echo VIEWS_PATH; ?>index/indexUsuario.php">Inicio</a>
            </li>
            <li class="active dropend">
                <a href="#homeSubmenu1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"
                    data-bs-toggle="dropdown" data-bs-auto-close="true">
                    EDITA TUS DATOS
                </a>
                <ul class="dropdown-menu" id="homeSubmenu1">

                    <li>
                        <a class="dropdown-item"
                            href="<?php echo CONTROLLER_PATH; ?>RegistroController.php?lista=1">Lista
                            registro</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="<?php echo VIEWS_PATH; ?>index/alterForo.php">Foro alterno</a>
                    </li>

                </ul>
            </li>
            <li class="active dropend">
                    <a  href="<?php echo VIEWS_PATH;?>index/BasketballForo.php"> <i class="fas fa-volleyball-ball"></i>  Deportes</a>
            </li>
            <li class="active dropend">
              
                    <a  href="<?php echo VIEWS_PATH;?>index/musicaForo.php"><i class="fas fa-music"></i>  Música</a>

            </li>
            <li class="active dropend">
              
                    <a  href="<?php echo VIEWS_PATH;?>index/programacionForo.php"><i class="fas fa-desktop"></i>  Programación</a>
                

            </li>

            <li class="active dropend">
              
              <a  href="<?php echo VIEWS_PATH;?>index/comidaForo.php"><i class="fas fa-hamburger"></i>  Comida</a>
          

      </li>
      <li class="active dropend">
              
              <a  href="<?php echo VIEWS_PATH;?>index/animalesForo.php"><i class="fas fa-dog"></i>  Animales</a>
          

      </li>
      <li class="active dropend">
              
              <a  href="<?php echo VIEWS_PATH;?>index/peliculaForo.php"><i class="fas fa-film"></i>  Peliculas</a>
          

      </li>

            <li>
                <br>
                <div class="d-flex justify-content-center">
                    <button type="button" class="btn btn-secondary btn-sm"><a
                            href="<?php echo VIEWS_PATH; ?>index/about us.php">Acerca de nosotros</a></button>
                </div>
                <br>
                <div class="d-flex justify-content-center">

                    <a href="<?php echo VIEWS_PATH; ?>index/" class="btn btn-info btn-lg">Salir</a>
                </div>

            </li>

        </ul>
    </nav>
    <!-- Hide/Show menu button-->
    <div id="content">
        <div class="row">
            <div class="col-3">
                <nav class="">
                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-chevron-left" id="arrow1"></i>
                    </button>
                </nav>
            </div>
        </div>
    </div>


    <div class="social">
        <div class="d-flex flex-row flex-lg-column justify-content-center align-items-center h-100 mt-3 mt-lg-0">
            <a class="btn btn-dark m-3" href="https://wa.link/h5k2rg"><i class="fab fa-whatsapp"></i></a>
            <a class="btn btn-dark m-3" href="https://www.facebook.com/profile.php?id=100075368558133"><i
                    class="fab fa-facebook-f"></i></a>
            <a class="btn btn-dark m-3" href="https://instagram.com/deliberateweb?utm_medium=copy_link"><i
                    class="fab fa-instagram"></i></a>
        </div>
    </div>