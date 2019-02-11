<?php
    $conector = new mysqli("localhost", "root", "", "Liga");
    if ($conector->connect_errno) {
        echo "Fallo al conectar a MySQL: " . $mysqli->connect_error;
    }
    else {
      $resultado = $conector->query("SELECT * FROM equipo");
    }
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <ul id="menu">MENU
      <li><a href="equipos.php">Equipos</a></li>
      <li><a href="Jugadores.php">Jugadores</a></li>
      <li><a href="partidos.php">Partidos</a></li>
      </ul>
  </body>
</html>
