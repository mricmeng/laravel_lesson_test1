<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  <title>Document</title>
</head>

<body>
  <!-- តារាងបញ្ចូលទិន្នន័យ -->
  <div class="container bg-secondary my-5 shadow rounded p-5 text-white" style="width:960px">
    <h2 class="text-uppercase mb-3">Form user</h2>
    <form action="" method="post">

      <!-- First Name -->
      <div class="row mb-2">
        <div class="col-sm-3">
          <label for="firstName" class="col-form-label">Fist Name</label>
        </div>
        <div class="col-sm-8">
          <input type="text" name="firstName" class="form-control" placeholder="Enter first name">
        </div>
      </div>

      <!-- Last Name -->
      <div class="row mb-2">
        <div class="col-sm-3">
          <label for="lastName" class="col-form-label">Last Name</label>
        </div>
        <div class="col-sm-8">
          <input type="text" name="lastName" class="form-control" placeholder="Enter last name">
        </div>
      </div>

      <!-- Position -->
      <div class="row mb-2">
        <div class="col-sm-3">
          <label for="position" class="col-form-label">Position</label>
        </div>
        <div class="col-sm-8">
          <input type="text" name="position" class="form-control" placeholder="Enter your position">
        </div>
      </div>

      <!-- DOB -->
      <div class="row mb-2">
        <div class="col-sm-3">
          <label for="dateOfBirth" class="col-form-label">Date Of Birth</label>
        </div>
        <div class="col-sm-8">
          <input type="date" name="dateOfBirth" class="form-control" placeholder="Enter dote of birth">
        </div>
      </div>

      <!-- E-mail -->
      <div class="row mb-2">
        <div class="col-sm-3">
          <label for="email" class="col-form-label">E-mail</label>
        </div>
        <div class="col-sm-8">
          <input type="email" name="email" class="form-control" placeholder="Enter your email">
        </div>
      </div>

      <!-- Number Phone -->
      <div class="row mb-2">
        <div class="col-sm-3">
          <label for="numberPhone" class="col-form-label">Number Phone</label>
        </div>
        <div class="col-sm-8">
          <input type="number" name="numberPhone" class="form-control" placeholder="Enter your number phone">
        </div>
      </div>
      <div>
        <button type="submit" value="submit" name="submit" class="btn btn-primary">Submit</button>
        <button type="reset" value="reset" name="reset" class="btn btn-primary mx-3">Reset</button>
      </div>
    </form>
  </div>
  <?php
  // ដំណើរការពេលចុចsubmit
  if (isset($_POST["submit"])) {

    class User
    {
      public $firstName;
      public $lastName;
      public $dateOfBirth;
      public $email;
      public $numberPhone;
      public function __construct($firstName, $lastName, $dateOfBirth, $email, $numberPhone)
      {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->dateOfBirth = $dateOfBirth;
        $this->email = $email;
        $this->numberPhone = $numberPhone;
      }
      public function info()
      {
        echo "<br> Fist Name: {$this->firstName}";
        echo "<br> Last Name: {$this->lastName}";
        echo "<br> Date of Birth: {$this->dateOfBirth}";
        echo "<br> E-mail: {$this->email}";
        echo "<br> Number Phone: {$this->numberPhone}";
      }
    }
    // $user = new User("Meng", "Chomraoen", (2 - 2 - 1299), "Chomraoenmeng@gmail.com", "098 47 46 93");
    // $user->info();

    class Usersale extends User
    {
      public $position;
      public function __construct($firstName, $lastName, $position, $dateOfBirth, $email, $numberPhone,)
      {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->position = $position;
        $this->dateOfBirth = $dateOfBirth;
        $this->email = $email;
        $this->numberPhone = $numberPhone;
      }
      public function info()
      {
        echo "<br> Fist Name: {$this->firstName}";
        echo "<br> Last Name: {$this->lastName}";
        echo "<br> Position: {$this->position}";
        echo "<br> Date of Birth: {$this->dateOfBirth}";
        echo "<br> E-mail: {$this->email}";
        echo "<br> Number Phone: {$this->numberPhone}";
      }
    }
    // $usersale = new Usersale("Meng", "Chomraoen", "Founder", (2 - 2 - 1299), "Chomraoenmeng@gmail.com", "098 47 46 93",);
    // $usersale->info();

    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $position = $_POST["position"];
    $dateOfBirth = $_POST["dateOfBirth"];
    $email = $_POST["email"];
    $numberPhone = $_POST["numberPhone"];
  }
  ?>
  <div class="container p-2" style="width: 960px;">
    <table class="table table-bordered">
      <thead class="table-secondary">
        <tr>
          <th>Fist Name</th>
          <th>Last Name</th>
          <th>Position</th>
          <th>Date Of Birtd</th>
          <th>E-mail</th>
          <th>Numer Phone</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><?php echo $firstName ?></td>
          <td><?php echo $lastName ?></td>
          <td><?php echo $position ?></td>
          <td><?php echo $dateOfBirth ?></td>
          <td><?php echo $email ?></td>
          <td><?php echo $numberPhone ?></td>
        </tr>
      </tbody>
    </table>
  </div>

</body>

</html>