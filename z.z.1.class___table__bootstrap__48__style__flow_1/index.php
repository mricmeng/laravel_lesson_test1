<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Class 2</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-success">
  <!-- ________________តារាងបញ្ចូលទិន្នន័យ _____________-->
  <!-- <form action="show.php" method="post"> -->

  <form action="" method="post">
    <div class="container bg-secondary-subtle p-5 rounded my-5 shadow" style="width:720px">
      <div class="row mb-2">
        <div class="col-sm-3">
          <label for="">ID</label>
        </div>
        <div class="col-sm-8">
          <input type="text" name="id" class="form-control">
        </div>
      </div>

      <div class="row mb-2">
        <div class="col-sm-3">
          <label for="">Name of Product</label>
        </div>
        <div class="col-sm-8">
          <input type="text" name="name" class="form-control">
        </div>
      </div>
      <div class="row mb-2">
        <div class="col-sm-3">
          <label for="">Qty</label>
        </div>
        <div class="col-sm-8">
          <input type="number" step="0.01" name="qty" class="form-control">
        </div>
      </div>
      <div class="row mb-2">
        <div class="col-sm-3">
          <label for="">Price</label>
        </div>
        <div class="col-sm-8">
          <input type="number" step="0.01" name="price" class="form-control">
        </div>
      </div>
      <input type="submit" value="submit" name="btn-submit" class="btn btn-secondary">
    </div>
  </form>
  <?php
  include("show.php");
  ?>



</body>

</html>