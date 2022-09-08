<?php
define('VIEWS_PATH', '../../Views/');
define('CONTROLLER_PATH', '../../Controller/');
define('CSS_PATH', '../../css/');
define('JS_PATH', '../../js/');
define('IMG_PATH', '../../img/');

include VIEWS_PATH . 'index/header.php';

include VIEWS_PATH . 'index/menu.php';
?>
<div class="container-fluid mt-5 ">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header text-center">
                    Actualiza registro
                </div>
                <div class="card-body">
                    <form action="<?php echo CONTROLLER_PATH;?>RegistroController.php" method="POST">
                        <div class="mb-3">
                            <label for="correo" class="form-label">Correo</label>
                            <input disabled id="correo" class="form-control" type="text" placeholder="Escribe tu correo" value="<?php echo $_GET['registro']; ?>">
                            <input type="hidden" name="Correo" value="<?php echo $_GET['registro']; ?>">
                        </div>
                        <div class="mb-3">
                        <label for="password" class="form-label">Contraseña</label>
                            <input id="password" class="form-control" type="password" name="Contrasenia" placeholder="Escribe tu contraseña">
                        </div>
                        <div class="mb-3">
                            <label for="user" class="form-label">Nombre</label>
                            <input id="user" class="form-control" type="text" name="Nombre" placeholder="Escribe tu nombre">
                        </div>
                        <div class="mb-3">
                            <label for="last" class="form-label">Apellido</label>
                            <input id="last" class="form-control" type="text" name="Apellido" placeholder="Escribe tu nombre">
                        </div>
                       
                        <div class="mb-3">
                            <label for="sexo" class="form-label">Sexo</label>
                            <input id="sexo" class="form-control" type="text" name="Sexo" placeholder="Escribe tu sexo">
                        </div>
                        <input type="hidden" name="actualizaRegistro">
                        <!-- <input type="submit" value="Enviar"> -->
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>
                </div> <!-- cierra card-body-->
            </div> <!-- cierra card-->
        </div> <!-- cierra col-->
    </div> <!-- cierra row-->
</div> <!-- cierra container-fluid-->

</div> <!-- cierra float-left--->

<?php
include VIEWS_PATH . 'index/footer.php';
?>