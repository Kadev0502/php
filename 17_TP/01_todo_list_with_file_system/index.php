<?php

//create an empty array
$todos = [];

//read the json file content here
if ( file_exists( 'todo.json' ) ) {
  $json = file_get_contents( 'todo.json' );
  $todos = json_decode( $json, TRUE );
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
   <title >TODO APP</title >
</head >
<body >
<form
    action="newtodo.php" method="post" style="margin-bottom:
 25px"
>
   <label >
      <input
          type="text" name="todo_name"
          placeholder="Enter Your Todo"
      >
   </label >
   <button >New Todo</button >
</form >
<?php
foreach ( $todos as $todoName => $todo ): ?>
   <div style="margin-bottom: 20px">
      <form
          action="change_status.php" method="post" style="display:
      inline-block"
      >
         <input
             type="hidden" name="todo_name"
             value="<?= $todoName ?>"
         >

            <input
                type="checkbox" <?= $todo[ 'completed' ] ?
              'checked' : '' ?> >


      </form >
     <?= $todoName ?>
      <form
          action="delete.php" method="post" style="display:
      inline-block"
      >
         <input
             type="hidden" name="todo_name"
             value="<?= $todoName ?>"
         >
         <button >Delete</button >
      </form >
   </div >
<?php
endforeach; ?>


<script >
  const checkboxes = document.querySelectorAll ("input[type=checkbox]" );
  checkboxes.forEach ( ch => {
    ch.onclick = function () {
      this.parentNode.submit();
    };
  } );

</script >
</body >
</html >

