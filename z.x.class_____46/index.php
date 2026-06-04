<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Class 2</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="style_arr.css">
</head>

<body>
  <?php
  class Mobile
  {
    /*Member Variable*/
    var $price;
    var $title;
    /*Member Function*/
    function setPrice($par)
    {
      $this->price = $par;
    }
    function getPrice()
    {
      echo $this->price . "<br>";
    }
    function setName($par)
    {
      $this->title = $par;
    }
    function getName()
    {
      echo $this->title . "<br>";
    }
  }
  $Samsung = new Mobile();
  $Xiaomi = new Mobile();
  $Iphone = new Mobile();
  $Samsung->setName("Sumsun S8");
  $Iphone->setName("Iphone 7s");
  $Xiaomi->setName("MI 4");
  $Samsung->setPrice(90000);
  $Iphone->setPrice(65000);
  $Xiaomi->setPrice(15000);
  //Now you call another function to get the value set by in above example.
  $Samsung->getName();
  $Iphone->getName();
  $Xiaomi->getName();
  $Samsung->getPrice();
  $Iphone->getPrice();
  $Xiaomi->getPrice();
  ?>

</body>

</html>