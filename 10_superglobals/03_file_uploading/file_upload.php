<?php


$errorMessage = '';
if ( isset( $_FILES[ 'file' ] ) ) {
//  echo "<pre>";
//  print_r( $_FILES );
//  echo "</pre>";

  $file = $_FILES[ 'file' ];
  $ext = pathinfo( $file[ 'name' ], PATHINFO_EXTENSION );
  $ext = strtolower( $ext );

  if ( $file[ 'size' ] > 5 * 1024 * 1024 ) {
    $errorMessage = "You can not upload than 5MB files";
  } elseif ( !in_array( $ext,
                        [ 'png', 'jpeg', 'svg', 'jpg' ] ) ) {
    $errorMessage = "You can onlyt upload images";

  } else {

    move_uploaded_file( $_FILES[ 'file' ][ 'tmp_name' ],
                        $_FILES[ 'file' ][ 'name' ] );
  }

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
   <title >File upload</title >
</head >
<body >
<p ><?= $errorMessage ?? '' ?></p >
<form action="" method="post" enctype="multipart/form-data">
   <input type="file" name="file"><br ><br >
   <button >Submit</button >
</form >
</body >
</html >
