<?php

// $numeros=[0,1,2,3,4,5,6,7,8,9,10];
$numeros = [5, 7, 9, 2, 54, 129];
$prim_multiplo = 1;
$ult_multiplo = 10;
?>

<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/sketchy/bootstrap.min.css" integrity="sha384-RxqHG2ilm4r6aFRpGmBbGTjsqwfqHOKy1ArsMhHusnRO47jcGqpIQqlQK/kmGy9R" crossorigin="anonymous">
</head>

<body>

  <main class="container-lg mx-auto">
    <h1 class="d-1 mb-5">
      Tabla de multiplicar del <?= (count($numeros) > 1) ? join(", el ",  array_slice($numeros, 0, -1)) . " y el " . end($numeros) : $numeros[0] ?>
    </h1>
    <table class="table mx-auto w-auto">
      <thead>
        <tr>
          <th></th>
          <?php
          foreach ($numeros as $n) {
            echo "<th>$n</th>";
          }
          ?>
        </tr>
      </thead>
      <tbody>
        <?php
        for ($i = $prim_multiplo; $i <= $ult_multiplo; $i++) {
          echo "<tr><th>$i</th>";
          foreach ($numeros as $n) {
            echo "<td>" . $i * $n . "</td>";
          }
          echo "</tr>";
        }
        ?>
      </tbody>
    </table>
  </main>
</body>

</html>