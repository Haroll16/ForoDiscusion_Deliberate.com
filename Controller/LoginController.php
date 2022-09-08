<?php

require("../Model/Ingreso.php");

$usu = new Ingreso();

if (isset($_POST["Ingresar"])) {
    $usu->ingresar(
        $_POST['user'],
        $_POST['pass']
    );
    
}

//Importar: '7/09/22