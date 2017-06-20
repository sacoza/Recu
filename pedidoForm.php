<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="modelo/pedidos.php" method="post">
      Nombre: <input type="text" name="nombre" value="<?=$_GET["nombre"]?>"><br><br>
      Apellidos: <input type="text" name="apellidos" value="<?=$_GET["apellidos"]?>"><br><br>
      Talla de Camiseta: <input type="text" name="talla" value="<?=$_GET["talla"]?>"><br><br>
      Número de camiseta: <input type="text" name="numero" value="<?=$_GET["numero"]?>"><br><br>
    </form>

    <form action="modelo/tallas.php" method="post">
    <select name="Color">
    <option value="XS">XS</option>
    <option value="S">S</option>
    <option value="m">M</option>
    <option value="L">L</option>
    <option value="XL">XL</option>
      <input type="submit" name="Registrarse" value="Registrarse">
    </select>
  </body>
</html>
