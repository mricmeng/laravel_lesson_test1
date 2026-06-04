<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</head>

<body class="bg-secondary-subtle">
  <?php
  // declare variable
  include("variable.php");
  ?>

  <div class="bg-warning-subtle m-5 border shadow p-5 align-middle" style="width: 1200px">
    <table class="table table-striped table-hover table-bordered align-middle" style="width: 960px
    0px;">
      <thead class="table-dark">
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Harga</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><?= $_id_1 ?></td>
          <td><?= $name_1 ?></td>
          <td><?= $harga_1 ?></td>
          <td align="center"><button class="btn btn-primary">Edit</button></td>
          <td align="center"><button class="btn btn-danger">Delete</button></td>
        </tr>
        <tr>
          <td><?= $_id_2 ?></td>
          <td><?= $name_2 ?></td>
          <td><?= $harga_2 ?></td>
          <td align="center"><button class="btn btn-primary">Edit</button></td>
          <td align="center"><button class="btn btn-danger">Delete</button></td>
        </tr>
        <tr>
          <td><?= $_id_3 ?></td>
          <td><?= $name_3 ?></td>
          <td><?= $harga_3 ?></td>
          <td align="center"><button class="btn btn-primary">Edit</button></td>
          <td align="center"><button class="btn btn-danger">Delete</button></td>
        </tr>
        <tr></tr>
        <td><?= $_id_4 ?></td>
        <td><?= $name_4 ?></td>
        <td><?= $harga_4 ?></td>
        <td align="center"><button class="btn btn-primary">Edit</button></td>
        <td align="center"><button class="btn btn-danger">Delete</button></td>
        </tr>
        <tr>
          <td><?= $_id_5 ?></td>
          <td><?= $name_5 ?></td>
          <td><?= $harga_5 ?></td>
          <td align="center"><button class="btn btn-primary">Edit</button></td>
          <td align="center"><button class="btn btn-danger">Delete</button></td>
        </tr>
        <tr>
          <td><?= $_id_6 ?></td>
          <td><?= $name_6 ?></td>
          <td><?= $harga_6 ?></td>
          <td align="center"><button class="btn btn-primary">Edit</button></td>
          <td align="center"><button class="btn btn-danger">Delete</button></td>
        </tr>
      </tbody>
    </table>
  </div>

  <?php

  ?>

</body>

</html>