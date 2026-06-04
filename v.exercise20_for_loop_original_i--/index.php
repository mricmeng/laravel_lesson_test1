<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</head>

<body>
  <h1>for___loop__x = x +1 or x++</h1>
  <?php
  //1,2,3....20;
  for ($x = 20; $x >= 1; $x--) {
    echo "The number is :$x <br>";
  }
  ?>
  <h1>for_loop __x = x + 2</h1>
  <?php
  //2,4,6...20;
  for ($x = 20; $x >= 1; $x = $x - 2) {
    echo "The number is :$x <br>";
  }
  ?>

  <h1>for_loop___x = x + 3</h1>
  <?php
  //2,5 ,8 .....20;
  for ($x = 20; $x >= 1; $x = $x - 3) {
    echo "The number is : $x <br>";
  }
  ?>



</body>

</html>