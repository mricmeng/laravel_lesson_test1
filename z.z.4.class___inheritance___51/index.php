<?php
class Fruit
{
  public $name;
  public $color;
  public function __construct($name, $color)
  {
    $this->name = $name;
    $this->color = $color;
  }
  public function intro()
  {
    echo "<br>The fruit is {$this->name} and the color is {$this->color}.";
  }
}
// Apple is inherited from fruit
class Apple extends Fruit
{
  public function message()
  {
    echo "Am i a fruit or apple";
  }
}
$apple = new Apple("apple", "red");
$apple->message();
$apple->intro();

?>