<?php
echo "------------------------------------------";
echo " <br>";
echo 'Print current Timestamp' . '<br>';
echo "------------------------------------------";
echo " <br>";

echo time() . '<br>'; //return time in seconds

echo "------------------------------------------";
echo " <br>";
echo 'Print current Date' . '<br>';
echo "------------------------------------------";
echo " <br>";

echo date( 'Y-m-d H:i:s' ) . '<br>';

echo "------------------------------------------";
echo " <br>";
echo 'Print yesterday' . '<br>';
echo "------------------------------------------";
echo " <br>";

echo date( 'Y-m-d H:i:s', time() - ( 60 * 60 * 24 ) ) . '<br>';

echo "------------------------------------------";
echo " <br>";
echo 'Differents format' . '<br>';
echo "------------------------------------------";
echo " <br>";

//https://www.php.net/manual/fr/function.date.php
echo date('F j, Y, g:i a'). '<br>';

echo "------------------------------------------";
echo " <br>";
echo 'string to timestamp' . '<br>';
echo "------------------------------------------";
echo " <br>";

echo date( 'F j, Y, g:i a' , strtotime('+1 week')) .'<br>';

echo "------------------------------------------";
echo " <br>";
echo 'Parse Date' . '<br>';
echo "------------------------------------------";
echo " <br>";

//https://www.php.net/manual/fr/function.date-parse.php
$dateString = '2020-02-06 12:45:35'; //Declare date
$parseDate = date_parse($dateString); //parse date

echo "<pre>";
print_r( $parseDate);
echo "</pre>";
echo "<pre>";
print_r( $parseDate['hour'] );
echo "</pre>";
echo "------------------------------------------";
echo " <br>";
echo 'Pare Date from format' . '<br>';
echo "------------------------------------------";
echo " <br>";

//https://www.php.net/manual/fr/function.date-parse-from-format
//.php

$dateString2= 'February 4 2020 12/45:35';
$parseDate2=date_parse_from_format('F j Y H:i:s', $dateString2);
echo "<pre>";
print_r( $parseDate2 );
echo "</pre>";