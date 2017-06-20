<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
  </head>
  <body>
    <?php
    $resultado2=$db->comprobarUsuario($_POST['nombre'],$_POST['numAbonado']);
    while($fila=$resultado2->fetch_assoc()){
    echo "<br><br>";
    echo "Nombre: " .$fila["nombre"] ."</br>";
    echo "Numero de abonado: " .$fila["numAbonado"] ."</br>";
    }
     ?>
  </body>
</html>
