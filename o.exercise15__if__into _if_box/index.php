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
  //declare variable
  $i = 10;
  if ($i == 10) {
    //First if statement
    if ($i < 15) {
  ?>
      <div class="box1">
        <?php echo "i is smaller than 15 <br>"; ?>
      </div>
    <?php
    }
    //Nested if statement
    //Will only be excuted if statement above is true
    if ($i < 12) {
    ?>
      <div class="box2">
        <?php echo "i is smaller than 12 too"; ?>
      </div>
    <?php
    }
  } else {
    ?>
    <div class="box3">
      <?php echo "i is greater than 15"; ?>
    </div>

  <?php
  }

  ?>

</body>

</html>