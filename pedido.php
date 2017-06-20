<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Pedido</title>
  </head>
  <body>
    <?php

include "pedidos.php";
include "tallas.php";
$db = new db();
$resultado=$db->crearPedido($_POST['nombre'],$_POST['apellidos'], $_POST['talla'], $_POST['numero']);
while($fila=$resultado->fetch_assoc()){
echo "<br><br>";
echo "Nombre: " .$fila["nombre"] ."</br>";
echo "Apellidos: " .$fila["apellidos"] ."</br>";
echo "talla: " .$fila["talla"] ."</br>";
echo "Numero: " .$fila["numero"] ."</br>";
}

$resultado2=$db->mostrarultimo($_POST['nombre'],$_POST['apellidos'], $_POST['talla'], $_POST['numero']);
while($fila=$resultado2->fetch_assoc()){
echo "<br><br>";
echo "Nombre: " .$fila["nombre"] ."</br>";
echo "Apelliods: " .$fila["apellidos"] ."</br>";
echo "talla: " .$fila["talla"] ."</br>";
echo "numero: " .$fila["numero"] ."</br>";
}

$resultado3=$db->listartallas($_POST['id'],$_POST['talla']);
  while($fila=$resultado3->fetch_assoc()){
  echo "<br><br>";
  echo "ID: " .$fila["id"] ."</br>";
  echo "Nombre: " .$fila["talla"] ."</br>";
}
?>

  </body>
</html>
