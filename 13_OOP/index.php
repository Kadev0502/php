<?php
require_once './Person.php';
require_once './Student.php';

//instance
$p = new Person( "usher", 37, NULL );


echo $p->name . '<br>';
echo $p->age . '<br>';

//we can now get the private property value with the getter
// function
echo $p->getSalary() . '<br>';
$p->setSalary( 100 );
echo $p->getSalary() . '<br>';

echo "<pre>";
var_dump( $p );
echo "</pre>";

//student instance

$s = new Student("xavier",20,55);
echo $s->name.'<br>';

echo "<pre>";
print_r( $s );
echo "</pre>";