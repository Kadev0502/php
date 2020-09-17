<?php
require_once './Person.php';

class Student extends Person
{
  public int $stID;
  public function __construct( $name, $age, $stID )
  {
    $this->stID = $stID;
    parent::__construct( $name, $age, null);
  }
}