<?php

//Class and instance
//class
class Person
{
  //we can give the type of the variable
  public string $name;
  public int $age;

  //when a property is set as private, we can print it outside
// of the class

  //to avoid an error when we assign NULL to a variable, we
  // have to put ? at the beginning of is type
  private ?float $salary;

  //construct help us to assigne properties when we initialize
  // the instance of the class
  public function __construct( $name, $age, $salary )
  {
//    this refer to the instance on which the construct is call
    $this->name = $name;
    $this->age = $age;
    $this->salary = $salary;
  }

  //to get access to a private properties, we have to create a
  // getter function and a setter function to set the property

  public function getSalary(): ?float
  {
    return $this->salary;
  }


  public function setSalary( ?float $salary ): void
  {
    $this->salary = $salary;
  }
}