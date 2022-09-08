<?php
error_reporting(E_ALL ^ E_WARNING);
/*/if (defined(CSS_PATH) == false) {
    define('CSS_PATH', '../../css/');
}
if (defined(IMG_PATH) == false) {
    define('IMG_PATH', '../../img/');
}

if (defined(VIEWS_PATH) == false) {
    define('VIEWS_PATH', '../Views/');
}/*/

define('CONTROLLER_PATH', '../Controller/');





require("../Model/Registro.php");

$usu = new Registro();

if (isset($_POST["nuevoRegistro"])) {
    $usu->newRegistro(
        $_POST["Nombre"],
        $_POST["Apellido"],
        $_POST["Correo"],
        $_POST["Contrasenia"],
        $_POST["Sexo"]
    );
    header("Location: " . CONTROLLER_PATH . "RegistroController.php?info=1");
} else {
    if (isset($_POST["eliminaRegistro"])) {
        $usu->deleteRegistro(
            $_POST["Correo"]
        );
        header("Location: " . CONTROLLER_PATH . "RegistroController.php?info=2&lista=1");
    } else {
        if (isset($_POST["actualizaRegistro"])) {
            $usu->updateRegistro(
                $_POST["Correo"],
                $_POST["Contraseña"],
                $_POST["Nombre"],
                $_POST["Apellido"],
                $_POST["Sexo"]
            );
            header("Location: " . CONTROLLER_PATH . "RegistroController.php?info=3&lista=1");
        } else if ($_GET["lista"] == 1) {
            $listaRegistro = $usu->getRegistro();
            if (defined(VIEWS_PATH) == false) {
                define('VIEWS_PATH', '../Views/');
            }
            if(defined(JS_PATH)==false){
                define('JS_PATH', '../js/');}
                if (defined(CSS_PATH) == false) {
                    define('CSS_PATH', '../css/');
                }
                if (defined(IMG_PATH) == false) {
                    define('IMG_PATH', '../img/');
                }
          require(VIEWS_PATH . "registro/VistaListaRegistro.php");
           // header("Location: " . VIEWS_PATH . "registro/VistaListaRegistro.php");
        } else {
            if (defined(VIEWS_PATH) == false) {
                define('VIEWS_PATH', '../Views/');
            }
            header("Location: " . VIEWS_PATH . "index/index.php");
        }
    }
}