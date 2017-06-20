<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Tallas</title>
  </head>
  <body>
    <?php

    include "db.php";
    $db = new db();

    function listartallas($talla){
    $resultado=$this->conexion->query("select * from tallas where talla='".$talla."'");
    return $resultado;
    }
?>

  </body>
</html>
