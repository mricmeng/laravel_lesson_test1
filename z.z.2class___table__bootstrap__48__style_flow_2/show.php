<?php
include("header.php");
?>
<?php
if (isset($_POST["btn-submit"])) {
  class person
  {
    //Date member
    public $id;
    public $name;
    public $unit;
    public float $qty;
    public float $price;

    function setData($id, $name, $unit, $qty, $price)
    {
      $this->id = $id;
      $this->name = $name;
      $this->unit = $unit;
      $this->qty = $qty;
      $this->price = $price;
    }
    function information_person()
    {
      echo "<br> ID: " . $this->id;
      echo "<br> Name of Product:" . $this->name;
      echo "<br> Unit:" . $this->unit;
      echo "<br> Qty: " . $this->qty;
      echo "<br> Price: " . $this->price;
    }
  }
  $id = $_POST["id"];
  $name = $_POST["name"];
  $unit = $_POST["unit"];
  $qty = $_POST["qty"];
  $price = $_POST["price"];

  // $obj = new person();
  // $obj->setData($id, $nameProduct, $qty, $price);
  // $obj->information_person();

  // echo "<br>Total is: " . $qty * $price;


  // ______________________ការបង្ហាញតារាងលទ្ធផល_____________________________
  //obj2_test
  $obj2 = new person();
  $obj2->setData($id, $name, $unit, $qty, $price);
  // $obj2->information_person();

  $total = $qty * $price;
}
?>
<div class="container bg-secondary-subtle p-3 rounded shadow my-5" style="width: 960px;">
  <table class="table table-bordered table-hover   mb-2">
    <thead class="table-dark">
      <tr>
        <th>ID</th>
        <th>Name of Product</th>
        <th>Unit</th>
        <th>Qty</th>
        <th>Price</th>
        <th>Total</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php echo $id ?></td>
        <td><?php echo $name ?></td>
        <td><?php echo $unit ?></td>
        <td><?php echo $qty ?></td>
        <td>$<?php echo $price ?></td>
        <td class="text-danger">$<?php echo $total ?></td>
      </tr>
    </tbody>
  </table>
</div>

<?php

?>