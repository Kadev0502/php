<?php
//Creating simple string

echo "------------------------------------------";
echo " <br>";
echo 'Creating Array and print it ' . '<br>';
echo "------------------------------------------";
//2 way to declare an array variable
$fruits = [ "Banana", "Apple", "Orange", ];
$fruits2 = array( "Banana2", "Apple2", "orange2", );
//var-dump
echo "<pre>";
var_dump( $fruits );
echo "</pre>";
echo " <br>";
//print_r
echo "<pre>";
print_r( $fruits2 );
echo "</pre>";

echo " <br>";
echo "------------------------------------------";
echo " <br>";
echo 'Get element by index ' . '<br>';
echo "------------------------------------------";
echo " <br>";

echo $fruits[ 2 ] . '<br>';

echo "------------------------------------------";
echo " <br>";
echo 'Set element by index ' . '<br>';
echo "------------------------------------------";
echo " <br>";

echo $fruits[ 0 ] = "Peach";
echo "<pre>";
var_dump( $fruits );
echo "</pre>";

echo "------------------------------------------";
echo " <br>";
echo 'Check if array has element by index ' . '<br>';
echo "------------------------------------------";
echo " <br>";

echo "<pre>";
var_dump( isset( $fruits[ 2 ] ) );
echo "</pre>";

echo "------------------------------------------";
echo " <br>";
echo 'Append element in array ' . '<br>';
echo "------------------------------------------";
echo " <br>";

$fruits[] = "Abricot";
echo "<pre>";
var_dump( $fruits ); //will add Abricot to the array
echo "</pre>";

echo "------------------------------------------";
echo " <br>";
echo 'Print the length of an array ' . '<br>';
echo "------------------------------------------";
echo " <br>";

echo count( $fruits ) . '<br>';

echo "------------------------------------------";
echo " <br>";
echo 'Add element at the end of an array ' . '<br>';
echo "------------------------------------------";
echo " <br>";

array_push( $fruits, "Coco" );
echo "<pre>";
var_dump( $fruits );
echo "</pre>";

echo "------------------------------------------";
echo " <br>";
echo 'Remove element at the end of an array ' . '<br>';
echo "------------------------------------------";
echo " <br>";

array_pop( $fruits );
echo "<pre>";
var_dump( $fruits );
echo "</pre>";

echo "------------------------------------------";
echo " <br>";
echo 'Add element at the beginning of an array ' . '<br>';
echo "------------------------------------------";
echo " <br>";

array_unshift( $fruits, "Goyave" );
echo "<pre>";
var_dump( $fruits );
echo "</pre>";

echo "------------------------------------------";
echo " <br>";
echo 'Remove element at the end of an array ' . '<br>';
echo "------------------------------------------";
echo " <br>";

array_shift( $fruits );
echo "<pre>";
var_dump( $fruits );
echo "</pre>";

echo "------------------------------------------";
echo " <br>";
echo 'Convert a string into an array ' . '<br>';
echo "------------------------------------------";
echo " <br>";

$string = "Banana,Apple,Peach";
echo "<pre>";
var_dump( explode( ",", $string ) );
echo "</pre>";

echo "------------------------------------------";
echo " <br>";
echo 'Convert an array to string  ' . '<br>';
echo "------------------------------------------";
echo " <br>";

echo "<pre>";
var_dump( implode( ",", $fruits ) );
echo "</pre>";

echo "------------------------------------------";
echo " <br>";
echo 'Check if an element exist in the array  ' . '<br>';
echo "------------------------------------------";
echo " <br>";

echo in_array( 'Orange', $fruits ) . " <br>";


echo "------------------------------------------";
echo " <br>";
echo 'Search element index in the array  ' . '<br>';
echo "------------------------------------------";
echo " <br>";

echo array_search( "Orange", $fruits ) . "<br>";

echo "------------------------------------------";
echo " <br>";
echo 'Merge 2 arrays ' . '<br>';
echo "------------------------------------------";
echo " <br>";

$vegetables = [ "Potato", "Cucumber" ];
echo "<pre>";
print_r( array_merge( $fruits, $vegetables ) );
echo "<pre>";
//ou
var_dump( [ ...$fruits, ...$vegetables ] );
echo "</pre>";
echo "</pre>";

echo "------------------------------------------";
echo " <br>";
echo 'Sorting of array  ' . '<br>';
echo "------------------------------------------";
echo " <br>";

sort( $fruits ); //par ordre alphabétique
// (de A à Z)
echo "<pre>";
print_r( $fruits );
echo "</pre>";

rsort( $fruits2 ); //par ordre alphabétique
// (de Z à A)
echo "<pre>";
print_r( $fruits2 );
echo "</pre>";

echo "------------------------------------------";
echo " <br>";
echo 'Filter, Map, Reduce of Array ' . '<br>';
echo "------------------------------------------";
echo " <br>";

//this exemple filter evens number in an array with arrow
// function
$numbers = [ 1, 2, 3, 4, 5, 6, 7, 8 ];
$evens = array_filter( $numbers, fn ( $n ) => $n % 2 === 0 );

echo "<pre>";
print_r( $evens );
echo "</pre>";

//this exemple map an array and give back their square
$squares = array_map( fn ( $n ) => $n * $n, $numbers );
echo "<pre>";
print_r( $squares );
echo "</pre>";

//get the number, and his callback then get every item and its
// carry and then give the sum
$sum = array_reduce( $numbers,
  fn ( $carry, $item ) => $carry + $item );
echo "<pre>";
print_r( $sum );
echo "</pre>";

