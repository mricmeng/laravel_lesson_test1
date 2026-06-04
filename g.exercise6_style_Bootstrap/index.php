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
  <!-- __________style2  use bootstrap______________-->
  <?php
  // declare variable
  $a = 1000;
  $b = 1200;
  $c = 1400
  ?>

  <div class="bg-warning-subtle my-5 border shadow mx-5 p-5" style=" width: 560px; height: 560px;">
    <ul>
      <div class="text-danger text-uppercase">Salary Statement for the current month</div>
      <li>
        <span class="text-primary">Salary of Mr.A is : </span>
        <span class="text-danger">$ <?php echo $a; ?></span>
      </li>
      <li>
        <span class="text-primary">Salary of Mr.B is : </span>
        <span class="text-danger">$ <?php echo $b; ?></span>
      </li>
      <li>
        <span class="text-primary">Salary of Mr.C is : </span>
        <span class="text-danger">$ <?php echo $c; ?></span>
      </li>
    </ul>
  </div>

  <?php
  ?>

</body>

</html>