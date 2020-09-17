<?php
$age = 15;
$salary = 300000;
echo "------------------------------------------";
echo " <br>";
echo 'if condition' . '<br>';
echo "------------------------------------------";
echo " <br>";

if ( $age === 25 ) {
  echo "you are 25" . '<br>';
}
if ( $age > 25 ) {
  echo "you are not young" . '<br>';
}
if ( $age < 25 ) {
  echo "you are young" . '<br>';
}

echo "------------------------------------------";
echo " <br>";
echo 'if condition - else' . '<br>';
echo "------------------------------------------";
echo " <br>";

if ( $age >= 25 ) {
  echo "you are not young" . '<br>';
} else {
  echo "you are young" . '<br>';
}

echo "------------------------------------------";
echo " <br>";
echo 'if condition 1 - AND condition 2' . '<br>';
echo "------------------------------------------";
echo " <br>";

if ( $age < 22 && $salary < 50000 ) {
  echo "you are young and not too rich" . "<br>";
} else {
  echo "you are young and too rich" . "<br>";
}

echo "------------------------------------------";
echo " <br>";
echo 'if condition 1 - OR condition 2' . '<br>';
echo "------------------------------------------";
echo " <br>";

if ( $age > 22 || $salary < 50000 ) {
  echo "you are young and not too rich" . "<br>";
} else {
  echo "you are young and too rich" . "<br>";
}

echo "------------------------------------------";
echo " <br>";
echo 'if condition 1 - elseif condition 2 - else' . '<br>';
echo "------------------------------------------";
echo " <br>";

if ( $age < 22 ) {
  echo "you are not young but not old" . '<br>';
} elseif ( $age > 30 ) {
  echo "you are old ut not too old" . '<br>';
} else {
  echo "you are too old" . '<br>';
}

echo "------------------------------------------";
echo " <br>";
echo 'Ternary if de' . '<br>';
echo "------------------------------------------";
echo " <br>";

echo $age > 22 ? 'Young' :
  ( $age < 30 ? 'not young but not old' . '<br>' :
    'old' . '<br>' );

echo "------------------------------------------";
echo " <br>";
echo 'Null coalescing operator' . '<br>';
echo "------------------------------------------";
echo " <br>";

//$myAge = $age ? $age : 18;
$myAge = $age ? : 18;
echo $myAge. '<br>';

//$myAdress = isset($adress)?$adress: 'current location'. '<br>';
$myAdress =$adress?? 'current location'. '<br>';
echo $myAdress;

echo "------------------------------------------";
echo " <br>";
echo 'Null coalescing assigment operator' . '<br>';
echo "------------------------------------------";
echo " <br>";

$person=[
  'name'=>'Usher'
];
//check if person name exist
$person['name'] ??='Anonymous'; //if person name exist output
// it else output Anonymous
echo $person['name'] . '<br>';

echo "------------------------------------------";
echo " <br>";
echo 'SWITCH' . '<br>';
echo "------------------------------------------";
echo " <br>";

$userRole = 'admin';
switch ($userRole){
  case 'admin':
    echo "You are the admin" . "<br>";
    break;
  case 'editor':
    echo "You can edit article" . "<br>";
    break;
  default:
    echo "Unknown role" . "<br>";
}



