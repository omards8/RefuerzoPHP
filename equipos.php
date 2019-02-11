<?php
    $conector = new mysqli("localhost", "root", "", "liga");
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
      <table>
        <tr>
          <td>Nombre</td>
          <td>ID equipo</td>
          <td>Ciudad</td>
          <td>Puntos</td>
        </tr>

      <?php
      foreach ($resultado as $equipo) {
        echo "<tr>";
        echo "<td>  <a href=partidosEquipo.php?equipo=".$equipo['id_equipo'].">".$equipo['nombre']."</a></td>";
        echo "<td> <a href=detalleEquipo.php?equipo=".$equipo['id_equipo'].">".$equipo['id_equipo']."</a></td>";
        echo "<td>".$equipo['ciudad']."</td>";
        echo "<td>".$equipo['puntos']."</td>";
        echo "<tr>";
      }
      ?>
            </table>
  </body>
</html>
