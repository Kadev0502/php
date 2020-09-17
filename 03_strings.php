<?php

//Creating simple string
echo 'Creating simple string ' . '<br>';
echo "-----------------";
echo " <br>";
$hello = "Hello People";
$hello2 = "$hello again";
$hello3 = $hello . ' again';

echo $hello . '<br>';
echo $hello2 . '<br>';
echo $hello3 . '<br>';

// String Concatenation
echo 'String Concatenation ' . '<br>';
echo "-----------------";
echo " <br>";
echo "hello " . "world";
echo " <br>";
echo "-----------------";
echo " <br>";

// String Functions
echo 'String Functions ' . '<br>';
echo "-----------------";
echo " <br>";
$string = "      Hello World       ";
echo "1 - " . strlen( $string ) . '<br>' .
     PHP_EOL;                                        //calculate the  length of a string
echo "2 - " . trim( $string ) . '<br>' .
     PHP_EOL;                                        //remove the space
// around the string
echo "3 - " . ltrim( $string ) . '<br>' .
     PHP_EOL;                                        //remove the space
// at the left side of a string
echo "4 - " . rtrim( $string ) . '<br>' .
     PHP_EOL;                                        //remove the space
// at the right side of a string
echo "5 - " . str_word_count( $string ) . '<br>' .
     PHP_EOL;                                        //count
// the words in a string
echo "6 - " . strtoupper( $string ) . '<br>' .
     PHP_EOL;                                        //change a
// string to UPPERCASE
echo "7 - " . strtolower( $string ) . '<br>' .
     PHP_EOL;                                        //change a
// string to lowercase
echo "8 - " . strlen( $string ) . '<br>' .
     PHP_EOL;                                        //calculate the
//  length of a string
echo "9 - " . lcfirst( 'HELLO' ) . '<br>' . PHP_EOL; //change the
// first character of a string to a lowercase
echo "10 - " . ucfirst( 'hello' ) . '<br>' .
     PHP_EOL;                                        //change the
// first character of a string to a UPPERCASE
echo "11 - " . ucwords( 'hello world' ) . '<br>' .
     PHP_EOL;                                        // change
// the first character to all words of a string to UPPERCASE
echo "12 - " . strpos( $string, 'World' ) . '<br>' .
     PHP_EOL;                                        //return
// the position index of the world
echo "13 - " . stripos( $string, 'world' ) . '<br>' .
     PHP_EOL;                                        //return
// the position index of the world(even with lower or uppercase)
echo "14 - " . substr( $string, 8 ) . '<br>' .
     PHP_EOL;                                        //remove all
// the character before the given index
echo "15 - " . str_replace( 'World', 'PHP', $string ) . '<br>'
     .
     PHP_EOL; //replace a word by another word in a given string
echo "16 - " . str_ireplace( 'world', 'PHP', $string ) . '<br>'
     . PHP_EOL; //replace a word by another word in a given
// string(even if it's a lower or uppercase)
echo str_repeat("world",3).'<br>'; //repeat the world anytime
// we give

echo "-----------------";
echo " <br>";
// Multiline text and line breaks
echo 'Multiline text and line breaks ' . '<br>';
echo "-----------------";
echo " <br>";
$longText = "
Hello, my name is <b>usher</b>
I am <b>27</b>,
I love my son
";
echo " 1- ".$longText . '<br>'; //will be in one line
echo " 2- ".nl2br($longText) . '<br>'; //will output as we write
echo "-----------------";
echo " <br>";

// Multiline text and reserve html tags
echo 'Multiline text and reserve html tags ' . '<br>';
echo "-----------------";
echo " <br>";
echo " 3- ".htmlentities($longText) . '<br>'; //will ouput all
// the html tags
echo " 4- ".nl2br(htmlentities($longText) ). '<br>';
echo " 5- ".html_entity_decode(htmlentities($longText) ). '<br>';
echo " 6- ".htmlspecialchars($longText) . '<br>';
echo "-----------------";
echo " <br>";

//https://www.php.net/manual/fr/ref.strings.php
