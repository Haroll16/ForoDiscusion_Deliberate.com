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
                    Elimina registro
                </div>
                <div class="card-body">
                    <form action="<?php echo CONTROLLER_PATH;?>RegistroController.php" method="post">
                        <div class="mb-3">
                            <label for="user" class="form-label">Correo</label>
                            <input disabled id="user" class="form-control" type="text" placeholder="Escribe tu correo"
                                value="<?php echo $_GET['registro']; ?>">
                            <input type="hidden" name="Correo" value="<?php echo $_GET['registro']; ?>">
                        </div>
                        <input type="hidden" name="eliminaRegistro">
                        <button type="submit" class="btn btn-danger">Eliminar</button>
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