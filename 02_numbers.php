<?php
//Declaring numbers
$a = 5;
$b = 4;
$c = 1.2;

//Arithmetic operations
echo "Arithmetic operations" . "<br>";
echo "-----------------";
echo " <br>";
echo $a + $b . '<br>';
echo $a - $b . '<br>';
echo $a * $b . '<br>';
echo $a / $b . '<br>';
echo $a % $b . '<br>'; //the remainder

//assigment with math operators
echo "Assigment with math operators" . "<br>";
echo "-----------------";
echo " <br>";
$a += $b;
echo $a . '<br>';
$a -= $b;
echo $a . '<br>';
$a *= $b;
echo $a . '<br>';
$a /= $b;
echo $a . '<br>';
$a %= $b;
echo $a . '<br>'; //the remainder

//Increment operator
echo "Increment operator" . "<br>";
echo "-----------------";
echo " <br>";
$d = 10;
echo $d++; //
echo " <br>";
echo $d;
echo " <br>";
echo ++$d;
echo " <br>";

//Decrement operator
echo "Decrement operator" . "<br>";
echo "-----------------";
echo " <br>";
echo $d--; //
echo " <br>";
echo $d;
echo " <br>";
echo --$d;
echo " <br>";

//number checking functions
echo "number checking functions" . "<br>";
echo "-----------------";
echo " <br>";
/*is_float();
is_numeric();*/
var_dump( is_numeric(4.4) );
echo " <br>";

//Conversion
echo "Conversion" . "<br>";
echo "-----------------";
echo " <br>";
$strNumber = "12.34";
$number = (float)$strNumber;
$number2 = (int)$strNumber;
$number3 = (bool)$strNumber;
var_dump( $number );
echo " <br>";
var_dump( $number2 );
echo " <br>";
var_dump( $number3 );

//Number functions
echo "Number functions" . "<br>";
echo "-----------------";
echo " <br>";
echo "abs(-15)".abs(-15).'<br>'; //convert to pisitive number
echo "pow(2,3)".pow(2,3).'<br>'; //calculate the power of two
// numbers
echo "sqrt(16)".sqrt(16).'<br>'; //calculate the square of a
// number
echo "max(2,3)".max(2,3).'<br>'; //return the max number of
// two given numbers
echo "min(2,3)".min(2,3).'<br>'; //return the min number of
// two given numbers
echo "round(2.4)".round(2.4).'<br>'; //round the number to the
// near number
echo "round(2.6)".round(2.6).'<br>';
echo "floor(2.6)".floor(2.6).'<br>'; //round down the number
echo "ceil(2.4)".ceil(2.4).'<br>'; // round top the number

//formatting number =>
echo "Formatting number" . "<br>";
echo "-----------------";
echo " <br>";
$number5 = 123456789.12345;
echo number_format($number5,2,'.',',').'<br>';

//add 0 in front or at the end of a number
$number6 = 100;
$number7 = 123456;
echo str_pad($number6,8,0,STR_PAD_LEFT).'<br>'; //add 0 to the
// variable till it have 8 numbers
echo str_pad($number7,8,0,STR_PAD_LEFT).'<br>'; //add 0 to the
// variable till it have 8 numbers


//https://www.php.net/manual/fr/ref.math.php