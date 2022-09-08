<?php
define('VIEWS_PATH', '../../Views/');
define('CONTROLLER_PATH', '../../Controller/');
define('CSS_PATH', '../../css/');
define('JS_PATH', '../../js/');
define('IMG_PATH', '../../img/');
include 'header.php';

  if (isset($_GET["info"])) { // Aquí se pregunta si por la URL (por medio de GET) viene la variable info
    if ($_GET["info"] == 1) { // Si info es igual a 1: Inicio Exitoso
  ?>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Datos Incorrectos.</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php
    }
  }
  ?>


<div class="row m-0 vh-100 row justify-content-center align-items-center">
    <div class="col-auto">
        <div class="wrapp fadeInDown">
            <div id="formContent">
                <!-- Tabs Titles -->

                <!-- Icon -->
                <i class="fas fa-sign-in-alt" id="icon" alt="Icono de inicio de usuario."></i>



                <!-- Login Form -->
                <form action="<?php echo CONTROLLER_PATH; ?>LoginController.php" method="POST">
                    <input type="text" id="login" class="fadeIn second" name="user" placeholder="login-1">
                    <input type="password" id="password" class="fadeIn third" name="pass" placeholder="password">
                    <input type="hidden" class="fadeIn fourth" name="Ingresar">

                    <button type="submit" class="btn btn-danger">Ingresar</button>
                </form>

                <!-- Remind Passowrd -->
                <div id="formFooter">
                    <!-- <a class="underlineHover" href="#">Forgot Password?</a>-->
                </div>

            </div>
        </div>
    </div>
</div>

<?php
    include 'footer.php';
    ?>