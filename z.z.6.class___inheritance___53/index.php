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
  protected function intro()
  {
    echo "<br>The fruit is {$this->name} and the color is {$this->color}.";
  }
}
// Apple is inherited from fruit
class Apple extends Fruit
{
  public $weight;
  public function __construct($name, $color, $weight)
  {
    $this->name = $name;
    $this->color = $color;
    $this->weight = $weight;
  }
  public function intro()
  {
    echo "The fruit is {$this->name} and the color is {$this->color},and the weight is.{$this->weight}gram.";
  }
}

$apple = new Apple("apple", "red", 30);
$apple->intro();
