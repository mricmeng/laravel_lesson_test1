<?php
// class test is a main class
class Test
{
  public function firt()
  {
    echo "Hello my Main Class";
  }
}
class sample extends Test
{
  public function second()
  {
    echo "<br>This is a sub class";
  }
}
$test = new sample();
$test->firt();
$test->second();
