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
  <?php
  $day = 'Sunday';
  if ($day == 'Monday') {
    echo "laugh on Monday, laugh for danger <br>";
  } else if ($day == "Tuesday") {
    echo "laugh on Tuesday, kiss a stranger<br>";
  } else if ($day == "Wednesday") {
    echo "laugh on Wednessday, laugh for a letter";
  } else if ($day == "Thursday") {
    echo "laugh on Thurday, something better";
  } else if ($day == "Friday") {
    echo "laugh on Friday, laugh for surrow";
  } else if ($day == "Saturday") {
    echo "laugh on Saturday, Joy tomorrow";
  } else {
    echo "No information is available for this day";
  }
  ?>

</body>

</html>