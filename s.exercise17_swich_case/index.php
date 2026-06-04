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
  $d = Date("D");
  switch ($d) {
    case "Mon":
      echo "Today is Monday";
      break;
    case "Tue":
      echo "Today is Tuesday";
      break;
    case "Wed":
      echo "Today is Wednesday";
      break;
    case "Thu":
      echo "Today is Thurday";
      break;
    case "Fri":
      echo "Today is Friday";
      break;
    case "Sat":
      echo "Today is Saturday";
      break;
    case "Sun":
      echo "Today is Sunday";
      break;
    default:
      echo "Wonder which day is this";
  }
  ?>



</body>

</html>