<?php
include("header.php");
?>


</body>

<div class="container bg-info my-5 p-5 shadow rounded" style="width: 720px;">
  <form action="" method="post">
    <div class="row mb-2">
      <div class="col-sm-3">
        <label for="" class="col-form-label">ID</label>
      </div>
      <div class="col-sm-7">
        <input type="number" name="id" class="form-control">
      </div>
    </div>

    <div class="row mb-2">
      <div class="col-sm-3">
        <label for="" class="col-form-label">Name of Student</label>
      </div>
      <div class="col-sm-7">
        <input type="text" name="name" class="form-control">
      </div>
    </div>

    <div class="row mb-2">
      <div class="col-sm-3">
        <label for="" class="col-form-label">Sex</label>
      </div>
      <div class="col-sm-7">
        <select id="sex" name="sex" class="form-control">
          <option value="Male">M</option>
          <option value="Female">F</option>
        </select>
      </div>
    </div>

    <div class="row mb-2">
      <div class="col-sm-3">
        <label for="" class="col-form-label">Score</label>
      </div>
      <div class="col-sm-7">
        <input type="number" name="score" class="form-control">
      </div>
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
<?php
if (isset($_POST["submit"])) {
  include("student.php");

  $id = $_POST["id"];
  $name = $_POST["name"];
  $sex = $_POST["sex"];
  $score = $_POST["score"];

  // $obj_student = new Student();
  // $obj_student->setData($id, $name, $sex, $score);
  // $obj_student->information_student();
}
?>

<div class="container p-2" style="width: 720px;">
  <table class="table table-bordered">
    <thead class="table-secondary">
      <tr>
        <th>ID</th>
        <th>Name of Student</th>
        <th>Sex</th>
        <th>Score</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php echo $id ?></td>
        <td><?php echo $name ?></td>
        <td><?php echo $sex ?></td>
        <td><?php echo $score ?></td>
      </tr>
    </tbody>
  </table>
</div>

</body>

</html>