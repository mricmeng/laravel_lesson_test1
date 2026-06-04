<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style_15.css">
</head>

<body>
  <?php
  $diceNumber = 5;
  if ($diceNumber == 1) {
    echo "The dice number is 1";
  } else if ($diceNumber % 2 == 0) { //if dice number divisible by two
    if ($diceNumber == 2) {
      echo "The dice number is 2";
    } else if ($diceNumber == 4) {
      echo "The dice number is 4";
    } else if ($diceNumber == 6) {
      echo "The dice number is 6";
    } else {
      echo "The number has to be between 1 and 6";
    }
  } else if ($diceNumber == 3) {
    echo "The dice number is 3";
  } else if ($diceNumber == 5) {
    echo "The dice number is 5";
  } else {
    echo "The number has to be between 1 and 6";
  }

  ?>



</body>

</html>