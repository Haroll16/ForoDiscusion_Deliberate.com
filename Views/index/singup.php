<?php
define('CSS_PATH', '../../css/');
define('JS_PATH', '../../js/');
define('IMG_PATH', '../../img/');
define('CONTROLLER_PATH', '../../Controller/');
define('VIEWS_PATH', '../');

include 'header.php';



if (isset($_GET["info"])) { // Aquí se pregunta si por la URL (por medio de GET) viene la variable info
if ($_GET["info"] == 1) { // Si info es igual a 1: usuario creado
?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
    Registro <strong>creado</strong> exitosamente.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php
            } } ?>
<div>
<div class="row m-0 vh-100 row justify-content-center align-items-center">
    <div class="col-auto">
    <div class="wrapp fadeInDown " >
        <div id="formContent">
            <!-- Tabs Titles -->

            <!-- Icon -->
            <i class="fas fa-user-plus" id="icon" alt="Icono de registrar usuario"> </i>
            <br>
            <p> ¡REGISTRATE CON NOSOTROS!</p>


            <!-- Login Form -->
            <form action="<?php echo CONTROLLER_PATH; ?>RegistroController.php" method="POST">
                <input type="text" id="user" class="fadeIn second" name="Nombre" placeholder="Nombre">
                <input type="text" id="last" class="fadeIn third" name="Apellido" placeholder="Apellido">
                <input type="text" id="email" class="fadeIn third" name="Correo" placeholder="Correo">

                <input type="password" id="password" class="fadeIn third" name="Contrasenia" placeholder="Contraseña">

                <input type="text" id="sexo" class="fadeIn third" name="Sexo" placeholder="Sexo">

                <input type="hidden" class="fadeIn fourth" name="nuevoRegistro">

                <button type="submit" class="btn btn-danger" >Registrar</button>
              
             
            </form >



            <!-- Remind Passowrd -->
            <div id="formFooter">
                <!-- <a class="underlineHover" href="#">Forgot Password?</a>-->
            </div>

        </div>
    </div>
</div>



<?php
   include 'footer.php';
    ?>