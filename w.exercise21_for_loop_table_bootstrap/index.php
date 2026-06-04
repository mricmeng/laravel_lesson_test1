<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
  <?php
  //declare variable
  $brush_price = 5;
  ?>
  <?php
  for ($counter = 10; $counter <= 100; $counter += 10) {
  ?>
    <div class="container bg-warning" style="width: 420px;">
      <table class="table table-striped table-hover mx-4 " style="width: 340px;">
        <thead>
          <tr>
            <th>Qualitity</th>
            <th>Price</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><?php echo $counter ?></td>
            <td><?php echo $counter * $brush_price ?></td>
          </tr>
        </tbody>

      </table>
    </div>
  <?php
  }
  ?>

</body>

</html>