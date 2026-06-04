 <?php
  if (isset($_POST["btn-submit"])) {
    class person
    {
      //Date member
      public $id;
      public $name;
      public float $qty;
      public float $price;

      function setData($id, $name, $qty, $price)
      {
        $this->id = $id;
        $this->name = $name;
        $this->qty = $qty;
        $this->price = $price;
      }
      function information_person()
      {
        echo "<br> ID: " . $this->id;
        echo "<br> Name:" . $this->name;
        echo "<br> Qty: " . $this->qty;
        echo "<br> Price: " . $this->price;
      }
    }
    $id = $_POST["id"];
    $name = $_POST["name"];
    $qty = $_POST["qty"];
    $price = $_POST["price"];

    // $obj = new person();
    // $obj->setData($id, $name, $qty, $price);
    // $obj->information_person();

    // echo "<br>Total is: " . $qty * $price;


    // ______________________ការបង្ហាញតារាងលទ្ធផល_____________________________
    //obj2_test
    $obj2 = new person();
    $obj2->setData($id, $name, $qty, $price);
    // $obj2->information_person();

    $total = $qty * $price;
  }
  ?>
 <div class="container bg-secondary-subtle p-3 rounded shadow" style="width: 960px;">
   <table class="table table-bordered table-hover   mb-2">
     <thead class="table-dark">
       <tr>
         <th>ID</th>
         <th>Name of Product</th>
         <th>Qty</th>
         <th>Price</th>
         <th>Total</th>
       </tr>
     </thead>
     <tbody>
       <tr>
         <td><?php echo $id ?></td>
         <td><?php echo $name ?></td>
         <td><?php echo $qty ?></td>
         <td>$<?php echo $price ?></td>
         <td class="text-danger">$<?php echo $total ?></td>
       </tr>
     </tbody>
   </table>
 </div>

 <?php

  ?>