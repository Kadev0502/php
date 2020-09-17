<?php
echo "------------------------------------------";
echo " <br>";
echo 'Understand POST ' . '<br>'; //!using POST to sending
// message
echo "------------------------------------------";
echo " <br>";

//put all the input errors in array variable
$errors = [];

//initialize all the input values
$username = "";
$email = "";
$password_confirm = "";
$password = "";
$cv_url = "";


//create a constant variable for the same input checking
define( 'REQUIRED_FIELD_ERROR', 'This field is required' );

//check all input value
if ( $_SERVER[ 'REQUEST_METHOD' ] === 'POST' ) {
  echo "<pre>";
  print_r( $_POST );
  echo "</pre>";
}

//put all input data in variable
$username = post_data( 'username' );
$email = post_data( 'email' );
$password = post_data( 'password' );
$password_confirm = post_data( 'password_confirm' );
$cv_url = post_data( 'cv_url' );

//echo "<pre>";
//var_dump( $username, $email, $password, $password_confirm,
//          $cv_url );
//echo "</pre>";

//setting validation

//check if username input is not empty and if it have normal
// character size
if ( !$username ) {
  $errors[ 'username' ] = REQUIRED_FIELD_ERROR;
} elseif ( strlen( $username ) < 6 ||
           strlen( $username ) > 16 ) {
  $errors[ 'username' ]
    = 'Username must be in between 6 and 16 characters';
}

//check if email input is not empty and if it's correct email
if ( !$email ) {
  $errors[ 'email' ] = REQUIRED_FIELD_ERROR;
} elseif ( !filter_var( $email, FILTER_VALIDATE_EMAIL ) ) {
  $errors[ 'email' ]
    = 'This field must be valid Email address';
}

if ( !$password ) $errors[ 'password' ] = REQUIRED_FIELD_ERROR;

if ( !$password_confirm ) {
  $errors[ 'password_confirm' ]
    = 'you must confirm your password';
}

//check that password and password confirm match together

if ( ( $password && $password_confirm ) && strcmp( $password,
                                                   $password_confirm ) !==
                                           0 ) {
  $errors[ 'password_confirm' ]
    = 'This must match the password field';
}

//check if url input is not empty and  CV url is valid
if ( $cv_url && !filter_var( $cv_url, FILTER_VALIDATE_URL ) ) {
  $errors[ 'cv_url' ] = 'Please provide a valid link';
}

//check that there is not errors
if ( empty( $errors ) ) {
  echo "Everything is fill" . "<br>";
}

//function to get the input data
function post_data( $field )
{
//  if ( $_POST[ $field ] ) {
//    echo   $_POST[ $field ]  . "<br>";
//  }else{
//     echo "this input not exist"."<br>";
//  }
  $_POST[ $field ] ??= 'this input not exist';

  /*
   * ! htmlspecialchars =>remove all html characters and
   * stripslashes =>all slashes
   * */
  return htmlspecialchars( stripslashes( $_POST[ $field ] ) );
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
   <!-- boostrap css -->
   <link
       rel="stylesheet"
       href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
       integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z"
       crossorigin="anonymous"
   >
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title >Document</title >
</head >
<body style="">

<form action="" method="post" novalidate>
   <div class="container">
      <div class="row">
         <div class="col">
            <div class="form-group">

               <label >Username
                       <!--                      add a class if input is fill or not-->
                  <input
                      class="form-control <?= isset( $errors[ 'username' ] ) ?
                        'is-invalid' : ''
                      ?> "
                      type="text"
                      name="username"
                      value="<?= $username ?>"
                  >
               </label >
               <small class="form-text text-muted">Min: 6
                                                   and Max:
                                                   16
                                                   characters</small >
               <div class="text-danger">
                  <!--                 if input is empty show alert message-->
                 <?= $errors[ 'username' ] ?? '' ?>
               </div >
            </div >
         </div >
         <div class="col">
            <div class="form-group">
               <label >Email
                  <input
                      class="form-control  <?= isset( $errors[ 'email' ] ) ?
                        'is-invalid' : ''
                      ?>"
                      type="email"
                      name="email"
                      value="<?= $email ?>"
                  >
               </label >
               <div class="text-danger">
                 <?= $errors[ 'email' ] ?? '' ?>
               </div >
            </div >
         </div >
      </div >
      <div class="row">
         <div class="col">
            <div class="form-group">

               <label >Password
                  <input
                      class="form-control  <?= isset( $errors[ 'password' ] ) ?
                        'is-invalid' : ''
                      ?>"
                      type="password"
                      name="password"
                      value="<?= $password ?>"
                  >
               </label >
               <div class="text-danger">
                 <?= $errors[ 'password' ] ?? '' ?>
               </div >
            </div >
         </div >
         <div class="col">
            <div class="form-group">
               <label >Repeat Password
                  <input
                      class="form-control  <?= isset( $errors[ 'password_confirm' ] ) ?
                        'is-invalid' : ''
                      ?>"
                      type="password"
                      name="password_confirm"
                      value="<?= $password_confirm ?>"

                  >
               </label >
               <div class="text-danger">
                 <?= $errors[ 'password_confirm' ] ?? '' ?>
               </div >
            </div >
         </div >
      </div >
      <div class="form-group">
         <div class="form-group">
            <label >Your CV Link
               <input
                   class="form-control  <?= isset( $errors[ 'cv_url' ] ) ?
                     'is-invalid' : ''
                   ?>"
                   type="text"
                   name="cv_url"
                   placeholder="https://www.exemple.com/my-cv"
                   value="<?= $cv_url ?>"
               >
            </label >
            <div class="text-danger">
              <?= $errors[ 'cv_url' ] ?? '' ?>
            </div >
         </div >
      </div >
      <div class="form-group">
         <button class="btn btn-primary">Register</button >
      </div >
   </div >
   <div class="alert alert-success">

       <?= empty($errors) ? 'Everything is fill ' : '' ?>


   </div >

</form >

<!-- bootstrap js -->
<script
    src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"
></script >
<script
    src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"
></script >
<script
    src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
    crossorigin="anonymous"
></script >
</body >
</html >
