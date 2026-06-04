<?php
if (isset($_POST["submit"])) {
  $name = $_POST["name"];
  foreach ($name as $val) {
?>
    <div class="container bg-primary text-white m-3 float-start" style="width:320px" ;>
      <h1>List Name</h1>
      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vero, reiciendis!</p>
      <div style="font-size: 30px;">
        <?php echo $val ?>
      </div>
    </div>
<?php
  }
}
?>

<?php
include("header.php");
?>