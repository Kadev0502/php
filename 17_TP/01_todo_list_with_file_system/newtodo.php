<?php

//echo "<pre>";
//print_r( $_POST );
//echo "</pre>";

//check if the input is not empty
$todoName = $_POST[ 'todo_name' ] ?? FALSE;
$todoName = trim( $todoName );
//if input not empty then show
if ( $todoName ) {
   //check if the json file exist
  if ( file_exists( 'todo.json' ) ) {


    //het the content in the json file
    $json = file_get_contents( 'todo.json' );

    //convert the json file content into array (with true as
    // second argument)
    $jsonArray = json_decode( $json, TRUE );
  } else {
    // if the json file not  exist then create new file with
    // empty array
    $jsonArray = [];
  }

  //add the new input in the array (as completed=>false)
  $jsonArray[ $todoName ] = [ 'completed' => FALSE ];

//put the new array with the new input in the json file
  file_put_contents( 'todo.json', json_encode( $jsonArray,
                                               JSON_PRETTY_PRINT ) );

  echo "<pre>";
  print_r( $jsonArray );
  echo "</pre>";

}
//redirect the user to the index page
header('Location: index.php');

