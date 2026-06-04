<?php
//header
include("header.php");
?>

<?php
//declare variable
include("variable_product.php");
?>

<body>

  <div class="container bg-secondary-subtle my-5 p-4 ">
    <h1>Best Selling Product</h1>
    <div class="d-flex gap-3 flex-wrap">
      <!-- Product 1 -->
      <div class="box">
        <figure class="figure">
          <img src="./image_product/p_1.png" style="width: 200px; height: 200px;" class="figure-img img-fluid border-radius" alt="P_1">
          <figcaption class="figure-caption text-center fw-bold">
            <?php echo $name_Product_1 . "<br>" ?><span class="text-danger box-1">$<?php echo $price_Product_1; ?></span>
          </figcaption>
        </figure>
      </div>
      <!--Product 2 -->
      <div class="box">
        <figure class="figure">
          <img src="./image_product/p_2.png" style="width: 200px; height: 200px;" class="figure-img img-fluid border-radius" alt="P_2">
          <figcaption class="figure-caption text-center fw-bold">
            <?php echo $name_Product_2 . "<br>" ?><span class="text-danger ">$<?php echo $price_Product_2; ?></span>
          </figcaption>
        </figure>
      </div>
      <!--Product 3 -->
      <div class="box">
        <figure class="figure">
          <img src="./image_product/p_3.png" style="width: 200px; height: 200px;" class="figure-img img-fluid border-radius" alt="P_3">
          <figcaption class="figure-caption text-center fw-bold">
            <?php echo $name_Product_3 . "<br>" ?><span class="text-danger">$<?php echo $price_Product_3; ?></span>
          </figcaption>
        </figure>
      </div>
      <!--Product 4 -->
      <div class="box">
        <figure class="figure">
          <img src="./image_product/p_4.png" style="width: 200px; height: 200px;" class="figure-img img-fluid border-radius" alt="P_4">
          <figcaption class="figure-caption text-center fw-bold">
            <?php echo $name_Product_4 . "<br>" ?><span class="text-danger">$<?php echo $price_Product_4; ?></span>
          </figcaption>
        </figure>
      </div>
      <!--Product 5 -->
      <div class="box">
        <figure class="figure">
          <img src="./image_product/p_5.png" style="width: 200px; height: 200px;" class="figure-img img-fluid border-radius" alt="P_5">
          <figcaption class="figure-caption text-center fw-bold">
            <?php echo $name_Product_5 . "<br>" ?><span class="text-danger">$<?php echo $price_Product_5; ?></span>
          </figcaption>
        </figure>
      </div>
      <!-- Product 6 -->
      <div class="box">
        <figure class="figure">
          <img src="./image_product/p_6.png" style="width: 200px; height: 200px;" class="figure-img img-fluid border-radius" alt="P_6">
          <figcaption class="figure-caption text-center fw-bold">
            <?php echo $name_Product_6 . "<br>" ?><span class="text-danger">$<?php echo $price_Product_6; ?></span>
          </figcaption>
        </figure>
      </div>
      <!-- Product 7 -->
      <div class="box">
        <figure class="figure">
          <img src="./image_product/p_7.png" style="width: 200px; height: 200px;" class="figure-img img-fluid border-radius" alt="P_7">
          <figcaption class="figure-caption text-center fw-bold">
            <?php echo $name_Product_7 . "<br>" ?><span class="text-danger">$<?php echo $price_Product_7; ?></span>
          </figcaption>
        </figure>
      </div>
      <!-- Product 8 -->
      <div class="box">
        <figure class="figure">
          <img src="./image_product/p_8.png" style="width: 200px; height: 200px;" class="figure-img img-fluid border-radius" alt="P_8">
          <figcaption class="figure-caption text-center fw-bold">
            <?php echo $name_Product_8 . "<br>" ?><span class="text-danger">$<?php echo $price_Product_8; ?></span>
          </figcaption>
        </figure>
      </div>
    </div>
  </div>
  <?php
  ?>


</body>

</html>