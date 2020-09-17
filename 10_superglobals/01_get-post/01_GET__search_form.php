<?php
echo "------------------------------------------";
echo " <br>";
echo 'understand GET' . '<br>'; //!getting some data by using GET
echo "------------------------------------------";
echo " <br>";
//echo "<pre>";
//print_r( $_GET );
//echo "</pre>";
$keyword = $_GET[ 'keyword' ];
if ( isset( $_GET[ 'keyword' ] ) ) {
  echo $keyword . '<br>';
  //do whatever it necessary with keyword
  //? exemple we can put it in the input value
}


?>

<!doctype html>
<html lang="en">
<head >
   <meta charset="UTF-8">
   <meta
       name="viewport"
       content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
   >
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title >Search Form</title >
</head >
<body >
<form action="" method="get">
   <input
       type="text" name="keyword" placeholder="Type and hit
  enter" value="<?= $keyword ?>"
   >
   <button >Search</button >
</form >
</body >
</html >
