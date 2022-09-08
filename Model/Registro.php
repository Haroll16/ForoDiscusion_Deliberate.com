<?php
require("../Model/Conexion.php");
class Registro
{
    private $con;

    function __construct()
    {
        $this->con = new Conexion();
    }

    public function getRegistro()
    {
        $query = $this->con->getCon()->query("SELECT * FROM registro");
        $registros = [];

        $cont = 0;
        while ($fila = $query->fetch_assoc()) {
            $registros[$cont] = $fila;
            $cont++;
        }
        return $registros;
    }
    public function newRegistro($Nombre, $Apellido, $Correo, $Contrasenia, $Sexo)
    {
        //$sql = "INSERT INTO USUARIOS (usuario,clave,nombre)
        //VALUES($usuario,$nombre,$clave)";

        $sql = "INSERT INTO REGISTRO 
        VALUES('$Nombre','$Apellido','$Correo','$Contrasenia','$Sexo')";
        $query = $this->con->getCon()->query($sql);
        header("Location:../Views/index/index.php");
    }
    public function deleteRegistro($Correo)
    {
        $sql = "DELETE FROM REGISTRO WHERE Correo='$Correo'";
        if ($this->con->getCon()->query($sql)) {
            // echo "Eliminación exitosa.";
        } else {
            echo "Error ejecutando consulta de eliminación.";
            echo "SQL: " . $sql;
        }
    }
    public function updateRegistro($Correo,$Contrasenia,$Nombre, $Apellido,  $Sexo)
    {

        $sql = "UPDATE REGISTRO SET  Contrasenia='$Contrasenia',Nombre='$Nombre', Apellido='$Apellido',  Sexo='$Sexo'
        WHERE Correo='$Correo'";
        if ($this->con->getCon()->query($sql)) {
            echo "Actualización exitosa.";
        } else {
            echo "Error ejecutando consulta de actualización.";
            echo "SQL: " . $sql;
        }
    }
}