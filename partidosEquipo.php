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
          $resultado = $conector->query("SELECT * FROM partido WHERE local=".$equipo);
          $resultado2 = $conector->query("SELECT * FROM partido WHERE visitante=".$equipo);
        }
    ?>
      <table>
        <tr>
          <td>Local</td>
          <td>Visitante</td>
          <td>ID partido</td>
          <td>Resultado</td>
          <td>Fecha</td>
          <td>Arbitro</td>
        </tr>

      <?php
      foreach ($resultado as $partido) {
        echo "<tr>";
        echo "<td>".$partido['local']."</td>";
        echo "<td>".$partido['visitante']."</td>";
        echo "<td>".$partido['id_partido']."</td>";
        echo "<td>".$partido['resultado']."</td>";
        echo "<td>".$partido['fecha']."</td>";
        echo "<td>".$partido['arbitro']."</td>";
        echo "<tr>";
      }
      foreach ($resultado2 as $partido) {
        echo "<tr>";
        echo "<td>".$partido['local']."</td>";
        echo "<td>".$partido['visitante']."</td>";
        echo "<td>".$partido['id_partido']."</td>";
        echo "<td>".$partido['resultado']."</td>";
        echo "<td>".$partido['fecha']."</td>";
        echo "<td>".$partido['arbitro']."</td>";
        echo "<tr>";
      }
      ?>
      </table>
  </body>
</html>
