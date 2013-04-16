<?php

  require '../Slim/Slim.php';
  
  $db = getConnection();
  
  $app = new Slim();
  $app->get('/', 'getBooks');
  $app->get('/:id','getBook');
  $app->run();
  
  
  
  /*  funkcje API  */
  
  function getBooks()
  {
    global $db;
    $sql = "select * FROM book ORDER BY title";
    try {
      $stmt = $db->query($sql);
      $books = $stmt->fetchAll(PDO::FETCH_OBJ);
      echo json_encode($books);
    } catch(PDOException $e) {
      echo '{"error":{"text":'. $e->getMessage() .'}}';
    }
  }
  
  function getBook($id)
  {
    global $db;
    $sql = "SELECT * FROM book WHERE id=:id";
    try{
      $stmt = $db->prepare($sql);
      $stmt->bindParam("id", $id);
      $stmt->execute();
      $book = $stmt->fetchObject();
      echo json_encode($book);
    } catch(PDOException $e){
      echo '{"error":{"text":'. $e->getMessage() .'}}';
    }
  }
  
  function getConnection()
  {
    $dbhost = "localhost";
    $dbuser = "aimedia_sidnet";
    $dbpass = "sidnet";
    $dbname = "aimedia_sidnet";
    $dbh = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
    return $dbh;
  }
  


?>