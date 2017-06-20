<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Pedidos</title>
  </head>
  <body>
    <?php

include "modelo/db.php";
$db = new db();

function crearPedido($nombre,$apellidos,$talla,$numero){
$sqlinsercion="INSERT INTO pedidos (nombre,apellidos,talla,numero, sexo) VALUES ('".$nombre."','".$apellidos."','".$talla."','".$numero."','".$sexo."')";
echo $sqlinsercion;
if (!$this->conexion->query($sqlinsercion));
}
function mostrarultimo($nombre){
$resultado=$this->conexion->query("select * from pedidos where nombre='".$nombre."'");
return $resultado;
}
?>

  </body>
</html>
