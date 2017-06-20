<?php
class usuarios extends db
{

  function __construct(argument)
  {
    function comprobarUsusario($nombre, $numAbonado){
    $resultado=$this->conexion->query("select * from tallas where nombre='".$nombre."'");
    return $resultado;
    }
    function listarUsuario($id){
    $resultado=$this->conexion->query("select * from usuarios where nombre='".$id."'");
    return $resultado;
    }
  }
}
 ?>
