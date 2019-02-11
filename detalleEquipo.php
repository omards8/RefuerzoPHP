<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
        $conector = new mysqli("localhost", "root", "", "Liga");
        if ($conector->connect_errno) {
            echo "Fallo al conectar a MySQL: " . $mysqli->connect_error;
        }
        else {
          $equipo = $_GET["equipo"];
          $resultado = $conector->query("SELECT * FROM jugador WHERE equipo=".$equipo);
        }
    ?>
      <table>
        <tr>
          <td>Jugador</td>
          <td>Nombre</td>
          <td>Apellido</td>
        </tr>

      <?php
      foreach ($resultado as $equipo) {
        echo "<tr>";
        echo "<td>".$equipo['id_jugador']."</td>";
        echo "<td>".$equipo['nombre']."</td>";
        echo "<td>".$equipo['apellido']."</td>";
        echo "<tr>";
      }
      ?>
      </table>
  </body>
</html>
