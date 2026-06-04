<?php
include("header.php");
?>

<body class="bg-success">
  <!-- ________________តារាងបញ្ចូលទិន្នន័យ _____________-->
  <!-- <form action="show.php" method="post"> -->

  <form action="show.php" method="post">
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
          <label for="">Unit</label>
        </div>
        <div class="col-sm-8">
          <input type="text" name="unit" class="form-control">
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
</body>

</html>