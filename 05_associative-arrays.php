<?php
echo "------------------------------------------";
echo " <br>";
echo 'Create an associative array' . '<br>';
echo "------------------------------------------";
echo " <br>";

$person = [
  'name'    => 'usher',
  'surname' => 'kadio',
  'age'     => 37,
  'hobbies' => [ 'football', 'pes2021' ]
];
echo $person[ 'name' ] . '<br>';
echo $person[ 'age' ] . '<br>';

echo "------------------------------------------";
echo " <br>";
echo 'Set element by key' . '<br>';
echo "------------------------------------------";
echo " <br>";

$person[ 'channel' ] = 'TraversyMedia';
echo "<pre>";
print_r( $person );
echo "</pre>";

echo "------------------------------------------";
echo " <br>";
echo 'Check if array has specific key' . '<br>';
echo "------------------------------------------";
echo " <br>";

echo isset( $person[ 'age' ] );    //true 1
echo isset( $person[ 'adress' ] ); //false 0
echo " <br>";

echo "------------------------------------------";
echo " <br>";
echo 'Print the keys of the array' . '<br>';
echo "------------------------------------------";
echo " <br>";

echo "<pre>";
var_dump( array_keys( $person ) );
echo "</pre>";

echo "------------------------------------------";
echo " <br>";
echo 'Print the values of the array' . '<br>';
echo "------------------------------------------";
echo " <br>";

echo "<pre>";
print_r( array_values( $person ) );
echo "</pre>";

echo "------------------------------------------";
echo " <br>";
echo 'Sorting associative arrays by values,by keys' . '<br>';
echo "------------------------------------------";
echo " <br>";

ksort( $person );  //sort from A to Z
echo "<pre>";
print_r( $person );
echo "</pre>";

krsort( $person ); //sort from Z to A
echo "<pre>";
print_r( $person );
echo "</pre>";

asort( $person );
echo "<pre>";
print_r( $person );
echo "</pre>";

arsort( $person );
echo "<pre>";
print_r( $person );
echo "</pre>";

//Two dimensional arrays
$todoItems = [
  [ 'title' => 'item 1', 'completed' => TRUE ],
  [ 'title' => 'item 2', 'completed' => FALSE ],
  [ 'title' => 'item 3', 'completed' => TRUE ],
];
echo "<pre>";
print_r( $todoItems );
echo "</pre>";
