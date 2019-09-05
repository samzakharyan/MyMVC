<?php
class Functions
{
  public static function NotFound()
  {
    echo 'Not Found';
  }
  public static function RequireOBJ($controller)
  {
    require_once CONTROLLERS . $controller . '.php';
    return $ctr = new $controller;
  }
}
