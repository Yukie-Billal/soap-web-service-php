<?php
include_once 'env.php';

class Todos extends Database {
   protected $connection;
   
   public function all() {
      $connection = mysqli_connect($this->DBHOST, $this->DBUSER, $this->DBPASS, $this->DBNAME);
      $results = mysqli_query($connection, "SELECT * FROM todos");
      
      $data = [];
      while ($result = $results->fetch_assoc()) {
         $data[] = $result;
      }
      return json_encode($data);
      $connection->close();
   }
   
   public function byId($id) {
      $connection = mysqli_connect($this->DBHOST, $this->DBUSER, $this->DBPASS, $this->DBNAME);
      $result = mysqli_query($connection, "SELECT * FROM todos WHERE id ='$id'");
      $connection->close();
      return json_encode($result);
   }
}

$server = new SoapServer(null, array('uri' => "http://soap-web-service.test/todos.php"));

$server->setClass('Todos');
$server->handle();