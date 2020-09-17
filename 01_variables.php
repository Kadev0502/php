<?php
//variables types

/* String, Integer,Float, Boolean,Null,Array,Object and
Ressource*/

// Declare variables
$name = "usher";
$age = 28;
$isMale = true;
$height = 1.85;
$salary = null;

//print the variables and concatenation explanation
// we use . for concatenation
echo "your name is " . $name . '<br>';
echo $age . '<br>';
echo $isMale . '<br>';
echo $height . '<br>';
echo $salary . '<br>';


//print the type of the variables
echo gettype($name) . '<br>';
echo gettype($age) . '<br>';
echo gettype($isMale) . '<br>';
echo gettype($height) . '<br>';
echo gettype($salary) . '<br>';

//print the whole variable with is type
var_dump($name);

//change the value of a variable
$name = 28;
echo $name . '<br>';
echo gettype($name) . '<br>';

//variable checking functions

var_dump(is_string($name));
echo " <br>";
var_dump(is_int($name));
echo " <br>";
//check if variable is defined
var_dump(isset($address)); //return false  because the
// variable is not declare
echo " <br>";
var_dump(isset($name)); //return true
echo " <br>";
var_dump(isset($salary)); //return false because salary is null
echo " <br>";

//constants => it's a variable that we cant assigne anymore
//we define a constant with is namle and it's value
define('PI',3.14);
//we don't need the $ signe anymore to put it in the echo
echo PI . '<br>';

//using PHP build-in constants

echo PHP_INT_MAX . '<br>';
echo PHP_OUTPUT_HANDLER_CLEAN . '<br>';
