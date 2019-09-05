<?php
class Singleton
{
  private function __construct()
  {
  }
  private function __clone()
  {
  }
  private function __wakeup()
  {
  }

  protected static $instance = null;

  public static function getInstance()
  {
    if (self::$instance == null)
    {
      self::$instance = new self();
    }
    return self::$instance;
  }
}
