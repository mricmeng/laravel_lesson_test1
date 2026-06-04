<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <!-- ______________style_1_______________ -->
  <?php
  $overtime = 33;
  if ($overtime <= 50) {
    $pay_amt = 1200;
    $medical = 1000;
    echo "Pay Amount: $pay_amt: Medical Amount: $medical ";
  } else {
    $pay_amt = 2000;
    $medical = 1500;
    echo "Pay Amount: $pay_amt : Medical Amount: $medical";
  }
  ?>
</body>

</html>