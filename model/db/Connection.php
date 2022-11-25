<?php
class Connection{
  private $host ="localhost";
  private $user ="root";
  private $password ="";
  private $db= "solutec";
  private $connect;

  public function __construct(){
  $connectionString = "mysql:hos".$this->host.";dbname=".$this->db.";charset=utf8";
  try {
    $this->connect= new PDO($connectionString,$this->user,$this->password);
    $this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch (Exception $e) {
      $this->connect = 'Error de conexión';
      echo "ERROR: ". $e->getMessage();     
  }
  }
}
?> 