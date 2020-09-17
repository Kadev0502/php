<?php
echo "------------------------------------------";
echo " <br>";
echo 'Function' . '<br>';
echo "------------------------------------------";
echo " <br>";

function hello()
{
  echo "Hello i'm usher" . "<br>";
}

hello();

echo "------------------------------------------";
echo " <br>";
echo 'Function with arguments' . '<br>';
echo "------------------------------------------";
echo " <br>";

function hello2( $name )
{
  echo "Hello  " . $name . "<br>";
}

hello2( "usher" );
hello2( "kadio" );

echo "------------------------------------------";
echo " <br>";
echo 'sum of two functions' . '<br>';
echo "------------------------------------------";
echo " <br>";

function sum( $a, $b )
{
  return $a + $b . "<br>";
}

$sum = sum( 10, 12 );
echo "sum = " . $sum;


echo "------------------------------------------";
echo " <br>";
echo 'function to sum all numbers using ...$nums' . '<br>';
echo "------------------------------------------";
echo " <br>";

function sum2( ...$numbers )
{
  $sum2 = 0;
  foreach ( $numbers as $num ) {
    $sum2 += $num;
  }
  return $sum2;
}

$sum2 = sum2( 1, 2, 3, 4, 5 );
echo "sum = " . $sum2 . '<br>';




