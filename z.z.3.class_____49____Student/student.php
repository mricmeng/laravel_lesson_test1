<?php
class Student
{
  //date member
  public $id;
  public $name;
  public $sex;
  public $score;
  public function setData($id, $name, $sex, $score)
  {
    $this->id = $id;
    $this->name = $name;
    $this->sex = $sex;
    $this->score = $score;
  }
  public function information_student()
  {
    echo "<br> ID: " . $this->id;
    echo "<br> Name: " . $this->name;
    echo "<br> Gender: " . $this->sex;
    echo "<br> Score: " . $this->score;
  }
}
