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

  //simple htmt statement
  echo "One line simple is string <br>";

  //display string within paragraph with different color
  echo "<p><font color='blue'>One line simple string in blue color</font></p>";
  echo "<p><font color='red'>One line simple string in red color</font></p>";
  echo "<p><font color='green'>One line simple string in green color</font></p>";

  ?>


  <!-- __________style2  use bootstrap______________-->
  <div class="bg-warning-subtle my-5 border shadow mx-5 p-5" style=" width: 560px; height: 560px;">
    <!-- simple html statement -->
    <div>One line simple is string</div>


    <!-- display string within paragraph with different color -->
    <p class="text-primary">One line simple string in blue color</p>
    <p class="text-danger">One line simple string in red color</p>
    <p class="text-success">One line simple string in green color</p>
  </div>


  <?php
  ?>



</body>

</html>