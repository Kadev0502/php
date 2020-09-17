<?php
echo "------------------------------------------";
echo " <br>";
echo 'Magic Constants' . '<br>';
echo "------------------------------------------";
echo " <br>";

echo __DIR__ . '<br>';  //open the project directory
echo __FILE__ . '<br>'; //open the file

echo "------------------------------------------";
echo " <br>";
echo 'Create Directory' . '<br>';
echo "------------------------------------------";
echo " <br>";

mkdir( 'test' );

echo "------------------------------------------";
echo " <br>";
echo 'Rename Directory' . '<br>';
echo "------------------------------------------";
echo " <br>";

rename( 'test', 'my_folder' );

echo "------------------------------------------";
echo " <br>";
echo 'Delete directory' . '<br>';
echo "------------------------------------------";
echo " <br>";

rmdir( 'my_folder' );

echo "------------------------------------------";
echo " <br>";
echo 'Read files and folders inside directory' . '<br>';
echo "------------------------------------------";
echo " <br>";

$files = scandir( './' );
echo "<pre>";
print_r( $files );
echo "</pre>";


echo "------------------------------------------";
echo " <br>";
echo 'file_get_contents, file_put_contents' . '<br>';
echo "------------------------------------------";
echo " <br>";
//read a file contents
echo file_get_contents( 'lorem.txt' ) . "<br>";

//add a content in a file
// here we create a file (text.txt ) and we put a content inside
file_put_contents( 'text.txt', "Hello world" );

$content = file_get_contents( 'text.txt' );
//PHP_EOL => new line
file_put_contents( 'text.txt',
                   'My New TEXT' . PHP_EOL . $content );
echo file_get_contents('text.txt');
