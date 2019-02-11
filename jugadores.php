<?php
    $conector = new mysqli("localhost", "root", "", "Liga");
    if ($conector->connect_errno) {
        echo "Fallo al conectar a MySQL: " . $mysqli->connect_error;
    }
    else {
      $resultado = $conector->query("SELECT * FROM jugador");
    }
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <table>
        <tr>
          <td>Jugadores</td>
        </tr>
      </table>
      <?php
      foreach ($resultado as $jugador) {
        echo "<tr>";
        echo "<td>".$jugador['nombre']."</td>";
        echo "<br>";
        echo "<td>".$jugador['id_jugador']."</td>";
        echo "<br>";
        echo "<td>".$jugador['apellido']."</td>";
        echo "<br>";
        echo "<td>".$jugador['posicion']."</td>";
        echo "<br>";
        echo "<td>".$jugador['id_capitan']."</td>";
        echo "<br>";
        echo "<td>".$jugador['fecha_alta']."</td>";
        echo "<br>";
        echo "<td>".$jugador['salario']."</td>";
        echo "<br>";
        echo "<td>".$jugador['equipo']."</td>";
        echo "<br>";
        echo "<td>".$jugador['altura']."</td>";
        echo "<br>";
        echo "<tr>";
      }
      ?>
  </body>
</html>
