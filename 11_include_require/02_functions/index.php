<?php
// in this case we need the require not the include
// we use require_once because we have to require only one
// time the fonction to use it as we want
require_once 'math.php';
echo add( 4, 5 ) . "<br>";
echo subtract( 9, 4 ) . "<br>";