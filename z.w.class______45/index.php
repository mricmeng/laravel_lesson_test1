<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>class1</title>
  </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="style_arr.css">
</head>

<body>
  <?php
  class Book
  {
    public function name()
    {
      echo "The Art Of The Deal";
    }

    public function price()
    {
      echo "Price: $30";
    }
  }

  //obj1
  $obj = new Book();
  $obj->name();
  echo "<br>";
  $obj->price();
  echo "<br>";

  //obj2
  $obj2 = new Book();
  $obj2->name();
  echo "<br>";
  $obj2->price();
  echo "<br>";

  //obj3
  $obj3 = new Book();
  $obj3->name();
  print "<br>";
  $obj3->price();
  ?>

</body>

</html>