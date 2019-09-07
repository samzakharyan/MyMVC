<?php
class Database {
  // private function __construct()
  // {
  // }
  // private function __clone()
  // {
  // }
  // private function __wakeup()
  // {
  // }
  // protected static $instance = null;
  //
  // public static function getInstance()
  // {
  //   if (self::$instance == null)
  //   {
  //     self::$instance = new self();
  //   }
  //   return self::$instance;
  // }
  public function Connect()
  {
    require_once DBCONFIG;
    $con = mysqli_connect(HOST, USER, PASS, DB);
    return $con;
  }
}
