<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercise1</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</head>

<body>
  <?php
  // __________ style 1 use php echo _____________
  $a = 1000;
  $b = 1200;
  $c = 1400;
  echo "<table border = '1' cellspacing = '0' cellpadding = '6'>";
  echo "<tr>
          <td colspan = '2'>
          Monthly Salary Statement
          </td>
        </tr>";
  echo "<tr>
          <td><font color = 'blue'>Salarry of Mr. A is </font></td>
          <td><font color = 'red'>$a</font></td>
        </tr>";
  echo "<tr>
          <td><font color = 'blue'>Salarry of Mr. B is </font></td>
          <td><font color = 'red'>$b</font></td>
        </tr>";
  echo "<tr>
          <td><font color = 'blue'>Salarry of Mr. C is </font></td>
          <td><font color = 'red'>$c</font></td>
        </tr>";
  echo "</table>";
  ?>


</body>

</html>