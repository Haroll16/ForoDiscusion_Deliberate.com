<?php
require("../Model/Conexion.php");
class Ingreso
{
    private $con;

    function __construct()
    {
        $this->con = new Conexion();
    }

    public function ingresar($usuario, $contrasenia)
    {
        $sql = "SELECT * FROM registro WHERE Correo='$usuario' and Contrasenia='$contrasenia'";
        $query = $this->con->getCon()->query($sql);
        //echo $sql;

       // if (!empty($query) AND mysqli_num_rows($query) > 0) {
           if($query->num_rows > 0){
          header("Location:../Views/index/indexUsuario.php");
           //echo "BIEN";
        } else {
           header("Location:../Views/index/Login.php?info=1");
           //echo "MAL" . $usuario . $contrasenia;
        }
    }
}
