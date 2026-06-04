<?php
include("header.php");
?>

<?php
//1. Base Class for Handling Form Inputs
class FormHandler
{
  protected array $data = [];
  public function __construct(array $postData)
  {
    foreach ($postData as $key => $value) {
      $this->data[$key] = $this->sanitize($value);
    }
  }

  //Basic security cleaning
  protected function sanitize($value): string
  {
    return htmlspecialchars(strip_tags(trim($value)));
  }
}

//2. Child Class using Inheritance to manage User Registration
class UserRegistration extends FormHandler
{
  public function getFullName(): string
  {
    return $this->data["full_name"] ?? "";
  }
  public function getUsername(): string
  {
    return $this->data["username"] ?? "";
  }
  public function getEmail(): string
  {
    return $this->data["email"] ?? "";
  }
  public function getPhone(): string
  {
    return $this->data["phone"] ?? "";
  }
  public function getGender(): string
  {
    return $this->data["gender"] ?? "Not specified";
  }

  //Validation logic
  public function passwordsMatch(): bool
  {
    $pass = $this->data["password"] ?? "";
    $confirmPass = $this->data["confirm_password"] ?? "";
    return !empty($pass) && $pass === $confirmPass;
  }
}

//3.Process Form Submission
$user = null;
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $user = new UserRegistration($_POST);

  if (!$user->passwordsMatch()) {
    $error = 'Error: Passwords do not match';
    $user = null;
  }
}
?>

<!-- Erro Notification -->
<?php if ($error): ?>
  <div class="alert alert-danger" role="alert">
    <?= $error ?>
  </div>
<?php endif; ?>




<!-- Bootstrap Result table view-->
<?php if ($user): ?>
  <div class="card registration-card p-4 bg-white fade-in" style="width: 700px;">
    <h4 class="fw-bold mb-3 text-primary text-center">Registered Profile Summary</h4>
    <div class="table-responsive">
      <table class="table table-striped table-bordered table-hover">
        <thead class="table-dark">
          <tr>
            <th scope="col" class="w-50">Field</th>
            <th scope="col" class="w-50">submitted Value</th>
          </tr>
        </thead>
        <tbody>

          <tr>
            <td class="fw-semibold text-muted">Full Name</td>
            <td><?php echo $user->getFullName() ?></td>
          </tr>

          <tr>
            <td class="fw-semibold text-muted">Username</td>
            <td><span class="badge bg-secondary">@<?php echo $user->getUsername() ?></span></td>
          </tr>

          <tr>
            <td class="fw-semibold text-muted">Email Address</td>
            <td><a href="mailto:" <?= $user->getEmail() ?>" class="text-decoration-none"></a><?= $user->getEmail() ?></td>
          </tr>

          <tr>
            <td class="fw-semibold text-muted">Phone Number</td>
            <td><?= $user->getPhone() ?></td>
          </tr>

          <tr>
            <td class="fw-semibold text-muted">Gender Identity</td>
            <td><?= $user->getGender() ?></td>
          </tr>

        </tbody>
      </table>
    </div>
  </div>
<?php endif; ?>