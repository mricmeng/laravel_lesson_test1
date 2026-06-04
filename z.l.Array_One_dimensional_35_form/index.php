<?php
include("header.php");
?>

<body>
  <div class="container mt-2">
    <div class="row">
      <div class="col-3"></div>
      <div class="col-6">
        <form action="show.php" method="POST">
          <h1 class="bg-primary text-center text-light"></h1>==========Demo Aarray========</h1>
          <div class="form-group">
            <label for="name" class="form-label">Enter Name 1</label>
            <input type="text" name="name[]" class="form-control">
          </div>
          <div class="form-group">
            <label for="name" class="form-label">Enter Name 2</label>
            <input type="text" name="name[]" class="form-control">
          </div>
          <div class="form-group">
            <label for="name" class="form-label">Enter Name 3</label>
            <input type="text" name="name[]" class="form-control">
          </div>
          <div class="form-group">
            <label for="name" class="form-label">Enter Name 4</label>
            <input type="text" name="name[]" class="form-control">
          </div>
          <button type="submit" name="submit" class="btn btn-danger mt-2">Submit</button>
        </form>
      </div>
      <div class="col-3"></div>
    </div>
  </div>

</body>

</html>