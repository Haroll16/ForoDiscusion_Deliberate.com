<?php
class Conexion
{
      private $con;

      function __construct()
      {
            $this->con = new mysqli("localhost", "root", "", "proyectofinaldiu");
      } //cierra constructor

      function getCon()
      {
            return $this->con;
      } //cierra getCon


}//cierra class
