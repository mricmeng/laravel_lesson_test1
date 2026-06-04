<?php
// Header.php
include("Header.php");
?>

<body>
  <!-- ចាប់ដំណើរការពេលចុចSubmit -->
  <?php
  $score = $id = $name = " ";
  if (isset($_POST["submit"])) {
    $score = $_POST["score"];
    $id = $_POST["id"];
    $name = $_POST["name"];
  }
  ?>
  <!-- កំណត់Scoreតាមលក្ខខណ្ឌ -->
  <?php
  if ($score >= 85 && $score <= 100) {
    $result = "Excellence...";
  } elseif ($score >= 70 && $score < 85) {
    $result = "Very Good...";
  } elseif ($score >= 50 && $score < 70) {
    $result = "Fair";
  } else {
    $result = "Fail!";
  }
  ?>
  <!-- តារាងបញ្ចូលទិន្នន័យ -->
  <div class="container bg-primary shadow rounded p-5 text-light my-5" style="width: 720px;">
    <h1>Score of Student</h1>
    <form action="" method="POST">
      <div class="row ">
        <!-- id -->
        <div class="col-sm-4 mb-3">
          <label for="id" class="form-label">ID</label>
        </div>
        <div class="col-sm-8">
          <input type="number" name="id" class="form-control" required>
        </div>

        <!-- Name of course -->
        <div class="col-sm-4 mb-3">
          <label for="name" class="form-label">Name of Course</label>
        </div>
        <div class="col-sm-8">
          <input type="text" name="name" class="form-control" required>
        </div>

        <!-- Score -->
        <div class="col-sm-4 mb-3">
          <label for="score" class="form-label">Score</label>
        </div>
        <div class="col-sm-8">
          <input type="number" name="score" class="form-control" required>
        </div>

        <!-- Button submite -->
        <div>
          <button type="submit" name="submit" class="btn btn-light">Submite</button>
        </div>
      </div>
    </form>
  </div>

  <!-- តារាងបង្ហាញលទ្ធផល -->
  <div class="container bg-primary-subtle shadow rounded p-4 text-dark my-5" style="width: 720px;">
    <h2>Result of Student</h2>
    <table class="table table-border">
      <thead class="table-dark">
        <tr>
          <th>ID</th>
          <th>Name of Course</th>
          <th>Score</th>
          <th>Result</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><?php echo $id ?></td>
          <td><?php echo $name ?></td>
          <td><?php echo $score ?></td>
          <td><?php echo $result ?></td>
        </tr>
      </tbody>
    </table>
  </div>


</body>

</html>