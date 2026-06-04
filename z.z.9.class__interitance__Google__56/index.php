<?php
//parent Class
class Vehicle
{
  public $brand;
  public function __construct($brand)
  {
    $this->brand = $brand;
  }
  public function honk()
  {
    return "Beep Beep";
  }
}
//Child Class inherits from Vehicle
class Car extends Vehicle
{
  public $model;
  public function __construct($brand, $model)
  {
    //Call the parent contrutor
    parent::__construct($brand);
    $this->model = $model;
  }
  public function getDetail()
  {
    return "This is a " . $this->brand . " " . $this->model;
  }
}
//Usage. 
$myCar = new Car("Roll Royce", "Ghost");
echo $myCar->honk() . "<br>";
echo $myCar->getDetail();









?>
<!-- Inheritance in PHP allows a new class to adopt the properties and methods of an existing class. It promotes code reusability by letting a child class inherit from a parent class using the extends keyword.
## Key Concepts

* Parent Class (Superclass): The existing class whose properties and methods are inherited.
* Child Class (Subclass): The new class that inherits from the parent class.
* Single Inheritance: PHP only supports inheriting from one parent class.

## Code Example -->



<!-- Explain 
## Visibility Modifiers

* public: Accessible from anywhere, including child classes.
* protected: Accessible only within the parent class and its child classes.
* private: Accessible only within the parent class. Child classes cannot see or use them.

## Important Rules

* Method Overriding: A child class can redefine a parent method to change its behavior.
* parent:: keyword: Used inside a child class to call a method or constructor from the parent class.
* final keyword: If a parent class or method is marked final, it cannot be inherited or overridden.

Would you like to see an example of method overriding or learn how interfaces solve the single inheritance limitation?
 -->