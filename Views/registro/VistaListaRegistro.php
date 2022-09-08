<?php


/*/
if(defined(VIEWS_PATH)==false){
    define('VIEWS_PATH', '../');
}
if(defined(CSS_PATH)==false ){
    define('CSS_PATH', '../../css/');
}
if(defined(CONTROLLER_PATH)==false){
    define('CONTROLLER_PATH', '../../Controller/');
}
if(defined(JS_PATH)==false){
    define('JS_PATH', '../../js/');
}/*/


include VIEWS_PATH . 'index/header.php';

include VIEWS_PATH . 'index/menu.php';
?>
<div class="container-fluid mt-5 ">
    <?php
    if (isset($_GET["info"])) { // Aquí se pregunta si por la URL (por medio de GET) viene la variable info
        if ($_GET["info"] == 1) { // Si info es igual a 1: usuario creado
    ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Registro <strong>creado</strong> exitosamente.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php
        }
        if ($_GET["info"] == 2) { // Si info es igual a 2: usuario eliminado
        ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            Registro <strong>eliminado</strong> exitosamente.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php
        }
        if ($_GET["info"] == 3) { // Si info es igual a 3: usuario actualizado
        ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            Registro <strong>actualizado</strong> exitosamente.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
    <?php
        }
    }
    ?>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header text-center" >
                    Lista de registros
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col"></th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Apellido</th>
                        
                                <th scope="col">Correo</th>
                                <th scope="col">Sexo</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            
                           
                            foreach ($listaRegistro as $Registro) {
                                echo "<tr>";
                                echo "<td> <a href='" . VIEWS_PATH . "registro/VistaActualizaRegistro.php?registro=" . $Registro['Correo'] . "'> <span class='fa fa-edit'></span></a> </td>";
                                echo "<td> <a href='" . VIEWS_PATH . "registro/VistaEliminaRegistro.php?registro=" . $Registro['Correo'].  "'> <span class='fa fa-trash'></span></a> </td>";
                                echo "<td>" . $Registro['Nombre'] . "</td>";
                                echo "<td>" . $Registro['Apellido'] . "</td>";
                           
                                echo "<td>" . $Registro['Correo'] . "</td>";
                            
                                echo "<td>" . $Registro['Sexo'] . "</td>";
                                echo "</tr>";
                            }
                            
                            ?>
                        </tbody>
                    </table>
                </div> <!-- cierra card-body-->
            </div> <!-- cierra card-->
        </div> <!-- cierra col-->
    </div> <!-- cierra row-->
</div> <!-- cierra container-fluid-->

</div> <!-- cierra float-left--->
<?php
include VIEWS_PATH . 'index/footer.php';
?>