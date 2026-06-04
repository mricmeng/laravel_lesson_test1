<?php
include("header.php");
?>

<body>
  <!-- __________style2  use bootstrap______________-->

  <?php
  // declare variable
  include("variable_1.php");
  ?>

  <div class="bg-body-secondary m-5 border shadow p-5" style=" width: 1200px;">
    <h1>Best Selling Products</h1>
    <div>
      <button class="btn btn-secondary">Download CSV</button>
      <button class="btn btn-secondary">E-mail Report</button>
    </div>
    <table class="table table-striped table-hover table-bordered align-middle mt-3" style="width: 1100px;">
      <thead>
        <tr>
          <th>Product</th>
          <th>Inventory</th>
          <th>Unit Price</th>
          <th>Qty Sold</th>
        </tr>
      </thead>
      <tbody class="table-group-divider">
        <tr>
          <td><?php echo $product_1; ?></td>
          <td><?php echo $inventory_1; ?></td>
          <td><?php echo $unit_price_1; ?></td>
          <td><?php echo $qty_sold_1; ?></td>
        </tr>
        <tr>
          <td><?php echo $product_2; ?></td>
          <td><?php echo $inventory_2; ?></td>
          <td><?php echo $unit_price_2; ?></td>
          <td><?php echo $qty_sold_2; ?></td>
        </tr>
        <tr>
          <td><?php echo $product_3; ?></td>
          <td><?php echo $inventory_3; ?></td>
          <td><?php echo $unit_price_3; ?></td>
          <td><?php echo $qty_sold_3; ?></td>
        </tr>
        <tr>
          <td><?php echo $product_4; ?></td>
          <td><?php echo $inventory_4; ?></td>
          <td><?php echo $unit_price_4; ?></td>
          <td><?php echo $qty_sold_4; ?></td>
        </tr>
        <tr>
          <td><?php echo $product_5; ?></td>
          <td><?php echo $inventory_5; ?></td>
          <td><?php echo $unit_price_5; ?></td>
          <td><?php echo $qty_sold_5; ?></td>
        </tr>
      </tbody>
    </table>

  </div>

  <?php

  ?>

</body>

</html>