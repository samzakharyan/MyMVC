<?php
require_once DATABASE;
class Model extends Database {
  public function __construct()
  {
    $conn = $this->Connect();
    if(!$conn)
    {
      echo "Connection failed!";
    }
  }
  
}
