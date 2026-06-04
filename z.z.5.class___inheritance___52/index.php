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
  public function message()
  {
    echo "Am i a fruit or apple";
  }
}
//Try to call all three methods from outside class
$apple = new Apple("apple", "red"); //Ok. __construct()is public
$apple->message(); //Ok. message() is public
$apple->intro(); //Error. intro () is protected