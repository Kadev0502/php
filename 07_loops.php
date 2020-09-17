<?php

echo "------------------------------------------";
echo " <br>";
echo 'While' . '<br>';
echo "------------------------------------------";
echo " <br>";

$counter = 0;
while ( $counter <= 10 ) {
  echo "Counter $counter" . "<br>";
  if ( $counter >= 5 ) break; //break inside while loop
  $counter++;
}


echo "------------------------------------------";
echo " <br>";
echo 'Do - While' . '<br>';
echo "------------------------------------------";
echo " <br>";

$counter2 = 10;
do {
  echo "Counter2 $counter2" . "<br>";
} while ( $counter2 < 10 );


echo "------------------------------------------";
echo " <br>";
echo 'For' . '<br>';
echo "------------------------------------------";
echo " <br>";

for ( $i = 0; $i < 10; $i++ ) {
  echo "Counter: $i" . "<br>";
}

echo "------------------------------------------";
echo " <br>";
echo 'ForEach' . '<br>';
echo "------------------------------------------";
echo " <br>";

$fruits = [ "Banana", "Apple", "Orange" ];
foreach ( $fruits as $i => $fruit ) {
  echo $i . ' -' . $fruit . '<br>';
}

foreach ( $fruits as  $fruit ) {
  echo  $fruit . '<br>';
}

echo "------------------------------------------";
echo " <br>";
echo 'Iterate over associative array' . '<br>';
echo "------------------------------------------";
echo " <br>";

$person2=[
  'name'=>'Brad',
  'surname'=>'Traversy',
  'age'=>27,
  'hobbies'=>['Tennis','Video Games']

];


foreach ( $person2 as $key => $value ) {
  //break the loop in the array inside the main array
  if ( $key==='hobbies' ) {
    break;
  }
  echo value . '<br>';
}
