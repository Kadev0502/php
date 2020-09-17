<?php

try {
  $pdo = new PDO( 'mysql:dbname=pdoposts;host=localhost',
                  'root', '' );
  //we specify the error default output
  $pdo->setAttribute( PDO::ATTR_ERRMODE,
                      PDO::ERRMODE_EXCEPTION );

  //we specify the type of the datas output(array or object)
  $pdo->setAttribute( PDO::ATTR_DEFAULT_FETCH_MODE,
                      PDO::FETCH_OBJ );

  //disable the emulation mode to use limit statement as a
  // variable
  $pdo->setAttribute( PDO::ATTR_EMULATE_PREPARES,
                      FALSE );

//  echo "connect with databases" . '<br>';
} catch ( exception $e ) {
  die( 'Erreur' . $e->getMessage() );
}

//PDO QUERY
$stmt = $pdo->query( 'select * from posts' );

while ( $row = $stmt->fetch( PDO::FETCH_ASSOC ) ) {
  echo $row[ 'title' ] . '<br>';
}
echo "++++++++++++" . "<br>";
//PREPARED STATEMENTS( prepare and execute )

echo "=====================" . "<br>";
echo "FETCH MULTIPLE POSTS" . "<br>";
echo "=====================" . "<br>";

$author = 'usher';
$is_published = TRUE;
$limit = 2;


echo "--------------------------------------------" . "<br>";
echo "FETCH MULTIPLE POSTS with Positional Params" . "<br>";
echo "--------------------------------------------" . "<br>";
//Positional Params
$sql = 'select * from posts where author = ? && is_published = ? limit ?';
$stmt = $pdo->prepare( $sql );
$stmt->execute( [ $author,$is_published,$limit] );

$posts = $stmt->fetchAll();

//echo "<pre>";
//print_r($posts);
//echo "</pre>";

foreach ( $posts as $post ) {
  echo $post->title . '<br>';
}

echo "--------------------------------------------" . "<br>";
echo "FETCH MULTIPLE POSTS with Named Params" . "<br>";
echo "--------------------------------------------" . "<br>";

//Named Params
$sql
  = 'select * from posts where author = :author && is_published = :is_published';
$stmt = $pdo->prepare( $sql );
$stmt->execute( [ 'author'       => $author,
                  'is_published' => $is_published ] );

$posts = $stmt->fetchAll();

foreach ( $posts as $post ) {
  echo $post->title . '<br>';
}


echo "=====================" . "<br>";
echo "FETCH SINGLE POSTS" . "<br>";
echo "=====================" . "<br>";
$id = 1;

$sql = 'select * from posts where id = :id';
$stmt = $pdo->prepare( $sql );
$stmt->execute( [ 'id' => $id
                ] );

$post = $stmt->fetch();
echo $post->title . "<br>";;
echo $post->body . "<br>";;

echo "=====================" . "<br>";
echo "GET ROW COUNT" . "<br>";
echo "=====================" . "<br>";

$stmt = $pdo->prepare( 'select * from posts where author = ?' );
$stmt->execute( [ $author ] );
$postCount = $stmt->rowCount();
echo $postCount . '<br>';

echo "=====================" . "<br>";
echo "INSERT DATA" . "<br>";
echo "=====================" . "<br>";

$title = 'Tile 5';
$body = "This is post 5";
$author = "xavier";

/*
 $sql
  = 'insert into posts (title,body,author) VALUES(:title, :body, :author)';
$stmt = $pdo->prepare( $sql );
$stmt->execute( [ 'title'  => $title, 'body' => $body,
                  'author' => $author ] );
*/

echo 'post added' . '<br>';

echo "=====================" . "<br>";
echo "UPDATE DATA" . "<br>";
echo "=====================" . "<br>";

$id = 1;
$body = "This is updated post";

/*
$sql
  = 'update posts set body = :body WHERE id = :id';
$stmt = $pdo->prepare( $sql );
$stmt->execute( [ 'body' => $body,
                  'id' => $id ] );
*/

echo 'post updated' . '<br>';

echo "=====================" . "<br>";
echo "DELETE DATA" . "<br>";
echo "=====================" . "<br>";

$id = 7;
/*
$sql
  = 'delete from posts  WHERE id = :id';
$stmt = $pdo->prepare( $sql );
$stmt->execute( [ 'id' => $id ] );
echo "post deleted" . '<br>';
*/


echo "=====================" . "<br>";
echo "SEARCH DATA" . "<br>";
echo "=====================" . "<br>";

$search = "%pub%";
$sql = 'select * from posts where body LIKE ?';
$stmt = $pdo->prepare($sql);
$stmt->execute([$search]);
$posts = $stmt->fetchAll();
foreach ($posts as $post){
  echo $post->body . '<br>';
}