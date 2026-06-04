<body>
  <h1>__________style_1__________</h1>
  <?php
  $image = ["1.jpg", "2.jpg", "3.jpg"];
  foreach ($image as $val_image) {
    echo "<img src='image/$val_image'/>" . "<br>";
  }
  ?>


  <h1>__________style_2__________</h1>
  <?php
  $image_1 = ["1.jpg", "2.jpg", "3.jpg"];
  foreach ($image_1 as $key) {
  ?>
    <div class="image_1">
      <img src="image/<?php echo $key ?>" alt="array_img">
    </div>
  <?php
  }
  ?>

</body>
<?php
include("header.php");
?>

</html>