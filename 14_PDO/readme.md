for this project ,
 - we create first the database(create database
  pdoposts) then we specify that we are going
   to use it ( use pdoposts).
 - we create a table in the database :
```
CREATE TABLE pdoposts(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
    title VARCHAR(250),
    body TEXT,
    author VARCHAR(255),
    is_published BOOLEAN DEFAULT TRUE,
    created_at DATETIME DEFAULT current_time
)
```
- we insert a data in the table :
```
INSERT INTO posts(title, body, author)
VALUES ('Tile 2', 'this is publish 2', 'kadio');
```
- make a connexion with the database and php :
```
 try{
  $pdo = new PDO( 'mysql:dbname=pdoposts;host=localhost',
                  'root', '' );
  //we specify the error default output
  $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

   //we specify the type of the datas output(array or object)
  $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
  
//  echo "connect with databases" . '<br>';
}catch (exception $e){
  die('Erreur'.$e->getMessage());
}
```
- we can output our data by queries them with pdo:
```
$stmt = $pdo->query( 'select * from posts' );
```
to output them we can loop inside :

Exemple: 
`while ( $row = $stmt->fetch( PDO::FETCH_ASSOC ) ) {
   echo $row['title'] . '<br>';
 }` => to fetch in array
 
 or
 `while ( $row = $stmt->fetch( PDO::FETCH_OBJ ) ) {
    echo $row->title . '<br>'; 
  }` => to fetch in object
 

